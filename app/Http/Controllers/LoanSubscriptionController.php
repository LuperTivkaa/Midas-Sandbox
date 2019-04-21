<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\User;
use App\Lsubscription;
use  App\Psubscription;

class LoanSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title ='All Loan Request';
        // $subs = Psubscription::with('product')->get();
        $loanReq = Loan::withCount('loansubscriptions')->paginate(5);
        return view('LoanSub.index',compact('loanReq','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //New Loan Subscription Form
        $title ='New Loan Subscription';
        return view('LoanSub.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
        //
        $this->validate(request(), [
            'payment_id'=>'required|integer',
            'custom_tenor' =>'nullable|integer|between:1,60',
            'amount_applied' =>'required|numeric|between:0.00,999999999.99',
            ]);

            if(User::where('payment_number',request(['payment_id']))->exists())
            {
                $user = User::where('payment_number',request(['payment_id']))->first();
                $user_id = $user->id;
                $loan_sub = new Lsubscription();
                $loan_sub->user_id = $user_id;
                $loan_sub->loan_id = $request['loan_product'];
                $loan_sub->custom_tenor = $request['custom_tenor'];
                $loan_sub->amount_applied = $request['amount_applied'];
                $loan_sub->created_by = auth()->id();
                $loan_sub->save();
                if($loan_sub->save()) {
                    toastr()->success('Loan request has been saved successfully!');
                    return redirect('/loanSub/create');
                }
            
                toastr()->error('An error has occurred trying to create a loan request!');
                return back();
            }
        toastr()->error('No user exist with this payment identification number.');
        return back();
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
        {
        //Show detail of all subscriptions for a particular product
        
        $title ='Loan Subscriptions Detail';
        $loanDetails = Lsubscription::where('loan_id',$id)->with(['loan' => function ($query) {
          $query->orderBy('description', 'desc');
      }])->paginate(10);

        return view('LoanSub.loanSubDetail',compact('loanDetails','title'));
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
        {
        // Show form for editing loan subscription
        $title ='Edit Loan Subscription';
        $lSub = Lsubscription::find($id);
        return view('LoanSub.editLoanSub',compact('lSub','title'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {
        //
        $this->validate(request(), [
            'payment_id'=>'required|integer',
            'custom_tenor' =>'nullable|integer|between:1,60',
            'amount_applied' =>'required|numeric|between:0.00,999999999.99',
            ]);

            if(User::where('payment_number',request(['payment_id']))->exists())
            {
                $user = User::where('payment_number',request(['payment_id']))->first();
                $user_id = $user->id;
                $loan_sub = Lsubscription::find($id);
                $loan_sub->user_id = $user_id;
                $loan_sub->loan_id = $request['loan_product'];
                $loan_sub->custom_tenor = $request['custom_tenor'];
                $loan_sub->amount_applied = $request['amount_applied'];
                $loan_sub->created_by = auth()->id();
                $loan_sub->save();
                if($loan_sub->save()) {
                    toastr()->success('Loan request has been edited successfully!');
                    return redirect('/loanSub/create');
                }
            
                toastr()->error('An error has occurred trying to update a loan request!');
                return back();
            }
        toastr()->error('No user exist with this payment identification number.');
        return back();
        }

        
//USER SUBSCRIPTION DETAILS PAGE
    public function userLoanSubscriptions($id){
        $title = "User Page";

        //Find user
        $user = User::find($id);

        //Active Product Subscriptions
        $activeLoans = Lsubscription::activeLoans($id);

        //Pending product subscriptions
        $pendingLoans = Lsubscription::pendingLoans($id);
        
        //User active product subscriptions
        $userProducts = Psubscription::userProducts($id);

        //User pending products subscriptions
        $userPendingProducts = Psubscription::pendingProducts($id); 

        return view('LoanSub.userLoanSub',compact('title','activeLoans','pendingLoans','user','userProducts','userPendingProducts'));
    }


    //show form for reviewing user loan

    public function review($id){
        // Show form for editing loan subscription
        $title ='Review Loan Subscription';
        $review = Lsubscription::find($id);
        return view('LoanSub.review',compact('review','title'));
    }

    //Review Store

    public function reviewStore(Request $request, $id)
        {
        //
            
            $this->validate(request(), [
            'notes' =>'required',
            'start_date' =>'required|date',
            'end_date' =>'required|date',
            'amount_approved' =>'required|numeric|between:0.00,999999999.99',
            ]);


                 //Retrieve loan subscription instance
                $loan_sub = Lsubscription::find($id);
                //check if custom tenor is checked
                //if answer is yes
                //then use that for calculating deductions
                //if not use default
                $tenorCheck = Lsubscription::where('id',$id)
                ->where(function ($query){
                $query->whereNull('custom_tenor');
                })->get();

                if($tenorCheck->isEmpty()){
                    $tenor = $loan_sub->loan->tenor;
                }else
                {
                    $tenor = $loan_sub->custom_tenor;
                }
                
                $approved_amt = $request['amount_approved'];

                $monthly_deduction = $approved_amt/$tenor;

                
                $loan_sub->amount_approved = $approved_amt;
                $loan_sub->monthly_deduction = $monthly_deduction;
                $loan_sub->loan_status = 'Active';
                $loan_sub->loan_start_date = $request['start_date'];
                $loan_sub->loan_end_date = $request['end_date'];
                $loan_sub->review_comment = $request['notes'];
                $loan_sub->review_by = auth()->id();
                $loan_sub->save();
                if($loan_sub->save()) {
                    toastr()->success('Loan request has been approved successfully!');
                    //redirect user loans listing page
                    return redirect('/pendingLoans');
                }
                toastr()->error('An error has occurred trying to review a loan request!');
                return back();
        }


        //All pending loans
        public function pendingLoans(){
        $title ='All Pending Loans';
        $pendingLoans = Lsubscription::where('loan_status','Pending')->oldest()->with(['loan','user'])
                   ->paginate(20);
        return view('LoanSub.pendingLoans',compact('pendingLoans','title'));
        }

        //All active Loans

        public function activeLoans(){
            $title ='All Active Loans';
            $activeLoans = Lsubscription::where('loan_status','Active')
            ->oldest()
            ->with(['loan','user'])
            ->paginate(20);
            return view('LoanSub.activeLoans',compact('activeLoans','title'));
            }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //
        $loanSubscription = Lsubscription::find($id)->delete();
        if ($loanSubscription) {
            toastr()->success('Loan subscription has been discard successfully!');
    
            return redirect('/pendingLoans');
        }
    
        toastr()->error('An error has occurred trying to remove loan subsscription, please try again later.');
        return back();
    }
}

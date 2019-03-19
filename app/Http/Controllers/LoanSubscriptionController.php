<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\User;
use App\Lsubscription;

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
        $loanProd = Loan::orderBy('description')->pluck('description','id');
        return view('LoanSub.create',compact('title','loanProd'));
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
        //Display detail product subscription listings
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
        $loanProd = Loan::orderBy('description')->pluck('description','id');
        return view('LoanSub.editLoanSub',compact('lSub','loanProd','title'));
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

    public function userLoanSubscriptions(){
        $title = "User Loan Subscriptions";
        // $userLoanApps = Psubscription::where('user_id',$id)->with(['product' => function ($query) {
        //     $query->orderBy('name', 'desc');
        // }])->paginate(10);

        return view('LoanSub.userLoanSub',compact('title'));
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
    }
}

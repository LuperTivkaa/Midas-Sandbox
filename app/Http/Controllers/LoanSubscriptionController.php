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
            'custom_tenor' =>'required|integer|between:1,60',
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

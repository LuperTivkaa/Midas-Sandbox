<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lsubscription;
use Carbon\Carbon;
use App\Exports\LoandeductionsExport;
use App\Exports\IppisLoandeductionsExport;
use Maatwebsite\Excel\Facades\Excel;

class LoanDeductionsController extends Controller
{
        //
        //list all loan subscriptions
        public function index(){
        $title = 'User Loan Deductions';
        $loanSub = Lsubscription::loanSubscriptions();
        return view ('LoanDeduction.index', compact('title','loanSub'));
    }

    //list ippis format loan subscriptions
       //list all loan subscriptions
       public function ippis(){
        $title = 'User Loan Deductions';
        $loanSub = Lsubscription::distinctUserLoanSub();
        return view ('LoanDeduction.ippis', compact('title','loanSub'));
    }

    //Export loan deductions in excel format
    public function export(){
        $jstNow = Carbon::now()->toDateString();
        $fileName = 'MIDAS_LOANDEDUCTIONS_'.$jstNow.'.xlsx';
        return Excel::download(new LoandeductionsExport(), $fileName);
    }

    //IPPIS DOWNLOAD TEMPLATE
    public function ippisExport(){
        $jstNow = Carbon::now()->toDateString();
        $fileName = 'MIDAS_IPPIS_LOAN_DEDUCTIONS_'.$jstNow.'.xlsx';
        return Excel::download(new IppisLoandeductionsExport(), $fileName);
    }
}

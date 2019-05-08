<?php

namespace App\Exports;

use App\Lsubscription;
use App\User;
use App\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
//use Maatwebsite\Excel\Concerns\FromCollection;

class IppisLoandeductionsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Lsubscription::all();
    // }

    public function view():View
    {
        $loanSub = Lsubscription::distinctUserLoanSub();

        return view('LoanDeduction.ippisdownload',compact('loanSub'));
    }  
}

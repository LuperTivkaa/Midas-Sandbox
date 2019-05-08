<?php

namespace App\Imports;

use App\Ldeduction;
use Maatwebsite\Excel\Concerns\ToModel;

class LoanDeductionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ldeduction([
            //
        ]);
    }
}

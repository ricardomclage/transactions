<?php

namespace App\Services;

use App\Imports\TransactionsImport;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;

class CsvTransactions implements TransactionsSourceInterface {

    public function getTransactions()
    {
        return Excel::toCollection(new TransactionsImport, 'transactions.csv', 'local', ExcelExcel::CSV);
    }
}

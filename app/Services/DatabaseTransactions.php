<?php

namespace App\Services;

use App\Models\Transaction;

class DatabaseTransactions implements TransactionsSourceInterface {

    public function getTransactions()
    {
        return Transaction::all();
    }
}

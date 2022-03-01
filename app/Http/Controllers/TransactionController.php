<?php

namespace App\Http\Controllers;

use Database\Factories\TransactionsSourceFactory;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    private TransactionsSourceFactory $transactionsSourceFactory;

    public function __construct(
        TransactionsSourceFactory $transactionsSourceFactory
    ) {
        $this->transactionsSourceFactory = $transactionsSourceFactory;
    }

    public function index(Request $request)
    {
        $source = $this->transactionsSourceFactory->build($request->get('source', 'db'));

        return $source->getTransactions();
    }
}

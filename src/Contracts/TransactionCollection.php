<?php

namespace App\Contracts;

use App\ValueObject\Transaction;

interface TransactionCollection
{
    public function add(Transaction $transaction);
    public function all(): array;
}
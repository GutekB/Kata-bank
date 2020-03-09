<?php

namespace App\Contracts;

use App\ValueObject\Transaction;

interface TransactionCollection
{
    public function add(Transaction $transaction): void;
    public function all(): array;
}
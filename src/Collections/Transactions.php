<?php

namespace App\Collections;

use App\Contracts\TransactionCollection;
use App\ValueObject\Transaction;

class Transactions implements TransactionCollection
{
    /** @var Transaction[] */
    private array $transactions = [];

    public function add(Transaction $transaction): void
    {
        $this->transactions[] = $transaction;
    }

    public function all(): array
    {
        return $this->transactions;
    }
}
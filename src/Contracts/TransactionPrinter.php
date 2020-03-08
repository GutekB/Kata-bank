<?php

namespace App\Contracts;

interface TransactionPrinter
{
    public function print(array $transactions): void;
}
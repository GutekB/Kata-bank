<?php

namespace App\Printers;

use App\Contracts\TransactionPrinter;
use App\ValueObject\Transaction;

class ConsolePrinter implements TransactionPrinter
{
    private function printHeader()
    {
        echo 'Date | Amount | Balance' . PHP_EOL;
    }

    public function print(array $transactions): void
    {
        $this->printHeader();

        $balance = 0;
        /** @var Transaction $transaction */
        foreach ($transactions as $transaction) {
            echo sprintf('%s | %s | %s',
                $transaction->date()->format('Y-m-d'),
                $transaction->amount(),
                $balance += $transaction->amount()) . PHP_EOL;
        }

    }
}
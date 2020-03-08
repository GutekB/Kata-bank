<?php

namespace Tests\TestPrinters;

use App\Contracts\TransactionPrinter;

class SpyPrinter implements TransactionPrinter
{
    private bool $wasPrinted = false;

    public function print(array $transaction): void
    {
        $this->wasPrinted = true;
    }

    public function wasPrinted(): bool
    {
        return $this->wasPrinted;
    }
}
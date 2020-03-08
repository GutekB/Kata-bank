<?php

namespace App;

use App\Contracts\AccountService;
use App\Contracts\Calendar;
use App\Contracts\TransactionPrinter;
use App\Contracts\TransactionCollection;
use App\ValueObject\Transaction;

class MyAccount implements AccountService
{
    private TransactionCollection $transactions;
    private Calendar $calendar;
    private TransactionPrinter $printer;

    public function __construct(TransactionCollection $transactions, Calendar $calendar, TransactionPrinter $printer)
    {
        $this->transactions = $transactions;
        $this->calendar = $calendar;
        $this->printer = $printer;
    }

    public function deposit(int $amount): void
    {
        $date = $this->calendar->getCurrentDate();
        $this->transactions->add(Transaction::deposit($amount, $date));
    }

    public function withdraw(int $amount): void
    {
        $date = $this->calendar->getCurrentDate();
        $this->transactions->add(Transaction::withdraw($amount, $date));
    }

    public function printStatement()
    {
        $this->printer->print($this->transactions->all());
    }
}
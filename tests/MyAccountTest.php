<?php

use App\Collections\Transactions;
use App\MyAccount;
use PHPUnit\Framework\TestCase;
use Tests\TestCalendars\FixedCalendar;
use Tests\TestPrinters\SpyPrinter;

class MyAccountTest extends TestCase
{
    /**
     * @var MyAccount
     */
    private MyAccount $sut;
    /**
     * @var Transactions
     */
    private Transactions $transactions;
    /**
     * @var FixedCalendar
     */
    private FixedCalendar $calendar;
    /**
     * @var SpyPrinter
     */
    private SpyPrinter $printer;

    protected function setUp(): void
    {
        $this->transactions = new Transactions();
        $this->calendar = new FixedCalendar();
        $this->printer = new SpyPrinter();
        $this->sut = new MyAccount($this->transactions, $this->calendar, $this->printer);
    }

    public function testShouldAddDepositTransaction(): void
    {
        $this->assertEmpty($this->transactions->all());
        $this->sut->deposit(100);
        $this->assertNotEmpty($this->transactions->all());
    }

    public function testShouldAddWithdrawTransaction(): void
    {
        $this->assertEmpty($this->transactions->all());
        $this->sut->withdraw(200);
        $this->assertNotEmpty($this->transactions->all());
    }

    public function testShouldPrintStatement(): void
    {
        $this->sut->printStatement();

        $this->assertTrue($this->printer->wasPrinted());
    }
}
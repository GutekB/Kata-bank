<?php

use App\Calendars\SystemCalendar;
use App\Collections\Transactions;
use App\MyAccount;
use App\Printers\ConsolePrinter;

require dirname(__DIR__) . '/bank/vendor/autoload.php';

$account = new MyAccount(new Transactions(), new SystemCalendar(), new ConsolePrinter());

$account->deposit(500);
$account->deposit(200);
$account->withdraw(100);
$account->printStatement();
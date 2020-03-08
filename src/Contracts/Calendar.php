<?php

namespace App\Contracts;

use DateTimeImmutable;

interface Calendar
{
    public function getCurrentDate(): DateTimeImmutable;
}
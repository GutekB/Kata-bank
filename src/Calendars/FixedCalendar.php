<?php

namespace App\Calendars;

use App\Contracts\Calendar;
use DateTimeImmutable;

class FixedCalendar implements Calendar
{
    public function getCurrentDate(): DateTimeImmutable
    {
        return new DateTimeImmutable('now');
    }
}
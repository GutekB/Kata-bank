<?php

namespace App\Calendars;

use App\Contracts\Calendar;
use DateTimeImmutable;

class SystemCalendar implements Calendar
{
    public function getCurrentDate(): DateTimeImmutable
    {
        return new DateTimeImmutable('now');
    }
}
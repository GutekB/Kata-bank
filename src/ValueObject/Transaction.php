<?php

namespace App\ValueObject;

use DateTimeImmutable;

class Transaction
{
    private DateTimeImmutable $date;
    private int $amount;

    private function __construct(int $amount, DateTimeImmutable $date)
    {
        $this->amount = $amount;
        $this->date = $date;
    }

    public static function deposit(int $amount, DateTimeImmutable $date): self
    {
        return new self($amount, $date);
    }

    public static function withdraw(int $amount, DateTimeImmutable $date): self
    {
        return new self(-$amount, $date);
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function date(): DateTimeImmutable
    {
        return $this->date;
    }
}
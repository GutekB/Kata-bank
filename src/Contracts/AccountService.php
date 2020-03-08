<?php
namespace App\Contracts;

interface AccountService
{
    public function deposit(int $amount): void;
    public function withdraw(int $amount): void;
    public function printStatement();
}
<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function register(): string
    {
        return view('register');
    }
}
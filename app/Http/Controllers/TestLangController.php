<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestLangController extends Controller
{
    public function index()
    {
        return 'Текущий язык: ' . app()->getLocale();
    }
}

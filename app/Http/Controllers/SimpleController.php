<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function greet($name)
    {
        return "Привет, $name!";
    }

    public function multiply($a, $b)
    {
        return "$a * $b = " . ($a * $b);
    }

    public function info($id, $action = 'view')
    {
        return "ID: $id, действие: $action";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = [
            ['subject' => 'Математика', 'grade' => 5],
            ['subject' => 'Русский язык', 'grade' => 4],
            ['subject' => 'История', 'grade' => 4],
            ['subject' => 'Физика', 'grade' => 3],
            ['subject' => 'Биология', 'grade' => 5],
        ];

        return view('grades.index', compact('grades'));
    }
}

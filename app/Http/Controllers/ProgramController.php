<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Program; // Ensure you have the Program model

class ProgramController extends Controller
{
    public function index()
    {
        // Fetch all programs from the database
        $programs = Program::all();

        return view('programs.index', compact('programs'));
    }

    public function show($id)
    {
        // Fetch a single program by ID
        $program = Program::findOrFail($id);

        return view('programs.show', compact('program'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
   public function showEvaluations()
{
    // Ambil data evaluasi dari sumber data (misal database)
    $evaluations = [];

    // Kirim data ke view
    return view('evaluations', compact('evaluations'));
}
}

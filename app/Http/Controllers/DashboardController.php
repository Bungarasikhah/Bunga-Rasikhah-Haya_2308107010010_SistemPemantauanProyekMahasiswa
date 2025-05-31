<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $proyekAktif = Proyek::where('status', '!=', 'Selesai')->get();

        return view('dashboard', compact('proyekAktif'));
    }
}

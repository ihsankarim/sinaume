<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = auth()->user();

        return match($user->role) {
            'guru' => view('dashboard.guru'),
            'siswa' => view('dashboard.siswa'),
            default => abort(403, 'Unauthorized'),
        };
    }
}

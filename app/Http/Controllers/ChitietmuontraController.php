<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chitietmuontra;

class ChitietmuontraController extends Controller
{
    public function index() {
        $chitietmuontras = Chitietmuontra::all();
        return view('chitietmuontra.index')->with('chitietmuontras', $chitietmuontras);
    }
}

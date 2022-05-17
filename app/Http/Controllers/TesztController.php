<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teszt;

class TesztController extends Controller
{
    public function index() {
        $tesztek = response()->json(Teszt::with("kategoria")->get());
        return $tesztek;
    }

    public function kategoria($id) {
        $tesztek = Teszt::with('kategoria')->where('id', $id);
        return $tesztek;
    }
}

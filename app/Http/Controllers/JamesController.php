<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\James;

class JamesController
{
    public function james() {
        #$james = James::where('description', 'like', '%est%')->get();
        $james = James::all();

        error_log($james);

        return view('james', compact('james'));
    }
}

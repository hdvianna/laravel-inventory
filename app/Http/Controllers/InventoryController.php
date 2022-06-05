<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function create(Request $request) {
        return $request->getContent();
    }
}

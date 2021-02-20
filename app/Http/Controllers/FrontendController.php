<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index_itemRegister() {
        return view('item_registration');
    }
    public function index_addItem() {
        return view('add_newItem');
    }
}

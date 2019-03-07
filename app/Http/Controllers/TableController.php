<?php

namespace App\Http\Controllers;

use App\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index ()
    {
        $tables = Table::all();
        return view('table.table', compact('tables'));
    }
}

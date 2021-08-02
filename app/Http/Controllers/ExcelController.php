<?php

namespace App\Http\Controllers;

use App\Exports\ProductExcel;
use App\Models\Excel;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function excel()
    {
        return Excel::download(new ProductExcel, 'users.xlsx');
    }
}

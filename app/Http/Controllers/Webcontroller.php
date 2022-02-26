<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Webcontroller extends Controller
{
    public function CategoryForm()
    {
        return view('category_form');
    }

    public function ExcelData(Request $request)
    {
        $file = Excel::import(new CsvImport, $request->file('csv_file')->store('temp'));
        dd($file);
    }

    public function single_product()
    {
        return view('category_dropdown');
    }
}

<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductsExportsView implements FromView
{
    public function view(): View
    {
        return view('exports.products', [
            'products' => Product::all()
        ]);
    }
}

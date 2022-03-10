<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**Custome Addition */

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Brand;
use App\Models\Product;

class ProductController extends Controller
{
    public function AddProduct(){
    
        $brands  = Brand::get();
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        return view('backend.product.product_add', compact('brands', 'categories'));
    }
}

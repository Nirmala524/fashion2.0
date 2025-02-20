<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FetchDataController extends Controller
{
    public function fetchProduct($id)
    {
        $product = Product::where('category', $id)->where('status', 1)->take(8)->get();
        if (isset($product)) {
            return response()->json([
                'products' =>  $product,
                'status' =>  200,
            ], 200);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    public function fetchAllProduct()
    {
        $product = Product::where('status', 1)->take(8)->get();
        if (isset($product)) {
            return response()->json([
                'products' =>  $product,
                'status' =>  200,
            ], 200);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    public function fetchCategory($id)
    {
        $category = Product::where('category', $id)->where('status', 1)->take(9)->get();
        if (isset($category)) {
            return response()->json([
                'categories' =>  $category,
                'status' =>  200,
            ], 200);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    public function fetchAllCategory()
    {
        $category = Product::where('status', 1)->take(9)->get();
        if (isset($category)) {
            return response()->json([
                'categories' =>  $category,
                'status' =>  200,
            ], 200);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    public function fetchBrand($id)
    {
        $brand = Product::where('brand', $id)->where('status', 1)->take(9)->get();
        if (isset($brand)) {
            return response()->json([
                'brands' =>  $brand,
                'status' =>  200,
            ], 200);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    public function fetchAllBrand()
    {
        $brand = Product::where('status', 1)->take(9)->get();
        if (isset($brand)) {
            return response()->json([
                'brands' =>  $brand,
                'status' =>  200,
            ], 200);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Branding;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Product;
use App\Models\Size;
use App\Models\Tag;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(3);
        // dd($product);     
        return view('Admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = Category::all();
        $tag = Tag::all();
        $size = Size::all();
        $brand = Branding::all();
        return view('Admin.product.addItem', compact(['cat', 'tag', 'size', 'brand']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // dd($input);a
        $request->validate([
            'thumbnail' => 'required|mimes:jpeg,png,jpg,avif,webp',
            'images.*' => 'required|mimes:jpeg,png,jpg,avif,webp',
            'title' => 'required |min:5|max:100',
            'price' => 'required',
            'size' => 'required|max:40',
            'brand' => 'required',
            'color' => 'required|max:25',
            'category' => 'required',
            'tag' => 'required',
        ]);
        // dd($input);
        $input['status'] = 1;
        // $input['status'] = 1;

        $thumbnail = $request->file('thumbnail');
        $singleimage = str()->random(5) . time() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->storeAs('product/thumbnail', $singleimage);
        $input['thumbnail'] = $singleimage;

        if ($files = $request->file('images')) {
            $images = array();
            foreach ($files as $file) {
                $imageName = str()->random(5) . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('product/images', $imageName);
                $images[] = $imageName;
            }
            $input['images'] = json_encode($images);
        }
        $input['size'] = json_encode($request->size);
        $input['tag'] = json_encode($request->tag);
        Product::create($input);
        return redirect()->route('product.index')->with('success', 'Product Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('Admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $cat = Category::all();
        $tag = Tag::all();
        $size = Size::all();
        $brand = Branding::all();
        return view('Admin.product.edit', compact(['product', 'cat', 'tag', 'size', 'brand']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $input = Product::find($product->id);
        // dd($input);
        $request->validate([
            // 'thumbnail' => 'required|mimes:jpeg,png,jpg,avif,webp',
            // 'images.*' => 'required|mimes:jpeg,png,jpg,avif,webp',
            'title' => 'required |min:5|max:100',
            'price' => 'required',
            'size' => 'required|max:40',
            'brand' => 'required|max:40',
            'color' => 'required|max:25',
            'category' => 'required',
            'tag' => 'required',
        ]);

        $thumbnail = $request->file('thumbnail');

        if (isset($request->thumbnail)) {
            $request->validate([
                'thumbnail' => 'required|mimes:jpeg,png,jpg,avif,webp',
            ]);
            if (file_exists(public_path('storage/product/thumbnail/' . $product->thumbnail))) {
                unlink(public_path('storage/product/thumbnail/' . $product->thumbnail));
            }
            $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('storage/product/thumbnail/'), $imageName);
            // $thumbnail->storeAs('product', $imageName);
            $input['thumbnail'] = $imageName;
        }

        if (isset($request->images)) {
            $files = $request->file('images');
            $images = array();
            $oldimages = $input->images;
            $decodeimages = json_decode($oldimages);
            foreach ($decodeimages as $oldimage) {

                if (file_exists(public_path('storage/product/images/' . $oldimage))) {
                    unlink(public_path('storage/product/images/' . $oldimage));
                }
            }
            foreach ($files as $value) {
                $imageName = str()->random(5) . time() . '.' . $value->getClientOriginalExtension();
                $value->move(public_path('storage/product/images/'), $imageName);
                $images[] = $imageName;
            }
            $input['images'] = json_encode($images);
        }
        $input['title'] = $request->title;
        $input['price'] = $request->price;
        $input['size'] = $request->size;
        $input['brand'] = $request->brand;
        $input['color'] = $request->color;
        $input['category'] = $request->category;
        $input['tag'] = $request->tag;
        $input['status'] = isset($request->status) ? 1 : 0;
        $input->save();
        return redirect()->route('product.index')
            ->with('success', 'Product Upadate Successfully!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if (isset($product)) {
            foreach (json_decode($product->images) as $oldimage) {
                if (file_exists(public_path('storage/product/images/' . $oldimage))) {
                    unlink(public_path('storage/product/images' . $oldimage));
                }
            }
            $product->delete();
            return redirect()->route('product.index')
                ->with('danger', 'Product deleted successfully.');
        } else {
            return 'Product IS Not Exit';
        }
    }
}

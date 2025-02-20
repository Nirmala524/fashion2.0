<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use App\Models\Banner;
use App\Models\BannerClothing;
use App\Models\Blog;
use App\Models\BlogDetail;
use App\Models\Branding;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Chest;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Detail;
use App\Models\Fashion;
use App\Models\Happy;
use App\Models\Images;
use App\Models\Instagram;
use App\Models\Meet;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Que;
use App\Models\Shoes;
use App\Models\Size;
use App\Models\Slider;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Trends;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $slider = Slider::where('status', 1)->get();
        $trend = Trends::where('status', 1)->limit(3)->get();
        $instagram = Images::where('status', 1)->get();
        $img = Instagram::find(1);
        $fashion = Fashion::find(1);
        $chest = Chest::find(1);
        $BannerClothing = BannerClothing::find(1);
        $Accessories = Accessories::find(1);
        $Shoes = Shoes::find(1);
        $product = Product::where('status', 1)->limit(8)->get();
        $cat = Category::where('status', 1)->limit(2)->get();
        return view('Front.home', compact(['slider', 'trend', 'instagram', 'img', 'fashion', 'chest', 'BannerClothing', 'Accessories', 'Shoes', 'product', 'cat']));
    }

    public function category()
    {
        $slider = Slider::where('status', 1)->get();
        $trend = Trends::where('status', 1)->limit(3)->get();
        $instagram = Images::where('status', 1)->get();
        $img = Instagram::find(1);
        $fashion = Fashion::find(1);
        $chest = Chest::find(1);
        $BannerClothing = BannerClothing::find(1);
        $Accessories = Accessories::find(1);
        $Shoes = Shoes::find(1);
        $product = Product::where('status', 1)->limit(8)->get();
        $cat = Category::where('status', 1)->limit(3)->get();
        return view('Front.home', compact(['slider', 'trend', 'instagram', 'img', 'fashion', 'chest', 'BannerClothing', 'Accessories', 'Shoes', 'product', 'cat']));
    }


    public function about()
    {
        $team = Team::all();
        $partner = Partner::where('status', 1)->get();
        $happy = Happy::where('status', 1)->get();
        $meet = Meet::find(1);
        $que = Que::where('status', 1)->get();
        return view('Front.about', compact(['team', 'partner', 'happy', 'meet', 'que']));
    }

    public function shop()
    {
        $product = Product::where('status', 1)->limit(9)->get();
        $cat = Category::where('status', 1)->get();
        $size = Size::all();
        $tag = Tag::all();
        $brand = Branding::where('status', 1)->get();
        return view('Front.shop', compact(['product', 'cat', 'size', 'tag', 'brand']));
    }

    public function shopdetails($id)
    {
        $products = Product::find($id);
        $detail = Detail::find(1);
        $shop = Product::where('category', $products->category)->get();
        return view('Front.shop-details', compact(['products', 'shop', 'detail']));
    }

    public function shopping()
    {
        $customerId = Session::get('customer_id');
        if (isset($customerId)) {
            $data = Cart::where('user_id', $customerId)->get();
            return view('front.shopping-cart', compact('data'));
        } else {
            return redirect()->route('customlogin');
        }
    }

    public function checkout()
    {
        return view('Front.checkout');
    }

    public function blog()
    {
        $our = Blog::find(1);
        $blog = Trends::all();
        return view('Front.blog', compact(['blog', 'our']));
    }

    public function blogDetails($id)
    {
        $trends = Trends::find($id);
        $blog = BlogDetail::find(1);
        $comment=Comment::all();
        return view('Front.blog-details', compact(['blog','trends','comment']));
    }

    public function contact()
    {
        $contact = Contact::find(1);
        return view('Front.contact', compact('contact'));
    }
}

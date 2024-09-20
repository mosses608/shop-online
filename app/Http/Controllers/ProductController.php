<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\User;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function store_products(Request $request)
    {
        $productData = $request->validate([
            'company_id' => 'required',
            'product_id' => 'required',
            'product_name' => 'required|max:255',
            'category' => 'required|max:255',
            'unit_price' => 'required',
            'quantity' => 'required',
            'pictures1' => 'required|max:2048',
            'pictures2' => 'nullable|max:2048',
            'pictures3' => 'nullable|max:2048',
            'pictures4' => 'nullable|max:20480',
            'description' => 'required|max:10',
            'discount' => 'nullable',
        ]);

        if($request->hasFile('pictures1')){
            $productData['pictures1'] = $request->file('pictures1')->store('images','public');
        }

        if($request->hasFile('pictures2')){
            $productData['pictures2'] = $request->file('pictures2')->store('images','public');
        }

        if($request->hasFile('pictures3')){
            $productData['pictures3'] = $request->file('pictures3')->store('images','public');
        }

        if($request->hasFile('pictures4')){
            $productData['pictures4'] = $request->file('pictures4')->store('videos','public');
        }

        $existingProduct = Product::where('product_id', $productData['product_id'])->first();

        if ($existingProduct) {
            return redirect()->back()->with('existing_product', 'Product already exists!');
        }

        Product::create($productData);

        // dd($request);

        return redirect()->back()->with('success_created_msg', 'Products created successfully');
    }

    public function single_product($product_name){
        $comments = Comment::latest()->get();
        $users = User::all();
        $categories = Category::all();
        $allproduct = Product::find($product_name);
        $nowDate = Carbon::now()->format('Y-m-d');
        $exploreAllProducts = Product::latest()->paginate(5);
        $allproducts = Product::latest()->get();
        return view('explore-single', compact('allproduct','categories','nowDate','exploreAllProducts','allproducts','users','comments'));
    }

    public function store_carts(Request $request){
        $cartDetails = $request->validate([
            'customer_name' => 'required|string',
            'product_id' => 'required',
            'quantity' => 'required|integer',
            'selected_image' => 'required',
            'price' => 'required|numeric'
        ]);

        Cart::create($cartDetails);

        // dd($request->all());

        return redirect('/my-carts')->with('cart_message','New cart added successfully!');
    }

    public function carts_page(){
        $allcarts = Cart::orderBy('id','asc')->get();
        $categories = Category::all();
        $products = Product::all();
        $carts = Cart::latest()->get();
        return view('my-carts', compact('carts','products','categories','allcarts'));
    }

    public function post_comments(Request $request){
        $commentsDetails = $request->validate([
            'profile' => 'nullable',
            'rate' => 'nullable|integer|min:1|max:5',
            'region' => 'required',
            'comment' => 'required|max:255',
            'product_id' => 'required',
        ]);

        Comment::create($commentsDetails);

        return redirect()->back()->with('success_comment','Comment sent successfully!');
    }

    public function edit_discount(Request $request, Product $product){
        $discountData = $request->validate([
            'discount' => 'required',
        ]);

        $product->update($discountData);

        return redirect()->back();
    }

    public function delete_cart(Request $request, Cart $mycart){
        $mycart->delete();
        return redirect()->back();
    }
}

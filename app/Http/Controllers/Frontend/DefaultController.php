<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\ChildCategory;
use App\Models\ParentCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class DefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();
        $subCategories = SubCategory::all();
        $blogs = Blog::all();
        $brands = Brand::all();
        $products = Product::all();

        return view('frontend.index')
            ->with([
                'parentCategories' => $parentCategories,
                'childCategories' => $childCategories,
                'blogs' => $blogs,
                'brands' => $brands,
                'products' => $products,
                'subCategories' => $subCategories
            ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function brands(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();
        $brands = Brand::all();

        return view('frontend.allbrands')
            ->with([
                'parentCategories' => $parentCategories,
                'childCategories' => $childCategories,
                'brands' => $brands
            ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prodDetail(Product $product): View
    {
        $parentCategories = ParentCategory::all();
        $brand = $product->brand();
        $relatedProducts=Product::latest()->paginate(3);

        return view('frontend.productDetail')
            ->with([
                'parentCategories' => $parentCategories,
                'product' => $product,
                'brand' => $brand,
                'relatedProducts'=>$relatedProducts
            ]);
    }

    public function prodByCat(ParentCategory $parentCategory): View
    {

        $parentCategories = ParentCategory::all();
        $childByParentCat = ChildCategory::all();

        return view('frontend.prodbycat')->with(['parentCategories' => $parentCategories, 'childByParentCat' => $childByParentCat, 'parentCategory' => $parentCategory,]);
    }

    public function prductbychild(Request $request){

        $id = $request->childCategory;



        $pid = SubCategory::where('child_category_id', $id)->get();
        if($pid->isEmpty())
        {
            $parentCategories = ParentCategory::all();
            $products = Product::where( function ($query) use($id){
                $query->whereNull('sub_category_id')->where('child_category_id', $id);
            })->paginate(12);
            $blogs = Blog::orderBy('created_at', 'desc')->take(5)->get();
            $childcategory = ChildCategory::where('id', $id)->get();
            return view('frontend.subcategories')->with([
                'products' =>$products,
                'categories' =>$childcategory,
                'blogs' => $blogs,
                'parentCategories' =>$parentCategories
            ]);

        }else{
            $parentcategories = ParentCategory::all();
            $subcategory = SubCategory::where('child_category_id', $id)->get();
            $childcategory = ChildCategory::where('id', $id)->get();
            $blogs = Blog::orderBy('created_at','desc')->take(5)->get();
            $product = Product::latest()->take(20)->get();
            return view('frontend.prodbychildcat')->with([
                'subcategory' =>$subcategory,
                'childcategory' =>$childcategory,
                'blogs' => $blogs,
                'products' => $product,
                'parentCategories' =>$parentcategories

            ]);
        }

    }

    public function prodByChildCat(ChildCategory $childCategory): View
    {
        $parentCategories = ParentCategory::all();
        $subByChildCat = $childCategory->subCategories()->get();

        return view('frontend.prodbychildcat')->with(['parentCategories' => $parentCategories, 'subByChildCat' => $subByChildCat, 'childCategory' => $childCategory,]);
    }

    public function singleBlog(Blog $blog): View
    {
        $parentCategories = ParentCategory::all();
        return view('frontend.blog')
            ->with([
                'parentCategories' => $parentCategories,
                'blog' => $blog
            ]);
    }

    public function allBlogs(): View
    {
        $parentCategories = ParentCategory::all();
        $blogs = Blog::paginate(10);

        return view('frontend.allblog')
            ->with([
                'parentCategories' => $parentCategories,
                'blogs' => $blogs
            ]);
    }

    public function prodByBrands(Brand $brand): View
    {
      $id = $brand->id;
      $prodByBrands = Product::where("brand_id", $id)->get();



        $parentCategories= ParentCategory::all();
        return view('frontend.prodbybrands')
            ->with([
                'brand' => $brand,
                'prodByBrands' => $prodByBrands,
                'parentCategories'=>$parentCategories
            ]);
    }

    //cart function

    public function cart(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();


        return view('frontend.cart')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories]);
    }

    // checkout function

    public function checkout(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();


        return view('frontend.checkout')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories]);
    }

    // contact function
    public function contact(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();


        return view('frontend.contact')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories]);
    }

    // about us
    public function about(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();


        return view('frontend.about')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories]);
    }

    // faqs

    public function faq(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();

        return view('frontend.faq')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories]);
    }

    // Delivery info
    public function deliveryinfo(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();

        return view('frontend.deliveryinfo')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories]);
    }

    // Wish List
    public function wish(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();

        return view('frontend.wishlist')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories]);
    }


    // terms and conditions
    public function term(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();

        return view('frontend.terms')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories]);
    }

    // privacy and policy
    public function privacy(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();

        return view('frontend.privacy')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories]);
    }

    public function addtocart($productId)

    {


    if(Auth::user()) {
        $product = Product::find($productId);
        $cart = Session::get('cart', []);
        $productImage = $product->getFirstMediaUrl('product.image');
        $dimension = $product->product_height + $product->product_width;
        $price = $product->discounted_price ?? $product->price;
        $cart[$productId] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $price,
            "dimention" => $dimension,
            "photo" => $productImage

        ];

        Session::put('cart', $cart);
        return response()->json(['cartSection' => view('frontend.layout.cart')->render()]);

    }else{
        return response()->json(['redirect' =>route('auth.login')]);
    }

       }

       public function deletecart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                return response()->json([ 'cartSection' => view('frontend.layout.cart')->render(),
                'updatecar' => view('frontend.layout.adcart')->render()]);

            }

        }

    }

       public function updateCart(Request $request)
{
    $id = $request->input('id');
    $quantity = $request->input('quantity');

    $cart = Session::get('cart', []);

    if (isset($cart[$id])) {
        // Update the quantity for the specified product
        $cart[$id]['quantity'] = $quantity;

        // Save the updated cart array to the session
        Session::put('cart', $cart);

        // Return a JSON response with the updated cart section
        return response()->json([ 'cartSection' => view('frontend.layout.cart')->render(),
         'updatecar' => view('frontend.layout.adcart')->render()]);
    }

    return response()->json(['error' => 'Product not found in cart']);
}



public function addtowish($productId)

{


if(Auth::user()) {
    $product = Product::find($productId);
    $wish = Session::get('wish', []);
    $productImage = $product->getFirstMediaUrl('product.image');
    $dimension = $product->product_height + $product->product_width;
    $price = $product->discounted_price ?? $product->price;
    $wish[$productId] = [
        "name" => $product->name,
        "quantity" => 1,
        "price" => $price,
        "dimention" => $dimension,
        "photo" => $productImage

    ];

    Session::put('wish', $wish);
    return response()->json(['wishSection' => view('frontend.layout.wish')->render()]);

}else{
    return response()->json(['redirect' =>route('auth.login')]);
}

   }
   public function deletewish(Request $request)
   {
       if($request->id) {
           $wish = session()->get('wish');
           if(isset($wish[$request->id])) {
               unset($wish[$request->id]);
               session()->put('wish', $wish);
               return response()->json([ 'wishSection' => view('frontend.layout.wish')->render(),
               'updatecar' => view('frontend.layout.adwish')->render()]);

           }

       }

   }
}

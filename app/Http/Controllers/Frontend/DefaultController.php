<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\OrderDataTable;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\ChildCategory;
use App\Models\order;
use App\Models\ParentCategory;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
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

   public function billing(){

    $parentCategories = ParentCategory::all();
    $childCategories = ChildCategory::all();
    $subCategories = SubCategory::all();
    $blogs = Blog::all();
    $brands = Brand::all();
    $products = Product::all();

    return view('frontend.layout.billing')
        ->with([
            'parentCategories' => $parentCategories,
            'childCategories' => $childCategories,
            'blogs' => $blogs,
            'brands' => $brands,
            'products' => $products,
            'subCategories' => $subCategories
        ]);


   }
   public function payment(Request $request)
    {

        // $all = $request->all();
        // dd($all);
        // $userID = Auth::User()->id;
        $validation =$request->validate([
            'Fname'=>'required',
            'Lname'=>'required|max:60',
            'email'=>'required|max:60',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zipcode'=>'required',
            'Phno'=>'required',
            'payment_method'=>'required',

      ]);
        print_r($validation);
        $Fname=$request->input('Fname');
        $Lname=$request->input('Lname');
        $address=$request->input('address');
        $city=$request->input('city');
        $state=$request->input('state');
        $zipcode=$request->input('zipcode');
        $phno=$request->input('Phno');
        $Pmethod=$request->input('payment_method');

          $fullname =$Fname.''.$Lname;
          $state_city = $city.','.$state;


        if(session('cart'))
        {
            $total=0;$count=0;$order_details='';$delivery_charges=0;
            foreach (session('cart') as $id => $details)
            {
                $count=$count +1 ;
                $total += $details['price'] * $details['quantity'];
                $order_details=$order_details.'<br>'.
                ('Product Name:'.$details["name"].', Quantity: '.$details["quantity"].
                '<br> Price:'.$details["price"].',Size:'.$details["dimention"]);
            }
    }
    $Amount =$total;
    $O_Details=$order_details;
    $Email_Id=Auth::user()->email;
    $userid = Auth::user()->id;
    $loginid=$Email_Id;
    $name=Auth::user()->name;
/*Order Details Ends Here*/
     $Order = new order();

     $Order->userid=$userid;
     $Order->userName=$fullname;
     $Order->StreetAddress=$address;
     $Order->state=$state_city;
     $Order->zipcode=$zipcode;
     $Order->phoneNo=$phno;
     $Order->product_detail=$order_details;
     $Order->totalprice=$Amount;
     $Order->payment_method=$Pmethod;
     $Order->save();
     $id=$Order->id;

     if($Pmethod=='Stripe')
     {
        return redirect("stripe/$id");
     }
     else
     {


            $welcomemessage='Hello '.$name.'<br>';
            $emailbody='Your Order Was Placed Successfully<br>
            <p>Thank you for your order. We’ll send a confirmation when your order ships. Your estimated delivery date is 3-5 working days. If you would like to view the status of your order or make any changes to it, please visit Your Orders on <a href="https://www.gainaloe.com">Gainaloe.com</a></p>
            <h4>Order Details: </h4><p> Order No:'.$id.$O_Details.'</p>
             <p><strong>Delivery Address:</strong>
           '.$Delivery_Address.'</p>
            <p> <strong>Total Amount:</strong>
            '.$Amount.'</p>
             <p><strong>Payment Method:</strong>'.$Pmethod.'</p>';
            $emailcontent=array(
                'WelcomeMessage'=>$welcomemessage,
                'emailBody'=>$emailbody

                );
                Mail::send(array('html' => 'emails.order_email'), $emailcontent, function($message) use
                ($loginid, $name,$id)
                {
                    $message->to($loginid, $name)->subject
                    ('Your ouction.pk order '.$id.' is Confirmed');
                    $message->from('muhammadnoman0786@hotmail.com','ouction.pk');

                });

                Session::forget('cart');
                Session::forget('discount');
                Session::forget('promocode');
                session()->flash('success', 'Session data  is Cleared');


        return redirect("/Orders")->with('status','Order Placed Succesfully!');
     }




}


public function detail(OrderDataTable $colorDatable)
{
    return $colorDatable->render('admin.order.index',[$colorDatable]);
}


public function orderedit(order $id):View
{


     $userid = $id->userid;
     $mail = User::where('id', $userid)->first();
    //  dd($mail);
   $email= $mail->email;




    return view('admin.order.updateorder',)->with([
        'orders' => $id,
        'mail' => $email
    ]);


}
 public function orderupdate(Request $request):RedirectResponse
 {



    $id =$request->id;
    $order= order::where('id',$id)->first();

    $order->delivery_status = $request->delivery_status;
    $order->zipcode = $request->zipcode;
    $order->StreetAddress = $request->StreetAddress;
    $order->state = $request->state;
    $order->phoneNo = $request->phoneNo;

    $order->save();
    return redirect()->back()->with('success', 'Delivery status updated successfully');
    }
}

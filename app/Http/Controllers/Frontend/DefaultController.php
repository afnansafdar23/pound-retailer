<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\ChildCategory;
use App\Models\ParentCategory;
use App\Models\Product;
use Illuminate\Http\Request;
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
        $prodByBrands = $brand->products();
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
}

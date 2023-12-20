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
        $blogs = Blog::paginate(4);
        $brands = Brand::all();

        return view('frontend.index')
            ->with([
                'parentCategories' => $parentCategories,
                'childCategories' => $childCategories,
                'blogs' => $blogs,
                'brands' => $brands
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
    public function prodByCat(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();
        $blogs = Blog::paginate(4);

        return view('frontend.prodbycat')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories, 'blogs' => $blogs]);
    }

    // blog function
    public function blog(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();
        $blogs = Blog::paginate(4);

        return view('frontend.blog')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories, 'blogs' => $blogs]);
    }


    // end blog function

    // all blog functions
    public function allblog(): View
    {
        $parentCategories = ParentCategory::all();
        $childCategories = ChildCategory::all();
        $blogs = Blog::paginate(4);

        return view('frontend.allblog')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories, 'blogs' => $blogs]);
    }
}

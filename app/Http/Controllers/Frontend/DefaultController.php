<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ChildCategory;
use App\Models\ParentCategory;
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

        return view('frontend.index')->with(['parentCategories' => $parentCategories, 'childCategories' => $childCategories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
}

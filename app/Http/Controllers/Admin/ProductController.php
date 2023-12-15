<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Brand;
use App\Models\ChildCategory;
use App\Models\ParentCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductDatatable $productDatatable)
    {
        return $productDatatable->render('admin.product.index', [$productDatatable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $childCategories = ChildCategory::all();
        $subCategories = SubCategory::all();
        $brands = Brand::all();
        return view('admin.product.create')->with(['childCategories' => $childCategories, 'subCategories' => $subCategories, 'brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProductRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreProductRequest  $request): RedirectResponse
    {
        try {
            $product = Product::create($request->validated());
            if (isset($request->image)) {
                $product->addMedia(storage_path('tmp/uploads/' . $request->image))->toMediaCollection('product.image');
            }
            if ($product) {
                return redirect()->route('product.index')->withSuccess('Product successfully created');
            } else {
                return back()->withError('Something went wrong !');
            }
        } catch (Exception $ex) {
            return back()->withError('Something went wrong !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return View
     */
    public function edit(Product $product): View
    {
        $childCategories = ChildCategory::all();
        $subCategories = SubCategory::all();
        $brands = Brand::all();
        return view('admin.product.edit')
            ->with(
                [
                    'product' => $product,
                    'childCategories' => $childCategories,
                    'subCategories' => $subCategories,
                    'brands' => $brands
                ]
            );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        try {
            $product->update($request->validated());

            if (isset($request['image']) == null) {
                $product->clearMediaCollection('product.image');
            } else {
                if (!file_exists(storage_path('tmp/uploads/' . $request['image']))) {
                    return redirect()->route('product.index')->withSuccess('Product successfully Updated');
                }
                $product->media()->delete();
                $product->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('product.image');
            }
            if ($product) {
                return redirect()->route('product.index')->withSuccess('Product successfully updated');
            }
        } catch (Exception $ex) {
            return back()->withError('Something went wrong !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product): RedirectResponse
    {
        try {
            $product->media()->delete();
            $product->delete();

            return redirect()->back()->withSuccess('Product successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('Product not deleted');
        }
    }
}

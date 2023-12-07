<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BrandDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\StoreBrandRequest;
use App\Http\Requests\Brand\UpdateBrandRequest;
use App\Models\Brand;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BrandDatatable $brandDatatable)
    {
        return $brandDatatable->render('admin.brand.index', [$brandDatatable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreBrandRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreBrandRequest  $request): RedirectResponse
    {
        try {
            $brand = Brand::create($request->validated());
            if (isset($request->image)) {
                $brand->addMedia(storage_path('tmp/uploads/' . $request->image))->toMediaCollection('brand.image');
            }
            if ($brand) {
                return redirect()->route('brand.index')->withSuccess('Brand successfully created');
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
     * @param Brand $brand
     * @return View
     */
    public function edit(Brand $brand): View
    {
        return view('admin.brand.edit')->with('brand', $brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBrandRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateBrandRequest $request, Brand $brand): RedirectResponse
    {
        try {
            $brand->update($request->validated());

            if (isset($request['image']) == null) {
                $brand->clearMediaCollection('brand.image');
            } else {
                if (!file_exists(storage_path('tmp/uploads/' . $request['image']))) {
                    return redirect()->route('brand.index')->withSuccess('Brand successfully Updated');
                }
                $brand->media()->delete();
                $brand->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('brand.image');
            }
            if ($brand) {
                return redirect()->route('brand.index')->withSuccess('Brand successfully updated');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Brand $brand
     * @return RedirectResponse
     */
    public function destroy(Brand $brand): RedirectResponse
    {
        try {
            $brand->media()->delete();
            $brand->delete();

            return redirect()->back()->withSuccess('Brand successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('Brand not deleted');
        }
    }
}

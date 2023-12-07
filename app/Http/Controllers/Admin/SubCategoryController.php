<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SubCategoryDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategory\StoreCategoryRequest;
use App\Http\Requests\SubCategory\UpdateCategoryRequest;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SubCategoryDatatable $subCategoryDatatable)
    {
        return $subCategoryDatatable->render('admin.sub-category.index', [$subCategoryDatatable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $childCategories = ChildCategory::all();
        return view('admin.sub-category.create')->with(['childCategories' => $childCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCategoryRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreCategoryRequest  $request): RedirectResponse
    {
        try {
            $subCategory = SubCategory::create($request->validated());
            if (isset($request->image)) {
                $subCategory->addMedia(storage_path('tmp/uploads/' . $request->image))->toMediaCollection('subCategory.image');
            }
            if ($subCategory) {
                return redirect()->route('sub.category.index')->withSuccess('Sub Category successfully created');
            } else {
                return back()->withError('Something went wrong !');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
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
     * @param SubCategory $subCategory
     * @return View
     */
    public function edit(SubCategory $subCategory): View
    {
        $childCategories = ChildCategory::all();
        return view('admin.sub-category.edit')->with(['subCategory' => $subCategory, 'childCategories' => $childCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, SubCategory $subCategory): RedirectResponse
    {
        try {
            $subCategory->update($request->validated());

            if (isset($request['image']) == null) {
                $subCategory->clearMediaCollection('subCategory.image');
            } else {
                if (!file_exists(storage_path('tmp/uploads/' . $request['image']))) {
                    return redirect()->route('sub.category.index')->withSuccess('Sub Category successfully Updated');
                }
                $subCategory->media()->delete();
                $subCategory->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('subCategory.image');
            }
            if ($subCategory) {
                return redirect()->route('sub.category.index')->withSuccess('Sub Category successfully updated');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  SubCategory $subCategory
     * @return RedirectResponse
     */
    public function destroy(SubCategory $subCategory): RedirectResponse
    {
        try {
            $subCategory->media()->delete();
            $subCategory->delete();

            return redirect()->back()->withSuccess('Sub Category successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('Sub Category not deleted');
        }
    }
}

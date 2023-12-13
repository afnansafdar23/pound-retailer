<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ParentCategoryDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ParentCat\StoreCategoryRequest;
use App\Http\Requests\ParentCat\UpdateCategoryRequest;
use App\Models\ParentCategory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ParentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ParentCategoryDatatable $parentCategoryDatatable)
    {
        return $parentCategoryDatatable->render('admin.parent-category.index', [$parentCategoryDatatable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.parent-category.create');
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
            $parentCategory = ParentCategory::create($request->validated());
            if (isset($request->image)) {
                $parentCategory->addMedia(storage_path('tmp/uploads/' . $request->image))->toMediaCollection('parentCategory.image');
            }
            if ($parentCategory) {
                return redirect()->route('parent.category.index')->withSuccess('Parent Category successfully created');
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
     * @param ParentCategory $parentCategory
     * @return View
     */
    public function edit(ParentCategory $parentCategory): View
    {
        return view('admin.parent-category.edit')->with('parentCategory', $parentCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, ParentCategory $parentCategory): RedirectResponse
    {
        try {
            $parentCategory->update($request->validated());

            if (isset($request['image']) == null) {
                $parentCategory->clearMediaCollection('parentCategory.image');
            } else {
                if (!file_exists(storage_path('tmp/uploads/' . $request['image']))) {
                    return redirect()->route('parent.category.index')->withSuccess('Parent Category successfully Updated');
                }
                $parentCategory->media()->delete();
                $parentCategory->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('parentCategory.image');
            }
            if ($parentCategory) {
                return redirect()->route('parent.category.index')->withSuccess('Parent Category successfully updated');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ParentCategory $parentCategory
     * @return RedirectResponse
     */
    public function destroy(ParentCategory $parentCategory): RedirectResponse
    {
        try {
            $parentCategory->media()->delete();
            $parentCategory->delete();

            return redirect()->back()->withSuccess('Parent Category successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('Parent Category not deleted');
        }
    }
}

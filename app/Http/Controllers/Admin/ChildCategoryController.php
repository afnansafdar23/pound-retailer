<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ChildCategoryDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChildCategory\StoreCategoryRequest;
use App\Http\Requests\ChildCategory\UpdateCategoryRequest;
use App\Models\ChildCategory;
use App\Models\ParentCategory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ChildCategoryDatatable $childCategoryDatatable)
    {
        return $childCategoryDatatable->render('admin.child-category.index', [$childCategoryDatatable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $parentCategories = ParentCategory::all();
        return view('admin.child-category.create')->with(['parentCategories' => $parentCategories]);
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
            $childCategory = ChildCategory::create($request->validated());
            if (isset($request->image)) {
                $childCategory->addMedia(storage_path('tmp/uploads/' . $request->image))->toMediaCollection('childCategory.image');
            }
            if ($childCategory) {
                return redirect()->route('child.category.index')->withSuccess('Child Category successfully created');
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
     * @param ChildCategory $childCategory
     * @return View
     */
    public function edit(ChildCategory $childCategory): View
    {
        $parentCategories = ParentCategory::all();
        return view('admin.child-category.edit')->with(['childCategory' => $childCategory, 'parentCategories' => $parentCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, ChildCategory $childCategory): RedirectResponse
    {
        try {
            $childCategory->update($request->validated());

            if (isset($request['image']) == null) {
                $childCategory->clearMediaCollection('childCategory.image');
            } else {
                if (!file_exists(storage_path('tmp/uploads/' . $request['image']))) {
                    return redirect()->route('child.category.index')->withSuccess('Child Category successfully Updated');
                }
                $childCategory->media()->delete();
                $childCategory->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('childCategory.image');
            }
            if ($childCategory) {
                return redirect()->route('child.category.index')->withSuccess('Child Category successfully updated');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ChildCategory $childCategory
     * @return RedirectResponse
     */
    public function destroy(ChildCategory $childCategory): RedirectResponse
    {
        try {
            $childCategory->media()->delete();
            $childCategory->delete();

            return redirect()->back()->withSuccess('Child Category successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('Child Category not deleted');
        }
    }
}

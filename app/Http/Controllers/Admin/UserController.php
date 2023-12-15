<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDataTable $userDataTable)
    {
        return $userDataTable->render('admin.users.index', [$userDataTable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $roles = Role::all();
        return view('admin.users.create')
            ->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreUserRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreUserRequest  $request): RedirectResponse
    {
        try {
            $user = User::create($request->validated());
            if (isset($request->image)) {
                $user->addMedia(storage_path('tmp/uploads/' . $request->image))->toMediaCollection('user.image');
            }
            if ($user) {
                return redirect()->route('user.index')->withSuccess('User successfully created');
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
     * @param User $user
     * @return View
     */
    public function edit(User $user): View
    {
        $roles = Role::all();
        return view('admin.users.edit')
            ->with(
                ['user' => $user, 'roles' => $roles]
            );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        try {
            $user->update($request->validated());

            if (isset($request['image']) == null) {
                $user->clearMediaCollection('user.image');
            } else {
                if (!file_exists(storage_path('tmp/uploads/' . $request['image']))) {
                    return redirect()->route('user.index')->withSuccess('User successfully Updated');
                }
                $user->media()->delete();
                $user->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('user.image');
            }
            if ($user) {
                return redirect()->route('user.index')->withSuccess('User successfully updated');
            }
        } catch (Exception $ex) {
            return back()->withError('Something went wrong !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User $user
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        try {
            $user->syncRoles();
            $user->delete();

            return redirect()->back()->withSuccess('User successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('User not deleted');
        }
    }
}

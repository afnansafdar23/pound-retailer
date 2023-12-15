<x-layout.master>
    <x-slot name="header">
        <x-layout.header />
    </x-slot>
    <x-slot name="left_side_nav">
        <x-layout.left_side_nav />
    </x-slot>
    <x-slot name="content">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                    @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    <div class="card mb-5 mb-xl-8" style="user-select: auto;">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5" style="user-select: auto;">
                            <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Edit User</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3" style="user-select: auto;">
                            <!--begin::Table container-->
                            <div class="modal-body">
                                <!--begin::Label-->
                                <!--end::Label-->
                                <div class="row">
                                    <div class="col-12">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Image</label>
                                        @include('admin.media.dropdown',['collection_name'=>'user.image','file'=>$user])
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="text" name="name" value="{{$user['name']}}"
                                            label="Name" placeholder="Name" :message="$errors->first('name')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="email" name="email" value="{{$user['email']}}"
                                            label="Email" placeholder="Email" :message="$errors->first('email')" />
                                    </div>
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Roles</label>
                                        <select name='roles[]' class="form-select form-select-solid"
                                            data-control="select2" multiple>
                                            @foreach ($roles as $role)
                                            <option @if ($user->roles->contains($role['id']))
                                                <?php echo "selected" ?>
                                                @endif
                                                value="{{ $role->id }}">{{ $role->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('child_category_id')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="mobile_number" label="Mobile"
                                            placeholder="Mobile" :message="$errors->first('mobile_number')" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer mt-5 gap-2">
                                <button type="submit" class="btn btn-success">
                                    Edit User
                                </button>
                                <a class="btn btn-light-danger" href={{ route('user.index') }}> Cancel </a>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
            </form>
        </div>
        <!--end:::Main-->
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
</x-layout.master>
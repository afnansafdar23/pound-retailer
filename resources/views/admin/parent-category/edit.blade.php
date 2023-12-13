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
            <form action="{{ route('parent.category.update', $parentCategory->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                    @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    <div class="card mb-xl-8 mb-5" style="user-select: auto;">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5" style="user-select: auto;">
                            <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Edit Parent
                                    Category</span>
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
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-12 col-form-label required fw-bold fs-6">Image</label>
                                        @include('admin.media.dropdown',['file' => $parentCategory,
                                        'collection_name' => 'parentCategory.image',])
                                    </div>
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Category
                                            Name</label>
                                        <input type="text" value="{{ $parentCategory['name'] }}" name="name"
                                            placeholder="{{ $parentCategory['name'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('name')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Category
                                            Sub Name</label>
                                        <input type="text" value="{{ $parentCategory['sub_name'] }}" name="sub_name"
                                            placeholder="{{ $parentCategory['sub_name'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('sub_name')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Description</label>
                                        <textarea type="text" value="{{ $parentCategory['desccription'] }}"
                                            name="description" placeholder="{{ $parentCategory['desccription'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">{{$parentCategory['description']}}</textarea>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('desccription')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Sub
                                            Description</label>
                                        <textarea type="text" value="{{ $parentCategory['sub_description'] }}"
                                            name="sub_description"
                                            placeholder="{{ $parentCategory['sub_description'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">{{$parentCategory['sub_description']}}</textarea>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('sub_description')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>
                            <div class="modal-footer mt-5 gap-2">
                                <button type="submit" class="btn btn-success">
                                    Edit Parent Category
                                </button>
                                <a class="btn btn-light-danger" href={{ route('parent.category.index') }}> Cancel </a>
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
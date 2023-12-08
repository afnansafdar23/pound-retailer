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
            <form action="{{ route('child.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                    @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <div class="card mb-xl-8 mb-5" style="user-select: auto;">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5" style="user-select: auto;">
                            <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Add Child
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
                                    <div class="col-12">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Image</label>
                                        @include('admin.media.dropdown')
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="text" name="name" label="Name" placeholder="Name"
                                            :message="$errors->first('name')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="text" name="sub_name" label="Sub Name"
                                            placeholder="Sub Name" :message="$errors->first('sub_name')" />
                                    </div>
                                    <div class="col-6">
                                        <x-textarea type='text' name="description" label="Description" class="col-12"
                                            placeholder="Enter Description" :message="$errors->first('description')" />
                                    </div>
                                    <div class="col-6">
                                        <x-textarea type='text' name="sub_description" label="Sub Description"
                                            class="col-12" placeholder="Enter Description"
                                            :message="$errors->first('sub_description')" />
                                    </div>
                                    <div class="col-12">
                                        <x-cento-dash-input type="select" name="parent_category_id"
                                            label="Parent Category" :options="$parentCategories"
                                            :message="$errors->first('parent_category_id')" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer mt-5 gap-2">
                                <x-cento-dash-input type="submit" label="Add Child Category" />
                                <a class="btn btn-danger" href={{ route('child.category.index') }}> Cancel </a>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
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
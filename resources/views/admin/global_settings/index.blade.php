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
            <form action="{{ route('setting.store') }}" method="POST" enctype="multipart/form-data">
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
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Global Setting</span>
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
                                    <div class="col-6">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Favicon</label>
                                        @include('admin.media.dropdown',['dropzone_name'=>'favicon'])
                                    </div>
                                    <div class="col-6">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Site Logo</label>
                                        @include('admin.media.dropdown',['dropzone_name','site_logo'])
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="text" name="application_name" label="Site Name" placeholder="Name" value="{{$setting['application_name']}}"
                                            :message="$errors->first('name')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="email" name="email" label="Site email" placeholder="email" value="{{$setting['email']}}"
                                            :message="$errors->first('name')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="url" name="facebook_link" label="Facebook URL" value="{{$setting['facebook_link']}}"
                                            placeholder="Facebook URL" :message="$errors->first('facebook_link')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="url" name="instagram_link" label="Instagram URL" value="{{$setting['instagram_link']}}"
                                            placeholder="Instagram URL" :message="$errors->first('instagram_link')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="url" name="twitter_link" label="Twitter URL" value="{{$setting['twitter_link']}}"
                                            placeholder="Twitter URL" :message="$errors->first('twitter_link')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="text" name="gsc" label="Google Search Console" value="{{$setting['gsc']}}"
                                            placeholder="Twitter URL" :message="$errors->first('gsc')" />
                                    </div>
                                    <div class="col-12">
                                        <x-textarea type='text' name="short_description" label="Short Description" class="col-12" value="{{$setting['short_description']}}"
                                            placeholder="Enter Short Description" :message="$errors->first('short Description')" />
                                    </div>
                                    <div class="col-3">
                                        <x-cento-dash-input type="text" name="color_one" label="Color One" placeholder="Enter Color code (#0000)" value="{{$setting['color_one']}}"
                                            :message="$errors->first('color_one')" />
                                    </div>
                                    <div class="col-3">
                                        <x-cento-dash-input type="text" name="color_two" label="Color Two" placeholder="Enter Color code (#0000)" value="{{$setting['color_two']}}"
                                            :message="$errors->first('color_two')" />
                                    </div>
                                    <div class="col-3">
                                        <x-cento-dash-input type="text" name="color_three" label="Color Three" placeholder="Enter Color code (#0000)" value="{{$setting['color_three']}}"
                                            :message="$errors->first('color_three')" />
                                    </div>
                                    <div class="col-3">
                                        <x-cento-dash-input type="text" name="color_four" label="Color Fourth" placeholder="Enter Color code (#0000)" value="{{$setting['color_four']}}"
                                            :message="$errors->first('color_four')" />
                                    </div>
                                    <div class="col-2 my-4">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" name="site_index" />
                                            <span class="form-check-label fw-semibold text-muted">Site Index</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer mt-5 gap-2">
                                <x-cento-dash-input type="submit" label="Submit changes" />
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

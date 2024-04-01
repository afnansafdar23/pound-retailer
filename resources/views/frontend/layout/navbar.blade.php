<div class="header-area sticky header-area-1  clearfix">
        <!-- Header Left 1 -->
        <div class="header-left header-left-1 scroll  d-sm-block">
            <button class="sidebar-menu-toggle float-left"><i class="zmdi zmdi-menu"></i></button>
        </div>
        <!-- Header Center 3 -->
        <div class="header-center header-center-3 text-center">
            <a href="{{Route('web.index')}}" class="logo"><img src="{{asset('assets/media/logos/site_logo.jpg')}}" alt="logo"></a>
        </div>
        <!-- Header Right 1 -->
        <div class="header-right header-right-1">
            <!-- Account Menu -->
            <div class="account-menu account-menu-2 float-right d-block d-lg-block">
                <button data-bs-toggle="dropdown" class="acc-menu-toggle"><i class="zmdi zmdi-settings"></i></button>
                <ul class="acc-menu-dropdown dropdown-menu right">
                    <li><a href="#">account</a></li>
                    <li><a href="{{Route('web.checkout')}}">check out</a></li>
                    <li><a href="{{route('web.prod.by.brands')}}">shop</a></li>
                    <li><a href="#">wishlist</a></li>
                    <li><a href="{{Route('auth.login')}}">log in</a></li>
                    <li><a href="{{Route(''')}}">cart</a></li>
                </ul>
            </div>
            <div class="mini-cart-wrapper mini-cart-wrapper-2 float-right" id="addcart">
               @include('frontend.layout.cart')
            </div>
            <div class="header-search header-search-2 d-none d-md-block float-right">
                <button data-bs-toggle="dropdown" class="search-toggle"><i class="zmdi zmdi-search"></i></button>
                <div class="search-dropdown dropdown-menu right">
                    <form action="#">
                        <input type="text" placeholder="Search Product...">
                        <input type="submit" class="search-submit">
                    </form>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu Wrapper -->
        <div class="sidebar-menu-wrapper z-index-3">
            <button class="menu-close"><i class="zmdi zmdi-close-circle"></i></button>
            <!-- treeview start -->
            <nav id="sidebar-menu" class="sidebar-menu">
                <ul>
                    @foreach ($parentCategories as $parentCategory)
                    <li class="{{Request::route()->getName()=='web.prodByCat'?'active':''}}"><a
                    href="{{ route('web.prodByCat',$parentCategory['id']) }}">{{$parentCategory['name']}}</a>
                        @if ($parentCategory->childCategories)
                        <ul>
                            @foreach ($parentCategory->childCategories as $childCategory)
                            <li><a href="/product-by-child/{{$childCategory['id']}}">{{$childCategory['name']}}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                    <li><a href="{{Route('web.contact')}}">contact</a></li>
                </ul>
            </nav>

        </div>
        <!-- Mobile Menu Wrapper 1 -->

    </div>

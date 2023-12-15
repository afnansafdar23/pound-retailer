<div class="header-area sticky header-area-1  clearfix">
    <!-- Header Left 1 -->
    <div class="header-left header-left-1 scroll  d-sm-block">
        <button class="sidebar-menu-toggle float-left"><i class="zmdi zmdi-menu"></i></button>
    </div>
    <!-- Header Center 3 -->
    <div class="header-center header-center-3 text-center">
        <a href="index.html" class="logo"><img src="img/logo.webp" alt="logo"></a>
    </div>
    <!-- Header Right 1 -->
    <div class="header-right header-right-1">
        <!-- Account Menu -->
        <div class="account-menu account-menu-2 float-right d-block d-lg-block">
            <button data-bs-toggle="dropdown" class="acc-menu-toggle"><i class="zmdi zmdi-settings"></i></button>
            <ul class="acc-menu-dropdown dropdown-menu right">
                <li><a href="#">account</a></li>
                <li><a href="#">check out</a></li>
                <li><a href="#">shop</a></li>
                <li><a href="#">wishlist</a></li>
                <li><a href="#">log in</a></li>
                <li><a href="#">cart</a></li>
            </ul>
        </div>
        <div class="mini-cart-wrapper mini-cart-wrapper-2 float-right">
            <a href="#" data-bs-toggle="dropdown" class="mini-cart-btn"><span><i
                        class="zmdi zmdi-shopping-cart"></i><span class="cart-number">2</span></span></a>
            <div class="mini-cart dropdown-menu right">
                <div class="mini-cart-product fix">
                    <a href="#" class="image"><img src="img/mini-cart/1.webp" alt=""></a>
                    <div class="content fix">
                        <a href="#" class="title">wooden furniture</a>
                        <p>Color: Black</p>
                        <p>Size: SL</p>
                        <button class="remove"><i class="zmdi zmdi-close"></i></button>
                    </div>
                </div>
                <div class="mini-cart-product fix">
                    <a href="#" class="image"><img src="img/mini-cart/2.webp" alt=""></a>
                    <div class="content fix">
                        <a href="#" class="title">wooden furniture</a>
                        <p>Color: Black</p>
                        <p>Size: SL</p>
                        <button class="remove"><i class="zmdi zmdi-close"></i></button>
                    </div>
                </div>
                <div class="mini-cart-product fix">
                    <a href="#" class="image"><img src="img/mini-cart/3.webp" alt=""></a>
                    <div class="content fix">
                        <a href="#" class="title">wooden furniture</a>
                        <p>Color: Black</p>
                        <p>Size: SL</p>
                        <button class="remove"><i class="zmdi zmdi-close"></i></button>
                    </div>
                </div>
                <div class="mini-cart-checkout text-center">
                    <a href="#">checkout</a>
                </div>
            </div>
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
    <div class="sidebar-menu-wrapper  ">
        <button class="menu-close"><i class="zmdi zmdi-close-circle"></i></button>
        <!-- treeview start -->
        <nav id="sidebar-menu" class="sidebar-menu">
            <ul>
                @foreach ($parentCategories as $parentCategory)
                <li class="{{Request::route()->getName()=='parent.category.index'?'active':''}}"><a
                        href="{{route('parent.category.index')}}">{{$parentCategory['name']}}</a>
                    @if ($parentCategory->childCategories)
                    <ul>
                        @foreach ($parentCategory->childCategories as $childCategory)
                        <li><a href="index.html">{{$childCategory['name']}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
                <li><a href="contact.html">contact</a></li>
            </ul>
        </nav>

    </div>
    <!-- Mobile Menu Wrapper 1 -->

</div>
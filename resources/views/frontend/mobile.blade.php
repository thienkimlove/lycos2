<div class="menu-mobile" id="menu-mobile">
    <div class="inner">
        <a href="javascript:void(0)" title="Menu" class="btn-menu" id="btn-menu">Menu</a>
        <div class="search">
            <div class="search-in">
                @include('frontend.search_form')
            </div>
        </div>
        <nav>
            <ul class="nav-mobile">
                @include('frontend.menu', ['active' => true])
            </ul>
        </nav>
    </div>
</div>
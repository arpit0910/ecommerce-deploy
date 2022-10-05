<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <h6 class="overline-title text-primary-alt">ECOMMERCE</h6>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-list-thumb-fill"></em></span>
                            <span class="nk-menu-text">Manage Inventory</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('category.index')}}" class="nk-menu-link"><span class="nk-menu-text">Category</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('product.index')}}" class="nk-menu-link"><span class="nk-menu-text">All Products</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('promocode.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-offer-fill"></em></span>
                            <span class="nk-menu-text">Promocodes</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('headerSlider.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-img"></em></span>
                            <span class="nk-menu-text">Header Slider</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('cms.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                            <span class="nk-menu-text">CMS</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu-sub -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
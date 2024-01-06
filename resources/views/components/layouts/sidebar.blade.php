<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item ">
            <a class="nav-link {{ (request()->is('/')) ? '' : 'collapsed' }}" href="/">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ (request()->is('product')) ? '' : 'collapsed' }}" href="product">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span>Product</span>
            </a>
        </li><!-- End Product Nav -->
    </ul>

</aside><!-- End Sidebar-->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a
                class="nav-link collapsed"
                data-bs-target="#components-nav"
                data-bs-toggle="collapse"
                href="#"
            >
                <i class="bi bi-menu-button-wide"></i><span>Mes Patients</span>
            </a>
        </li>
        <!-- End Components Nav -->

        <li class="nav-item">
            <a
                class="nav-link collapsed"
                data-bs-target="#forms-nav"
                data-bs-toggle="collapse"
                href="patients.html"
            >
                <i class="bi bi-journal-text"></i><span>Rendez-Vous</span>
            </a>
        </li>
        <!-- End Forms Nav -->
    </ul>
</aside>
<!-- End Sidebar-->
@yield('content')

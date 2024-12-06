<header class="position-fixed w-100">
    <nav class="navbar navbar-light bg-body-tertiary">
        <div class="position-absolute" style="left: 44px;">
            <div class="d-flex flex-column" id="burgers" style="row-gap: 3px;">
                <svg width="26" height="4" viewBox="0 0 26 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="26" height="4" rx="2" fill="#0D2F7D" />
                </svg>
                <svg width="26" height="4" viewBox="0 0 26 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="26" height="4" rx="2" fill="#0D2F7D" />
                </svg>
                <svg width="26" height="4" viewBox="0 0 26 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="26" height="4" rx="2" fill="#0D2F7D" />
                </svg>
            </div>
        </div>
        <ul class="nav nav-tabs rounded-pill" id="switch-toggle" role="tablist">
            <li class="nav-item rounded-pill" role="presentation">
                <a data-mdb-tab-init class=" active" id="tab-banner" href="#sidebar-banner" role="tab"
                    aria-controls="sidebar-banner" aria-selected="true">Display Banner</a>
            </li>
            <li class="nav-item rounded-pill" role="presentation">
                <a data-mdb-tab-init class="" id="tab-performance" href="#sidebar-performance" role="tab"
                    aria-controls="sidebar-performance" aria-selected="false">Performance Banner</a>
            </li>
        </ul>
        <a href="/" style="margin: 4px 44px;">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo-salesproduct" class="logo-salesproduct"
                style="width: 100%;">
        </a>
    </nav>
</header>

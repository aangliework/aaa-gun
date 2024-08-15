<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            AAA<span>GUN</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="sidebar-body">
        {{-- Sementara Hardcode --}}

        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item {{ active_class(['/']) }}">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            {{-- SFA --}}
            <li class="nav-item nav-category">SFA</li>
                <li class="nav-item {{ active_class(['ui-components/*']) }}">
                    <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="{{ is_active_route(['ui-components/*']) }}" aria-controls="uiComponents">
                        <i class="link-icon" data-feather="feather"></i>
                        <span class="link-title">Visit</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse {{ show_class(['ui-components/*']) }}" id="uiComponents">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ url('/ui-components/accordion') }}" class="nav-link {{ active_class(['ui-components/accordion']) }}">List</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/ui-components/alerts') }}" class="nav-link {{ active_class(['ui-components/alerts']) }}">Pengajuan</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/ui-components/alerts') }}" class="nav-link {{ active_class(['ui-components/alerts']) }}">Approval</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </li>

            {{-- BUDGET ONLINE --}}
            <li class="nav-item nav-category">BUDGET ONLINE</li>
                <li class="nav-item {{ active_class(['ui-components/*']) }}">
                    <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="{{ is_active_route(['ui-components/*']) }}" aria-controls="uiComponents">
                        <i class="link-icon" data-feather="feather"></i>
                        <span class="link-title">UPC</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse {{ show_class(['ui-components/*']) }}" id="uiComponents">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ url('/ui-components/accordion') }}" class="nav-link {{ active_class(['ui-components/accordion']) }}">List</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/ui-components/alerts') }}" class="nav-link {{ active_class(['ui-components/alerts']) }}">Pengajuan</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </li>




        </ul>
    </div>

</nav>

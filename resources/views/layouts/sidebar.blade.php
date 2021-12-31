<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
            target="_blank">
            <img src="{{ asset('img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Project Name</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="w-auto  max-height-vh-100" id="sidenav-collapse-main">

        <ul class="navbar-nav pb-4">

            @foreach (SiteHelpers::main_menu() as $main)
                <li class="nav-item">
                    <a 
                        @if ($main->is_parent == 1) data-bs-toggle="collapse" href="#sidebar{{$main->id}}" @endif
                        href="{{'../../'.$main->url}}" 
                        class="nav-link text-white 
                        @if (Request::segment(1) == $main->url) active bg-gradient-primary @endif" 
                        aria-controls="sidebar{{$main->id}}"
                        role="button" aria-expanded="false">
                        <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">{{ $main->icon }}</i>
                        <span class="nav-link-text ms-2 ps-1">{{ $main->nama_menu }}</span>
                    </a>
                    <div class="collapse" id="sidebar{{$main->id}}" style="">
                        <ul class="nav ">
                            @foreach (SiteHelpers::sub_menu() as $sub)
                                @if ($sub->master_menu == $main->id)

                                <li class="nav-item">
                                    <a class="nav-link text-white @if (Request::segment(1).'/'.Request::segment(2) == $sub->url) active bg-gradient-primary @endif" href="{{ url($sub->url) }}">
                                    <span class="sidenav-mini-icon material-icons">{{ $sub->icon }}</span>
                                    <span class="sidenav-normal  ms-2  ps-1"> {{ $sub->nama_menu }} </span>
                                    </a>
                                </li>

                                @endif
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endforeach

        </ul>

    </div>
</aside>

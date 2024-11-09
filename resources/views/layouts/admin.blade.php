<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GroAE') }}</title>

        <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/style.css') }}?v=0.1" rel="stylesheet" />
        <link href="{{ asset('css/invoice-style.css') }}?v=0.1" rel="stylesheet" />
    </head>

    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-header header-shadow">
                <div class="app-header__logo">
                    <img src="{{ secure_asset('images/GroAE_Logo.png') }}" width="100" class="logo-src">
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="app-header__content">
                    <div class="app-header-right">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <i id="dropdownButton" class="fa fa-angle-down ml-2 opacity-8 p-1 btn"></i>
                                            <div id="dropdownContent" class="dropdown-menu dropdown-menu-right">
                                                <a href="/admin/profile" class="dropdown-item">Profile</a>
                                                <a href="/admin/change-password" class="dropdown-item">Change Password</a>
                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a onclick="event.preventDefault();this.closest('form').submit();"
                                                        href="{{route('logout')}}" class="dropdown-item">
                                                        Logout
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left  ml-3 header-user-info">
                                        <div class="widget-heading ba_text_transform_capitalize">
                                            {{ Auth::user()->name }}
                                        </div>
                                        @if( Auth::user()->roles->isNotEmpty() )
                                            <div class="widget-subheading ba_text_transform_capitalize">
                                                {{ Auth::user()->roles[0]->name }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                    data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    @include('layouts.leftmenu')
                </div>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>

        <script src="https://kit.fontawesome.com/428b785ee5.js" crossorigin="anonymous"></script>
        <script src="{{ secure_asset('js/jquery-3.7.1.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ secure_asset('js/select2.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ secure_asset('js/ckeditor.js') }}" crossorigin="anonymous"></script>
        <script src="{{ secure_asset('js/script.js') }}?v=0.4" crossorigin="anonymous"></script>
        @push('scripts')
            <!-- DataTables CSS -->
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

            <!-- DataTables JS -->
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


            <script>
                $(document).ready(function() {
                    $('.table').DataTable({
                        "paging": true, // Enable pagination
                        "searching": true, // Enable search
                        "ordering": true, // Enable sorting
                        "order": [[ 0, "asc" ]], // Default order by ID Ascending
                        "pageLength": 10 // Number of entries to show per page
                    });
                });
                setTimeout(function() {
                    $('.custom-alert').fadeOut('slow');
                }, 5000);
                setTimeout(function() {
                    $('.custom-red-alert').fadeOut('slow');
                }, 5000);
            </script>
        @endpush
        @stack('scripts')

    </body>
</html>

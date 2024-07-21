<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background-color: #f5f5f5;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        #layoutAuthentication {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #layoutAuthentication #layoutAuthentication_content {
            min-width: 0;
            flex-grow: 1;
        }

        #layoutAuthentication #layoutAuthentication_footer {
            min-width: 0;
        }

        #layoutSidenav {
            display: flex;
        }

        #layoutSidenav #layoutSidenav_nav {
            flex-basis: 225px;
            flex-shrink: 0;
            transition: transform 0.15s ease-in-out;
            z-index: 1038;
            transform: translateX(-225px);
        }

        #layoutSidenav #layoutSidenav_content {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-width: 0;
            flex-grow: 1;
            min-height: calc(100vh - 56px);
            margin-left: -225px;
        }

        .sb-sidenav-toggled #layoutSidenav #layoutSidenav_nav {
            transform: translateX(0);
        }

        .sb-sidenav-toggled #layoutSidenav #layoutSidenav_content:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            z-index: 1037;
            opacity: 0.5;
            transition: opacity 0.3s ease-in-out;
        }

        @media (min-width: 992px) {
            #layoutSidenav #layoutSidenav_nav {
                transform: translateX(0);
            }

            #layoutSidenav #layoutSidenav_content {
                margin-left: 0;
                transition: margin 0.15s ease-in-out;
            }

            .sb-sidenav-toggled #layoutSidenav #layoutSidenav_nav {
                transform: translateX(-225px);
            }

            .sb-sidenav-toggled #layoutSidenav #layoutSidenav_content {
                margin-left: -225px;
            }

            .sb-sidenav-toggled #layoutSidenav #layoutSidenav_content:before {
                display: none;
            }
        }

        .sb-nav-fixed .sb-topnav {
            z-index: 1039;
        }

        .sb-nav-fixed #layoutSidenav #layoutSidenav_nav {
            width: 225px;
            height: 100vh;
            z-index: 1038;
        }

        .sb-nav-fixed #layoutSidenav #layoutSidenav_nav .sb-sidenav {
            padding-top: 56px;
        }

        .sb-nav-fixed #layoutSidenav #layoutSidenav_nav .sb-sidenav .sb-sidenav-menu {
            overflow-y: auto;
        }

        .sb-nav-fixed #layoutSidenav #layoutSidenav_content {
            padding-left: 225px;
            top: 56px;
        }

        #layoutError {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #layoutError #layoutError_content {
            min-width: 0;
            flex-grow: 1;
        }

        #layoutError #layoutError_footer {
            min-width: 0;
        }

        .img-error {
            max-width: 20rem;
        }

        .nav .nav-link .sb-nav-link-icon,
        .sb-sidenav-menu .nav-link .sb-nav-link-icon {
            margin-right: 0.5rem;
        }

        .sb-topnav {
            padding-left: 0;
            height: 56px;
            z-index: 1039;
        }

        .sb-topnav .navbar-brand {
            width: 225px;
            margin: 0;
        }

        .sb-topnav.navbar-dark #sidebarToggle {
            color: rgba(255, 255, 255, 0.5);
        }

        .sb-topnav.navbar-light #sidebarToggle {
            color: #212529;
        }

        .sb-sidenav {
            display: flex;
            flex-direction: column;
            height: 100%;
            flex-wrap: nowrap;
        }

        .sb-sidenav .sb-sidenav-menu {
            flex-grow: 1;
        }

        .sb-sidenav .sb-sidenav-menu .nav {
            flex-direction: column;
            flex-wrap: nowrap;
        }

        .sb-sidenav .sb-sidenav-menu .nav .sb-sidenav-menu-heading {
            padding: 1.75rem 1rem 0.75rem;
            font-size: 0.75rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .sb-sidenav .sb-sidenav-menu .nav .nav-link {
            display: flex;
            align-items: center;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            position: relative;
        }

        .sb-sidenav .sb-sidenav-menu .nav .nav-link .sb-nav-link-icon {
            font-size: 0.9rem;
        }

        .sb-sidenav .sb-sidenav-menu .nav .nav-link .sb-sidenav-collapse-arrow {
            display: inline-block;
            margin-left: auto;
            transition: transform 0.15s ease;
        }

        .sb-sidenav .sb-sidenav-menu .nav .nav-link.collapsed .sb-sidenav-collapse-arrow {
            transform: rotate(-90deg);
        }

        .sb-sidenav .sb-sidenav-menu .nav .sb-sidenav-menu-nested {
            margin-left: 1.5rem;
            flex-direction: column;
        }

        .sb-sidenav .sb-sidenav-footer {
            padding: 0.75rem;
            flex-shrink: 0;
        }

        .sb-sidenav-dark {
            background-color: #212529;
            color: rgba(255, 255, 255, 0.5);
        }

        .sb-sidenav-dark .sb-sidenav-menu .sb-sidenav-menu-heading {
            color: rgba(255, 255, 255, 0.25);
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link {
            color: rgba(255, 255, 255, 0.5);
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link .sb-nav-link-icon {
            color: rgba(255, 255, 255, 0.25);
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link .sb-sidenav-collapse-arrow {
            color: rgba(255, 255, 255, 0.25);
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link:hover {
            color: #fff;
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link.active {
            color: #fff;
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link.active .sb-nav-link-icon {
            color: #fff;
        }

        .sb-sidenav-dark .sb-sidenav-footer {
            background-color: #343a40;
        }

        .sb-sidenav-light {
            background-color: #f8f9fa;
            color: #212529;
        }

        .sb-sidenav-light .sb-sidenav-menu .sb-sidenav-menu-heading {
            color: #adb5bd;
        }

        .sb-sidenav-light .sb-sidenav-menu .nav-link {
            color: #212529;
        }

        .sb-sidenav-light .sb-sidenav-menu .nav-link .sb-nav-link-icon {
            color: #adb5bd;
        }

        .sb-sidenav-light .sb-sidenav-menu .nav-link .sb-sidenav-collapse-arrow {
            color: #adb5bd;
        }

        .sb-sidenav-light .sb-sidenav-menu .nav-link:hover {
            color: #0d6efd;
        }

        .sb-sidenav-light .sb-sidenav-menu .nav-link.active {
            color: #0d6efd;
        }

        .sb-sidenav-light .sb-sidenav-menu .nav-link.active .sb-nav-link-icon {
            color: #0d6efd;
        }

        .sb-sidenav-light .sb-sidenav-footer {
            background-color: #e9ecef;
        }

        .datatable-wrapper .datatable-container {
            font-size: 0.875rem;
        }

        .datatable-wrapper.no-header .datatable-container {
            border-top: none;
        }

        .datatable-wrapper.no-footer .datatable-container {
            border-bottom: none;
        }

        .datatable-top {
            padding: 0 0 1rem;
        }

        .datatable-bottom {
            padding: 0;
        }

        .datatable-top>nav:first-child,
        .datatable-top>div:first-child,
        .datatable-bottom>nav:first-child,
        .datatable-bottom>div:first-child {
            float: left;
        }

        .datatable-top>nav:last-child,
        .datatable-top>div:last-child,
        .datatable-bottom>nav:last-child,
        .datatable-bottom>div:last-child {
            float: right;
        }

        .datatable-selector {
            width: auto;
            display: inline-block;
            padding-left: 1.125rem;
            padding-right: 2.125rem;
            margin-right: 0.25rem;
        }

        .datatable-info {
            margin: 7px 0;
        }

        /* PAGER */
        .datatable-pagination a:hover {
            background-color: #e9ecef;
        }

        .datatable-pagination .active a,
        .datatable-pagination .active a:focus,
        .datatable-pagination .active a:hover {
            background-color: #0d6efd;
        }

        .datatable-pagination .ellipsis a,
        .datatable-pagination .disabled a,
        .datatable-pagination .disabled a:focus,
        .datatable-pagination .disabled a:hover {
            cursor: not-allowed;
        }

        .datatable-pagination .disabled a,
        .datatable-pagination .disabled a:focus,
        .datatable-pagination .disabled a:hover {
            cursor: not-allowed;
            opacity: 0.4;
        }

        .datatable-pagination .pager a {
            font-weight: bold;
        }

        /* TABLE */
        .datatable-table {
            border-collapse: collapse;
        }

        .datatable-table>tbody>tr>td,
        .datatable-table>tbody>tr>th,
        .datatable-table>tfoot>tr>td,
        .datatable-table>tfoot>tr>th,
        .datatable-table>thead>tr>td,
        .datatable-table>thead>tr>th {
            vertical-align: top;
            padding: 0.5rem 0.5rem;
        }

        .datatable-table>thead>tr>th {
            vertical-align: bottom;
            text-align: left;
            border-bottom: none;
        }

        .datatable-table>tfoot>tr>th {
            vertical-align: bottom;
            text-align: left;
        }

        .datatable-table th {
            vertical-align: bottom;
            text-align: left;
        }

        .datatable-table th a {
            text-decoration: none;
            color: inherit;
        }

        .datatable-sorter {
            display: inline-block;
            height: 100%;
            position: relative;
            width: 100%;
            padding-right: 1rem;
        }

        .datatable-sorter::before,
        .datatable-sorter::after {
            content: "";
            height: 0;
            width: 0;
            position: absolute;
            right: 4px;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            opacity: 0.2;
        }

        .datatable-sorter::before {
            bottom: 4px;
        }

        .datatable-sorter::after {
            top: 0px;
        }

        .asc .datatable-sorter::after,
        .desc .datatable-sorter::before {
            opacity: 0.6;
        }

        .datatables-empty {
            text-align: center;
        }

        .datatable-top::after,
        .datatable-bottom::after {
            clear: both;
            content: " ";
            display: table;
        }

        .datatable-pagination li.datatable-hidden {
            visibility: visible;
        }

        .btn-datatable {
            height: 20px !important;
            width: 20px !important;
            font-size: 0.75rem;
            border-radius: 0.375rem !important;
        }
    </style>


    <!-- Custom styles for this template -->
    {{-- <link href="{{ asset('signin.css') }}" rel="stylesheet"> --}}
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <form action="{{ route('auth.register') }}" method="POST">
                                    @csrf
                                    <div class="card-header text-center"><img class="mb-4 my-4"
                                            src="{{ asset('img/hero-img.jpeg') }}" alt="" width="72"
                                            height="57">
                                        <h3 class="text-center font-weight-light">Sign in</h3>
                                    </div>
                                    <div class="card-body">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" id="email" name="email"
                                            placeholder="name@example.com">
                                        <label for="email">Email address</label>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" id="name" name="name"
                                            placeholder="your name">
                                        <label for="name">Your Name</label>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            id="password" placeholder="Password">
                                        <label for="password">Password</label>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password"
                                            class="form-control @error('confirm-password') is-invalid @enderror"
                                            name="confirm-password" id="confirm-password"
                                            placeholder="confirm-password">
                                        <label for="confirm-password">Confirm Password</label>
                                        @error('confirm-password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                            value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Remember
                                            Password</label>
                                    </div>
                                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                                </form>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{ route('login') }}"
                                            {{ request()->routeIs('login') ? 'active' : '' }}>
                                            {{ __('Have an account? Go to login') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            </main>
        </div>
</body>

</html>

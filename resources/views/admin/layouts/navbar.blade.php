<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description"
        content="Vali is a responsive and free admin theme built with Bootstrap 5, SASS and PUG.js. It's fully customizable and modular.">
    <meta property="og:description"
        content="Vali is a responsive and free admin theme built with Bootstrap 5, SASS and PUG.js. It's fully customizable and modular.">
    <title>DIS Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <x-head.tinymce-config />
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="{{url('/')}}">
            <img src="{{asset('web/images/mainlogo.svg')}}" style="
    width: 60%;
    margin-bottom: 9%;" /></a>
        <!-- Sidßebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">

        <ul class="app-menu">
            <li><a class="app-menu__item {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                    href="{{url('/admin/dashboard')}}"><i class="app-menu__icon bi bi-speedometer"></i><span
                        class="app-menu__label">Dashboard</span></a></li>

            <!-- <li class="treeview"><a class="app-menu__item {{ request()->is('admin/products') || request()->is('admin/products/create') ? 'active' : '' }}" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-laptop"></i><span class="app-menu__label">Products</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="/admin/products"><i class="icon bi bi-circle-fill"></i> List</a></li>
          <li><a class="treeview-item" href="/admin/products/create"><i class="icon bi bi-circle-fill"></i> Add</a></li>
        </ul>
      </li>  -->

            <!-- <li><a class="app-menu__item {{ request()->is('admin/dealership-submissions') ? 'active' : '' }}" href="/admin/dealership-submissions"><i class="bi bi-briefcase app-menu__icon"></i><span class="app-menu__label">Dealership Requests</span></a></li> -->
            <!-- <li><a class="app-menu__item {{ request()->is('admin/contact-submissions') ? 'active' : '' }}"
                    href="/admin/contact-submissions"><i class="bi bi-briefcase app-menu__icon"></i><span
                        class="app-menu__label">Contact Submissions</span></a></li> -->
            <!-- <li><a class="app-menu__item {{ request()->is('admin/message-submissions') ? 'active' : '' }}" href="/admin/message-submissions"><i class="bi bi-briefcase app-menu__icon"></i><span class="app-menu__label">Message Submissions</span></a></li> -->
            <!-- <li><a class="app-menu__item {{ request()->is('admin/job-positions') ? 'active' : '' }}"
                    href="/admin/job-positions"><i class="bi bi-briefcase app-menu__icon"></i><span
                        class="app-menu__label">Job Positions</span></a></li> -->
            <li><a class="app-menu__item " href="/admin/application/list"><i
                        class="bi bi-briefcase app-menu__icon"></i><span class="app-menu__label">Job
                        Applications</span></a></li>
            <li><a class="app-menu__item " href="/admin/job/list"><i class="bi bi-briefcase app-menu__icon"></i><span
                        class="app-menu__label">Jobs And Designation</span></a></li>
            <li><a class="app-menu__item " href="/admin/list/fact"><i class="bi bi-briefcase app-menu__icon"></i><span
                        class="app-menu__label">Facts</span></a></li>
            <li><a class="app-menu__item" href="/admin/service/list"><i class="bi bi-briefcase app-menu__icon"></i><span
                        class="app-menu__label">Services</span></a></li>
            <li><a class="app-menu__item" href="/admin/insight/list"><i class="bi bi-briefcase app-menu__icon"></i><span
                        class="app-menu__label">Insights</span></a></li>
            <li><a class="app-menu__item " href="/admin/casestudy/list"><i
                        class="bi bi-briefcase app-menu__icon"></i><span class="app-menu__label">Case Studies</span></a>
            </li>
            <li><a class="app-menu__item {{ request()->is('admin/job-requests') ? 'active' : '' }}"
                    href="/admin/contact/list"><i class="bi bi-briefcase app-menu__icon"></i><span
                        class="app-menu__label">Contacts</span></a></li>



            <li>
                <a class="app-menu__item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="app-menu__icon bi bi-code-square"></i><span class="app-menu__label">Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </aside>
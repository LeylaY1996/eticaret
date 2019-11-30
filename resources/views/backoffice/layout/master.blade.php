<!--
 * CoreUI Pro - Bootstrap 4 Admin Template
 * @version v1.0.8
 * @link http://coreui.io/pro/
 * Copyright (c) 2018 creativeLabs Łukasz Holeczek
 * @license http://coreui.io/pro/license/
 -->
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Pro - Bootstrap 4 Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content=",">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>CoreUI Pro - Bootstrap 4 Admin Template</title>

  @include('backoffice.partial.head')


</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    @include('backoffice.partial.header')
  <div class="app-body">
    <div class="sidebar">
      @include('backoffice.partial.sidebar')
    </div>
    <!-- Main content -->
    <main class="main">
      @include('backoffice.partial.breadcrumb')
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
               @yield('content') 
            </div>
          </div>
        </div>
      </div>
    </main>

    <aside class="aside-menu">
        @include('backoffice.partial.aside')
    </aside>

  </div>
  @include('backoffice.partial.footer')

  @include('backoffice.partial.scripts')

</body>
</html>
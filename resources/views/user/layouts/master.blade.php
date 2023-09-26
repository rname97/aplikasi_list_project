<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML user Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-user-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('/user') }}/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    @include('user.partials.header')
  </head>

  <body style="background-color: #0F172A">


            @include('user.partials.navbar')



            @yield('content')

            <!-- / Content -->

            <!-- Footer -->
            @include('user.partials.footer')
            <!-- / Footer -->


    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    @include('user.partials.scripts')
  </body>
</html>

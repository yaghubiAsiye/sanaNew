<!DOCTYPE html>
<!--
Template Name: Rubick - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        @include('partials.head')
    </head>
    <!-- END: Head -->
    <body class="main">
        @include('partials.mobileMenu')
        
        @yield('content')

        {{-- @include('partials.darkMode', ['menu' => $menu]) --}}
      
        @include('partials.js')
    </body>
</html>
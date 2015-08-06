<?php
/**
 * Created by PhpStorm.
 * User: Hung
 * Date: 7/26/15
 * Time: 1:02 PM
 */
?>

<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.topnav')
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
@include('includes.js')
</body>
</html>

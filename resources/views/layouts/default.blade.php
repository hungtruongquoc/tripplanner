<?php
/**
 * Created by PhpStorm.
 * User: Hung
 * Date: 7/26/15
 * Time: 1:01 PM
 */
?>

<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.topnav')
    <main>
        <div class="container">
            <header class="row">
                @include('includes.header')
            </header>

            <div id="main" class="row">
                @yield('content')
            </div>
        </div>
    </main>
    <footer class="page-footer">
        @include('includes.footer')
    </footer>
    @include('includes.js')
</body>
</html>

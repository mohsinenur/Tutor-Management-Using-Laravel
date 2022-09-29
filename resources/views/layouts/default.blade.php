<!doctype html>

<html>

<head>

   @include('includes.head')

</head>

<body>

<div class="container">

   <header class="row">

       @include('includes.header')

   </header>

   <div id="main" class="row">

           @yield('content')

   </div>

   <footer class="row">

       @include('includes.footer')

   </footer>

</div>

<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.min.js') }}"></script>
<!-- Customizer scripts-->
<script src="{{ asset('assets/customizer/customizer.min.js') }}"></script>

</body>

</html>
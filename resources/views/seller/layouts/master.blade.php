<!DOCTYPE html>
<html>

@include('seller.layouts.header')
@yield('extra-css')

<body>
<!-- Sidebar Start -->
@include('seller.layouts.side-bar')

<!-- Sidebar End -->
@yield('content')

@include('seller.layouts.scripts')
@yield('extra-script')
</body>
</html>

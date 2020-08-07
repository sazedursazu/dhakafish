<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dhaka Fish Supply</title>

   @include('frontend.partials.styles')
</head>

<body>
   @include('frontend.partials.header')

   @yield('content')

    @include('frontend.partials.footer')
    <!-- Footer Section End -->

   @include('frontend.partials.scripts')


</body>

</html>
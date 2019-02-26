<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

    @include('inc.user.head')
</head>

<body>
<div class="header--sidebar"></div>
<header class="header">
    @include('inc.user.header')
</header>
    @yield('content')

    @include('inc.user.footer')
    @include('inc.user.foot')
</body>
</html>
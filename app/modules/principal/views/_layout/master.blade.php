<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    @include('principal::_partial.libreria')
</head>
<body class="metro">
    <header>
        @yield('header')
    </header>
    @yield('menu')

    @yield('contenido')



</body>
<div id="footer">
    @include('principal::_partial.jsFooter')
    @yield('script')
</div>
</html>
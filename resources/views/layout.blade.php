<!DOCTYPE html>
<html>
    <head>
        <title>@yield ('title')</title>
    </head>
    <body>
        @include ('navigation')
        @yield ('content')
        @include ('footer')
    </body>
</html>
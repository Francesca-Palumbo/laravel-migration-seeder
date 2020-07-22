{{-- scheletro di tutte le pagine --}}

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        {{-- nome che vogliamo dare al segnaposto --}}
        <title>@yield('titolo')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('partials.menu')
        @yield('content')
    </body>
</html>

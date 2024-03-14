<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ai Professionals</title>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    @include('layouts.frontend.header_files')
</head>

<body class="hidden-bar-wrapper">
{{--     @include('layouts.frontend.preloader')--}}



@include('layouts.frontend.header_menu')
@include('layouts.frontend.sidebar')

@yield('content')

@include('layouts.frontend.footer')

@include('layouts.frontend.footer_files')

</body>

</html>

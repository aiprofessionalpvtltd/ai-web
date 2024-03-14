<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Hiring Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @php
        $setting = Null;
            $setting = \App\Models\Setting::first() ?? null;
    @endphp
    @include('layouts.frontend.header_files')

</head>

<body>
@if(in_array(Route::currentRouteName(), ['home', 'about', 'contact', 'blog']))
    @include('layouts.frontend.preloader')
@endif


@include('layouts.frontend.header_menu')

@yield('content')

@include('layouts.frontend.footer')

@include('layouts.frontend.footer_files')

</body>

</html>

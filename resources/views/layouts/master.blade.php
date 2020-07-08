<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ArchitectUI HTML Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    
    <link rel="stylesheet" href="{{ asset('/architectui-html-pro/assets/css/base.min.css') }}">

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <!--Header START-->
        @include('layouts.header')
        <!--Header END-->

        <!--THEME OPTIONS START-->
         @include('layouts.theme')
        <!--THEME OPTIONS END-->

        <div class="app-main">
            <!--SIDEBAR OPTIONS START-->
            @include('layouts.sidebar')
            <!--SIDEBAR OPTIONS END-->
            
            <div class="app-main__outer">
                @yield('content')
                
                <!--FOOTER OPTIONS START-->
                @include('layouts.footer')
                <!--FOOTER OPTIONS END-->
            </div>
            
        </div>
    </div>
    <!--DRAWER START-->
    @include('layouts.drawer')
    <!--DRAWER END-->

    <!--SCRIPTS INCLUDES-->
    @include('layouts.script')

</body>

</html>
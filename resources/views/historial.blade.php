<x-app-layout>
    <div>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Home Secure</title>
            <!-- Favicon -->
            <link rel="shortcut icon" href="{{asset('/images/favicon.ico')}}" />
            <!-- Library / Plugin Css Build -->
            <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}" />
            <!-- Aos Animation Css -->
            <link rel="stylesheet" href="{{asset('assets/vendor/aos/dist/aos.css')}}" />
            <!-- Hope Ui Design System Css -->
            <link rel="stylesheet" href="{{asset('assets/css/hope-ui.min.css?v=2.0.0')}}" />
            <!-- Custom Css -->
            <link rel="stylesheet" href="{{asset('assets/css/custom.min.css?v=2.0.0')}}" />
            <!-- Dark Css -->
            <link rel="stylesheet" href="{{asset('assets/css/dark.min.css')}}" />
            <!-- Customizer Css -->
            <link rel="stylesheet" href="{{asset('assets/css/customizer.min.css')}}" />
            <!-- RTL Css -->
            <link rel="stylesheet" href="{{asset('assets/css/rtl.min.css')}}" />
        </head>
       @livewire('historial')
    </div>
</x-app-layout>


<!DOCTYPE html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="RuTo.kz">

        <title>Перевод на казахский</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="{{ asset('css/default.min.css') }}" rel="stylesheet"> {{-- стиль темы --}}
        <link href="{{ asset('css/template.css') }}" rel="stylesheet"> {{-- добавленный стиль --}}

        <!-- Custom Fonts -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    </head>

    <body id="page-top" class="index">
        <div id="skipnav">
            <a href="#maincontent">Skip to main content</a>
        </div>
        
        <!-- Navigation -->
        @include('navigation')

       <!-- Section RUS -->
		@include('rus')
        
        <!-- Section ButtonTranslate -->
        @include('button_translate')
                
		<!-- Section KAZ -->
        @include('kaz')
        
         <!-- Section ButtonOrder -->
        @include('button_order')

        <!-- Footer -->
        @include('footer')

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
            <a class="btn btn-primary" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>

 
        <!-- jQuery -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        {{-- javascript для форм
        <!-- Contact Form JavaScript -->
        <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('js/contact_me.js') }}"></script> 
        --}}

        <!-- Theme JavaScript -->
        <script src="{{ asset('js/default.js') }}"></script>
        
        <!-- Stack JavaScript -->
        @stack('scripts')

    </body>

</html>

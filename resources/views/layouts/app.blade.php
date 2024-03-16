<!DOCTYPE html>
<html >

<?php  $lang = App()->getLocale() == 'ar' ? '' : '-ltr'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <?php
    if(App()->getLocale() == 'en'){
    ?>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      
    <?php
    }else{

    ?>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style-rtl.css') }}">

    <?php

        }
    ?>
     <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">

 
   
    <title> @yield('title') </title>

</head>
<body>
    

    <div class="load">

        <div class="h-100 w-100 d-flex justify-content-center align-items-center">
            {{-- <img src="{{asset('assets/images/spinner.svg')}}" > --}}
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200' >
                <rect fill='#ffffff' stroke='#ffffff' stroke-width='15' width='30' height='30' x='25' y='85'>
                    <animate attributeName='opacity' calcMode='spline' dur='2' values='1;0;1;' keySplines='.5 0 .5 1;.5 0 .5 1' repeatCount='indefinite' begin='-.4'>
                    </animate>
                </rect>
                <rect fill='#ffffff' stroke='#ffffff' stroke-width='15' width='30' height='30' x='85' y='85'>
                    <animate attributeName='opacity' calcMode='spline' dur='2' values='1;0;1;' keySplines='.5 0 .5 1;.5 0 .5 1' repeatCount='indefinite' begin='-.2'>
                    </animate>
                </rect>
                <rect fill='#ffffff' stroke='#ffffff' stroke-width='15' width='30' height='30' x='145' y='85'>
                    <animate attributeName='opacity' calcMode='spline' dur='2' values='1;0;1;' keySplines='.5 0 .5 1;.5 0 .5 1' repeatCount='indefinite' begin='0'>
                    </animate>
                 </rect>
            </svg>
        </div>
       
    </div>

    <div class="website">

    @yield('content')

        <button id="toTopBtn" class="shadow d-flex justify-content-center align-items-center" >
            {{-- <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M18,20c-.384,0-.768-.146-1.061-.439l-4.938-4.939-4.94,4.939c-.586,.586-1.535,.586-2.121,0s-.586-1.536,0-2.121l6.001-6c.281-.281,.663-.439,1.061-.439h0c.397,0,.779,.158,1.061,.439l5.999,6c.586,.586,.586,1.536,0,2.121-.293,.293-.677,.439-1.061,.439Zm1.067-7.708c.582-.589,.576-1.539-.014-2.121l-3.922-3.873c-.837-.837-1.948-1.298-3.132-1.298s-2.295,.461-3.124,1.291l-3.93,3.88c-.59,.582-.596,1.532-.014,2.121,.581,.59,1.533,.595,2.121,.014l3.938-3.887c.537-.539,1.473-.546,2.025,.007l3.93,3.88c.292,.289,.673,.433,1.054,.433,.387,0,.774-.149,1.067-.446Z"/></svg> --}}
            <?xml version="1.0" encoding="UTF-8"?>
            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" id="Bold" viewBox="0 0 24 24" width="512" height="512">
                <path d="M22.5,18a1.5,1.5,0,0,1-1.061-.44L13.768,9.889a2.5,2.5,0,0,0-3.536,0L2.57,17.551A1.5,1.5,0,0,1,.449,15.43L8.111,7.768a5.505,5.505,0,0,1,7.778,0l7.672,7.672A1.5,1.5,0,0,1,22.5,18Z"/>
            </svg>

        </button>

        <a href="">
            <img class="whatsapp" src="{{asset('assets/images/whatsapp.png')}}" >
        </a>

        <button id="dark" onclick="darkMode()" class="shadow d-flex justify-content-center align-items-center" >
            <i class="fa-solid fa-circle-half-stroke"></i>
        </button>
        
       

    </div>

    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
</body>
</html>
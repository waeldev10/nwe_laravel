@extends('layouts.app')

@section('title')
{{ __("messege.title.0") }}
@endsection

@section('content')

  <header class="header">

        {{-- <nav class="navbar navbar-expand-lg">

            <div class="container">

                <a class="navbar-brand" href="#">
                    <img class="" src="{{ asset('assets/images/logo.png') }}" width="80px" height="80px" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-white" id="nav">

                    <ul class="navbar-nav m-auto">

                        <li>
                            <a href="#"> {{ __("words.home") }} </a>
                        </li>
                        <li>
                            <a href="#"> {{ __("words.we") }} </a>
                        </li>
            
                        <li>
                            <a href=""> {{ __("words.servce") }} </a>
                        </li>
                        <li>
                            <a href=""> {{ __("words.location") }} </a>
                        </li>
                        <li>
                            <a  href=""> {{ __("words.call") }} </a>
                        </li>
                        <li >
                            <a href=""> {{ __("words.lang") }} </a>
                        </li>

                    </ul>
                  
                </div>

            <a class="call " href=""> {{ __('words.callUs') }} </a>

            </div>

        </nav> --}}
        @include('layouts.nav')

    <div class="container containe" id="home">

        <div class="content text-center">

                <h1 class="md:text-4xl my-5 ms:text-2xl">
                    {{ __("messege.header") }}
                </h1>
    
                <h2 class="text-2xl my-1 text-white">
                    {{ __("messege.header1") }}
                </h2>
    
                <p class="text-white my-2 text-lg">
                    {{ __("messege.text") }}
                </p>
    
                <p class="text-white my-2 mb-5 text-lg">
                    {{ __("messege.text1") }}
                </p>
        
                <a class="more m-auto d-flex justify-content-center align-items-center" href="{{ route('more',app()->getlocale()) }}">
                   <span> {{ __("messege.more") }} </span> 
                </a>
    
            </div>

        </div>
        

  </header>

  <section class="we">
    
    <svg class="patern p1" width="288" height="262" viewBox="0 0 288 262" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g clip-path="url(#clip0_225_37)">
        <rect x="-17" y="-14" width="161" height="145" fill="url(#pattern0)" fill-opacity="0.2"/>
        <rect x="144" y="-14" width="161" height="145" fill="url(#pattern1)" fill-opacity="0.2"/>
        <rect x="-17" y="131" width="161" height="145" fill="url(#pattern2)" fill-opacity="0.2"/>
        <rect x="144" y="131" width="161" height="145" fill="url(#pattern3)" fill-opacity="0.2"/>
        </g>
        <defs>
        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <clipPath id="clip0_225_37">
        <rect width="288" height="262" fill="white"/>
        </clipPath>
        <image id="image0_225_37" width="161" height="145" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKEAAACRCAYAAACrK9gbAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHpSURBVHgB7do/bhNBFAfgt0tjubJ9AucEpEyHb0BaOrgFHcoJCCcgR4AOOrhB6OhwLmC7szvzZmWFPwKZWa+EBN8nrcb2erufZmfmvSZ+YZJyeNo0zaMcz/OaH27d5rXc7/dvN5vNTcAAmp9/yPxdZvhel49Hni1hvBJGTvXg+y+z2exlDtd5jf7g2UmG9XI8Hsd2u/0Y0NN9CHMGfJHD86i3yCBOMojvA3roQpgBLOu/6+jvYjQafdrtdp8DKnVrwul0+iW+bT762uQa8SzXiJuACm2ZBeP0ABbdjjqgUpuv4ccxnEVApTaGmQU7GeiHAZVKCM9jOPOASm3AX1ZCuIzh3AZUKiEcLDh5RHMXUKnN4AxZcnsTUKkpHTO5qy2H1ccaFo5Zrtfrs4BKbalw5Gz4LE5UOmoCeuhqx6Xmm7Xfac6IF9FDPneVs+AptWf+Y/ddNBnEdxnEzFOziAr5/1er1apP9w10fugnzCB+yCDeZbDKAfaxNWJ5jT8xA3Kq5nc3Do0Npa48P4SyKN3U5Uin7KhvdMwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwT/gKCZ1w/w0jrhwAAAAASUVORK5CYII="/>
        </defs>
    </svg>
    <svg class="patern p2" width="288" height="262" viewBox="0 0 288 262" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g clip-path="url(#clip0_225_37)">
        <rect x="-17" y="-14" width="161" height="145" fill="url(#pattern0)" fill-opacity="0.2"/>
        <rect x="144" y="-14" width="161" height="145" fill="url(#pattern1)" fill-opacity="0.2"/>
        <rect x="-17" y="131" width="161" height="145" fill="url(#pattern2)" fill-opacity="0.2"/>
        <rect x="144" y="131" width="161" height="145" fill="url(#pattern3)" fill-opacity="0.2"/>
        </g>
        <defs>
        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <clipPath id="clip0_225_37">
        <rect width="288" height="262" fill="white"/>
        </clipPath>
        <image id="image0_225_37" width="161" height="145" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKEAAACRCAYAAACrK9gbAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHpSURBVHgB7do/bhNBFAfgt0tjubJ9AucEpEyHb0BaOrgFHcoJCCcgR4AOOrhB6OhwLmC7szvzZmWFPwKZWa+EBN8nrcb2erufZmfmvSZ+YZJyeNo0zaMcz/OaH27d5rXc7/dvN5vNTcAAmp9/yPxdZvhel49Hni1hvBJGTvXg+y+z2exlDtd5jf7g2UmG9XI8Hsd2u/0Y0NN9CHMGfJHD86i3yCBOMojvA3roQpgBLOu/6+jvYjQafdrtdp8DKnVrwul0+iW+bT762uQa8SzXiJuACm2ZBeP0ABbdjjqgUpuv4ccxnEVApTaGmQU7GeiHAZVKCM9jOPOASm3AX1ZCuIzh3AZUKiEcLDh5RHMXUKnN4AxZcnsTUKkpHTO5qy2H1ccaFo5Zrtfrs4BKbalw5Gz4LE5UOmoCeuhqx6Xmm7Xfac6IF9FDPneVs+AptWf+Y/ddNBnEdxnEzFOziAr5/1er1apP9w10fugnzCB+yCDeZbDKAfaxNWJ5jT8xA3Kq5nc3Do0Npa48P4SyKN3U5Uin7KhvdMwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwT/gKCZ1w/w0jrhwAAAAASUVORK5CYII="/>
        </defs>
    </svg>
    <svg class="patern p3" width="288" height="262" viewBox="0 0 288 262" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g clip-path="url(#clip0_225_37)">
        <rect x="-17" y="-14" width="161" height="145" fill="url(#pattern0)" fill-opacity="0.2"/>
        <rect x="144" y="-14" width="161" height="145" fill="url(#pattern1)" fill-opacity="0.2"/>
        <rect x="-17" y="131" width="161" height="145" fill="url(#pattern2)" fill-opacity="0.2"/>
        <rect x="144" y="131" width="161" height="145" fill="url(#pattern3)" fill-opacity="0.2"/>
        </g>
        <defs>
        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <clipPath id="clip0_225_37">
        <rect width="288" height="262" fill="white"/>
        </clipPath>
        <image id="image0_225_37" width="161" height="145" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKEAAACRCAYAAACrK9gbAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHpSURBVHgB7do/bhNBFAfgt0tjubJ9AucEpEyHb0BaOrgFHcoJCCcgR4AOOrhB6OhwLmC7szvzZmWFPwKZWa+EBN8nrcb2erufZmfmvSZ+YZJyeNo0zaMcz/OaH27d5rXc7/dvN5vNTcAAmp9/yPxdZvhel49Hni1hvBJGTvXg+y+z2exlDtd5jf7g2UmG9XI8Hsd2u/0Y0NN9CHMGfJHD86i3yCBOMojvA3roQpgBLOu/6+jvYjQafdrtdp8DKnVrwul0+iW+bT762uQa8SzXiJuACm2ZBeP0ABbdjjqgUpuv4ccxnEVApTaGmQU7GeiHAZVKCM9jOPOASm3AX1ZCuIzh3AZUKiEcLDh5RHMXUKnN4AxZcnsTUKkpHTO5qy2H1ccaFo5Zrtfrs4BKbalw5Gz4LE5UOmoCeuhqx6Xmm7Xfac6IF9FDPneVs+AptWf+Y/ddNBnEdxnEzFOziAr5/1er1apP9w10fugnzCB+yCDeZbDKAfaxNWJ5jT8xA3Kq5nc3Do0Npa48P4SyKN3U5Uin7KhvdMwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwT/gKCZ1w/w0jrhwAAAAASUVORK5CYII="/>
        </defs>
    </svg>



    <div class="container">

        <div class="head text-center m-auto">

            <span class=""> {{ __('words.head-title.0') }} </span>
            <h2 class=""> {{ __('words.head-title.0') }} </h2>
            <p>
            {{ __('messege.body-title.0') }}
            </p>
            <div class=""></div>

        </div>

        <div class="row" id="we">

            <article class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                
                <div class="w-100">

                    <div class="we-are my-3 p-3">

                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="">{{ __('words.we-are') }}</h2>

                            <a data-bs-toggle="collapse" href="#we2" role="button" aria-expanded="false" aria-controls="we2">
                                <i class="fa-solid fa-chevron-right"></i>

                            </a>
                       
                        </div>
                        
                        <p>      {{ __('messege.w1') }} </p> 

                        <div class="collapse" id="we2">
                            
                            <p>{{ __('messege.w2') }} </p>
                          
                          </div>
                    </div>
                    
                    <div class="we-are my-3 p-3">

                        <div class="d-flex justify-content-between align-items-center">

                            <h2 class="">{{ __('words.comp') }}</h2>

                            <a data-bs-toggle="collapse" href="#we1" role="button" aria-expanded="false" aria-controls="we1">
                                <i class="fa-solid fa-chevron-right"></i>

                            </a>

                        </div>
                        
                        <p> {{ __('messege.aboatCom-1') }} </p> 

                        <div class="collapse" id="we1">
                       
                            <p>{{ __('messege.aboatCom-2') }}</p>
                          
                          </div>
                    </div>
    
                  
                </div>
            

            </article>

            <article class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">

                <svg id="video-icon" aria-hidden="true" class="play" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="80" height="80" rx="40" fill="#C86D02"/>
                    <path d="M55.8114 33.2782L36.2824 21.6101C34.7571 20.7006 32.9523 20.1529 31.068 20.0276C29.1838 19.9024 27.2938 20.2045 25.6075 20.9006C23.9213 21.5966 22.5047 22.6593 21.5149 23.9708C20.5252 25.2824 20.0008 26.7915 20 28.3309V51.6671C20.0003 53.2072 20.5247 54.7171 21.515 56.0292C22.5052 57.3414 23.9226 58.4044 25.6098 59.1004C27.297 59.7964 29.1881 60.0981 31.0731 59.972C32.9581 59.846 34.7634 59.2971 36.2885 58.3863L55.8175 46.7182C57.1139 45.9441 58.1681 44.9322 58.8947 43.7646C59.6213 42.5969 60 41.3063 60 39.9973C60 38.6883 59.6213 37.3977 58.8947 36.2301C58.1681 35.0625 57.1139 34.0506 55.8175 33.2765L55.8114 33.2782ZM53.3877 44.0295L33.8586 55.6976C32.9436 56.2421 31.8615 56.5697 30.7319 56.6443C29.6023 56.719 28.4694 56.5376 27.4586 56.1204C26.4478 55.7031 25.5985 55.0663 25.0047 54.2803C24.4109 53.4943 24.0957 52.5899 24.0941 51.6671V28.3309C24.0828 27.4064 24.392 26.498 24.9862 25.7101C25.5804 24.9222 26.4356 24.2869 27.4534 23.877C28.3191 23.5184 29.2764 23.3311 30.2476 23.3303C31.5493 23.3343 32.8151 23.6785 33.8586 24.3121L53.3877 35.9802C54.1645 36.4447 54.7962 37.0516 55.2316 37.7518C55.6669 38.452 55.8938 39.2258 55.8938 40.0107C55.8938 40.7955 55.6669 41.5693 55.2316 42.2695C54.7962 42.9697 54.1645 43.5766 53.3877 44.0412V44.0295Z" fill="white"/>
                </svg>

                <img class="tv" src=" {{ asset('assets/images/tv.svg') }} " width="450px" height="450px" alt="show">
    
            </article>
    
            
        </div>
        
        <div class="video-popup">

            <div class="video-src">

              <div class="iframe-src">
                <iframe src="https://www.youtube.com/embed/Ku52zNnft8k?rel=0&amp;showinfo=0" allowfullscreen></iframe>
              </div>

            </div>

        </div>
        
        <style>
        .video-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 99999;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            filter: blur()
            align-content: center !important;
            -ms-flex-line-pack: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
        .video-popup .video-src {
            position: relative;
            width: 750px;
            max-width: 80%;
        }
        .video-popup .iframe-src {
            width: 100%;
            height: 0;
            padding-top: 50%;
            position: relative;
            display: none;
        }
        .video-popup .iframe-src iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        </style>

    </div>

  </section> 

    <svg class="line w-100" width="1265" height="5" viewBox="0 0 1265 5" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_84_789)">
        <rect width="135.222" height="10" transform="matrix(1 0 0 -1 0 7.5)" fill="url(#paint0_linear_84_789)"/>
        <rect width="135.222" height="10" transform="matrix(1 0 0 -1 141.222 7.5)" fill="url(#paint1_linear_84_789)"/>
        <rect width="135.222" height="10" transform="matrix(1 0 0 -1 282.444 7.5)" fill="url(#paint2_linear_84_789)"/>
        <rect width="135.222" height="10" transform="matrix(1 0 0 -1 423.667 7.5)" fill="url(#paint3_linear_84_789)"/>
        <rect width="135.222" height="10" transform="matrix(1 0 0 -1 564.889 7.5)" fill="url(#paint4_linear_84_789)"/>
        <rect width="135.222" height="10" transform="matrix(1 0 0 -1 706.111 7.5)" fill="url(#paint5_linear_84_789)"/>
        <rect width="135.222" height="10" transform="matrix(1 0 0 -1 847.333 7.5)" fill="url(#paint6_linear_84_789)"/>
        <rect width="135.222" height="10" transform="matrix(1 0 0 -1 988.556 7.5)" fill="url(#paint7_linear_84_789)"/>
        <rect width="135.222" height="10" transform="matrix(1 0 0 -1 1129.78 7.5)" fill="url(#paint8_linear_84_789)"/>
        </g>
        <defs>
        <linearGradient id="paint0_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
        <stop stop-color="white" stop-opacity="0.15"/>
        <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
        </linearGradient>
        <linearGradient id="paint1_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
        <stop stop-color="white" stop-opacity="0.15"/>
        <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
        </linearGradient>
        <linearGradient id="paint2_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
        <stop stop-color="white" stop-opacity="0.15"/>
        <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
        </linearGradient>
        <linearGradient id="paint3_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
        <stop stop-color="white" stop-opacity="0.15"/>
        <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
        </linearGradient>
        <linearGradient id="paint4_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
        <stop stop-color="white" stop-opacity="0.15"/>
        <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
        </linearGradient>
        <linearGradient id="paint5_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
        <stop stop-color="white" stop-opacity="0.15"/>
        <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
        </linearGradient>
        <linearGradient id="paint6_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
        <stop stop-color="white" stop-opacity="0.15"/>
        <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
        </linearGradient>
        <linearGradient id="paint7_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
        <stop stop-color="white" stop-opacity="0.15"/>
        <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
        </linearGradient>
        <linearGradient id="paint8_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
        <stop stop-color="white" stop-opacity="0.15"/>
        <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
        </linearGradient>
        <clipPath id="clip0_84_789">
        <rect width="1265" height="5" fill="white" transform="matrix(1 0 0 -1 0 5)"/>
        </clipPath>
        </defs>
    </svg>

  <section class="location">

    <svg class="patern p1" width="288" height="262" viewBox="0 0 288 262" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g clip-path="url(#clip0_225_37)">
        <rect x="-17" y="-14" width="161" height="145" fill="url(#pattern0)" fill-opacity="0.2"/>
        <rect x="144" y="-14" width="161" height="145" fill="url(#pattern1)" fill-opacity="0.2"/>
        <rect x="-17" y="131" width="161" height="145" fill="url(#pattern2)" fill-opacity="0.2"/>
        <rect x="144" y="131" width="161" height="145" fill="url(#pattern3)" fill-opacity="0.2"/>
        </g>
        <defs>
        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <clipPath id="clip0_225_37">
        <rect width="288" height="262" fill="white"/>
        </clipPath>
        <image id="image0_225_37" width="161" height="145" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKEAAACRCAYAAACrK9gbAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHpSURBVHgB7do/bhNBFAfgt0tjubJ9AucEpEyHb0BaOrgFHcoJCCcgR4AOOrhB6OhwLmC7szvzZmWFPwKZWa+EBN8nrcb2erufZmfmvSZ+YZJyeNo0zaMcz/OaH27d5rXc7/dvN5vNTcAAmp9/yPxdZvhel49Hni1hvBJGTvXg+y+z2exlDtd5jf7g2UmG9XI8Hsd2u/0Y0NN9CHMGfJHD86i3yCBOMojvA3roQpgBLOu/6+jvYjQafdrtdp8DKnVrwul0+iW+bT762uQa8SzXiJuACm2ZBeP0ABbdjjqgUpuv4ccxnEVApTaGmQU7GeiHAZVKCM9jOPOASm3AX1ZCuIzh3AZUKiEcLDh5RHMXUKnN4AxZcnsTUKkpHTO5qy2H1ccaFo5Zrtfrs4BKbalw5Gz4LE5UOmoCeuhqx6Xmm7Xfac6IF9FDPneVs+AptWf+Y/ddNBnEdxnEzFOziAr5/1er1apP9w10fugnzCB+yCDeZbDKAfaxNWJ5jT8xA3Kq5nc3Do0Npa48P4SyKN3U5Uin7KhvdMwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwT/gKCZ1w/w0jrhwAAAAASUVORK5CYII="/>
        </defs>
    </svg>
    <svg class="patern p2" width="288" height="262" viewBox="0 0 288 262" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g clip-path="url(#clip0_225_37)">
        <rect x="-17" y="-14" width="161" height="145" fill="url(#pattern0)" fill-opacity="0.2"/>
        <rect x="144" y="-14" width="161" height="145" fill="url(#pattern1)" fill-opacity="0.2"/>
        <rect x="-17" y="131" width="161" height="145" fill="url(#pattern2)" fill-opacity="0.2"/>
        <rect x="144" y="131" width="161" height="145" fill="url(#pattern3)" fill-opacity="0.2"/>
        </g>
        <defs>
        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="0.1" height="0.1">
        <use xlink:href="#image0_225_37" transform="scale(0.000621118 0.000689655)"/>
        </pattern>
        <clipPath id="clip0_225_37">
        <rect width="288" height="262" fill="white"/>
        </clipPath>
        <image id="image0_225_37" width="161" height="145" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKEAAACRCAYAAACrK9gbAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHpSURBVHgB7do/bhNBFAfgt0tjubJ9AucEpEyHb0BaOrgFHcoJCCcgR4AOOrhB6OhwLmC7szvzZmWFPwKZWa+EBN8nrcb2erufZmfmvSZ+YZJyeNo0zaMcz/OaH27d5rXc7/dvN5vNTcAAmp9/yPxdZvhel49Hni1hvBJGTvXg+y+z2exlDtd5jf7g2UmG9XI8Hsd2u/0Y0NN9CHMGfJHD86i3yCBOMojvA3roQpgBLOu/6+jvYjQafdrtdp8DKnVrwul0+iW+bT762uQa8SzXiJuACm2ZBeP0ABbdjjqgUpuv4ccxnEVApTaGmQU7GeiHAZVKCM9jOPOASm3AX1ZCuIzh3AZUKiEcLDh5RHMXUKnN4AxZcnsTUKkpHTO5qy2H1ccaFo5Zrtfrs4BKbalw5Gz4LE5UOmoCeuhqx6Xmm7Xfac6IF9FDPneVs+AptWf+Y/ddNBnEdxnEzFOziAr5/1er1apP9w10fugnzCB+yCDeZbDKAfaxNWJ5jT8xA3Kq5nc3Do0Npa48P4SyKN3U5Uin7KhvdMwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwT/gKCZ1w/w0jrhwAAAAASUVORK5CYII="/>
        </defs>
    </svg>


        <div class="container" id="location">

            <div class="head text-center m-auto">

                <span class=""> {{ __('words.head-title.1') }} </span>
                <h2 class=""> {{ __('words.head-title.1') }} </h2>
                <p>
                {{ __('messege.body-title.1') }}
                </p>
                <div class=""></div>
    
            </div>

            <div class="map">
                 <iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.0382255936893!2d44.201283725169404!3d15.320157659055914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1603db4eacbe44a3%3A0xa0eef8f69a3cec37!2z2LTYp9ix2Lkg2K3Yr9mH2Iwg2LXZhti52KfYoeKAjtiMINin2YTZitmO2YXZjtmG!5e0!3m2!1sar!2sde!4v1710268874926!5m2!1sar!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
        
  </section>

<svg class="line w-100" width="1265" height="5" viewBox="0 0 1265 5" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_84_789)">
    <rect width="135.222" height="10" transform="matrix(1 0 0 -1 0 7.5)" fill="url(#paint0_linear_84_789)"/>
    <rect width="135.222" height="10" transform="matrix(1 0 0 -1 141.222 7.5)" fill="url(#paint1_linear_84_789)"/>
    <rect width="135.222" height="10" transform="matrix(1 0 0 -1 282.444 7.5)" fill="url(#paint2_linear_84_789)"/>
    <rect width="135.222" height="10" transform="matrix(1 0 0 -1 423.667 7.5)" fill="url(#paint3_linear_84_789)"/>
    <rect width="135.222" height="10" transform="matrix(1 0 0 -1 564.889 7.5)" fill="url(#paint4_linear_84_789)"/>
    <rect width="135.222" height="10" transform="matrix(1 0 0 -1 706.111 7.5)" fill="url(#paint5_linear_84_789)"/>
    <rect width="135.222" height="10" transform="matrix(1 0 0 -1 847.333 7.5)" fill="url(#paint6_linear_84_789)"/>
    <rect width="135.222" height="10" transform="matrix(1 0 0 -1 988.556 7.5)" fill="url(#paint7_linear_84_789)"/>
    <rect width="135.222" height="10" transform="matrix(1 0 0 -1 1129.78 7.5)" fill="url(#paint8_linear_84_789)"/>
    </g>
    <defs>
    <linearGradient id="paint0_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
    <stop stop-color="white" stop-opacity="0.15"/>
    <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
    </linearGradient>
    <linearGradient id="paint1_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
    <stop stop-color="white" stop-opacity="0.15"/>
    <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
    </linearGradient>
    <linearGradient id="paint2_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
    <stop stop-color="white" stop-opacity="0.15"/>
    <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
    </linearGradient>
    <linearGradient id="paint3_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
    <stop stop-color="white" stop-opacity="0.15"/>
    <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
    </linearGradient>
    <linearGradient id="paint4_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
    <stop stop-color="white" stop-opacity="0.15"/>
    <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
    </linearGradient>
    <linearGradient id="paint5_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
    <stop stop-color="white" stop-opacity="0.15"/>
    <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
    </linearGradient>
    <linearGradient id="paint6_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
    <stop stop-color="white" stop-opacity="0.15"/>
    <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
    </linearGradient>
    <linearGradient id="paint7_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
    <stop stop-color="white" stop-opacity="0.15"/>
    <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
    </linearGradient>
    <linearGradient id="paint8_linear_84_789" x1="0" y1="5" x2="135.222" y2="5" gradientUnits="userSpaceOnUse">
    <stop stop-color="white" stop-opacity="0.15"/>
    <stop offset="1" stop-color="#C86D02" stop-opacity="0.2"/>
    </linearGradient>
    <clipPath id="clip0_84_789">
    <rect width="1265" height="5" fill="white" transform="matrix(1 0 0 -1 0 5)"/>
    </clipPath>
    </defs>
</svg>

  @include('layouts.footer')
 
@endsection
@extends('layouts.app')

@section('title')
{{ __("messege.title.1") }}
@endsection

@section('content')

    <header class="header-more">

        @include('layouts.nav')

        <div class="slider" style="margin-top: 150px">

            <div class="container">

                <div id="my-slide" class="carousel slide">

                    <div class="carousel-inner"  data-bs-interval="10000">
                        <div class="carousel-item active">
                            <img src=" {{ asset('assets/images/slide1.png') }} " class="d-block w-100" alt="...">

                            <article>
                                <div class="container">
                                    <h2> {{ __('messege.Invest') }} </h2>
                                    <p>
                                        {{ __('messege.Invest-p') }}
                                    </p>
                                    <p>
                                        {{ __('messege.Invest-p1') }}
                                    </p>
                                    <div class="spans">
                                        <span> {{ __('words.investment') }} </span>
                                        <span> {{ __('words.industry') }} </span>
                                    </div>
                                </div>
                            
                            </article>
                        </div>

                        <div class="carousel-item">
                            <img src=" {{ asset('assets/images/4.jpg') }} " class="d-block w-100" alt="...">

                            <article>
                                <div class="container">
                                    <h2> {{ __('words.comp') }} </h2>
                                    <p>
                                        {{ __('messege.aboatCom-1') }}
                                    </p>
                                    <p>{{ __('messege.aboatCom-2') }}</p>

                                    <div class="spans">
                                        <span> {{ __('words.investment') }} </span>
                                        <span> {{ __('words.industry') }} </span>
                                    </div>
                                 
                                </div>
                            
                            </article>
                        </div>
                    
                    </div>


                    <button class="carousel-control-prev" data-bs-target="#my-slide" data-bs-slide="prev">
                        <img src="{{ asset('assets/images/arrow-small-left.svg') }}" alt="">
                    </button>
                    <button class="carousel-control-next" data-bs-target="#my-slide" data-bs-slide="next">
                        <img src="{{ asset('assets/images/arrow-small-right.svg') }}" alt="">
                    </button>
            

                    
        
                </div>

            </div>

        </div>
        
    </header>

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

    <section class="from-serve">

        <div class="container">

            <div class="head text-center m-auto">

                <span class=""> {{ __('words.head-title.3') }} </span>
                <h2 class=""> {{ __('words.head-title.3') }} </h2>
                <p>
                {{ __('messege.body-title.3') }}
                </p>
                <div class=""></div>
    
            </div>

            <div class="cont-serve">

                <article dir="ltr" class="d-flex">
                    <div></div>
                    <a href="" class="moor">
                        <span> {{ __('words.moor') }} </span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </article>

                <div class="row">

                    <div class="col-lg-4 text-center">

                        <div class="iconh">
                            <?xml version="1.0" encoding="UTF-8"?>
                            <svg fill="#C86D02" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                            <path d="m21,6c-.553,0-1-.447-1-1s.447-1,1-1,1-.448,1-1-.448-1-1-1c-.612,0-1.324.291-1.547.403-.343.173-.753.136-1.057-.095-.187-.141-.493-.309-.896-.309-.827,0-1.5.673-1.5,1.5v.5c0,.553-.447,1-1,1s-1-.447-1-1v-.5c0-1.93,1.57-3.5,3.5-3.5.556,0,1.095.133,1.585.387.467-.177,1.176-.387,1.915-.387,1.654,0,3,1.346,3,3s-1.346,3-3,3Zm-14-2v-.5c0-.827.673-1.5,1.5-1.5.404,0,.71.168.896.309.305.23.717.268,1.057.095.223-.112.936-.403,1.547-.403.552,0,1-.447,1-1s-.448-1-1-1c-.739,0-1.448.21-1.915.387-.491-.254-1.029-.387-1.585-.387-1.93,0-3.5,1.57-3.5,3.5v.5c0,.553.448,1,1,1s1-.447,1-1Zm7.151,9c-.071-.59-.109-1.183-.109-1.777v-2.223c0-1.103-.897-2-2-2h-7.021c-1.103,0-2,.897-2,2v2.223c0,.594-.038,1.187-.109,1.777h11.24Zm2.637,7.255l-1.162-2.324c-.467-.933-.819-1.92-1.082-2.931H2.519c-.263,1.01-.615,1.998-1.082,2.931l-1.162,2.324c-.404.808-.361,1.749.113,2.518.475.769,1.298,1.228,2.202,1.228h11.882c.903,0,1.727-.459,2.201-1.228.476-.768.518-1.709.114-2.518Zm-.746-11.255v2.223c0,.499.032,1.017.095,1.537l.029.24h4.922c-.071-.59-.109-1.183-.109-1.777v-2.223c0-1.103-.897-2-2-2h-3.493c.344.591.556,1.268.556,2Zm7.683,11.255l-1.162-2.324c-.467-.933-.819-1.92-1.082-2.931h-4.844c.218.728.47,1.42.778,2.035l1.164,2.327c.715,1.435.639,3.103-.204,4.464-.038.061-.083.115-.123.174h3.159c.903,0,1.727-.459,2.201-1.228.476-.768.518-1.709.114-2.518Z"/>
                            </svg>
                        </div>
                     

                        <h3> {{ __('words.serve-words.6') }} </h3>
                        <p>
                           {{ substr(__('messege.serve-desc.6'),60)  }}
                        
                        </p>
                        <a href="">
                            <?xml version="1.0" encoding="UTF-8"?>
                            <svg class="svg" fill="#C86D02" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M23.12,9.91,19.25,6a1,1,0,0,0-1.42,0h0a1,1,0,0,0,0,1.41L21.39,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.45l-3.62,3.61a1,1,0,0,0,0,1.42h0a1,1,0,0,0,1.42,0l3.87-3.88A3,3,0,0,0,23.12,9.91Z"/></svg>
                        </a>
                        
                        
                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="iconh w">
                            <?xml version="1.0" encoding="UTF-8"?>
                            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M23.318,7.12c-.42-.2-.907-.146-1.313,.181l-3.005,3.699v-2.797c.001-.466-.259-.882-.68-1.084-.42-.2-.907-.146-1.313,.181l-3.006,3.701v-2.797c.001-.466-.259-.882-.68-1.084-.42-.2-.907-.146-1.313,.181l-3.723,3.711L6.336,1.577c-.197-.914-1.02-1.577-1.954-1.577H2C.895,0,0,.895,0,2V19c0,2.761,2.239,5,5,5h14c2.761,0,5-2.239,5-5V8.204c0-.466-.261-.882-.682-1.084Zm-13.318,10.88c0,.552-.448,1-1,1h-1c-.552,0-1-.448-1-1v-1c0-.552,.448-1,1-1h1c.552,0,1,.448,1,1v1Zm5,0c0,.552-.448,1-1,1h-1c-.552,0-1-.448-1-1v-1c0-.552,.448-1,1-1h1c.552,0,1,.448,1,1v1Zm5,0c0,.552-.448,1-1,1h-1c-.552,0-1-.448-1-1v-1c0-.552,.448-1,1-1h1c.552,0,1,.448,1,1v1Z"/></svg>
                        </div>
                        <h3> {{ __('words.serve-words.7') }} </h3>
                        <p>
                            {{ substr(__('messege.serve-desc.7'),150)  }}
                        
                        </p>
                        <a href="">
                            <?xml version="1.0" encoding="UTF-8"?>
                            <svg class="svg" fill="#ffffff" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M23.12,9.91,19.25,6a1,1,0,0,0-1.42,0h0a1,1,0,0,0,0,1.41L21.39,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.45l-3.62,3.61a1,1,0,0,0,0,1.42h0a1,1,0,0,0,1.42,0l3.87-3.88A3,3,0,0,0,23.12,9.91Z"/></svg>
                        </a>
                        

                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="iconh ">
                            <?xml version="1.0" encoding="UTF-8"?>
                            <svg fill="#C86D02" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                            <path d="m23,15.092v-2.143c0-4.735-3.18-8.912-7.771-10.292-.728-.999-1.899-1.657-3.229-1.657s-2.501.658-3.229,1.656C4.18,4.037,1,8.214,1,12.949v2.143c-.581.207-1,.756-1,1.408,0,.828.671,1.5,1.5,1.5h.27l.392.5c2.355,3.028,5.573,4.5,9.837,4.5s7.482-1.472,9.833-4.495l.396-.505h.271c.828,0,1.5-.672,1.5-1.5,0-.652-.419-1.201-1-1.408Zm-3-2.143v2.051h-4V6.245c2.418,1.367,4,3.892,4,6.705ZM12,4c.551,0,1,.445,1,.992v10.008h-2V4.992c0-.547.449-.992,1-.992Zm-4,2.245v8.755h-4v-2.051c0-2.813,1.582-5.338,4-6.704Zm-2.177,11.755h12.355c-1.599,1.352-3.6,2-6.178,2s-4.577-.648-6.177-2Z"/>
                            </svg>
                        </div>
                        <h3> {{ __('words.serve-words.8') }} </h3>
                        <p>
                            {{ substr(__('messege.serve-desc.8'),190)  }}
                        
                        </p>
                        <a href="">
                            <?xml version="1.0" encoding="UTF-8"?>
                            <svg class="svg" fill="#C86D02" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M23.12,9.91,19.25,6a1,1,0,0,0-1.42,0h0a1,1,0,0,0,0,1.41L21.39,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.45l-3.62,3.61a1,1,0,0,0,0,1.42h0a1,1,0,0,0,1.42,0l3.87-3.88A3,3,0,0,0,23.12,9.91Z"/></svg>
                        </a>
                        

                    </div>

                </div>

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

    <section class="my-sewper">

        <div class="container">

            <div class="head text-center m-auto">

                <span class=""> {{ __('words.head-title.4') }} </span>
                <h2 class=""> {{ __('words.head-title.4') }} </h2>
                <p>
                {{ __('messege.body-title.4') }}
                </p>
                <div class=""></div>
    
            </div>

            <div class="row">

                <article class="col-lg-6  s">

                    <img class="icon"  src=" {{ asset('assets/images/icon-.svg') }} " width="50px" height="50px" alt="...">

                    <div class="swiper mySwipers">

                        <div class="swiper-wrapper">

                          <div class="swiper-slide">

                            <div class="cont">
                                <h2> {{ __('words.products-list.0') }} </h2>
                                <p> {{ __('messege.products-desc.0') }} </p>
                                <span> {{ __('words.industry-') }} </span>
                                <span> {{ __('words.commerce') }}  </span>
                            </div>
                
                          </div>

                          <div class="swiper-slide">
                            
                            <div class="cont">
                                <h2> {{ __('words.products-list.1') }} </h2>
                                <p> {{ __('messege.products-desc.1') }} </p>
                                <span> {{ __('words.industry-') }} </span>
                                <span> {{ __('words.commerce') }}  </span>
                            </div>
                
                          </div>

                          <div class="swiper-slide">
                            
                            <div class="cont">
                                <h2> {{ __('words.products-list.3') }} </h2>
                                <p> {{ __('messege.products-desc.3') }} </p>
                                <span> {{ __('words.industry-') }} </span>
                                <span> {{ __('words.commerce') }}  </span>
                            </div>
                
                          </div>

                          <div class="swiper-slide">
                            
                            <div class="cont">
                                <h2> {{ __('words.products-list.4') }} </h2>
                                <p> {{ __('messege.products-desc.4') }} </p>
                                <span> {{ __('words.industry-') }} </span>
                                <span> {{ __('words.commerce') }}  </span>
                            </div>
                
                          </div>

                          <div class="swiper-slide">
                            
                            <div class="cont">
                                <h2> {{ __('words.products-list.5') }} </h2>
                                <p> {{ __('messege.products-desc.5') }} </p>
                                <span> {{ __('words.industry-') }} </span>
                                <span> {{ __('words.commerce') }}  </span>
                            </div>
                
                          </div>

                          <div class="swiper-slide">
                            
                            <div class="cont">
                                <h2> {{ __('words.products-list.6') }} </h2>
                                <p> {{ __('messege.products-desc.6') }} </p>
                                <span> {{ __('words.industry-') }} </span>
                                <span> {{ __('words.commerce') }}  </span>
                            </div>
                
                          </div>

                          <div class="swiper-slide">
                            
                            <div class="cont">
                                <h2> {{ __('words.products-list.7') }} </h2>
                                <p> {{ __('messege.products-desc.7') }} </p>
                                <span> {{ __('words.industry-') }} </span>
                                <span> {{ __('words.commerce') }}  </span>
                            </div>
                
                          </div>
                
                        </div>  
       
                      
                        <div class="my-btns">

                            <svg class="swiper-button-prev" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="59" height="59" rx="7.5" stroke="#C86D02"/>
                                <path d="M22.1055 43.9876C22.1059 43.4574 22.317 42.949 22.6921 42.5743L32.9215 32.3449C33.2311 32.0354 33.4767 31.6679 33.6443 31.2634C33.8118 30.859 33.8981 30.4254 33.8981 29.9876C33.8981 29.5498 33.8118 29.1163 33.6443 28.7118C33.4767 28.3073 33.2311 27.9398 32.9215 27.6303L22.7055 17.4076C22.3412 17.0304 22.1396 16.5252 22.1441 16.0008C22.1487 15.4764 22.359 14.9748 22.7298 14.604C23.1006 14.2332 23.6023 14.0228 24.1267 14.0183C24.6511 14.0137 25.1563 14.2153 25.5335 14.5796L35.7495 24.7943C37.1231 26.1706 37.8946 28.0357 37.8946 29.9803C37.8946 31.9248 37.1231 33.7899 35.7495 35.1663L25.5201 45.3956C25.2408 45.6751 24.885 45.8656 24.4975 45.9431C24.1101 46.0205 23.7083 45.9815 23.3431 45.8308C22.9778 45.6802 22.6653 45.4248 22.445 45.0967C22.2248 44.7687 22.1066 44.3827 22.1055 43.9876Z" fill="#C86D02" fill-opacity="0.5"/>
                            </svg>
                                
                            <svg class="swiper-button-next" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="59.5" y="59.5" width="59" height="59" rx="7.5" transform="rotate(-180 59.5 59.5)" stroke="#C86D02"/>
                                <path d="M37.8945 16.0124C37.8941 16.5426 37.683 17.051 37.3079 17.4257L27.0785 27.6551C26.7689 27.9646 26.5233 28.3321 26.3557 28.7366C26.1882 29.141 26.1019 29.5746 26.1019 30.0124C26.1019 30.4502 26.1882 30.8837 26.3557 31.2882C26.5233 31.6927 26.7689 32.0602 27.0785 32.3697L37.2945 42.5924C37.6588 42.9696 37.8604 43.4748 37.8559 43.9992C37.8513 44.5236 37.641 45.0252 37.2702 45.396C36.8994 45.7668 36.3977 45.9772 35.8733 45.9817C35.3489 45.9863 34.8437 45.7847 34.4665 45.4204L24.2505 35.2057C22.8769 33.8294 22.1054 31.9643 22.1054 30.0197C22.1054 28.0752 22.8769 26.2101 24.2505 24.8337L34.4799 14.6044C34.7592 14.3249 35.115 14.1344 35.5025 14.0569C35.8899 13.9795 36.2917 14.0185 36.6569 14.1692C37.0222 14.3198 37.3347 14.5752 37.555 14.9033C37.7752 15.2313 37.8934 15.6173 37.8945 16.0124Z" fill="#C86D02" fill-opacity="0.5"/>
                            </svg>
                           
                        </div>

                      </div>
             
               

                </article>

                <article class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                    <div class="div">
                        <div></div>
                        <img class="img" src=" {{ asset('assets/images/3.jpg') }} " width="350px" height="350px" alt="...">
                    </div>
                  
                </article>
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

    <script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script>
        var swiper = new Swiper(".mySwipers", {
            slidesPerView: 1,
            spaceBetween: 20,
            slidesPerGroup: 1,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                801: {
                    slidesPerView: 1,
                },
                1100: {
                    slidesPerView: 1,
                },
            }
        });
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>--}}
    {{-- <script>
        var swiper = new Swiper(".mySwiper", {
          cssMode: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
          },
          mousewheel: true,
          keyboard: true,
        });
    </script>  --}}

    @include('layouts.footer')

@endsection
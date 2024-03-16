@extends('layouts.app')

@section('title')
{{ __("messege.title.2") }}
@endsection

@section('content')

  <header class="header-more" style="margin-top: 120px">

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
  <svg class="patern p4" width="288" height="262" viewBox="0 0 288 262" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
  <svg class="patern p5" width="288" height="262" viewBox="0 0 288 262" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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

        @include('layouts.nav')

        <div class="container ">

          <div class="head text-center m-auto">

            <span class=""> {{ __('words.head-title.5') }} </span>
            <h2 class=""> {{ __('words.head-title.5') }} </h2>
            <p>
            {{ __('messege.body-title.5') }}
            </p>
            <div class=""></div>

        </div>

            <div class="row all">

              <article class="col-lg-6 col-sm-12 d-flex align-items-center">

                <img src="{{ asset('assets/images/1.jpg') }}" height="100%" width="200px" alt="">

                <div class="">
              
                  <h3> {{ __('words.serve-words.0') }} </h3>
                
                  <p> {{ __('messege.serve-desc.0')  }}</p>
                </div>

              </article>

              <article class="col-lg-6 col-sm-12 d-flex align-items-center">

                <img src="{{ asset('assets/images/2.jpg') }}" height="100%" width="200px" alt="">

                <div class="">
              
                  <h3> {{ __('words.serve-words.1') }} </h3>
                
                  <p> {{ __('messege.serve-desc.1')  }}</p>
                </div>

              </article>

              <article class="col-lg-6 col-sm-12 d-flex align-items-center">

                <img src="{{ asset('assets/images/3.jpg') }}" height="100%" width="200px" alt="">

                <div class="">
              
                  <h3> {{ __('words.serve-words.2') }} </h3>
                
                  <p> {{ __('messege.serve-desc.2')  }}</p>
                </div>

              </article>

              <article class="col-lg-6 col-sm-12 d-flex align-items-center">

                <img src="{{ asset('assets/images/4.jpg') }}" height="100%" width="200px" alt="">

                <div class="">
              
                  <h3> {{ __('words.serve-words.3') }} </h3>
                
                  <p> {{ __('messege.serve-desc.3')  }}</p>
                </div>

              </article>

              
              <article class="col-lg-6 col-sm-12 d-flex align-items-center">

                <img src="{{ asset('assets/images/5.jpg') }}" height="100%" width="200px" alt="">

                <div class="">
              
                  <h3> {{ __('words.serve-words.4') }} </h3>
                
                  <p> {{ __('messege.serve-desc.4')  }}</p>
                </div>

              </article>

              <article class="col-lg-6 col-sm-12 d-flex align-items-center">

                <img src="{{ asset('assets/images/6.jpg') }}" height="100%" width="200px" alt="">

                <div class="">
              
                  <h3> {{ __('words.serve-words.5') }} </h3>
                
                  <p> {{ __('messege.serve-desc.5')  }}</p>
                </div>

              </article>

              <article class="col-lg-6 col-sm-12 d-flex align-items-center">

                <img src="{{ asset('assets/images/7.jpg') }}" height="100%" width="200px" alt="">

                <div class="">
              
                  <h3> {{ __('words.serve-words.6') }} </h3>
                
                  <p> {{ __('messege.serve-desc.6')  }}</p>
                </div>

              </article>

              <article class="col-lg-6 col-sm-12 d-flex align-items-center">

                <img src="{{ asset('assets/images/8.jpg') }}" height="100%" width="200px" alt="">

                <div class="">
              
                  <h3> {{ __('words.serve-words.7') }} </h3>
                
                  <p> {{ __('messege.serve-desc.7')  }}</p>
                </div>

              </article>

              <article class="col-lg-6 col-sm-12 d-flex align-items-center">

                <img src="{{ asset('assets/images/1.jpg') }}" height="100%" width="200px" alt="">

                <div class="">
              
                  <h3> {{ __('words.serve-words.8') }} </h3>
                
                  <p> {{ __('messege.serve-desc.8')  }}</p>
                </div>

              </article>

            
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

    @include('layouts.footer')
    
@endsection    

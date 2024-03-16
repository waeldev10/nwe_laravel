<nav  class="navbar navbar-expand-lg">

    <div class="container">

        <a class="navbar-brand" href="#">
            <img class="" src="{{ asset('assets/images/logo-svg-.svg') }}" width="80px" height="80px" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <?xml version="1.0" encoding="UTF-8"?>
            <svg  fill="#ffffff" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="32" height="32">
                <path d="M24,3c0,.55-.45,1-1,1H1c-.55,0-1-.45-1-1s.45-1,1-1H23c.55,0,1,.45,1,1ZM7,20H1c-.55,0-1,.45-1,1s.45,1,1,1H7c.55,0,1-.45,1-1s-.45-1-1-1ZM15,11H1c-.55,0-1,.45-1,1s.45,1,1,1H15c.55,0,1-.45,1-1s-.45-1-1-1Z"/>
            </svg>

        </button>

      

        <div class="collapse navbar-collapse text-white" id="nav">

            <ul class="navbar-nav m-auto">

                <li>
                    <a href="{{ route('welcome',app()->getLocale()) }}"> {{ __("words.home") }} </a>
                </li>
                <li>
                    <a href="{{route('welcome',app()->getLocale())}}#we"> {{ __("words.we") }} </a>
                </li>
    
                <li>
                    <a href="{{ route('all.services',app()->getLocale()) }}"> {{ __("words.servce") }} </a>
                </li>
                <li>
                    <a href="#location"> {{ __("words.location") }} </a>
                </li>
                <li>
                    <a  href="#footer" > {{ __("words.call") }} </a>
                </li>
                <li >
                    @if(app()->getlocale() == "ar")
                    <a class="en" href="{{ route('lang','en') }}">
                        <span>En </span>
                    </a>
                    @else
                   
                    <a class="en" href="{{route('lang','ar')}}">
                        <span> عربي  </span> 
                    </a>
                    @endif
                    {{-- <a class="en" href="{{route('en')}}"> {{ __("words.lang") }} </a> --}}
                </li>

                <div class="nav-phone">
                    <a href="">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                </div>

            </ul>
          
        </div>

         
        <a class="call" href="#footer" style="color: #ffffff !important">
            <span>{{ __('words.callUs') }} </span> 
        </a>
            
    </div>

</nav>
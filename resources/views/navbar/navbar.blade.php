<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><span class="text-info"> Home</span> Services </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName() == 'app_home') active @endif" aria-current="page" href="{{route('app_home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" @if(Request::route()->getName() == 'app_about') active @endif" href="{{route('app_about')}}">About</a>
        </li>
            <li>
                <!--bouton services-->
                <div class="btn-group">

                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" >
                            Services
                        </button>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="{{ route('app_homecleaning')}}">Home cleaning</a></li>
                            <li><a class="dropdown-item" href="{{ route('app_babysitting')}}">Babysitting</a></li>
                            <li><a class="dropdown-item" href=" {{ route('app_homerepair')}}">Home Repair</a></li>
                            <li><a class="dropdown-item" href="{{ route('app_gardener')}}">Gardener</a></li>
                            <li><a class="dropdown-item" href=" {{ route('app_delivery')}}">Delivery</a></li>
                            <li><a class="dropdown-item" href="{{ route('app_health')}}">Health</a></li>
                        </ul>

                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link @if(Request::route()->getName() == 'app_contactusbefore') active @endif" aria-current="page" href="{{route('app_contactusbefore')}}">Contact Us</a>
            </li>
        </ul>
      </div>

      <div class="btn-group">
            @guest
                <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" >
                    Menu
                </button>
                <ul class="dropdown-menu" >
                    <li><a class="dropdown-item" href="{{ route('login')}}">Login</a></li>
                    <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                </ul>
            @endguest
            @auth
                <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" >
                    {{ Auth::user()->name}}
                </button>
                @if(auth()->user()->is_admin=='1')
                <ul class="dropdown-menu" >
                    <li><a class="dropdown-item" href="{{route('app_logout')}}">Logout</a></li>
                    <li><a class="dropdown-item" href="{{route('app_dashboard')}}">Dashboard</a></li>
                </ul>
                @else
                <ul class="dropdown-menu" >
                    <li><a class="dropdown-item" href="{{route('app_logout')}}">Logout</a></li>

                </ul>
                @endif
            @endauth


      </div>


    </div>
  </nav>
<style>
     .nav-item .nav-link:hover{
background: #33b5e5;
color: black;
     }
</style>

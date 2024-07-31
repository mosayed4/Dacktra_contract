<!-- Header Area -->
{{-- <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </nav> --}}
<div class="container">

    <nav class="navbar navbar-light bg-light">

        @yield('header_left_side')

        <div class="form-inline">

<<<<<<< HEAD
        @yield('header_right_side')
=======
          <a href={{ route('language.change', 'en') }}style="color: #1A76D1;font-size:17px;font-weight:600 ">English</a>
        <a href={{ route('language.change', 'ar') }} style="color: #1A76D1;font-size:17px;font-weight:600 ">العربيه</a>
>>>>>>> b743d873467fd9730775d9b0a2602ed45e43a92c


        </div>
      </nav>

</div>



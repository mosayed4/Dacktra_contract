<!-- Header Area -->
{{-- <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </nav> --}}
<div class="container">

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"><img src="{{asset('user_area/white_logoo.png')}}" alt="logo" style="height:100px;"/></a>
        <div class="form-inline">

          <a href={{ route('language.change', 'en') }}style="color: #1A76D1;font-size:17px;font-weight:600 ">English</a>
        <a href={{ route('language.change', 'ar') }} style="color: #1A76D1;font-size:17px;font-weight:600 ">العربيه</a>


        </div>
      </nav>

</div>



<header id="site_header" class="header mobile-menu-hide">
    <div class="header-content">
      <div class="header-photo">
        <img src="{{asset('frontend/img/my_pic.jpeg')}}" alt="Alex Smith" />
      </div>
      <div class="header-titles">
        <h2>{{$about->name}}</h2>
        <h4>{{explode(',',$about->subtitle)[0]}}</h4>
      </div>
    </div>

    <ul class="main-menu">
      <li class="active">
        <a href="/#home" class="nav-anim">
          <span class="menu-icon lnr lnr-home"></span>
          <span class="link-text">Home</span>
        </a>
      </li>
      <li>
        <a href="/#about-me" class="nav-anim">
          <span class="menu-icon lnr lnr-user"></span>
          <span class="link-text">About Me</span>
        </a>
      </li>
      <li>
        <a href="/#resume" class="nav-anim">
          <span class="menu-icon lnr lnr-graduation-hat"></span>
          <span class="link-text">Resume</span>
        </a>
      </li>
      
      <li>
        <a href="/#blog" class="nav-anim">
          <span class="menu-icon lnr lnr-book"></span>
          <span class="link-text">Blog</span>
        </a>
      </li>
      <li>
        <a href="/#contact" class="nav-anim">
          <span class="menu-icon lnr lnr-envelope"></span>
          <span class="link-text">Contact</span>
        </a>
      </li>
    </ul>

    <div class="social-links">
      <ul>
        <li>
          <a href="https://github.com/MusheAbdulHakim" target="_blank"
            ><i class="fab fa-github"></i
          ></a>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/yahuza-mushe-abdul-hakim-2155351a9/" target="_blank"
            ><i class="fab fa-linkedin-in"></i
          ></a>
        </li>
        <li>
          <a href="https://web.facebook.com/mushe.abdulhakim.1" target="_blank"
            ><i class="fab fa-facebook-f"></i
          ></a>
        </li>
        <li>
          <a href="https://twitter.com/abdul_mushe" target="_blank"><i class="fab fa-twitter"></i></a>
        </li>
      </ul>
    </div>

    <div class="header-buttons">
      <a download href="{{asset('storage/cv/'.$about->cv)}}" target="_blank" class="btn btn-primary">Download CV</a>
    </div>

    <div class="copyrights">Copyright &copy; {{Date('Y')}} All rights reserved.</div>
</header>

<!-- Mobile Navigation -->
<div class="menu-toggle">
<span></span>
<span></span>
<span></span>
</div>
<!-- End Mobile Navigation -->
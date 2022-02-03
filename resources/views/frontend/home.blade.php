<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
    <link rel="shortcut icon" href="{{asset('frontend/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-grid.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/animations.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/perfect-scrollbar.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}" type="text/css" />
    <script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
</head>
<body>
    <!-- Animated Background -->
    <div
      class="lm-animated-bg"
      style="background-image: url({{asset('frontend/img/main_bg.png')}})"
    ></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
        <div class="page-content">
           {{-- header  --}}
           <header id="site_header" class="header mobile-menu-hide">
              <div class="header-content">
                <div class="header-photo">
                  <img src="{{asset('frontend/img/my_pic.jpeg')}}" alt="Alex Smith" />
                </div>
                <div class="header-titles">
                  <h2>{{$about->name ?? 'John Doe'}}</h2>
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

          <!-- / End header  -->
  
          @if (!(Route::is('blog.show')))
              <!-- Arrows Nav -->
              <div class="lmpixels-arrows-nav">
                <div class="lmpixels-arrow-right">
                  <i class="lnr lnr-chevron-right"></i>
                </div>
                <div class="lmpixels-arrow-left">
                  <i class="lnr lnr-chevron-left"></i>
                </div>
              </div>
              <!-- End Arrows Nav -->

              <div class="content-area">
                <div class="animated-sections">
                    <!-- Home Subpage -->
                    <section data-id="home" class="animated-section start-page">
                      <div class="section-content vcentered">
                        <div class="row">
                          <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="title-block">
                              <h2>{{$about->name ?? "John Doe"}}</h2>
                              <div class="owl-carousel text-rotation">
                                @foreach (explode(',',$about->subtitle) as $item)
                                <div class="item">
                                  <div class="sp-subtitle">{{$item}}</div>
                                </div>
                                @endforeach
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- End of Home Subpage -->
                  
                    <!-- About Me Subpage -->
                    <section data-id="about-me" class="animated-section">
                      <div class="page-title">
                        <h2>About <span>Me</span></h2>
                      </div>
                  
                      <div class="section-content">
                        <!-- Personal Information -->
                        <div class="row">
                          <div class="col-xs-12 col-sm-7">
                            <p id="about_me">
                              {{$about->intro}}
                            </p>
                          </div>
                  
                          <div class="col-xs-12 col-sm-5">
                            <div class="info-list">
                              <ul>
                                <li>
                                  <span class="title">Age</span>
                                  <span class="value" id="my_age">{{$about->age}}</span>
                                </li>
                  
                                <li>
                                  <span class="title">Residence</span>
                                  <span class="value" id="my_residence">{{$about->residence}}</span>
                                </li>
                  
                                <li>
                                  <span class="title">Address</span>
                                  <span class="value" id="my_address">{{$about->address}}</span>
                                </li>
                  
                                <li>
                                  <span class="title">e-mail</span>
                                  <span class="value" id="my_email">{{$about->email}}</span>
                                </li>
                  
                                <li>
                                  <span class="title">Phone</span>
                                  <span class="value" id="my_phone">{{$about->phone}}</span>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!-- End of Personal Information -->
                  
                        <div class="white-space-50"></div>
                  
                        <!-- Services -->
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <div class="block-title">
                              <h3>What <span>I Do</span></h3>
                            </div>
                          </div>
                        </div>
                  
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            <div class="col-inner">
                              <div class="info-list-w-icon">
                                <div class="info-block-w-icon">
                                  <div class="ci-icon">
                                    <i class="lnr lnr-store"></i>
                                  </div>
                                  <div class="ci-text">
                                    <h4>Ecommerce</h4>
                                    <p>
                                      Pellentesque pellentesque, ipsum sit amet auctor
                                      accumsan, odio tortor bibendum massa, sit amet
                                      ultricies ex lectus scelerisque nibh. Ut non
                                      sodales.
                                    </p>
                                  </div>
                                </div>
                                <div class="info-block-w-icon">
                                  <div class="ci-icon">
                                    <i class="lnr lnr-laptop-phone"></i>
                                  </div>
                                  <div class="ci-text">
                                    <h4>Web Design</h4>
                                    <p>
                                      Pellentesque pellentesque, ipsum sit amet auctor
                                      accumsan, odio tortor bibendum massa, sit amet
                                      ultricies ex lectus scelerisque nibh. Ut non
                                      sodales.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                  
                          <div class="col-xs-12 col-sm-6">
                            <div class="col-inner">
                              <div class="info-list-w-icon">
                                <div class="info-block-w-icon">
                                  <div class="ci-icon">
                                    <i class="lnr lnr-pencil"></i>
                                  </div>
                                  <div class="ci-text">
                                    <h4>Copywriting</h4>
                                    <p>
                                      Pellentesque pellentesque, ipsum sit amet auctor
                                      accumsan, odio tortor bibendum massa, sit amet
                                      ultricies ex lectus scelerisque nibh. Ut non
                                      sodales.
                                    </p>
                                  </div>
                                </div>
                                <div class="info-block-w-icon">
                                  <div class="ci-icon">
                                    <i class="lnr lnr-flag"></i>
                                  </div>
                                  <div class="ci-text">
                                    <h4>Management</h4>
                                    <p>
                                      Pellentesque pellentesque, ipsum sit amet auctor
                                      accumsan, odio tortor bibendum massa, sit amet
                                      ultricies ex lectus scelerisque nibh. Ut non
                                      sodales.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End of Services -->
                  
                        <div class="white-space-30"></div>
                  
                        
                        <div class="white-space-50"></div>
                  
                        <!-- Clients -->
                        @if(!empty(App\Models\Client::count()))
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <div class="block-title">
                              <h3>Cilents</h3>
                            </div>
                          </div>
                        </div>
                  
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <div class="clients owl-carousel">
                  
                              @foreach (\App\Models\Client::get() as $client)
                              <div class="client-block">
                                <a href="#" title="{{$client->name}}">
                                  <img src="{{!empty($client->logo)? asset('storage/clients/'.$client->logo): asset('frontend/img/clients/client-1.png')}}" alt="Logo" />
                                </a>
                              </div>
                              @endforeach
                  
                            </div>
                          </div>
                        </div>
                        @endif
                        <!-- End of Clients -->
                  
                        <div class="white-space-50"></div>
                  
                        
                  
                        <div class="white-space-50"></div>
                  
                        <!-- Fun Facts -->
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <div class="block-title">
                              <h3>Fun <span>Facts</span></h3>
                            </div>
                          </div>
                        </div>
                  
                        <div class="row">
                          <div class="col-xs-12 col-sm-4">
                            <div class="fun-fact gray-default">
                              <i class="lnr lnr-heart"></i>
                              <h4>Happy Clients</h4>
                              <span class="fun-fact-block-value" id="happy_clients">{{$about->happy_clients}}</span>
                              <span class="fun-fact-block-text"></span>
                            </div>
                          </div>
                  
                          <div class="col-xs-12 col-sm-4">
                            <div class="fun-fact gray-default">
                              <i class="lnr lnr-clock"></i>
                              <h4>Working Hours</h4>
                              <span class="fun-fact-block-value" id="working_hours">{{$about->working_hours}}</span>
                              <span class="fun-fact-block-text"></span>
                            </div>
                          </div>
                  
                          <div class="col-xs-12 col-sm-4">
                            <div class="fun-fact gray-default">
                              <i class="lnr lnr-star"></i>
                              <h4>Awards Won</h4>
                              <span class="fun-fact-block-value" id="awards">{{$about->awards}}</span>
                              <span class="fun-fact-block-text"></span>
                            </div>
                          </div>
                        </div>
                        <!-- End of Fun Facts -->
                      </div>
                    </section>
                    <!-- End of About Me Subpage -->
                  
                    <!-- Resume Subpage -->
                    <section data-id="resume" class="animated-section">
                      <div class="page-title">
                        <h2>Resume</h2>
                      </div>
                  
                      <div class="section-content">
                        <div class="row">
                          <div class="col-xs-12 col-sm-7">
                            <div class="block-title">
                              <h3>Education</h3>
                            </div>
                  
                            <div class="timeline timeline-second-style clearfix">
                              @if(!empty($resume->education))
                                @foreach ($resume->education as $education)
                                  <div class="timeline-item clearfix">
                                    <div class="left-part">
                                      <h5 class="item-period">{{date_format(date_create($education['start']),'Y').' - '. date_format(date_create($education['end']),'Y')}}</h5>
                                      <span class="item-company"
                                        >{{$education['institution']}}</span
                                      >
                                    </div>
                                    <div class="divider"></div>
                                    <div class="right-part">
                                      <h4 class="item-title">{{$education['course']}}</h4>
                                      <p>
                                        {{$education['description']}}
                                      </p>
                                    </div>
                                  </div>
                                @endforeach
                              @endif
                            </div>
                  
                            <div class="white-space-50"></div>
                  
                            <div class="block-title">
                              <h3>Experience</h3>
                            </div>
                  
                            <div class="timeline timeline-second-style clearfix">
                              @if(!empty($resume->experience))
                                @foreach ($resume->experience as $experience)
                                  <div class="timeline-item clearfix">
                                    <div class="left-part">
                                      <h5 class="item-period">{{date_format(date_create($experience['start']),'Y').' - '. date_format(date_create($experience['end']),'Y')}}</h5>
                                      <span class="item-company">{{$experience['company']}}</span>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="right-part">
                                      <h4 class="item-title">{{$experience['position']}}</h4>
                                      <p>
                                        {{$experience['description']}}
                                      </p>
                                    </div>
                                  </div>
                                @endforeach
                              @endif
                            </div>
                          </div>
                  
                          <!-- Skills & Certificates -->
                          <div class="col-xs-12 col-sm-5">
                            
                            <!-- Coding Skills -->
                            <div class="block-title">
                              <h3>Coding <span>Skills</span></h3>
                            </div>
                  
                            <div class="skills-info skills-second-style">
                  
                              @if (!empty($resume->skills))
                                @foreach ($resume->skills as $skill)
                                    <!-- Skill -->
                                    <div class="skill clearfix {{$skill['name']}}">
                                      <h4>{{$skill['name']}}</h4>
                                      <div class="skill-value">{{$skill['percentage']}}%</div>
                                    </div>
                                    <div class="skill-container">
                                      <div style="width: {{$skill['percentage']}}%;" class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill  -->
                                @endforeach
                              @endif
                  
                            </div>
                            <!-- End of Coding Skills -->
                  
                            <div class="white-space-10"></div>
                  
                            <!-- Knowledges -->
                            <div class="block-title">
                              <h3>Knowledges</h3>
                            </div>
                  
                            <ul class="knowledges">
                              @if (!empty($resume->knowledges))
                                @foreach (explode(',',$resume->knowledges) as $item)
                                <li>{{$item}}</li>
                                @endforeach
                              @endif              
                            </ul>
                            <!-- End of Knowledges -->
                          </div>
                          <!-- End of Skills & Certificates -->
                        </div>
                  
                        
                      </div>
                    </section>
                    <!-- End of Resume Subpage -->
                                
                    <!-- Blog Subpage -->
                    <section data-id="blog" class="animated-section">
                      <div class="row">
                        <div class="col-6">
                          <div class="page-title">
                            <h2>Blog</h2>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="blog-search right">
                            <input type="search" class="form-control" placeholder="search article">
                          </div>
                        </div>
                      </div>
                  
                      <div class="section-content">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <div class="blog-masonry two-columns clearfix">
                              <x-post.blog :posts="$posts" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- End of Blog Subpage -->
                  
                    <!-- Contact Subpage -->
                    <section data-id="contact" class="animated-section">
                      <div class="page-title">
                        <h2>Contact</h2>
                      </div>
                  
                      <div class="section-content">
                        <div class="row">
                          <!-- Contact Info -->
                          <div class="col-xs-12 col-sm-4">
                            <div class="lm-info-block gray-default">
                              <i class="lnr lnr-map-marker"></i>
                              <h4>{{$about->address}}</h4>
                              <span class="lm-info-block-value"></span>
                              <span class="lm-info-block-text"></span>
                            </div>
                  
                            <div class="lm-info-block gray-default">
                              <i class="lnr lnr-phone-handset"></i>
                              <h4>{{$about->phone}}</h4>
                              <span class="lm-info-block-value"></span>
                              <span class="lm-info-block-text"></span>
                            </div>
                  
                            <div class="lm-info-block gray-default">
                              <i class="lnr lnr-envelope"></i>
                              <h4>{{$about->email}}</h4>
                              <span class="lm-info-block-value"></span>
                              <span class="lm-info-block-text"></span>
                            </div>
                  
                            <div class="lm-info-block gray-default">
                              <i class="lnr lnr-checkmark-circle"></i>
                              <h4>Freelance Available</h4>
                              <span class="lm-info-block-value"></span>
                              <span class="lm-info-block-text"></span>
                            </div>
                          </div>
                          <!-- End of Contact Info -->
                  
                          <!-- Contact Form -->
                          <div class="col-xs-12 col-sm-8">
                            <div id="map" class="map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.024378856124!2d-0.8768382852104187!3d9.419262993250749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfd43c54df4ce9dd%3A0x8311c32d90f0eeb8!2sSagnarigu%20Chief%20Palace!5e0!3m2!1sen!2sgh!4v1639190259261!5m2!1sen!2sgh"  allowfullscreen="" loading="lazy"></iframe>
                            </div>
                  
                            <div class="block-title">
                              <h3>How Can I <span>Help You?</span></h3>
                            </div>
                            
                  
                            <form
                              id="contact_form"
                              class="contact-form"
                              action=""
                              method="post"
                            >
                            <div class="messages"></div>
                  
                              <div class="controls two-columns">
                                <div class="fields clearfix">
                                  <div class="left-column">
                                    <div class="form-group form-group-with-icon">
                                      <input
                                        id="form_name"
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        placeholder=""
                                        required="required"
                                        data-error="Name is required."
                                      />
                                      <label>Full Name</label>
                                      <div class="form-control-border"></div>
                                      <div class="help-block with-errors"></div>
                                    </div>
                  
                                    <div class="form-group form-group-with-icon">
                                      <input
                                        id="form_email"
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder=""
                                        required="required"
                                        data-error="Valid email is required."
                                      />
                                      <label>Email Address</label>
                                      <div class="form-control-border"></div>
                                      <div class="help-block with-errors"></div>
                                    </div>
                  
                                    <div class="form-group form-group-with-icon">
                                      <input
                                        id="form_subject"
                                        type="text"
                                        name="subject"
                                        class="form-control"
                                        placeholder=""
                                        required="required"
                                        data-error="Subject is required."
                                      />
                                      <label>Subject</label>
                                      <div class="form-control-border"></div>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                  <div class="right-column">
                                    <div class="form-group form-group-with-icon">
                                      <textarea
                                        id="form_message"
                                        name="message"
                                        class="form-control"
                                        placeholder=""
                                        rows="7"
                                        required="required"
                                        data-error="Please, leave me a message."
                                      ></textarea>
                                      <label>Message</label>
                                      <div class="form-control-border"></div>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                  
                                
                                <button class="button btn-send" type="submit">Send Message</button>
                              </div>
                            </form>
                          </div>
                          <!-- End of Contact Form -->
                        </div>
                      </div>
                    </section>
                    <!-- End of Contact Subpage -->
                </div>
              </div>
            
            @else
            <div class="content-area single-page-area">
              <div class="single-page-content">
                <article class="post">
                  <div class="post-thumbnail">
                    <img src="{{!empty($post->thumbnail) ? asset('storage/posts/'.$post->thumbnail): asset('frontend/img/blog/blog_post_1.jpg')}}" alt="image" />
                  </div>
    
                  <div class="post-content">
                    <!-- /Entry header -->
                    <header class="entry-header">
                      <!-- Entry meta -->
                      <div class="entry-meta entry-meta-top">
                        <span><a href="#" rel="category tag">{{$post->category->name}}</a></span>
                      </div>
                      <!-- /Entry meta -->
    
                      <h2 class="entry-title">
                        {{$post->title}}
                      </h2>
                    </header>
                    <!-- /Entry header -->
    
                    <!-- Entry content -->
                    <div class="entry-content">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12">
                          <div class="col-inner">
                            {!! $post->content !!}
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Entry content -->
    
                    <div class="entry-meta entry-meta-bottom">
                      <div class="date-author">
                        <span class="entry-date">
                          <a href="#" rel="bookmark">
                            <i class="far fa-clock"></i>
                            <span class="entry-date"> {{date_format(date_create($post->created_at),'D M Y')}}</span>
                          </a>
                        </span>
                        
                      </div>
    
                      <!-- Share Buttons -->
                      <div class="entry-share btn-group share-buttons">
                        <a
                          href="#"
                          onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                          class="btn"
                          target="_blank"
                          title="Share on Facebook"
                        >
                          <i class="fab fa-facebook-f"></i>
                        </a>
    
                        <a
                          href="#"
                          onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                          class="btn"
                          target="_blank"
                          title="Share on Twitter"
                        >
                          <i class="fab fa-twitter"></i>
                        </a>
    
                        <a
                          href="#"
                          onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
                          class="btn"
                          title="Share on LinkedIn"
                        >
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </div>
                      <!-- /Share Buttons -->
                    </div>
    
                    <div class="post-tags">
                      <div class="tags">
                        @foreach (explode(',',$post->tags) as $tag)
                        <a href="#" rel="tag">{{$tag}}</a>
                        @endforeach                    
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          @endif
  
        </div>
    </div>
    
</body>
<script src="{{asset('frontend/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('frontend/js/animating.js')}}"></script>
<script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('frontend/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/validator.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script>
  $(document).ready(function(){
      
      
      
      
  });
</script>
</html>
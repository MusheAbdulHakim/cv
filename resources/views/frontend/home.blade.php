@extends('layouts.frontend')

@push('page-css')

@endpush

@push('content')
<div class="animated-sections">
    <!-- Home Subpage -->
    <section data-id="home" class="animated-section start-page">
      <div class="section-content vcentered">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="title-block">
              <h2>{{$about->name}}</h2>
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

        <!-- Testimonials -->
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <div class="block-title">
              <h3>Testimonials</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <div class="testimonials owl-carousel">
              <!-- Testimonial 1 -->
              <div class="testimonial">
                <div class="img">
                  <img
                    src="{{asset('frontend/img/testimonials/testimonial-1.jpg')}}"
                    alt="Alex Smith"
                  />
                </div>
                <div class="text">
                  <p>
                    Vivamus at molestie dui, eu ornare orci. Curabitur
                    vel egestas dolor. Nulla condimentum nunc sit amet
                    urna tempus finibus. Duis mollis leo id ligula
                    pellentesque, at vehicula dui ultrices.
                  </p>
                </div>

                <div class="author-info">
                  <h4 class="author">Julia Hickman</h4>
                  <h5 class="company">Omni Source</h5>
                  <div class="icon">
                    <i class="fas fa-quote-right"></i>
                  </div>
                </div>
              </div>
              <!-- End of Testimonial 1 -->

              <!-- Testimonial 2 -->
              <div class="testimonial">
                <div class="img">
                  <img
                    src="{{asset('frontend/img/testimonials/testimonial-2.jpg')}}"
                    alt="Alex Smith"
                  />
                </div>
                <div class="text">
                  <p>
                    Vivamus at molestie dui, eu ornare orci. Curabitur
                    vel egestas dolor. Nulla condimentum nunc sit amet
                    urna tempus finibus. Duis mollis leo id ligula
                    pellentesque, at vehicula dui ultrices.
                  </p>
                </div>

                <div class="author-info">
                  <h4 class="author">Robert Watkins</h4>
                  <h5 class="company">Endicott Shoes</h5>
                  <div class="icon">
                    <i class="fas fa-quote-right"></i>
                  </div>
                </div>
              </div>
              <!-- End of Testimonial 2 -->

              <!-- Testimonial 3 -->
              <div class="testimonial">
                <div class="img">
                  <img
                    src="{{asset('frontend/img/testimonials/testimonial-3.jpg')}}"
                    alt="Alex Smith"
                  />
                </div>
                <div class="text">
                  <p>
                    Vivamus at molestie dui, eu ornare orci. Curabitur
                    vel egestas dolor. Nulla condimentum nunc sit amet
                    urna tempus finibus. Duis mollis leo id ligula
                    pellentesque, at vehicula dui ultrices.
                  </p>
                </div>

                <div class="author-info">
                  <h4 class="author">Kristin Carroll</h4>
                  <h5 class="company">Helping Hand</h5>
                  <div class="icon">
                    <i class="fas fa-quote-right"></i>
                  </div>
                </div>
              </div>
              <!-- End of Testimonial 3 -->
            </div>
          </div>
        </div>
        <!-- End of Testimonials -->

        <div class="white-space-50"></div>

        <!-- Clients -->
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
              <div class="client-block">
                <a href="#" target="_blank" title="Logo">
                  <img src="{{asset('frontend/img/clients/client-1.png')}}" alt="Logo" />
                </a>
              </div>

              <div class="client-block">
                <a href="#" target="_blank" title="Logo">
                  <img src="{{asset('frontend/img/clients/client-2.png')}}" alt="Logo" />
                </a>
              </div>

              <div class="client-block">
                <a href="#" target="_blank" title="Logo">
                  <img src="{{asset('frontend/img/clients/client-3.png')}}" alt="Logo" />
                </a>
              </div>

              <div class="client-block">
                <a href="#" target="_blank" title="Logo">
                  <img src="{{asset('frontend/img/clients/client-4.png')}}" alt="Logo" />
                </a>
              </div>

              <div class="client-block">
                <a href="#" target="_blank" title="Logo">
                  <img src="{{asset('frontend/img/clients/client-5.png')}}" alt="Logo" />
                </a>
              </div>

              <div class="client-block">
                <a href="#" target="_blank" title="Logo">
                  <img src="{{asset('frontend/img/clients/client-6.png')}}" alt="Logo" />
                </a>
              </div>

              <div class="client-block">
                <a href="#" target="_blank" title="Logo">
                  <img src="{{asset('frontend/img/clients/client-7.png')}}" alt="Logo" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Clients -->

        <div class="white-space-50"></div>

        <!-- Pricing -->
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <div class="block-title">
              <h3>Pricing</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <div class="fw-pricing clearfix row">
              <div class="fw-package-wrap col-md-6">
                <div class="fw-package">
                  <div class="fw-heading-row">
                    <span>Silver</span>
                  </div>

                  <div class="fw-pricing-row">
                    <span>$64</span>
                    <small>per month</small>
                  </div>

                  <div class="fw-button-row">
                    <a href="#" target="_self" class="btn btn-secondary"
                      >Free Trial</a
                    >
                  </div>

                  <div class="fw-default-row">Lorem ipsum dolor</div>
                  <div class="fw-default-row">
                    Pellentesque scelerisque
                  </div>
                  <div class="fw-default-row">Morbi eu sagittis</div>
                </div>
              </div>

              <div class="fw-package-wrap col-md-6 highlight-col">
                <div class="fw-package">
                  <div class="fw-heading-row">
                    <span>Gold</span>
                  </div>

                  <div class="fw-pricing-row">
                    <span>$128</span>
                    <small>per month</small>
                  </div>

                  <div class="fw-button-row">
                    <a href="#" target="_self" class="btn btn-primary"
                      >Free Trial</a
                    >
                  </div>

                  <div class="fw-default-row">Lorem ipsum dolor</div>
                  <div class="fw-default-row">
                    Pellentesque scelerisque
                  </div>
                  <div class="fw-default-row">Morbi eu sagittis</div>
                  <div class="fw-default-row">Donec non diam</div>
                  <div class="fw-default-row"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Pricing -->

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
              <div class="timeline-item clearfix">
                <div class="left-part">
                  <h5 class="item-period">2008</h5>
                  <span class="item-company"
                    >University of Studies</span
                  >
                </div>
                <div class="divider"></div>
                <div class="right-part">
                  <h4 class="item-title">Frontend Development</h4>
                  <p>
                    Maecenas finibus nec sem ut imperdiet. Ut tincidunt
                    est ac dolor aliquam sodales. Phasellus sed mauris
                    hendrerit, laoreet sem in, lobortis ante.
                  </p>
                </div>
              </div>

              <div class="timeline-item clearfix">
                <div class="left-part">
                  <h5 class="item-period">2007</h5>
                  <span class="item-company"
                    >University of Studies</span
                  >
                </div>
                <div class="divider"></div>
                <div class="right-part">
                  <h4 class="item-title">Graphic Design</h4>
                  <p>
                    Aliquam tincidunt malesuada tortor vitae iaculis. In
                    eu turpis iaculis, feugiat risus quis, aliquet urna.
                    Quisque fringilla mollis risus, eu pulvinar dolor.
                  </p>
                </div>
              </div>
            </div>

            <div class="white-space-50"></div>

            <div class="block-title">
              <h3>Experience</h3>
            </div>

            <div class="timeline timeline-second-style clearfix">
              <div class="timeline-item clearfix">
                <div class="left-part">
                  <h5 class="item-period">2016 - Current</h5>
                  <span class="item-company">Google</span>
                </div>
                <div class="divider"></div>
                <div class="right-part">
                  <h4 class="item-title">Lead Ui/Ux Designer</h4>
                  <p>
                    Praesent dignissim sollicitudin justo, sed elementum
                    quam lacinia quis. Phasellus eleifend tristique
                    posuere. Sed vitae dui nec magna.
                  </p>
                </div>
              </div>

              <div class="timeline-item clearfix">
                <div class="left-part">
                  <h5 class="item-period">2013 - 2016</h5>
                  <span class="item-company">Adobe</span>
                </div>
                <div class="divider"></div>
                <div class="right-part">
                  <h4 class="item-title">Senior Ui/Ux Designer</h4>
                  <p>
                    Maecenas tempus faucibus rutrum. Duis eu aliquam
                    urna. Proin vitae nulla tristique, ornare felis id,
                    congue libero. Nam volutpat euismod quam.
                  </p>
                </div>
              </div>

              <div class="timeline-item clearfix">
                <div class="left-part">
                  <h5 class="item-period">2011 - 2013</h5>
                  <span class="item-company">Google</span>
                </div>
                <div class="divider"></div>
                <div class="right-part">
                  <h4 class="item-title">Junior Ui/Ux Designer</h4>
                  <p>
                    Duis mollis nunc quis quam viverra venenatis. Nulla
                    nulla arcu, congue vitae nunc ac, sodales ultricies
                    diam. Nullam justo leo, tincidunt sit amet.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Skills & Certificates -->
          <div class="col-xs-12 col-sm-5">
            <!-- Design Skills -->
            <div class="block-title">
              <h3>Design <span>Skills</span></h3>
            </div>

            <div class="skills-info skills-second-style">
              <!-- Skill 1 -->
              <div class="skill clearfix">
                <h4>Web Design</h4>
                <div class="skill-value">95%</div>
              </div>
              <div class="skill-container skill-1">
                <div class="skill-percentage"></div>
              </div>
              <!-- End of Skill 1 -->

              <!-- Skill 2 -->
              <div class="skill clearfix">
                <h4>Print Design</h4>
                <div class="skill-value">65%</div>
              </div>
              <div class="skill-container skill-2">
                <div class="skill-percentage"></div>
              </div>
              <!-- End of Skill 2 -->

              <!-- Skill 3 -->
              <div class="skill clearfix">
                <h4>Logo Design</h4>
                <div class="skill-value">80%</div>
              </div>
              <div class="skill-container skill-3">
                <div class="skill-percentage"></div>
              </div>
              <!-- End of Skill 3 -->

              <!-- Skill 4 -->
              <div class="skill clearfix">
                <h4>Graphic Design</h4>
                <div class="skill-value">90%</div>
              </div>
              <div class="skill-container skill-4">
                <div class="skill-percentage"></div>
              </div>
              <!-- End of Skill 4 -->
            </div>
            <!-- End of Design Skills -->

            <div class="white-space-10"></div>

            <!-- Coding Skills -->
            <div class="block-title">
              <h3>Coding <span>Skills</span></h3>
            </div>

            <div class="skills-info skills-second-style">
              <!-- Skill 5 -->
              <div class="skill clearfix">
                <h4>JavaScript</h4>
                <div class="skill-value">95%</div>
              </div>
              <div class="skill-container skill-5">
                <div class="skill-percentage"></div>
              </div>
              <!-- End of Skill 5 -->

              <!-- Skill 6 -->
              <div class="skill clearfix">
                <h4>PHP</h4>
                <div class="skill-value">85%</div>
              </div>
              <div class="skill-container skill-6">
                <div class="skill-percentage"></div>
              </div>
              <!-- End of Skill 6 -->

              <!-- Skill 7 -->
              <div class="skill clearfix">
                <h4>HTML/CSS</h4>
                <div class="skill-value">100%</div>
              </div>
              <div class="skill-container skill-7">
                <div class="skill-percentage"></div>
              </div>
              <!-- End of Skill 7 -->

              <!-- Skill 8 -->
              <div class="skill clearfix">
                <h4>Smarty/Twig</h4>
                <div class="skill-value">75%</div>
              </div>
              <div class="skill-container skill-8">
                <div class="skill-percentage"></div>
              </div>
              <!-- End of Skill 8 -->

              <!-- Skill 9 -->
              <div class="skill clearfix">
                <h4>Perl</h4>
                <div class="skill-value">90%</div>
              </div>
              <div class="skill-container skill-9">
                <div class="skill-percentage"></div>
              </div>
              <!-- End of Skill 9 -->
            </div>
            <!-- End of Coding Skills -->

            <div class="white-space-10"></div>

            <!-- Knowledges -->
            <div class="block-title">
              <h3>Knowledges</h3>
            </div>

            <ul class="knowledges">
              <li>Marketing</li>
              <li>Print</li>
              <li>Digital Design</li>
              <li>Social Media</li>
              <li>Time Management</li>
              <li>Communication</li>
              <li>Problem-Solving</li>
              <li>Social Networking</li>
              <li>Flexibility</li>
            </ul>
            <!-- End of Knowledges -->
          </div>
          <!-- End of Skills & Certificates -->
        </div>

        <div class="white-space-50"></div>

        <!-- Certificates -->
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <div class="block-title">
              <h3>Certificates</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- Certificate 1 -->
          <div class="col-xs-12 col-sm-6">
            <div class="certificate-item clearfix">
              <div class="certi-logo">
                <img src="{{asset('frontend/img/clients/client-1.png')}}" alt="logo" />
              </div>

              <div class="certi-content">
                <div class="certi-title">
                  <h4>Psyhology of Intertnation Design</h4>
                </div>
                <div class="certi-id">
                  <span>Membership ID: XXXX</span>
                </div>
                <div class="certi-date">
                  <span>19 April 2018</span>
                </div>
                <div class="certi-company">
                  <span></span>
                </div>
              </div>
            </div>
          </div>
          <!-- End of Certificate 1 -->

          <!-- Certificate 2 -->
          <div class="col-xs-12 col-sm-6">
            <div class="certificate-item clearfix">
              <div class="certi-logo">
                <img src="{{asset('frontend/img/clients/client-1.png')}}" alt="logo" />
              </div>

              <div class="certi-content">
                <div class="certi-title">
                  <h4>Psyhology of Intertnation Design</h4>
                </div>
                <div class="certi-id">
                  <span>Membership ID: XXXX</span>
                </div>
                <div class="certi-date">
                  <span>19 April 2018</span>
                </div>
                <div class="certi-company">
                  <span></span>
                </div>
              </div>
            </div>
          </div>
          <!-- End of Certificate 2 -->
        </div>
        <!-- End of Certificates -->
      </div>
    </section>
    <!-- End of Resume Subpage -->

    <!-- Portfolio Subpage -->
    <section data-id="portfolio" class="animated-section">
      <div class="page-title">
        <h2>Portfolio</h2>
      </div>

      <div class="section-content">
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <!-- Portfolio Content -->
            <div class="portfolio-content">
              <ul class="portfolio-filters">
                <li class="active">
                  <a
                    class="filter btn btn-sm btn-link"
                    data-group="category_all"
                    >All</a
                  >
                </li>
                <li>
                  <a
                    class="filter btn btn-sm btn-link"
                    data-group="category_detailed"
                    >Detailed</a
                  >
                </li>
                <li>
                  <a
                    class="filter btn btn-sm btn-link"
                    data-group="category_mockups"
                    >Mockups</a
                  >
                </li>
                <li>
                  <a
                    class="filter btn btn-sm btn-link"
                    data-group="category_soundcloud"
                    >SoundCloud</a
                  >
                </li>
                <li>
                  <a
                    class="filter btn btn-sm btn-link"
                    data-group="category_vimeo-videos"
                    >Vimeo Videos</a
                  >
                </li>
                <li>
                  <a
                    class="filter btn btn-sm btn-link"
                    data-group="category_youtube-videos"
                    >YouTube Videos</a
                  >
                </li>
              </ul>

              <!-- Portfolio Grid -->
              <div class="portfolio-grid three-columns">
                <figure
                  class="item lbaudio"
                  data-groups='["category_all", "category_soundcloud"]'
                >
                  <div class="portfolio-item-img">
                    <img
                      src="{{asset('frontend/img/portfolio/1.jpg')}}"
                      alt="SoundCloud Audio"
                      title=""
                    />
                    <a
                      href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&#038;color=%23ff5500&#038;auto_play=false&#038;hide_related=false&#038;show_comments=true&#038;show_user=true&#038;show_reposts=false&#038;show_teaser=true&#038;visual=true"
                      class="lightbox mfp-iframe"
                      title="SoundCloud Audio"
                    ></a>
                  </div>

                  <i class="fa fa-volume-up"></i>
                  <h4 class="name">SoundCloud Audio</h4>
                  <span class="category">SoundCloud</span>
                </figure>

                <figure
                  class="item standard"
                  data-groups='["category_all", "category_detailed"]'
                >
                  <div class="portfolio-item-img">
                    <img
                      src="{{asset('frontend/img/portfolio/2.jpg')}}"
                      alt="Media Project 2"
                      title=""
                    />
                    <a
                      href="portfolio-1.html"
                      class="ajax-page-load"
                    ></a>
                  </div>

                  <i class="far fa-file-alt"></i>
                  <h4 class="name">Detailed Project 2</h4>
                  <span class="category">Detailed</span>
                </figure>

                <figure
                  class="item lbvideo"
                  data-groups='["category_all", "category_vimeo-videos"]'
                >
                  <div class="portfolio-item-img">
                    <img
                      src="{{asset('frontend/img/portfolio/3.jpg')}}"
                      alt="Vimeo Video 1"
                      title=""
                    />
                    <a
                      href="https://player.vimeo.com/video/158284739"
                      class="lightbox mfp-iframe"
                      title="Vimeo Video 1"
                    ></a>
                  </div>

                  <i class="fas fa-video"></i>
                  <h4 class="name">Vimeo Video 1</h4>
                  <span class="category">Vimeo Videos</span>
                </figure>

                <figure
                  class="item standard"
                  data-groups='["category_all", "category_detailed"]'
                >
                  <div class="portfolio-item-img">
                    <img
                      src="{{asset('frontend/img/portfolio/4.jpg')}}"
                      alt="Media Project 1"
                      title=""
                    />
                    <a
                      href="portfolio-1.html"
                      class="ajax-page-load"
                    ></a>
                  </div>

                  <i class="far fa-file-alt"></i>
                  <h4 class="name">Detailed Project 1</h4>
                  <span class="category">Detailed</span>
                </figure>

                <figure
                  class="item lbimage"
                  data-groups='["category_all", "category_mockups"]'
                >
                  <div class="portfolio-item-img">
                    <img
                      src="{{asset('frontend/img/portfolio/5.jpg')}}"
                      alt="Mockup Design 1"
                      title=""
                    />
                    <a
                      class="lightbox"
                      title="Mockup Design 1"
                      href="{{asset('frontend/img/portfolio/full/5.jpg')}}"
                    ></a>
                  </div>

                  <i class="far fa-image"></i>
                  <h4 class="name">Mockup Design 1</h4>
                  <span class="category">Mockups</span>
                </figure>

                <figure
                  class="item lbvideo"
                  data-groups='["category_all", "category_youtube-videos"]'
                >
                  <div class="portfolio-item-img">
                    <img
                      src="{{asset('frontend/img/portfolio/6.jpg')}}"
                      alt="YouTube Video 1"
                      title=""
                    />
                    <a
                      href="https://www.youtube.com/embed/bg0gv2YpIok"
                      class="lightbox mfp-iframe"
                      title="YouTube Video 1"
                    ></a>
                  </div>

                  <i class="fas fa-video"></i>
                  <h4 class="name">YouTube Video 1</h4>
                  <span class="category">YouTube Videos</span>
                </figure>
              </div>
            </div>
            <!-- End of Portfolio Content -->
          </div>
        </div>
      </div>
    </section>
    <!-- End of Portfolio Subpage -->

    <!-- Blog Subpage -->
    <section data-id="blog" class="animated-section">
      <div class="page-title">
        <h2>Blog</h2>
      </div>

      <div class="section-content">
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <div class="blog-masonry two-columns clearfix">
              <!-- Blog Post 1 -->
              <div class="item post-1">
                <div class="blog-card">
                  <div class="media-block">
                    <div class="category">
                      <a href="#" title="View all posts in Design"
                        >Design</a
                      >
                    </div>
                    <a href="blog-post-1.html">
                      <img
                        src="{{asset('frontend/img/blog/blog_post_1.jpg')}}"
                        class="size-blog-masonry-image-two-c"
                        alt="Why I Switched to Sketch For UI Design"
                        title=""
                      />
                      <div class="mask"></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <div class="post-date">05 Mar 2020</div>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">
                        Why I Switched to Sketch For UI Design
                      </h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 1 -->

              <!-- Blog Post 2 -->
              <div class="item post-2">
                <div class="blog-card">
                  <div class="media-block">
                    <div class="category">
                      <a href="#" title="View all posts in UI">UI</a>
                    </div>
                    <a href="blog-post-1.html">
                      <img
                        src="{{asset('frontend/img/blog/blog_post_2.jpg')}}"
                        class="size-blog-masonry-image-two-c"
                        alt="Best Practices for Animated Progress Indicators"
                        title=""
                      />
                      <div class="mask"></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <div class="post-date">23 Feb 2020</div>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">
                        Best Practices for Animated Progress Indicators
                      </h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 2 -->

              <!-- Blog Post 3 -->
              <div class="item post-1">
                <div class="blog-card">
                  <div class="media-block">
                    <div class="category">
                      <a href="#" title="View all posts in Design"
                        >Design</a
                      >
                    </div>
                    <a href="blog-post-1.html">
                      <img
                        src="{{asset('frontend/img/blog/blog_post_3.jpg')}}"
                        class="size-blog-masonry-image-two-c"
                        alt="Designing the Perfect Feature Comparison Table"
                        title=""
                      />
                      <div class="mask"></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <div class="post-date">06 Feb 2020</div>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">
                        Designing the Perfect Feature Comparison Table
                      </h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 3 -->

              <!-- Blog Post 4 -->
              <div class="item post-2">
                <div class="blog-card">
                  <div class="media-block">
                    <div class="category">
                      <a href="#" title="View all posts in E-Commerce"
                        >UI</a
                      >
                    </div>
                    <a href="blog-post-1.html">
                      <img
                        src="{{asset('frontend/img/blog/blog_post_4.jpg')}}"
                        class="size-blog-masonry-image-two-c"
                        alt="An Overview of E-Commerce Platforms"
                        title=""
                      />
                      <div class="mask"></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <div class="post-date">07 Jan 2020</div>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">
                        An Overview of E-Commerce Platforms
                      </h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 4 -->
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
              <h4>San Francisco</h4>
              <span class="lm-info-block-value"></span>
              <span class="lm-info-block-text"></span>
            </div>

            <div class="lm-info-block gray-default">
              <i class="lnr lnr-phone-handset"></i>
              <h4>415-832-2000</h4>
              <span class="lm-info-block-value"></span>
              <span class="lm-info-block-text"></span>
            </div>

            <div class="lm-info-block gray-default">
              <i class="lnr lnr-envelope"></i>
              <h4>alex@example.com</h4>
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
@endpush

@push('page-js')
  <script>
    $(document).ready(function(){
        
        $('#contact_form').validator();
        $('#contact_form').on('submit',function(e){
            if (!e.isDefaultPrevented()) {
              var url = "{{route('contact.submit')}}";
              $.ajax({
                  type: "POST",
                  url: url,
                  data: $(this).serialize(),
                  success: function (data)
                  {
                      var messageAlert = 'alert-' + data.type;
                      var messageText = data.message;
      
                      var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable" role="alert">' + messageText + '</div>';
                      if (messageAlert && messageText) {
                          $('#contact_form').find('.messages').html(alertBox);
                          $('#contact_form')[0].reset();
                      }
                      
                  }
              });
              return false;
            }
    
        });
        
    });
  </script>
@endpush
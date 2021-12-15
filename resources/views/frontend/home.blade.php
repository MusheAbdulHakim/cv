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
              @foreach (App\Models\Post::get() as $blog)
              <!-- Blog Post -->
              <div class="item post-1">
                <div class="blog-card">
                  <div class="media-block">
                    <div class="category">
                      <a href="#" title="View all posts in {{$blog->category->name}}"
                        >{{$blog->category->name}}</a
                      >
                    </div>
                    <a href="{{route('blog.show',$blog->title)}}">
                      <img
                        src="{{!empty($blog->thumbnail) ? asset('storage/posts/'.$blog->thumbnail): asset('frontend/img/blog/blog_post_1.jpg')}}"
                        class="size-blog-masonry-image-two-c"
                        alt="{{$blog->title}}"
                        title=""
                      />
                      <div class="mask"></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <div class="post-date">{{date_format(date_create($blog->created_at),'D M Y')}}</div>
                    <a href="{{route('blog.show',$blog->title)}}">
                      <h4 class="blog-item-title">
                        {{$blog->title}}
                      </h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post -->
              @endforeach

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
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Blog</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta
      name="description"
      content="BreezyCV - Resume / CV / vCard Template"
    />
    <meta
      name="keywords"
      content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, portfolio"
    />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="{{asset('frontend/favicon.ico')}}" />

    <link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-grid.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/animations.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/perfect-scrollbar.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/prism.css')}}">
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
        <livewire:header />
        {{-- / header  --}}
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
    <script src="{{asset('frontend/js/prism.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</html>

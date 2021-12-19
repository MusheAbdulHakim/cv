<section data-id="blog" class="animated-section">
    <div class="row">
      <div class="col-lg-6">
        <div class="page-title">
          <h2>Blog</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="blog-search right mb-sm-4">
          <input wire:model="search" type="search" placeholder="Search posts by title...">
        </div>
      </div>
    </div>

    <div class="section-content">
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <div class="blog-masonry two-columns clearfix">
            
            @foreach ($posts as $blog)
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
                            {{ucwords($blog->title)}}
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



{{-- <div>
    {{$posts->onEachSide(1)->links('pagination::livewire-pagination')}}
</div> --}}
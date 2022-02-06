@props(['posts' => $posts])
@foreach ($posts as $blog)
    <!-- Blog Post -->
    <div class="item post-1">
        <div class="blog-card">
        <div class="media-block">
            <div class="category">
            <a href="#" title="View all posts in {{$blog->category->name ?? ''}}"
                >{{$blog->category->name ?? ''}}</a
            >
            </div>
            <a href="{{route('blog.show',$blog->title)}}">
            <img
                src="{{!empty($blog->thumbnail) ? asset('storage/posts/'.$blog->thumbnail): asset('frontend/img/blog/blog_post_1.jpg')}}"
                class="size-blog-masonry-image-two-c"
                alt="{{$blog->title}}"
                title="{{$blog->title}}"
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

<div class="ml-md-5 ml-lg-5">
    {{$posts->links('pagination::simple-bootstrap-4')}}
</div>

@push('page-js')
    <script>
        $(document).ready(function(){
            $('.pagination a.page-link').click(function(e){
                var link = e.attr('href');
                
            })
        })
    </script>
@endpush
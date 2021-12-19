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
        <livewire:about />
    <!-- End of About Me Subpage -->

    <!-- Resume Subpage -->
        <livewire:resume />      
    <!-- End of Resume Subpage -->

    <!-- Blog Subpage -->
    <livewire:blog />
    <!-- End of Blog Subpage -->

    <!-- Contact Subpage -->
    <livewire:contact />
    <!-- End of Contact Subpage -->
</div>

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
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

            @foreach ($clients as $client)
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
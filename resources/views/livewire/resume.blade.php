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
<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>{{ $title[2]->title }}</h2>
        <p>{{ $title[2]->subtitle }}</p> 
      </div>

      <div class="row skills-content">

        <div class="col-lg-6" data-aos="fade-up">
          @for ($i = 0; $i < count($skill) ; $i++)
          @if ( $i %2 == 0)
          <div class="progress">
            <span class="skill">{{ $skill[$i]->skill }} <i class="val">{{ $skill[$i]->value }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill[$i]->value }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          @endif
          @endfor
        </div>

        <div class="col-lg-6" data-aos="fade-up">
          @for ($i = 0; $i < count($skill) ; $i++)
          @if ( $i %2 == 1)
          <div class="progress">
            <span class="skill">{{ $skill[$i]->skill }} <i class="val">{{ $skill[$i]->value }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill[$i]->value }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          @endif
          @endfor
        </div>

      </div>

    </div>
  </section><!-- End Skills Section -->
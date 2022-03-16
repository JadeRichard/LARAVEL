<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>{{ $title[0]->title }}</h2>
        <p>{{ $title[0]->subtitle }}</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{ asset("img/profile-img.jpg") }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>UI/UX Designer &amp; Web Developer.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                @for ($i = 0; $i < 4; $i++)
                <li><i class="{{ $about[$i]->icon }}"></i> <strong>{{ $about[$i]->info }}</strong> <span>{{ $about[$i]->text }}</span></li>
                @endfor
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                @for ($i = 4; $i < 8; $i++)
                <li><i class="{{ $about[$i]->icon }}"></i> <strong>{{ $about[$i]->info }}</strong> <span>{{ $about[$i]->text }}</span></li>
                @endfor
              </ul>
            </div>
          </div>
          <p>
            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
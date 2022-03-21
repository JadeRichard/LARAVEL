<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <div class="section-title">
        <h2>{{ $title[4]->title }}</h2>
        <p>{{ $title[4]->subtitle }}</p> 
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          @foreach ($testimonial as $item)
          <div class="swiper-slide">
            <div class="testimonial-item" data-aos="fade-up">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{ $item->text }}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{ asset("img/" . $item->icon) }}" class="testimonial-img" alt="">
              <h3>{{ $item->name }}</h3>
              <h4>{{ $item->role }}</h4>
            </div>
          </div><!-- End testimonial item -->
          @endforeach

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
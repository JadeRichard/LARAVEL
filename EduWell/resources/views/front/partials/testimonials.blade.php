<section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Testimonials</h6>
            <h4>What They <em>Think</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">

            @foreach ($testimonials as $item)
            <div class="item">
              <p>{{ $item->description }}</p>
                <h4>{{ $item->name }}</h4>
                <span>{{ $item->role }}</span>
                <img src="{{ asset("images/quote.png") }}" alt="">
            </div>
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
  </section>
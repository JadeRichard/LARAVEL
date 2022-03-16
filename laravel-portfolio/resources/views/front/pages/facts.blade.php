<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
    <div class="container">

      <div class="section-title">
        <h2>{{ $title[1]->title }}</h2>
        <p>{{ $title[1]->subtitle }}</p> 
      </div>

      <div class="row no-gutters">
        @foreach ($fact as $item)
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="{{ $item->icon }}"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $item->number }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>{{ $item->important }}</strong> {{ $item->text }}</p>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Facts Section -->
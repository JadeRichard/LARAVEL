<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>{{ $banner->title }}</h2>
                    <p>{{ $banner->description }}</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="{{ $banner->button_1_link }}">{{ $banner->button_1_text }} {!! $banner->button_1_icon !!}</a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="{{ $banner->button_2_link }}">{{ $banner->button_2_text }} {!! $banner->button_2_icon !!}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset("images/" . $images[1]->image) }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
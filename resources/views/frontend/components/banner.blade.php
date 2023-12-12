  <section class="sectionBlock__content">
    <!-- Swiper -->
    @if(count($banners) > 0)
      <div class="swiper mySwiper" id="Gslider">
        {{-- <ol class="carousel-indicators">
          @foreach($banners as $key=>$banner)
            <li data-target="#Gslider" data-slide-to="{{$key}}" class="{{(($key==0)? 'active' : '')}}"></li>
          @endforeach
        </ol> --}}
        <div class="swiper-wrapper">
          @foreach($banners as $key=>$banner)
            <div class="swiper-slide">
              <img src="{{$banner->photo}}" class="d-block" alt="Novaland">
              <div class="slide-caption d-none d-md-block text-left">
                <div class="title" ></div>
                <div class="description">{!! html_entity_decode($banner->description) !!}</div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    @endif
  </section>

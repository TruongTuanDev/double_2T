<section class="section-hot-categories mb-4">
  <div class="container-fluid px-lg-5">
      <h4 class="sectionBlock__title mb-2" style="font-weight: 700; color: #333;">{{ GoogleTranslate::trans('Chuyên ngành nổi bật', app()->getLocale())}}</h4>
      <div>
          <div class="row flex-nowrap overflow-auto" style="height: 14rem;">
            @foreach($majors as $major) 
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <div class="wrap-item">
                      <div class="category-item">
                          <a href="/search-jobs">
                              <img src="{{ $major->logo }}"
                                  alt="category icon">
                              <div class="wrap-name">
                                  <h5 class="title truncate-text-2-line">{{$major->name}}</h5>
                              </div>
                              <p class="total">{{ $major->traffic_volume }}<span></span></p>
                          </a>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</section>
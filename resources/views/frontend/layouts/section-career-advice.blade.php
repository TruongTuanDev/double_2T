<section class="section-career-advice mb-4">
  <div class="career-advice-container">
      <div class="container-fluid p-2 p-sm-3 p-lg-5">
          <h4 class="mb-3" style="font-weight: 700; color: #333;">Career Advice From HR Insider</h4>
          <div class="row flex-nowrap overflow-auto">
            @foreach($news as $new) 
              <div class="col-12 col-md-6 col-lg-3">
                  <div class="card career-card" style="height: 100%;">
                      <img src="{{ asset($new->image) }}" alt="" class="card-img-top">
                      <div class="card-body">
                          <h5 class="card-title">{{ $new->title }}</h5>
                          <p class="card-text">{!!$new->content!!}</p>
                          <a href="#" class="btn btn-primary fa fa-eye">  {{ $new->view }}</a>
                          <a href="#" class="btn btn-primary">Detail</a>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</section>
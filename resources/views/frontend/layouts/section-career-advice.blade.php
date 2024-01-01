<section class="section-career-advice mb-4">
  <div class="career-advice-container">
      <div class="container-fluid p-2 p-sm-3 p-lg-5">
          <h4 class="mb-3" style="font-weight: 700; color: #333;">Tin tức mới nhất hôm nay</h4>
          <div class="row flex-nowrap overflow-auto">
            @foreach($news as $new) 
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card career-card" style="height: 100%;">
                    <img src="{{$new->image}}" width="100%"  height="200px" class="card-img-top">
                    <div class="card-body">
                        <a href="{{route('news.detail',$new->slug)}}" class="card-title" style="font-size: 23px ; font-weight: 700 ;font-family: 'Times New Roman', Times, serif">{{ $new->title }}</a>
                        <p class="card-text">{{ Str::of($new->content)->stripTags()->limit(200) }}</p>
                        <a class="fa fa-eye text-black"> {{ $new->view }}</a>
                        <a href="{{route('news.detail',$new->slug)}}" style="text-align: right; display: block;" class="text-black">xem thêm...</a>
                    </div>
                </div>
            </div>
              @endforeach
          </div>
      </div>
  </div>
</section>
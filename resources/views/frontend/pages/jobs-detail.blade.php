<div class="section-jobs-detail">
  <img class="back-ground w-100" src="img/about.jpg" alt="">
      <div class="content-jobs-detail">
        <div class="header-jobs-detail">
          <div class="container">
            <div class="row">
              <div class="product-item">
                <div class="card jobs-card">
                    <div class="card-body">
                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                <div class="job-img me-3">
                                    <img class="w-100" src="{{$company->logo}}"
                                        alt="logo" width="78px">
                                </div>
                                <div class="job-info">
                                    <div class="job-name job-item">
                                        <a href="" class="job-link">{{$job->title}}</a>
                                    </div>
                                    <div class="company-name job-item">
                                        <a href="" class="job-company">{{$company->name_compn}}</a>
                                    </div>
                                    <div class="job-location job-fs">{{$job->address}}</div>
                                    <div class="job-salary job-item job-fs">{{$job->salary}}$</div>
                                    <div class="bonus job-fs"><p>1682 lượt xem - Hết hạn trong 3 ngày</p></div>
                                </div>
                                <div class="featured d-flex justify-content-end ms-4" >
                                    <a class="btn-one job" id="post_id" href="{{route('cart.add',['post' => $job->id_post])}}" data-post-id="{{$job->id_post}}">
                                      <i class="fa-regular fa-heart"></i>
                                    </a>
                                    <button class="btn-two">
                                      Apply Now
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="nav-bar container">
                <ul class="nav nav-tabs">
                  <li class="nav-item active">
                    <a class="nav-link" data-bs-toggle="tab" href="#job-info">Thông tin công việc</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#companyInfo">Thông tin công ty</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#job-company">Công việc đến từ công ty</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="container tab-content">
                <div class="container-fluid content-job-details tab-pane active" id="job-info">
                  <div class="row">
                    <div class="col-md-8 col-sm-12">
                      <div class="description-1 mt-3">
                        <p class="title-description">Ưu đãi dành cho bạn</p>
                        <p>{{$job->treatment}}</p>
                  
                      </div>
                      <div class="description-1 mt-3">
                        <p class="title-description">Mô tải công việc</p>
                        <p>
                         {!!$job->description!!}
                        </p>
                      </div>
                      <div class="description-1 mt-3">
                        <p class="title-description">YÊU CẦU CÔNG VIỆC</p>
                        <p>
                          {{$job->requiment}}
                        </p>
                      </div>
                      <div class="description-1 mt-3">
                        <p class="title-description">Địa điểm làm việc</p>
                        <p><span><i class="fa-solid fa-location-dot"></i></span>{{$job->address}}</p>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <div class="section-right mt-3">
                        <div class="section-right-one">
                          <div class="summary">
                            <p><span><i class="fa-regular fa-calendar-days"></i></span>Ngày đăng tuyển</p>
                            <p>{{$job->post_date}}</p>
                          </div>
                          <div class="summary">
                            <p><span><i class="fa-solid fa-layer-group"></i></span>CẤP BẬC</p>
                            <p>{{$job->position}}</p>
                          </div>
                          <div class="summary">
                            <p><span><i class="fa-solid fa-business-time"></i></span>NGÀNH NGHỀ</p>
                            <p>Cấp quản lý điều hành, Bán hàng, Ngân hàng</p>
                          </div>
                          <div class="summary d-flex justify-content-center">
                            <img class="w-25" src="img/vnw-logo-inTECH.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane container fade" id="companyInfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-12">
                      <p class="mt-3"><a href="#" class="me-2">Xem toàn bộ hồ sơ công ty</a><i class="fa-solid fa-arrow-up-right-from-square text-primary"></i></p>
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                      <div class="swiper-wrapper mar-bt">
                        <div class="swiper-slide">
                          <img src="img/slide/img-company1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="img/slide/img-cpmpany2.webp" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="img/slide/img-cpmpany3.webp" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="img/slide/img-cpmpany4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="img/slide/img-cpmpany6.webp" alt="">
                        </div>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>  
                    <p class="mt-4 cty-description">
                      From 1st January 2023, our company will embark on a new milestone to be an independent legal entity, from LG Vehicle components Solution Development Center Vietnam - LG VS DCV -become LG Electronics Development Vietnam Company Limited – LGEDV. <br>
                      LGEDV is a member of LG Electronics, focuses on commercializing environmentally responsible automotive components and core solutions based on LG’s proprietary technologies.<br>
                      From the beginning, since automotive components industry was still brand new in Vietnam, we has always tried our best to build an R&D in Vietnam and became a home of over 700 members across Hanoi, Haiphong & Danang.<br>
                      The new journey of LG Electronics Development Vietnam Company Limited – LGEDV starts, we still keep persistent ambition to build an No.1 R&D in Vietnam. In the future, we keep expanding our research fields, creating a dynamic, creative & challenge working environment for our colleagues to grow with our global business.<br>
                      Thank you so much for your trust all though time & keep follow us to see more our milestones in the future.<br>
                    </p>                   
                    </div>
                    <div class="col-md-4 col-sm-12 mt-3">
                      <div class="section-right mt-4">
                        <div class="section-right-one mt-2">
                          <div class="summary">
                            <p><span><i class="fa-solid fa-location-dot"></i></span>ĐỊA ĐIỂM</p>
                            <p>32F & 36F, Keangnam Landmark 72 Tower, Pham Hung, Nam Tu Liem, Hanoi</p>
                          </div>
                          <div class="summary">
                            <p><span><i class="fa-solid fa-user"></i></i></span>LIÊN HỆ</p>
                            <p>HR Department</p>
                          </div>
                          <div class="summary d-flex justify-content-center">
                            <img class="w-25" src="img/vnw-logo-inTECH.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane container fade" id="job-company">
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
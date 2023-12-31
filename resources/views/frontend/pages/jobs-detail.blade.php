<div class="section-jobs-detail">
    <img class="back-ground w-100" src="" alt="">
    <div class="content-jobs-detail">
        <div class="header-jobs-detail">
            <div class="container">
                <div class="row">
                    <div class="product-item">
                        <div class="card jobs-card">
                            <div class="card-body">
                                <div class="view_job_item d-flex align-items-center justify-content-start">
                                    <div class="job-img me-3">
                                        <img class="w-100" src="{{ $company->logo }}" alt="logo" width="78px">
                                    </div>
                                    <div class="job-info">
                                        <div class="job-name job-item">
                                            <a href="" class="job-link">{{ $job->title }}</a>
                                        </div>
                                        <div class="company-name job-item">
                                            <a href="" class="job-company">{{ $company->name_compn }}</a>
                                        </div>
                                        <div class="job-location job-fs">{{ $job->address }}</div>
                                        <div class="job-salary job-item job-fs">{{ $job->salary }}$</div>
                                        <div class="bonus job-fs">
                                            <p>{{ $job->traffic_volume }} lượt xem</p>
                                        </div>
                                    </div>
                                    <div class="featured d-flex justify-content-end ms-4">
                                        <a class="btn-one job" id="post_id"
                                            href="{{ route('cart.add', ['post' => $job->id_post]) }}"
                                            data-post-id="{{ $job->id_post }}">
                                            @if ($jobfav != null)
                                                @if ($jobfav->status === 'active')
                                                    <i class="fa-solid fa-heart" style="color: rgb(255, 136, 0)"></i>
                                                @endif
                                            @elseif($jobfav == null)
                                                <i class="fa-regular fa-heart"></i>
                                            @endif
                                        </a>
                                        <button id="submitBtn" onclick="showForm()" class="btn-two">
                                            Nộp đơn
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="nav-bar container">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Thông tin công việc</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Thông tin công ty</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Công việc đến từ công
                                    ty</button>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="row">
                    <div class="container tab-content" id="pills-tabContent">
                        <div class="tab-pane container fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row bg-white">
                                <div class="col-md-8 col-sm-12">
                                    <div class="description-1 mt-3">
                                        <p class="title-description">Ưu đãi dành cho bạn</p>
                                        <p>{{ $job->treatment }}</p>

                                    </div>
                                    <div class="description-1 mt-3">
                                        <p class="title-description">Mô tải công việc</p>
                                        <p>
                                            {!! $job->description !!}
                                        </p>
                                    </div>
                                    <div class="description-1 mt-3">
                                        <p class="title-description">YÊU CẦU CÔNG VIỆC</p>
                                        <p>
                                            {{ $job->requiment }}
                                        </p>
                                    </div>
                                    <div class="description-1 mt-3">
                                        <p class="title-description">Địa điểm làm việc</p>
                                        <p><span><i class="fa-solid fa-location-dot"></i></span>{{ $job->address }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="section-right mt-3">
                                        <div class="section-right-one">
                                            <div class="summary">
                                                <p><span><i class="fa-regular fa-calendar-days"></i></span>Ngày đăng
                                                    tuyển</p>
                                                <p>{{ $job->post_date }}</p>
                                            </div>
                                            <div class="summary">
                                                <p><span><i class="fa-solid fa-layer-group"></i></span>CẤP BẬC</p>
                                                <p>{{ $job->position }}</p>
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
                        <div class="tab-pane container fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row bg-white">
                                <div class="col-md-8 col-sm-12">
                                    <p class="mt-3"><a href="#" class="me-2">Xem toàn bộ hồ sơ công
                                            ty</a><i class="fa-solid fa-arrow-up-right-from-square text-primary"></i>
                                    </p>
                                    <!-- Swiper -->

                                    <p class="mt-4 cty-description card-text">
                                        {!! $company->description !!}

                                        <br>
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-12 mt-3">
                                    <div class="section-right mt-4">
                                        <div class="section-right-one mt-2">
                                            <div class="summary">
                                                <p><span><i class="fa-solid fa-location-dot"></i></span>ĐỊA ĐIỂM</p>
                                                <p>{{ $company->address }}</p>
                                            </div>
                                            <div class="summary">
                                                <p><span><i class="fa-solid fa-user"></i></i></span>LIÊN HỆ</p>
                                                <p>HR department</p>
                                            </div>
                                            <div class="summary d-flex justify-content-center">
                                                <img class="w-25" src="img/vnw-logo-inTECH.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row bg-white">
                                <div class="row p-3" style="overflow: auto;">
                                    @foreach ($job_company as $job_company)
                                        @if ($job_company->id_post != $job->id_post && $job_company->status == 'active')
                                            <div class="col-lg-12 col-md-12">
                                                <div class="product-item mb-4">
                                                    <div class="card jobs-card">
                                                        <div class="card-body row">
                                                            <div
                                                                class="view_job_item col-md-10 d-flex align-items-center justify-content-start">
                                                                <div class="job-img">
                                                                    <img src="" alt="logo"
                                                                        width="78px">
                                                                </div>
                                                                <div class="job-info mx-2">
                                                                    <div class="job-name job-item">
                                                                        <a href="{{ route('job-detail', $job_company->id_post) }}"
                                                                            class="job-link">{{ $job_company->title }}</a>
                                                                    </div>
                                                                    <div class="company-name job-item">
                                                                        <a href="{{ 'companydetail', $company->id_emp }}"
                                                                            class="job-conpany">{{ $company->name_compn }}</a>
                                                                    </div>
                                                                    <div class="job-salary job-item">
                                                                        {{ $job_company->salary }} |
                                                                        {{ $job_company->address }}</div>
                                                                    <div class="job-location">
                                                                        {{ $job_company->address }}</div>
                                                                    <div class="job-location">Ngày đăng:
                                                                        {{ $job_company->created_at }}</div>
                                                                </div>
                                                            </div>
                                                            <div class="featured  col-md-2 mt-2">
                                                                <a class="btn-one job" id="post_id"
                                                                    href="{{ route('cart.add', ['post' => $job_company->id_post]) }}"
                                                                    data-post-id="{{ $job_company->id_post }}">
                                                                    @php
                                                                        $count = 0;
                                                                    @endphp
                                                                    @foreach ($jobfavs as $jobfav)
                                                                        @if ($jobfav->post_id === $job_company->id_post)
                                                                            <i class="fa-solid fa-heart"
                                                                                style="color: rgb(255, 136, 0)"></i>
                                                                            @php
                                                                                $count = $count + 1;
                                                                            @endphp
                                                                        @elseif($jobfav->post_id != $job_company->id_post)
                                                                        @endif
                                                                    @endforeach
                                                                    @if ($count === 0)
                                                                        <i class="fa-regular fa-heart"></i>
                                                                    @endif
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="container-fluid content-job-details tab-pane active" id="job-info">
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
                <div class="tab-pane container fade content-job-details" id="companyInfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-12">
                      <p class="mt-3"><a href="#" class="me-2">Xem toàn bộ hồ sơ công ty</a><i class="fa-solid fa-arrow-up-right-from-square text-primary"></i></p>
                    <!-- Swiper -->
                    
                    <p class="mt-4 cty-description card-text">
                      {!!($company->description)!!}
                      
                      <br>
                    </p>                   
                    </div>
                    <div class="col-md-4 col-sm-12 mt-3">
                      <div class="section-right mt-4">
                        <div class="section-right-one mt-2">
                          <div class="summary">
                            <p><span><i class="fa-solid fa-location-dot"></i></span>ĐỊA ĐIỂM</p>
                            <p>{{$company->address}}</p>
                          </div>
                          <div class="summary">
                            <p><span><i class="fa-solid fa-user"></i></i></span>LIÊN HỆ</p>
                            <p>HR department</p>
                          </div>
                          <div class="summary d-flex justify-content-center">
                            <img class="w-25" src="img/vnw-logo-inTECH.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane container fade content-job-details" id="job-company">
                  <div class="row">
                    <div class="row p-3" style="overflow: auto;">
                      @foreach ($job_company as $job_company)
                      @if ($job_company->id_post != $job->id_post && $job_company->status == 'active')
                      <div class="col-lg-12 col-md-12">
                          <div class="product-item mb-4">
                              <div class="card jobs-card">
                                  <div class="card-body row">
                                      <div class="view_job_item col-md-10 d-flex align-items-center justify-content-start">
                                          <div class="job-img">
                                              <img src=""
                                                  alt="logo" width="78px">
                                          </div>
                                          <div class="job-info mx-2">
                                              <div class="job-name job-item">
                                                  <a href="{{route('job-detail',$job_company->id_post)}}" class="job-link">{{$job_company->title}}</a>
                                              </div>
                                              <div class="company-name job-item">
                                                  <a href="{{ 'companydetail',$company->id_emp }}" class="job-conpany">{{ $company->name_compn }}</a>
                                              </div>
                                              <div class="job-salary job-item">{{$job_company->salary}} | {{$job_company->address}}</div>
                                              <div class="job-location">{{$job_company->address}}</div>
                                              <div class="job-location">Ngày đăng: {{$job_company->created_at}}</div>
                                          </div>
                                      </div>
                                      <div class="featured  col-md-2 mt-2" >
                                        <a class="btn-one job" id="post_id" href="{{route('cart.add',['post' => $job_company->id_post])}}" data-post-id="{{$job_company->id_post}}">
                                          @php
                                           $count = 0;
                                           @endphp
                                           @foreach ($jobfavs as $jobfav)
                                           @if ($jobfav->post_id === $job_company->id_post)
                                           <i class="fa-solid fa-heart" style="color: rgb(255, 136, 0)"></i>
                                           @php
                                           $count = $count + 1;
                                           @endphp
                                           @elseif($jobfav->post_id != $job_company->id_post)
                                           @endif
                                           @endforeach
                                           @if ($count === 0)
                                           <i class="fa-regular fa-heart"></i>
                                           @endif
                                        </a>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endif
                      @endforeach
                  </div>
                </div> --}}
                        </div>
                    </div>
                </div>
                <div class=" container  content-job-details mt-3 p-3 mb-3">
                    <h3 class="mt-3">VIỆC LÀM BẠN SẼ THÍCH</h3>
                    <div class="row">

                        <div class="row p-3">
                            @foreach ($job_recomment as $job_company)
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-item mb-4">
                                        <div class="card jobs-card">
                                            <div class="card-body ">
                                                <div
                                                    class="view_job_item  d-flex align-items-center justify-content-start">
                                                    <div class="job-img">
                                                        <img src="" alt="logo" width="78px">
                                                    </div>
                                                    <div class="job-info mx-2">
                                                        <div class="job-name job-item">
                                                            <a href="{{ route('job-detail', $job_company->id_post) }}"
                                                                class="job-link">{{ $job_company->title }}</a>
                                                        </div>
                                                        <div class="company-name job-item">
                                                            <a href="{{ 'companydetail', $company->id_emp }}"
                                                                class="job-conpany">{{ $company->name_compn }}</a>
                                                        </div>
                                                        <div class="job-salary job-item">{{ $job_company->salary }} |
                                                            {{ $job_company->address }}</div>
                                                        <div class="job-location">{{ $job_company->address }}</div>
                                                        <div class="job-location">Ngày đăng:
                                                            {{ $job_company->created_at }}</div>
                                                    </div>
                                                    <div class="featured">
                                                        <div type="Hot" title="Hot">
                                                            <svg width="14" height="14" viewBox="0 0 14 14"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.06668 0.93335C5.94291 0.93335 5.82421 0.982516 5.73669 1.07003C5.64918 1.15755 5.60001 1.27625 5.60001 1.40002C5.60001 3.75995 2.33334 5.60002 2.33334 8.86668C2.33334 11.3483 5.02297 12.9528 5.97006 13.0567C6.00183 13.0634 6.03421 13.0667 6.06668 13.0667C6.19044 13.0667 6.30914 13.0175 6.39666 12.93C6.48418 12.8425 6.53334 12.7238 6.53334 12.6C6.53331 12.5307 6.51783 12.4622 6.48803 12.3997C6.45823 12.3371 6.41487 12.2819 6.36108 12.2382V12.2373C5.93641 11.8929 5.13334 10.8937 5.13334 9.9814C5.13334 8.48386 6.53334 7.93335 6.53334 7.93335C5.73488 10.192 8.35121 10.4649 8.87761 12.7012H8.87853C8.90152 12.8047 8.9591 12.8973 9.04177 12.9638C9.12444 13.0302 9.22728 13.0665 9.33334 13.0667C9.43162 13.0664 9.52731 13.0352 9.60678 12.9774C9.6152 12.9713 9.6234 12.9649 9.63139 12.9582C9.70734 12.9089 11.6667 11.613 11.6667 8.86668C11.6667 7.74546 11.1059 5.81958 10.7024 4.96655L10.7014 4.96382L10.7005 4.962C10.6662 4.87494 10.6064 4.80023 10.5291 4.74757C10.4517 4.69491 10.3603 4.66673 10.2667 4.66668C10.1577 4.66679 10.0522 4.70503 9.96843 4.77479C9.88469 4.84454 9.82801 4.94141 9.80821 5.04858V5.05041C9.80707 5.05551 9.59273 6.00743 8.86668 6.53335C8.86668 4.33459 7.27925 2.06344 6.4422 1.12384C6.42964 1.10683 6.41593 1.09069 6.40118 1.07554C6.35777 1.03067 6.3058 0.994962 6.24834 0.970538C6.19088 0.946115 6.12911 0.933469 6.06668 0.93335Z"
                                                                    fill="#DC362E">
                                                                </path>
                                                            </svg>Hot
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class=" container  content-job-details mt-3 p-3 mb-3">
                    <h3 class="mt-3">CÔNG TI BẠN SẼ THÍCH</h3>
                    <div class="row">

                        <div class="row p-3">
                            @foreach ($company_recomment as $company)
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-item mb-4">
                                        <div class="card jobs-card">
                                            <div class="card-body ">
                                                <div
                                                    class="view_job_item  d-flex align-items-center justify-content-start">
                                                    <div class="job-img">
                                                        <img src="{{ $company->logo }}" alt="logo"
                                                            width="78px">
                                                    </div>
                                                    <div class="job-info mx-2">
                                                        <div class="job-name job-item">
                                                            <a href="{{ route('companydetail', $company->id_emp) }}"
                                                                class="job-link">{{ $company->name_compn }}</a>
                                                        </div>
                                                        <div class="job-salary job-item">{{ $company->address }} |
                                                            {{ $job_company->address }}</div>
                                                        <div class="job-location">{{ $company->job_quantity }} việc
                                                            làm</div>

                                                    </div>
                                                    <div class="featured">
                                                        <div type="Hot" title="Hot">
                                                            <svg width="14" height="14" viewBox="0 0 14 14"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.06668 0.93335C5.94291 0.93335 5.82421 0.982516 5.73669 1.07003C5.64918 1.15755 5.60001 1.27625 5.60001 1.40002C5.60001 3.75995 2.33334 5.60002 2.33334 8.86668C2.33334 11.3483 5.02297 12.9528 5.97006 13.0567C6.00183 13.0634 6.03421 13.0667 6.06668 13.0667C6.19044 13.0667 6.30914 13.0175 6.39666 12.93C6.48418 12.8425 6.53334 12.7238 6.53334 12.6C6.53331 12.5307 6.51783 12.4622 6.48803 12.3997C6.45823 12.3371 6.41487 12.2819 6.36108 12.2382V12.2373C5.93641 11.8929 5.13334 10.8937 5.13334 9.9814C5.13334 8.48386 6.53334 7.93335 6.53334 7.93335C5.73488 10.192 8.35121 10.4649 8.87761 12.7012H8.87853C8.90152 12.8047 8.9591 12.8973 9.04177 12.9638C9.12444 13.0302 9.22728 13.0665 9.33334 13.0667C9.43162 13.0664 9.52731 13.0352 9.60678 12.9774C9.6152 12.9713 9.6234 12.9649 9.63139 12.9582C9.70734 12.9089 11.6667 11.613 11.6667 8.86668C11.6667 7.74546 11.1059 5.81958 10.7024 4.96655L10.7014 4.96382L10.7005 4.962C10.6662 4.87494 10.6064 4.80023 10.5291 4.74757C10.4517 4.69491 10.3603 4.66673 10.2667 4.66668C10.1577 4.66679 10.0522 4.70503 9.96843 4.77479C9.88469 4.84454 9.82801 4.94141 9.80821 5.04858V5.05041C9.80707 5.05551 9.59273 6.00743 8.86668 6.53335C8.86668 4.33459 7.27925 2.06344 6.4422 1.12384C6.42964 1.10683 6.41593 1.09069 6.40118 1.07554C6.35777 1.03067 6.3058 0.994962 6.24834 0.970538C6.19088 0.946115 6.12911 0.933469 6.06668 0.93335Z"
                                                                    fill="#DC362E">
                                                                </path>
                                                            </svg>Hot
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Overlay và Form -->
        <!-- Nội dung form -->

        <div class="overlay" id="overlay">
            <div id="submissionForm">
                <div id="formHeader">
                    <div class="card-body">
                        <div class="view_job_item d-flex align-items-center justify-content-start">
                            <div class="job-img me-3">
                                <img class="w-100" src="{{ $company->logo }}" alt="logo" width="78px">
                            </div>
                            <div class="job-info">
                                <div class="job-name job-item">
                                    <a href="" class="job-link">{{ $job->title }}</a>
                                </div>
                                <div class="company-name job-item">
                                    <a href="" class="job-company">{{ $company->name_compn }}</a>
                                </div>
                                <div class="job-location job-fs">{{ $job->address }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <form id="myForm" method="POST" action="{{ route('sendinfor.apply') }}" enctype="multipart/form-data">
                    @csrf
                    <input name="post_id_post" value="{{ $job->id_post }}" type="text" hidden>
                    <input name="student_id_stu" value="{{ $student->id_stu }}" type="text" hidden>
                    <label for="fullName">
                        @if (Auth()->id() != null)
                            <strong>
                                {{ Auth()->user()->name }}
                            </strong>
                        @endif
                    </label>
                    <label>CV:</label>
                    <input type="file" name="file_CV">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Nội dung đơn:</label>
                    <textarea id="message" name="message" required></textarea>
                    <button type="submit" class="btn btn-success" id="submitBtn">Gửi đơn</button>
                </form>
            </div>
        </div>

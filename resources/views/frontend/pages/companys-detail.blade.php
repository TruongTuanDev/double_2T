<div class="section">
<div class="section-jobs-detail">
    <img class="w-100" height="400px" src="{{ $company->background }}" alt="logo" width="">
    <div class="content-jobs-detail">
        <div class="header-jobs-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="product-item">
                        <div class="card jobs-card" style="border-radius: 0px">
                            <div class="card-body" >
                                <div class="view_job_item d-flex align-items-center justify-content-start">
                                    <div class="job-img me-3">
                                        <img  src="{{ $company->logo }}" alt="logo" width="78px">
                                    </div>
                                        <div class="job-info">
                                            <div class="job-name job-item">
                                                <a href="#" class="job-link"><h2>{{ $company->name_compn }}</h2></a>
                                            </div></a>
                                            </div>
                                    <div class="featured d-flex justify-content-end ms-4">
                                        @if($follow!=null)
                                        @if ($follow->status === 'active')
                                        <a class="btn-follow" style="background-color: blue"  href="{{route('user.follow',['id_emp' => $company->id_emp])}}">
                                            Following
                                        </a>
                                      @endif
                                      @elseif($follow == null)
                                      <a class="btn-follow" href="{{route('user.follow',['id_emp' => $company->id_emp])}}">
                                        Follow
                                      </a>
                                      @endif
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
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{ trans('hello.inforcompn') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{{ trans('hello.jobcompn') }}</button>
                            </li>
                          </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="container tab-content " id="pills-tabContent">
                        <div class="tab-pane fade show active container " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row bg-white">
                                <div class="col-md-8 col-sm-12">
                                    <p class="mt-3"><a href="#" class="me-2"> {{ trans('hello.doc') }}</a><i class="fa-solid fa-arrow-up-right-from-square text-primary"></i>
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
                                                <p><span><i class="fa-solid fa-location-dot"></i></span>{{ trans('hello.jobaddress') }}</p>
                                                <p>{{ $company->address }}</p>
                                            </div>
                                            <div class="summary">
                                                <p><span><i class="fa-solid fa-user"></i></i></span>{{ trans('hello.contact') }}</p>
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
                        {{-- <div class="tab-pane fade container" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            @foreach ($job as $job)
                            <div class="col-lg-12">
                              <div class="product-item mb-4">
                                  <div class="card jobs-card">
                                      <div class="card-body">
                                          <div class="view_job_item d-flex align-items-center justify-content-start">
                                              <div class="job-img">
                                                  <img src=""
                                                      alt="logo" width="78px">
                                              </div>
                                              <div class="job-info mx-2">
                                                  <div class="job-name job-item">
                                                      <a href="{{route('job-detail',4)}}" class="job-link">{{ $job->title }}</a>
                                                  </div>
                                                  <div class="company-name job-item">
                                                      <a href="detail-jobs.html " class="job-conpany"></a>
                                                  </div>
                                                  <div class="job-salary job-item">{{ $job->salary }}</div>
                                                  <div class="job-location">{{ $job->address }}</div>
                                              </div>
                                              <div class="featured">
                                                  <div type="Hot" title="Hot">
                                                      <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg">
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
                        </div> --}}
                        <div class="tab-pane container fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-contact-tab" tabindex="0">
                        <div class="row bg-white">
                            <div class="row p-3" style="overflow: auto;">
                                @foreach ($job as $job)
                                    @if ( $job->status == 'active')
                                        <div class="col-lg-12 col-md-12">
                                            <div class="product-item mb-4">
                                                <div class="card jobs-card">
                                                    <div class="card-body row">
                                                        <div
                                                            class="view_job_item col-md-10 d-flex align-items-center justify-content-start">
                                                            <div class="job-img">
                                                                <img src="{{$company->logo}}" alt="logo"
                                                                    width="78px">
                                                            </div>
                                                            <div class="job-info mx-2">
                                                                <div class="job-name job-item">
                                                                    <a href="{{ route('job-detail', $job->id_post) }}"
                                                                        class="job-link">{{ $job->title }}</a>
                                                                </div>
                                                                <div class="company-name job-item">
                                                                    <a href="{{ 'companydetail', $company->id_emp }}"
                                                                        class="job-conpany">{{ $company->name_compn }}</a>
                                                                </div>
                                                                <div class="job-salary job-item">
                                                                    {{ $job->salary }} |
                                                                    {{ $job->address }}</div>
                                                                <div class="job-location">
                                                                    {{ $job->address }}</div>
                                                                <div class="job-location">{{  trans('hello.date')}}:
                                                                    {{ $job->created_at }}</div>
                                                            </div>
                                                        </div>
                                                        <div class="featured  col-md-2 mt-2">
                                                            <a class="btn-one job" id="post_id"
                                                                href="{{ route('cart.add', ['post' => $job->id_post]) }}"
                                                                data-post-id="{{ $job->id_post }}">
                                                                @php
                                                                    $count = 0;
                                                                @endphp
                                                                @foreach ($jobfavs as $jobfav)
                                                                    @if ($jobfav->post_id_post === $job->id_post)
                                                                        <i class="fa-solid fa-heart"
                                                                            style="color: rgb(255, 136, 0)"></i>
                                                                        @php
                                                                            $count = $count + 1;
                                                                        @endphp
                                                                    @elseif($jobfav->post_id != $job->id_post)
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
                        </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
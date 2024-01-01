<div class="section-jobs-detail">
    <div class="content-jobs-detail">
            <div class="container">
                <div class="row">
                        <div class="tab-pane container fade show active" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row bg-white">
                                <div class="row p-3" style="overflow: auto;">
                                    @foreach ($emps as $emp)
                                        @if ( $emp->status == 'active')
                                            <div class="col-lg-12 col-md-12">
                                                <div class="product-item mb-4">
                                                    <div class="card jobs-card">
                                                        <div class="card-body row">
                                                            <div
                                                                class="view_job_item col-md-10 d-flex align-items-center justify-content-start">
                                                                <div class="job-img">
                                                                    <img src="{{ asset($emp->logo) }}" alt="logo"
                                                                        width="78px">
                                                                </div>
                                                                <div class="job-info mx-2">
                                                                    <div class="job-name job-item">
                                                                        <a href="{{route('companydetail', $emp->id_emp)}}"
                                                                            class="job-conpany">{{ $emp->name_compn }}</a>
                                                                    </div>
                                                                    <div class="company-name job-item">
                                                                        <a href="#"
                                                                            class="job-conpany">{{ $emp->address }}</a>
                                                                    </div>
                                                                    <div class="job-salary job-item">
                                                                        Nhân viên:
                                                                        {{ $emp->staff_number }}</div>
                                                                    <div class="job-location">
                                                                        Công việc:
                                                                        {{ $emp->job_quantity }}</div>
                                                            </div>
                                                            </div>
                                                            <div class="featured  col-md-2 mt-2">
                                                                
                                                                    @php
                                                                        $count = 0;
                                                                    @endphp
                                                                    @foreach ($follows as $follow)
                                                                        @if ($follow->employer_id_emp === $emp->id_emp)
                                                                        <a class="btn-follow" style="background-color: blue"  href="{{route('user.follow',['id_emp' => $emp->id_emp])}}">
                                                                            Following
                                                                        </a>
                                                                            @php
                                                                                $count = $count + 1;
                                                                            @endphp
                                                                        @elseif($follow->employer_id_emp !== $emp->id_emp)
                                                                        @endif
                                                                    @endforeach
                                                                    @if ($count === 0)
                                                                    <a class="btn-follow" href="{{route('user.follow',['id_emp' => $emp->id_emp])}}">
                                                                        Follow
                                                                      </a>
                                                                    @endif
                                                                
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
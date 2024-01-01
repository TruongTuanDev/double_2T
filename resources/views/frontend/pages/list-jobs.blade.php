<div class="section-jobs-detail">
    <div class="content-jobs-detail">
            <div class="container">
                <div class="row">
                        <div class="tab-pane container fade show active" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row bg-white">
                                <div class="row p-3" style="overflow: auto;">
                                    @foreach ($jobs as $job)
                                        @if ( $job->status == 'active')
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
                                                                        <a href="{{ route('job-detail', $job->id_post) }}"
                                                                            class="job-link">{{ $job->title }}</a>
                                                                    </div>
                                                                    <div class="company-name job-item">
                                                                        <a href="{{ 'companydetail', $job->companys->id_emp }}"
                                                                            class="job-conpany">{{ $job->companys->name_compn }}</a>
                                                                    </div>
                                                                    <div class="job-salary job-item">
                                                                        {{ $job->salary }} |
                                                                        {{ $job->address }}</div>
                                                                    <div class="job-location">
                                                                        {{ $job->address }}</div>
                                                                    <div class="job-location">Ngày đăng:
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
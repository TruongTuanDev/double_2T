@if(count($companys)>0)
<section class="section-featured-companies mb-4">
  <div class="featured-companies-container">
      <div class="container-fluid p-2 p-sm-3 p-lg-5">
          <h4 class="mb-3" style="font-size: 22px; font-weight: 600; color: #fff;">Công Ty Hàng Đầu</h4>
          <div class="row flex-nowrap overflow-auto">
            @foreach($companys as $company) 
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <div class="card company-card">
                      <div class="card-body card-companies">
                          <a href="#" class="company-link">
                              <div class="img">
                                  <img src="{{$company->logo}}"
                                      alt="#" class="mb-4" width="130px">
                              </div>
                              <div class="companyBlock__content">
                                  <div class="companyBlock__name">{{$company->name_compn}}</div>
                              </div>
                              <div class="companyBlock__tag">New jobs</div>
                          </a>
                      </div>
                  </div>
              </div>
            @endforeach
              {{-- <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <div class="card company-card">
                      <div class="card-body card-companies">
                          <a href="#" class="company-link">
                              <div class="img">
                                  <img src="https://live.staticflickr.com/65535/52976548069_b0e672b651_o.jpg"
                                      alt="#" class="mb-4" width="130px">
                              </div>
                              <div class="companyBlock__content">
                                  <div class="companyBlock__name">VPBANK</div>
                              </div>
                              <div class="companyBlock__tag">New jobs</div>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <div class="card company-card">
                      <div class="card-body card-companies">
                          <a href="#" class="company-link">
                              <div class="img">
                                  <img src="https://live.staticflickr.com/65535/52976401466_706d22ccf6_o.jpg"
                                      alt="#" class="mb-4" width="130px">
                              </div>
                              <div class="companyBlock__content">
                                  <div class="companyBlock__name">METUB NETWORK</div>
                              </div>
                              <div class="companyBlock__tag">New jobs</div>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <div class="card company-card">
                      <div class="card-body card-companies">
                          <a href="#" class="company-link">
                              <div class="img">
                                  <img src="https://live.staticflickr.com/65535/52976548099_daa38e0071_o.jpg"
                                      alt="#" class="mb-4" width="130px">
                              </div>
                              <div class="companyBlock__content">
                                  <div class="companyBlock__name">GENTHERM VIỆT NAM</div>
                              </div>
                              <div class="companyBlock__tag">New jobs</div>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <div class="card company-card">
                      <div class="card-body card-companies">
                          <a href="#" class="company-link">
                              <div class="img">
                                  <img src="https://live.staticflickr.com/65535/52976852988_7af09850d4_o.jpg"
                                      alt="#" class="mb-4" width="130px">
                              </div>
                              <div class="companyBlock__content">
                                  <div class="companyBlock__name">GLOBAL PERFORMANCE</div>
                              </div>
                              <div class="companyBlock__tag">New jobs</div>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  <div class="card company-card">
                      <div class="card-body card-companies">
                          <a href="#" class="company-link">
                              <div class="img">
                                  <img src="https://live.staticflickr.com/65535/52976548134_d7a0a7be72_o.jpg"
                                      alt="#" class="mb-4" width="130px">
                              </div>
                              <div class="companyBlock__content">
                                  <div class="companyBlock__name">BEHN MEYER AGRICARE</div>
                              </div>
                              <div class="companyBlock__tag">New jobs</div>
                          </a>
                      </div>
                  </div>
              </div> --}}
          </div>
      </div>
  </div>
</section>
@endif
</div>
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
                          <a href="{{ route('companydetail',$company->id_emp) }}" class="company-link">
                              <div class="img">
                                  <img src="{{$company->logo}}"
                                      alt="#" class="mb-4" width="130px" height="150px">
                              </div>
                              <div class="companyBlock__content">
                                  <div class="companyBlock__name">{{$company->name_compn}}</div>
                              </div>
                              <div class="companyBlock__tag" >New Jobs</div>
                          </a>
                      </div>
                  </div>
              </div>
            @endforeach
          </div>
      </div>
  </div>
</section>
@endif
</div>
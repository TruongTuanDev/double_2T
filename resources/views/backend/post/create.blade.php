@include('backend.dashboard.components.breadcrumb' , ['title' => $config['seo']['create']['title']])

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{Route('user.store')}}" method="post" class="box">
  @csrf
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-4">
        <div class="panel-head">
          <div class="panel-title">Đăng công việc</div>
          <div class="panel-description">Nhập thông tin công việc</div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="ibox">
          <div class="ibox-content">
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Tiêu đề
                    <span class="text-danger">(*)</span>
                  </label>
                  <input 
                  type="text"
                  name="title"
                  value="{{old('title')}}"
                  class="form-control"
                  placeholder="Nhập vào tiêu đề"
                  autocomplete="off"
                  >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Số lượng cần tuyển
                    <span class="text-danger">(*)</span>
                  </label>
                  <input 
                  type="text"
                  name="quantity"
                  value="{{old('quantity')}}"
                  class="form-control"
                  placeholder="Nhập vào số lượng nhân viên cần tuyển"
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Ngày hết hạn
                  </label>
                  <input 
                  type="date"
                  name="exp_date"
                  value="{{old('exp_date')}}"
                  class="form-control"
                  autocomplete="off"
                  >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Lương
                  </label>
                  <input 
                  type="text"
                  name="salary"
                  value="{{old('salary')}}"
                  class="form-control"
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Yêu cầu
                  </label>
                  <input 
                  type="text"
                  name="requirement"
                  value="{{old('requirement')}}"
                  class="form-control"
                  placeholder="Nhập vào yêu cầu của bạn"
                  autocomplete="off"
                  >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Thành phố làm việc
                  </label>
                  <select name="province_id" class="form-control setupSelect2 province location" id="" data-target ="districts">
                    <option value="0">[Chọn Thành Phố]</option>
                    @foreach($provinces as $province)
                      <option value="{{$province->code}}">{{$province->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Địa chỉ chi tiết
                  </label>
                  <input 
                  type="text"
                  name="address"
                  value="{{old('address')}}"
                  class="form-control"
                  placeholder=""
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="status" class="col-form-label">Ngành nghề</label>
                  <select name="status" class="form-control setupSelect2">
                      <option value="active">Hoạt động</option>
                      <option value="inactive">Không hoạt động</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Chức vụ
                  </label>
                  <input 
                  type="text"
                  name="position"
                  value="{{old('position')}}"
                  class="form-control"
                  placeholder=""
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
          <div class="row mb15">
            <div class="col-lg-12">
              <div class="form-group">
                <label for="inputDesc" class="col-form-label">Mô tả</label>
                  <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="text-right mb15">
      <button class="btn btn-primary" type="submit" name="send" value="send">
        Đăng
      </button>
    </div>
  </div>  
</form>


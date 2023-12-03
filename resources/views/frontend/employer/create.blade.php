@include('frontend.dashboard.components.breadcrumb' , ['title' => $config['seo']['create']['title']])

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('employer.update')}}" method="post" class="box">
  @csrf
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-3">
        <div class="panel-head">
          <div class="panel-title">Cập nhật thông tin công ty</div>
          <div class="panel-description">Nhập thông tin chung của công ty</div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="ibox">
          <div class="ibox-content">
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Tên công ty
                    <span class="text-danger">(*)</span>
                  </label>
                  <input 
                  type="text"
                  name="name_compn"
                  value="{{old('name_compn')}}"
                  class="form-control"
                  placeholder="Nhập vào tên công ty"
                  autocomplete="off"
                  >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Slogan
                    <span class="text-danger">(*)</span>
                  </label>
                  <input 
                  type="text"
                  name="slodan"
                  value="{{old('slodan')}}"
                  class="form-control"
                  placeholder="Nhập vào khẩu hiệu công ty"
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Logo
                  </label>
                  <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfmlg" data-input="thumbnaillg" data-preview="holderlg" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Chọn
                      </a>
                    </span>
                    <input id="thumbnaillg" class="form-control" type="text" name="logo">
                  </div>
                  <img id="holderlg" style="margin-top:15px;max-height:100px;">
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Hình nền
                  </label>
                  <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfmbg" data-input="thumbnailbg" data-preview="holderbg" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Chọn
                      </a>
                    </span>
                    <input id="thumbnailbg" class="form-control" type="text" name="background">
                  </div>
                  <img id="holderbg" style="margin-top:15px;max-height:100px;">
                </div>
              </div>
            </div>

            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Mô tả
                  </label>
                  <textarea 
                  class="form-control" 
                  id="description" 
                  name="description"
                  value="{{old('description')}}"
                  >
                </textarea>
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Quy mô công ty
                    <span class="text-danger"></span>
                  </label>
                  <input 
                  type="text"
                  name="scale"
                  value="{{old('scale')}}"
                  class="form-control"
                  placeholder="Tổng vốn hóa công ty (USD)"
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Quyền lợi
                  </label>
                  <textarea 
                  class="form-control" 
                  id="treatment" 
                  name="treatment"
                  value="{{old('treatment')}}"
                  >
                </textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-3">
        <div class="panel-head">
          <div class="panel-title">Thông tin liên hệ</div>
          <div class="panel-description">Thông tin liên hệ công ty</div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="ibox">
          <div class="ibox-content">
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left ">Đường dẫn website của bạn
                  </label>
                  <input 
                  type="text"
                  name="website"
                  value="{{old('website')}}"
                  class="form-control"
                  placeholder=""
                  autocomplete="off"
                  >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Địa chỉ 
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
           
          </div>
        </div>
      </div>
    </div>
    <div class="text-right mb15">
      <button class="btn btn-primary" type="submit" name="send" value="send">
        LƯU LẠI
      </button>
    </div>
  </div>  
</form>


@include('backend.dashboard.components.breadcrumb' , ['title' => $config['seo']['update']['title']])

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post"  action="{{route('admin.employer.update',$employer->id_emp)}}" class="box">
  @csrf
  {{-- @method('PATCH') --}}
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-4">
        <div class="panel-head">
          <div class="panel-title">Thông báo chung</div>
          <div class="panel-description">Cập nhật thông tin nhà tuyển dụng</div>
        </div>
      </div>
      <div class="col-lg-8">
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
                  value="{{$employer->name_compn}}"
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
                  value="{{$employer->slodan}}"
                  class="form-control"
                  placeholder="Nhập vào slogan công ty"
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
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Background
                  </label>
                  <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfmbg" data-input="thumbnailbg" data-preview="holderbg" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Chọn
                      </a>
                    </span>
                    <input id="thumbnailbg" class="form-control" type="text" name="background" value="{{$employer->background}}">
                  </div>
                  <img id="holderbg" style="margin-top:15px;max-height:100px;">
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="">Mô tả</label>
                  <textarea class="form-control" id="description" name="description">{{$employer->description}}</textarea>
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Đãi ngộ
                  </label>
                  <textarea class="form-control" id="treatment" name="treatment">{{$employer->treatment}}</textarea>
                  <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>
              </div>
            </div>
            <div class="row mb15">
              
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="status" class="col-form-label">Số lượng nhân viên</label>
                  <input 
                  type="text"
                  name="scale"
                  value="{{$employer->scale}}"
                  class="form-control"
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-4">
        <div class="panel-head">
          <div class="panel-title">Thông tin liên hệ</div>
          <div class="panel-description">Thông tin liên hệ của người sử dụng</div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="ibox">
          <div class="ibox-content">
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="status" class="col-form-label">Đường dẫn website</label>
                  <input 
                  type="text"
                  name="website"
                  value="{{$employer->website}}"
                  class="form-control"
                  placeholder="Nhập vào đường dẫn website"
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="status" class="col-form-label">Địa chỉ</label>
                  <input 
                  type="text"
                  name="address"
                  value="{{$employer->address}}"
                  class="form-control"
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
        Cập nhật
      </button>
    </div>
  </div>  
</form>


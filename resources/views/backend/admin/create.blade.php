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
          <div class="panel-title">Thông báo chung</div>
          <div class="panel-description">Cập nhật thông tin của quản lý</div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="ibox">
          <div class="ibox-content">
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Email
                    <span class="text-danger">(*)</span>
                  </label>
                  <input 
                  type="email"
                  name="email"
                  value="{{old('email')}}"
                  class="form-control"
                  placeholder="Nhập vào email"
                  autocomplete="off"
                  >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Họ và tên
                    <span class="text-danger">(*)</span>
                  </label>
                  <input 
                  type="text"
                  name="name"
                  value="{{old('name')}}"
                  class="form-control"
                  placeholder="Nhập vào tên của người dùng"
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Nhóm thành viên
                    <span class="text-danger">(*)</span>
                  </label>
                  <select name="role" id="" class="form-control setupSelect2">
                    <option value="">[Chọn Nhóm Thành Viên]</option>
                    <option value="admin">Quản trị viên</option>
                    <option value="employer">Nhà tuyển dụng</option>
                    <option value="user">Ứng viên</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Ngày sinh
                  </label>
                  <input 
                  type="date"
                  name="birthday"
                  value="{{old('birthday')}}"
                  class="form-control"
                  placeholder="Nhập vào tên của người dùng"
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Mật khẩu
                    <span class="text-danger">(*)</span>
                  </label>
                  <input 
                  type="password"
                  name="password"
                  value=""
                  class="form-control"
                  placeholder="Nhập vào mật khẩu"
                  autocomplete="off"
                  >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Nhập lại mật khẩu
                    <span class="text-danger">(*)</span>
                  </label>
                  <input 
                  type="password"
                  name="re_password"
                  value=""
                  class="form-control"
                  placeholder="Nhập lại mật khẩu"
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Ảnh đại diện
                  </label>
                  <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Chọn
                      </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="photo">
                  </div>
                  <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="status" class="col-form-label">Trạng thái</label>
                  <select name="status" class="form-control setupSelect2">
                      <option value="active">Hoạt động</option>
                      <option value="inactive">Không hoạt động</option>
                  </select>
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
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Thành Phố
                  </label>
                  <select name="province_id" class="form-control setupSelect2 province location" id="" data-target ="districts">
                    <option value="0">[Chọn Thành Phố]</option>
                    @foreach($provinces as $province)
                      <option value="{{$province->code}}">{{$province->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Quận/Huyện
                  </label>
                  <select name="district_id" class="form-control setupSelect2 districts location" data-target ="wards" id="">
                    <option value="0">[Chọn Quận/Huyện]</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left ">Phường/Xã
                  </label>
                  <select name="ward_id" id="" class="form-control setupSelect2 wards" >
                    <option value="0">[Chọn Phường/Xã]</option>
                  </select>
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
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Số Điện Thoại
                    <span class="text-danger">(*)</span>
                  </label>
                  <input 
                  type="text"
                  name="phone"
                  value="{{old('phone')}}"
                  class="form-control"
                  placeholder=""
                  autocomplete="off"
                  >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Ghi chú
                  </label>
                  <textarea 
                  type="text"
                  name="note"
                  value="{{old('note')}}"
                  class="form-control"
                  placeholder=""
                  autocomplete="off"
                  >
                  </textarea>
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


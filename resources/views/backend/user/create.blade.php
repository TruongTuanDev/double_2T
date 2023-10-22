@include('backend.dashboard.components.breadcrumb' , ['title' => $config['seo']['create']['title']])
<form action="" method="" class="box">
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-5">
        <div class="panel-head">
          <div class="panel-title">Thông báo chung</div>
          <div class="panel-description">Nhập thông tin chung của người sử dụng</div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="ibox">
          <div class="ibox-content">
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Email
                    <span class="text-danger">(*)</span>
                  </label>
                  <input 
                  type="text"
                  name="email"
                  value=""
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
                  name="username"
                  value=""
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
                  <select name="user_catalogue_id" id="" class="form-control">
                    <option value="0">[Chọn Nhóm Thành Viên]</option>
                    <option value="1">Quản trị viên</option>
                    <option value="2">Cộng tác viên</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Ngày sinh
                  </label>
                  <input 
                  type="text"
                  name="birthday"
                  value=""
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
                  <input 
                  type="text"
                  name="image"
                  value=""
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
      <div class="col-lg-5">
        <div class="panel-head">
          <div class="panel-title">Thông tin liên hệ</div>
          <div class="panel-description">Thông tin liên hệ của người sử dụng</div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="ibox">
          <div class="ibox-content">
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Thành Phố
                  </label>
                  <select name="province_id" class="form-control" id="">
                    <option value="0" disabled>[Chọn Thành Phố]</option>
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
                  <select name="district_id" class="form-control" id="">
                    <option value="0">[Chọn Quận/Huyện]</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Phường/Xã
                  </label>
                  <select name="ward_id" id="" class="form-control">
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
                  value=""
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
                  value=""
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
                  value=""
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
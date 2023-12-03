@include('backend.dashboard.components.breadcrumb' , ['title' => $config['seo']['edit']['title']])

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{Route('user.update',$user->id)}}" method="post" class="box">
  @csrf
  @method('PATCH')
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
                  type="email"
                  name="email"
                  value="{{$user->email}}"
                  class="form-control"
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
                  value="{{$user->name}}"
                  class="form-control"
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
                    <option value="admin" {{(($user->role == 'admin') ? 'selected' : '')}}>Quản trị viên</option>
                    <option value="employer" {{(($user->role == 'employer') ? 'selected' : '')}} >Nhà tuyển dụng</option>
                    <option value="user" {{(($user->role == 'user') ? 'selected' : '')}}>Ứng viên</option>
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
                  value="{{$user->birthday}}"
                  class="form-control"
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
                    <input value="{{$user->photo}}" id="thumbnail" class="form-control" type="text" name="photo">
                  </div>
                  <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="status" class="col-form-label">Trạng thái</label>
                  <select name="status" class="form-control">
                      <option value="active"  {{(($user->status=='active') ? 'selected' : '')}}>Hoạt động</option>
                      <option value="inactive" {{(($user->status=='inactive') ? 'selected' : '')}}>Không hoạt động</option>
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
                  <select name="province_id" class="form-control setupSelect2 province location" id="" data-target ="districts">
                    <option value="0">[Chọn Thành Phố]</option>
                    @foreach($provinces as $province)
                      <option value="{{$province->code}}" {{(($user->province_id == $province->code) ? 'selected' : '')}}>{{$province->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Quận/Huyện
                  </label>
                  <select name="district_id" class="form-control setupSelect2 districts location" data-target ="wards" id="">
                    <option value="0" >[Chọn Quận/Huyện]</option>
                    <option value="{{$user->district_id}}"></option>
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
                    <option value="{{$user->ward_id}}"></option>
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
                  value="{{$user->address}}"
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
                  value="{{$user->phone}}"
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
        Cập nhật
      </button>
    </div>
  </div>  
</form>


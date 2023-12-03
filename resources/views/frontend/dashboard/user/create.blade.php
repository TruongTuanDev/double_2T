@include('frontend.dashboard.components.breadcrumb',['title'=> $config['seo']['create']['title']])

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
          <div class="panel-description">Nhập thông tin chung của người sử dụng</div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="ibox">
          <div class="ibox-content">
            
            <div class="row mb15">
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Trường Đại Học
                    <span class="text-danger">(*)</span>
                  </label>
                  <select name="university" id="" class="form-control setupSelect2">
                    <option value="">[Chọn Trường Đại Học]</option>
                    <option value="VH">Trường Việt Hàn</option>
                    <option value="BK">Bách Khoa Đà Nẵng</option>
                    <option value="SP">Sư Phạm Kĩ Thuật</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Chuyên Ngành
                    <span class="text-danger">(*)</span>
                  </label>
                  <select name="major" id="" class="form-control setupSelect2">
                    <option value="">[Chọn Chuyên ngành]</option>
                    <option value="admin">Công nghệ thông tin</option>
                    <option value="employer">Maketing</option>
                    <option value="user">kinh doanh quốc tế</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb15">
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
              <div class="col-lg-6">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Ảnh đại diện
                  </label>
                  <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Chọn
                      </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="avatar">
                  </div>
                  <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Ghi chú
                  </label>
                  <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
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
        LƯU LẠI
      </button>
    </div>
  </div>  
</form>


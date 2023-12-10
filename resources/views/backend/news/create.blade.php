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
<form action="{{route('news.store')}}" method="post" class="box">
  @csrf
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-3">
        <div class="panel-head">
          <div class="panel-title">Đăng tin tức</div>
          <div class="panel-description">Nhập thông tin tin tức</div>
        </div>
      </div>
      <div class="col-lg-9">
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
                  <label for="" class="control-lable text-left">Ngày Đăng
                  </label>
                  <input 
                  type="date"
                  name="create_date"
                  value="{{old('create_date')}}"
                  class="form-control"
                  placeholder="Nhập nagỳ đăng"
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Ảnh minh họa
                  </label>
                  <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Chọn
                      </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="image">
                  </div>
                  <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>
              </div>
            </div>
          <div class="row mb15">
            <div class="col-lg-12">
              <div class="form-group">
                <label for="inputDesc" class="col-form-label">Nội dung</label>
                  <textarea class="form-control" id="description" name="content">{{old('content')}}</textarea>
                @error('content')
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


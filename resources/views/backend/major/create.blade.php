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
<form action="{{Route('major.store')}}" method="post" class="box">
  @csrf
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-4">
        <div class="panel-head">
          <div class="panel-title">Thông báo chung</div>
          <div class="panel-description">Nhập thông tin chung của ngành</div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="ibox">
          <div class="ibox-content">
            <div class="row mb15">
              <div class="col-lg-12">
                <div class="form-row">
                  <label for="" class="control-lable text-left">Tên Chuyên ngành
                  </label>
                  <input 
                  type="text"
                  name="name"
                  value="{{old('name')}}"
                  class="form-control"
                  placeholder=""
                  autocomplete="off"
                  >
                </div>
              </div>
            </div>
            <div class="row mb15">
              <div class="form-group col-lg-12">
                <label for="inputPhoto" class="col-form-label">Ảnh <span class="text-danger">*</span></label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Chọn
                        </a>
                    </span>
                  <input id="thumbnail" class="form-control" type="text" name="image" value="{{old('photo')}}">
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
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


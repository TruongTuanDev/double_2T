<div class="filter-wrapper">
  <div class="uk-flex uk-flex-middle">
      <div class="perpage">
          <div class="uk-flex uk-flex-middle uk-flex-space-between">
              <select name="perpage" class="form-control input-sm perpage filter mr10">
                @foreach ($userss as $index => $item)
                <option value="{{$index}}">{{$index}} bản ghi</option>
                @endforeach
              </select>
          </div>
      </div>
      <div class="action">
          <div class="uk-flex uk-flex-middle">
              <div class="uk-search uk-flex uk-flex-midle mr10">
                  <div class="input-group">
                      <input 
                      type="text" 
                      name="keyword"
                      value=""
                      placeholder="Nhập từ khóa bạn muốn tìm kiếm..."
                      class="form-control"
                      >
                      <span class="input-group-btn">
                          <button
                          type="submit"
                          name="search"
                          value="search"
                          class="btn btn-primary mb-0 btn-sm"
                          >
                          Tìm Kiếm
                          </button>
                      </span>
                  </div>
              </div>
              <a href="{{route('user.create')}}" class="btn btn-danger">
                  <i class="fa fa-plus">
                      Thêm mới thành viên
                  </i>
              </a>
          </div>
      </div>
  </div>
</div>
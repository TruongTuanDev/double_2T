<div class="search-bar">
  <div class="input-group search-container">
      <span class="input-group-text" id="addon-wrapping"><i
              class="fa-solid fa-magnifying-glass"></i></span>
      <input type="text" aria-label="First name" class="form-control"
          placeholder="Nhập vào công ty,nghề nghiệp,kỹ năng">
          <select name="province_id" class="form-control setupSelect2 province" id="">
              <option value="0">[Chọn Thành Phố]</option>
              @foreach($provinces as $province)
                <option value="{{$province->code}}">{{$province->name}}</option>
              @endforeach
          </select>
      <a class="btn btn-search text-decoration-none" id="button-addon2" href="/search-jobs">Search</a>
  </div>
</div>
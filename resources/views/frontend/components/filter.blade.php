<div class="search-bar">
  <form class="input-group search-container" action="{{route('search.job')}}" method="GET"> 
      <span class="input-group-text" id="addon-wrapping"><i
              class="fa-solid fa-magnifying-glass"></i></span>
      <input value="{{$historySearch->data_search}}" type="text" aria-label="First name" name="data_search" class="form-control"
          placeholder="Nhập vào công ty,nghề nghiệp,kỹ năng">
          <select name="province_id" class="form-control setupSelect2 province" id="">
              <option value="0">[{{ trans('hello.choosecity') }}]</option>
              @foreach($provinces as $province)
                <option value="{{$province->code}}" 
                    {{ $province->code == $historySearch->province_id ? 'selected' : '' }}>
                    {{$province->name}}
                </option>
              @endforeach
              {{-- @foreach($provinces as $province)
                <option value="{{$province->code}}">{{$province->name}}</option>
              @endforeach --}}
          </select>
      <button class="btn btn-search text-decoration-none" type="submit" id="button-addon2">{{ trans('hello.search') }}</button>
  </form>
</div>
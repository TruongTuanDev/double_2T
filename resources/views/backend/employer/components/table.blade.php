<table class="table table-striped table-bordered">
  <thead>
  <tr>
      <th>
          <input type="checkbox" id="checkAll" value="" class="input-checkbox ">
      </th>
      <th>Avatar</th>
      <th>Họ tên</th>
      <th>Tên công ty</th>
      <th>Số điện thoại</th>
      <th>Địa chỉ</th>
      <th>Quy mô</th>
      <th>Trạng thái</th>
      <th>Thao tác</th>
  </tr> 
  </thead>
  <tbody>
    @if(isset($employers) && is_object($employers))
    @foreach($employers as $employer)
    <tr>
        <td>
            <input type="checkbox"  value="" class="input-checkbox checkBoxItem">
        </td>
        <td>
            <span class="image img-cover">
                <img src="https://sp.yimg.com/ib/th?id=OIP.b2cwUDx_gwxndXOAofpwnQHaHa&pid=Api&w=148&h=148&c=7&dpr=2&rs=1" alt="">
            </span>
        </td>
        <td>
            <div class="info-item name">
                {{$employer->name;}}
            </div>
        </td>
        <td>
            <div class="info-item name-compn">
                {{$employer->name_compn;}}
            </div>
        </td>
        <td>
            <div class="info-item phonenumber">
                {{$employer->phonenumber;}}
            </div>
            
        </td>
        <td>
            <div class="address-item address">
                {{$employer->address;}}
              </div>
        </td>
        <td>
            <div class="address-item scale">
              {{$employer->scale;}}
            </div>
        </td> 
        <td>
            <input type="checkbox" class="js-switch" checked>
        </td>
        <td>
            {{-- <a href="{{route('employer.edit',$employer->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a> --}}
            {{-- <form method="POST" action="{{route('employer.destroy',$employer->id)}}">
                @csrf 
                @method('delete')
                    <button class="btn btn-danger dltBtn" data-id={{$employer->id}} data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>
            </form> --}}
        </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>

{{ $employers->links('pagination::bootstrap-4') }}
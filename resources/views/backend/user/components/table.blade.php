<table class="table table-striped table-bordered">
  <thead>
  <tr>
      <th>
          <input type="checkbox" id="checkAll" value="" class="input-checkbox ">
      </th>
      <th>Avatar</th>
      <th>Họ tên</th>
      <th>Email</th>
      <th>Số điện thoại</th>
      <th>Địa chỉ</th>
      <th>Trạng thái</th>
      <th>Thao tác</th>
  </tr>
  </thead>
  <tbody>
    @if(isset($users) && is_object($users))
    @foreach($users as $user)
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
                {{$user->name;}}
            </div>
        </td>
        <td>
            <div class="info-item email">
                {{$user->email;}}
            </div>
        </td>
        <td>
            <div class="info-item phonenumber">
                {{$user->phone;}}
            </div>
        </td>
        <td>
            <div class="address-item address">
              {{$user->address;}}
            </div>
        </td>
        <td>
            <input type="checkbox" class="js-switch" checked>
        </td>
        <td>
            <a href="{{route('user.edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
            <a href="{{route('user.delete')}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
{{-- <ul class="pagination">
    <li class="page-item {{ ($users->currentPage() == 1) ? 'disabled' : '' }}">
        <a class="page-link" href="{{ $users->previousPageUrl() }}" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
    </li>
    @for ($i = 1; $i <= $users->lastPage(); $i++)
        <li class="page-item {{ ($users->currentPage() == $i) ? 'active' : '' }}">
            <a class="page-link" href="{{ $users->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="page-item {{ ($users->currentPage() == $users->lastPage()) ? 'disabled' : '' }}">
        <a class="page-link" href="{{ $users->nextPageUrl() }}" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li>
</ul> --}}
{{ $users->links('pagination::bootstrap-4') }}
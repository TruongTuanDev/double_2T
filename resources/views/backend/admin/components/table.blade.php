<table class="table table-striped table-bordered">
  <thead>
  <tr>
      <th>
          <input type="checkbox" id="checkAll" value="" class="input-checkbox ">
      </th>
      <th>STT</th>
      <th>Avatar</th>
      <th>Họ và tên</th>
      <th>Email</th>
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
            <div class="info-item stt">
                @foreach ($userss as $index => $item)
                {{$index}}
                @endforeach
            </div>
        </td>
        <td>
            <span class="image img-cover">
                <img src="{{$userById->avatar}}" alt="">
            </span>
        </td>
        <td>
            <div class="info-item name">
                {{$userById->name;}}
            </div>
        </td>
        <td>
            <div class="info-item email">
                {{$userById->email;}}
            </div>
        </td>
        <td>
            <div class="address-item address">
              {{$userById->address;}}
            </div>
        </td>
        <td>
            <input type="checkbox" class="js-switch" checked>
        </td>
        <td>
            <a href="{{route('admin.edit',$user->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
            <form method="POST" action="{{route('admin.destroy',$user->id)}}">
                @csrf 
                @method('delete')
                    <button class="btn btn-danger dltBtn" data-id={{$user->id}} data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>
            </form>
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
<script>
      
    $('#user-dataTable').DataTable( {
          "columnDefs":[
              {
                  "orderable":false,
                  "targets":[6,7]
              }
          ]
      } );

      // Sweet alert

      function deleteData(id){
          
      }
</script>
<script>
    $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
        $('.dltBtn').click(function(e){
          var form=$(this).closest('form');
            var dataID=$(this).data('id');
            // alert(dataID);
            e.preventDefault();
            swal({
                  title: "Bạn đã chắc chắn xóa?",
                  text: "Sau khi xóa, bạn sẽ không thể khôi phục dữ liệu này!!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
              .then((willDelete) => {
                  if (willDelete) {
                     form.submit();
                  } else {
                      swal("Dữ liệu của bạn được an toàn!");
                  }
              });
        })
    })
</script>
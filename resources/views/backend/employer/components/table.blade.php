<table id="employerTableBody" class="table table-striped table-bordered">
  <thead>
  <tr>
      <th>Avatar</th>
      <th>Tên công ty</th>
      <th>Địa chỉ</th>
      <th>Quy mô</th>
      <th>Số lượng công việc</th>
      <th>Trạng thái</th>
      <th>Thao tác</th>
  </tr> 
  </thead>
  <tbody>
    @if(isset($employers) && is_object($employers))
    @foreach($employers as $employer)
    <tr>
        <td>
            <span class="image img-cover">
                <img src="{{$employer->logo}}" alt="">
            </span>
        </td>
        <td>
            <div class="info-item name">
                {{$employer->name_compn;}}
            </div>
        </td>
        <td>
            <div class="info-item name-compn">
                {{$employer->address;}}
            </div>
        </td>
        <td>
            <div class="info-item phonenumber">
                {{$employer->scale;}}
            </div>
        </td>
        <td>
            <div class="info-item phonenumber">
                {{$employer->job_quantity;}}
            </div>
        </td>
        <td>
            <input type="checkbox" class="js-switch" checked>
        </td>
        <td>
            <a href="{{route('employer.edit',$employer->id_emp)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
            <form method="POST" action="{{route('employer.destroy',$employer->id_emp)}}">
                @csrf 
                @method('delete')
                    <button class="btn btn-danger dltBtn" data-id={{$employer->id_emp}} data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>

{{ $employers->links('pagination::bootstrap-4') }}
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
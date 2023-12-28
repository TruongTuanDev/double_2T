<table id="employerTableBody" class="table table-striped table-bordered">
  <thead>
  <tr>
      <th>Avatar</th>
      <th>Tên công ty</th>
      <th>Địa chỉ</th>
      <th>Quy mô</th>
      <th>Số lượng công việc</th>
      <th>Trạng thái</th>
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
                {{$employer->staff_number;}}
            </div>
        </td>
        <td>
            <div class="info-item phonenumber">
                {{$employer->job_quantity;}}
            </div>
        </td>
        <td>
            <div class="info-item phonenumber">
                {{$employer->status;}}
            </div>
        </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
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
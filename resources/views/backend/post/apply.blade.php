<!-- DataTales Example -->
@include('backend.dashboard.components.breadcrumb' , ['title' => $config['seo']['index']['title']])
<div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary float-left">Danh sách sinh viên đã ứng tuyển công việc</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        @if(count($jobs)>0)
        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>STT</th>
              <th>Ảnh đại diện</th>
              <th>Họ tên</th>
              <th>Ngày sinh</th>
              <th>Trường</th>
              <th>Địa điểm</th>
              <th>Tên công việc</th>
              <th>Vị trí</th>
              <th>Lương</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>STT</th>
              <th>Ảnh đại diện</th>
              <th>Họ tên</th>
              <th>Ngày sinh</th>
              <th>Trường</th>
              <th>Địa điểm</th>
              <th>Tên công việc</th>
              <th>Vị trí</th>
              <th>Lương</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
              </tr>
          </tfoot>
          <tbody>
            @foreach($jobs as $job)   
              @foreach($job->studentApplys as $student)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                      <img height="100px" width="100px" src="{{$student->avatar}}" alt="">
                    </td>
                    <td>{{$student->major}}</td>
                    <td>{{$student->birthday}}</td>
                    <td>{{$student->university}}</td>
                    <td>{{$job->address}}</td>
                    <td>{{$job->title}}</td>
                    <td>{{$job->position}}</td>
                    <td>{{$job->salary}}</td>
                    <td>
                        @if($job->status=='active')
                            <span class="badge badge-success">{{$job->status}}</span>
                        @else
                            <span class="badge badge-warning">{{$job->status}}</span>
                        @endif
                    </td>
                    <td>
                      <a href="{{route('apply.pass',['id_job' => $job->id_post, 'id_student' => $student->id_stu])}}" class="btn btn-primary float-left mr-1"  data-toggle="tooltip" title="status" data-placement="bottom"><i class="fa fa-check"></i></a>
                         {{-- <a href="{{route('apply.pass',['id_job' => $job->id_post, 'id_student' => $student->id_stu])}}" class="btn btn-primary float-left mr-1"  data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-check"></a>  --}}
                         <form method="POST" action="{{route('remove.applicant',['id_job' => $job->id_post, 'id_student' => $student->id_stu])}}">
                          @csrf 
                          @method('delete')
                              <button class="btn btn-danger dltBtn" data-id= "" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>
                        </form> 
                    </td>
                   
                </tr>  
                  
              @endforeach
            @endforeach
          </tbody>
        </table>
        @elseif(count($jobs)>1)
        <span style="float:right">{{$jobs->links()}}</span>
        @else
          <h6 class="text-center">Không tìm thấy sinh viên ứng tuyển!</h6>
        @endif
      </div>
    </div>
</div>


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
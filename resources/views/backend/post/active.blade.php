<!-- DataTales Example -->
@include('backend.dashboard.components.breadcrumb' , ['title' => $config['seo']['index']['title']])
<div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary float-left">Danh sách công việc</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        @if(count($posts)>0)
        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tiêu đề</th>
              <th>Số lượng</th>
              <th>Ngày đăng</th>
              <th>Ngày hết hạn</th>
              <th>Lương</th>
              <th>Vị trí</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>STT</th>
              <th>Tiêu đề</th>
              <th>Số lượng</th>
              <th>Ngày đăng</th>
              <th>Ngày hết hạn</th>
              <th>Lương</th>
              <th>Vị trí</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
              </tr>
          </tfoot>
          <tbody>
            @foreach($posts as $post)   
                <tr>
                    <td>{{$post->id_post}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->quantity}}</td>
                    <td>{{$post->post_date}}</td>
                    <td>{{$post->exp_date}}</td>
                    <td>{{$post->salary}}</td>
                    <td>{{$post->position}}</td>
                    <td>
                        @if($post->status=='active')
                            <span class="badge badge-success">{{$post->status}}</span>
                        @else
                            <span class="badge badge-warning">{{$post->status}}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('post.edit',$post->id_post)}}" class="btn btn-primary float-left mr-1"  data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i></a>
                        <form method="POST" action="{{route('post.destroy',[$post->id_post])}}">
                          @csrf 
                          @method('delete')
                              <button class="btn btn-danger dltBtn" data-id={{$post->id_post}}  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                   
                </tr>  
            @endforeach
          </tbody>
        </table>
        {{-- <span style="float:right">{{$posts->links()}}</span> --}}
        @else
          <h6 class="text-center">Không tìm thấy công việc!!! Vui lòng tạo thêm công việc</h6>
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
<!-- DataTales Example -->
@include('backend.dashboard.components.breadcrumb' , ['title' => $config['seo']['index']['title']])
<div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary float-left">Danh sách tin tức</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        @if(count($news)>0)
        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tiêu đề</th>
              <th>Nội dung</th>
              <th>Hình ảnh</th>
              <th>Ngày đăng</th>
              <th>Lượt xem</th>
              <th>Trạng thái</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Hình ảnh</th>
                <th>Ngày đăng</th>
                <th>Lượt xem</th>
                <th>Trạng thái</th>
              </tr>
          </tfoot>
          <tbody>
            @foreach($news as $new)   
                <tr>
                    <td>{{$new->id_news}}</td>
                    <td>{{$new->title}}</td>
                    <td>{{$new->content}}</td>
                    <td>{{$new->image}}</td>
                    <td>{{$new->create_date}}</td>
                    <td>{{$new->view}}</td>
                    <td>
                            <span class="badge badge-warning">Chờ duyệt</span>
                            <a href="{{route('news.updateactive',[$new->id_news])}}" class="btn btn-primary float-left mr-1"  data-toggle="tooltip" title="status" data-placement="bottom"><i class="fa fa-check"></i></a>
                    </td>
                    <td>
                        <a href="{{route('news.edit',[$new->id_news])}}" class="btn btn-primary float-left mr-1"  data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i></a>
                        <form method="POST" action="{{route('news.destroy',[$new->id_news])}}">
                          @csrf 
                          @method('delete')
                              <button class="btn btn-danger dltBtn" data-id={{$new->id}}  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>
                        </form>
                        
                    </td>
                   
                </tr>  
            @endforeach
          </tbody>
        </table>
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
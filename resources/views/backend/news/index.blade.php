<!-- DataTales Example -->
@include('backend.dashboard.components.breadcrumb' , ['title' => $config['seo']['index']['title']])
<div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <a href="{{route('post.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add banner"><i class="fa fa-plus"></i>Thêm tin tức</a>
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
                    {{-- <td>{{$new->content}}</td> --}}
                    <td>
                      <img height="100px" width="100px" src=" {{$new->image}}" alt="">
                    </td>
                    <td>{{$new->create_date}}</td>
                    <td>{{$new->view}}</td>
                    <td>
                        @if($new->status=='active')
                            <span class="badge badge-success">Đã duyệt</span>
                        @else
                            <span class="badge badge-warning">Chờ duyệt</span>
                        @endif
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
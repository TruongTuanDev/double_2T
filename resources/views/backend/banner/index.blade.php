<!-- DataTales Example -->
@include('backend.dashboard.components.breadcrumb' , ['title' => $config['seo']['index']['title']])
<div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <a href="{{route('banner.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add banner"><i class="fa fa-plus"></i>Thêm banner</a>
      <h4 class="m-0 font-weight-bold text-primary float-left">Danh sách banner</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        @if(count($banners)>0)
        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tiêu đề</th>
              <th>Biểu ngữ</th>
              <th>Ảnh</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>STT</th>
              <th>Tiêu đề</th>
              <th>Biểu ngữ</th>
              <th>Ảnh</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
              </tr>
          </tfoot>
          <tbody>
            @foreach($banners as $banner)   
                <tr>
                    <td>{{$banner->id}}</td>
                    <td>{{$banner->title}}</td>
                    <td>{{$banner->slug}}</td>
                    <td>
                        @if($banner->photo)
                            <img src="{{$banner->photo}}" class="img-fluid zoom" style="max-width:80px" alt="{{$banner->photo}}">
                        @else
                            <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid zoom" style="max-width:100%" alt="avatar.png">
                        @endif
                    </td>
                    <td>
                        @if($banner->status=='active')
                            <span class="badge badge-success">{{$banner->status}}</span>
                        @else
                            <span class="badge badge-warning">{{$banner->status}}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('banner.edit',$banner->id)}}" class="btn btn-primary float-left mr-1"  data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i></a>
                        <form method="POST" action="{{route('banner.destroy',[$banner->id])}}">
                          @csrf 
                          @method('delete')
                              <button class="btn btn-danger dltBtn" data-id={{$banner->id}}  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                   
                </tr>  
            @endforeach
          </tbody>
        </table>
        <span style="float:right">{{$banners->links()}}</span>
        @else
          <h6 class="text-center">Không tìm thấy banner!!! Vui lòng tạo thêm banner</h6>
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
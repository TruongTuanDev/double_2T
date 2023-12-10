@include('backend.dashboard.components.breadcrumb',['title' => $config['seo']['index']['title']]);
<div class="row mt20">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{$config['seo']['index']['table']; }}</h5>
                @include('backend.major.components.toolbox')
            </div> 
            <div class="ibox-content">
            @include('backend.major.components.filter')
            @include('backend.major.components.table');
            </div>
        </div>
      </div>
</div>

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
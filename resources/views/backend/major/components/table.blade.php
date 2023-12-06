<table class="table table-striped table-bordered">
  <thead>
  <tr>
      <th>Tên chuyên Ngành</th>
      <th>Số lượng truy cập</th>
  </tr> 
  </thead>
  <tbody>
    @if(isset($majors) && is_object($majors))
    @foreach($majors as $majors)
    <tr>
        <td>
            <div class="info-item name">
                {{$majors->name;}}
            </div>
        </td>
        <td>
            <div class="info-item name-compn">
                {{$majors->traffic_volume;}}
            </div>
        </td>
        <td>
            <a href="{{route('major.edit',[$majors->id_maj])}}" class="btn btn-primary float-left mr-1"  data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i></a>
            <form method="POST" action="{{route('major.destroy',[$majors->id_maj])}}">
              @csrf 
              @method('delete')
                  <button class="btn btn-danger dltBtn" data-id={{$majors->id_maj}}  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>

{{-- {{ $majors->links('pagination::bootstrap-4') }} --}}
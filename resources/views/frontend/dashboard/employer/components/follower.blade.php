<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" id="checkAll" value="" class="input-checkbox ">
        </th>
        <th>Avatar</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Trường học</th>
        <th>Chuyên Ngành</th>
        <th>Trạng thái</th>
    </tr>
    </thead>
    <tbody>
      @if(isset($students) && is_object($students))
      @foreach($students as $student)
      <tr>
          <td>
              <input type="checkbox"  value="" class="input-checkbox checkBoxItem">
          </td>
          <td>
              <span class="image img-cover">
                  <img src="{{$student->avatar}}" alt="">
              </span>
          </td>
          <td>
              <div class="info-item name">
                  {{$student->users->name;}}
              </div>
          </td>
          <td>
              <div class="info-item email">
                  {{$student->users->email;}}
              </div>
          </td>
          <td>
              <div class="info-item phonenumber">
                  {{$student->users->phone;}}
              </div>
          </td>
          <td>
              <div class="address-item address">
                {{$student->users->address;}}
              </div>
          </td>
          <td>
            <div class="info-item phonenumber">
                {{$student->university;}}
            </div>
        </td>
        <td>
            <div class="address-item address">
              {{$student->major;}}
            </div>
        </td>
          <td>
              <input type="checkbox" class="js-switch" checked>
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
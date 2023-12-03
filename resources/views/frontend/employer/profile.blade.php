@include('backend.dashboard.components.breadcrumb' , ['title' => $config['seo']['profile']['title']])
<div class="card shadow mb-4">
    <div class="row">
        <div class="col-md-12">
           @include('backend.layouts.notification')
        </div>
    </div>
   <div class="card-header py-3">
   </div>
   <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="image">
                        @if($profile->photo)
                        <img class="card-img-top img-fluid roundend-circle mt-4" style="border-radius:50%;height:80px;width:80px;margin:auto;" src="{{$profile->photo}}" alt="profile picture">
                        @else 
                        <img class="card-img-top img-fluid roundend-circle mt-4" style="border-radius:50%;height:80px;width:80px;margin:auto;" src="{{asset('backend/img/avatar.png')}}" alt="profile picture">
                        @endif
                    </div>
                    <hr>
                    <div class="card-body mt-6 ml-2">
                      <h5 class="card-title text-left"><i class="fa fa-user"></i>{{$profile->name}}</h5>
                      <p class="card-text text-left"><i class="fa fa-envelope"></i></i> {{$profile->email}}</p>
                      Quyền : <span class="text-left"><i class="fa-solid gavel"></i> {{$profile->role}}</span>
                    </div>
                  </div>
            </div>
            <div class="col-md-8">
                <form class="border px-4 pt-2 pb-3" method="POST" action="{{route('profile-update',$profile->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Name</label>
                      <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$profile->name}}" class="form-control">
                      @error('name')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                      </div>
              
                      <div class="form-group">
                          <label for="inputEmail" class="col-form-label">Email</label>
                        <input id="inputEmail" disabled type="email" name="email" placeholder="Enter email"  value="{{$profile->email}}" class="form-control">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
              
                      <div class="form-group">
                      <label for="inputPhoto" class="col-form-label">Photo</label>
                      <div class="input-group">
                          <span class="input-group-btn">
                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> Choose
                              </a>
                          </span>
                          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$profile->photo}}">
                      </div>
                        @error('photo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                          <label for="role" class="col-form-label">Role</label>
                          <select name="role" class="form-control">
                              <option value="">-----Select Role-----</option>
                                  <option value="admin" {{(($profile->role=='admin')? 'selected' : '')}}>Admin</option>
                                  <option value="user" {{(($profile->role=='user')? 'selected' : '')}}>User</option>
                          </select>
                        @error('role')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>

                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                </form>
            </div>
        </div>
   </div>
</div>
<style>
    .breadcrumbs{
        list-style: none;
    }
    .image{
        background:url('{{asset('backend/img/background.jpg')}}');
        height:150px;
        background-position:center;
        background-attachment:cover;
        position: relative;
    }
    .image img{
        position: absolute;
        top:55%;
        left:35%;
        margin-top:30%;
    }
    i{
        font-size: 14px;
        padding-right:8px;
    }
  </style> 

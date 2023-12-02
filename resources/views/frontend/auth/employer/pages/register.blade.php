<div class="grid main register-box">
  <div class="form login">
    <div class="grid-logo-vnw">
      <div class="vnw-title">
        <div class="title">Đăng Ký Thành Viên!</div>
        <div class="vnw-login__social">
          <a
            href="https://secure.vietnamworks.com/social-login/facebook?client_id=3&amp;language=vi"
            class="btn btn-default full-width facebook-btn"
          >
            <span class="img-container m-r-xs">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path
                  d="M44,38.44A5.56,5.56,0,0,1,38.44,44H9.56A5.56,5.56,0,0,1,4,38.44V9.56A5.56,5.56,0,0,1,9.56,4H38.44A5.56,5.56,0,0,1,44,9.56Z"
                  style="fill: #3f51b5"
                ></path>
                <path
                  d="M35.52,25.11H31.78V39.56H26.22V25.11H22.89V20.67h3.33V18c0-3.9,1.62-6.21,6.22-6.21h3.78v4.44H33.68c-1.79,0-1.91.67-1.91,1.91v2.53h4.44Z"
                  style="fill: #fff"
                ></path>
              </svg>
            </span>
            <span class="text-desktop"> với tài khoản Facebook </span>
            <span class="text-mobile"> với Facebook </span>
          </a>
          <a
            href="https://secure.vietnamworks.com/social-login/google?client_id=3&amp;rerequest=0&amp;language=vi"
            class="btn btn-default full-width google-btn m-r-sm"
          >
            <span class="img-container m-r-xs">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 48 48"
                version="1.1"
              >
                <path
                  style="fill: #ffc107"
                  d="M 43.609375 20.082031 L 42 20.082031 L 42 20 L 24 20 L 24 28 L 35.304688 28 C 33.652344 32.65625 29.222656 36 24 36 C 17.371094 36 12 30.628906 12 24 C 12 17.371094 17.371094 12 24 12 C 27.058594 12 29.84375 13.152344 31.960938 15.039063 L 37.617188 9.382813 C 34.046875 6.054688 29.269531 4 24 4 C 12.953125 4 4 12.953125 4 24 C 4 35.046875 12.953125 44 24 44 C 35.046875 44 44 35.046875 44 24 C 44 22.660156 43.863281 21.351563 43.609375 20.082031 Z "
                ></path>
                <path
                  style="fill: #ff3d00"
                  d="M 6.304688 14.691406 L 12.878906 19.511719 C 14.65625 15.109375 18.960938 12 24 12 C 27.058594 12 29.84375 13.152344 31.960938 15.039063 L 37.617188 9.382813 C 34.046875 6.054688 29.269531 4 24 4 C 16.316406 4 9.65625 8.335938 6.304688 14.691406 Z "
                ></path>
                <path
                  style="fill: #4caf50"
                  d="M 24 44 C 29.164063 44 33.859375 42.023438 37.410156 38.808594 L 31.21875 33.570313 C 29.210938 35.089844 26.714844 36 24 36 C 18.796875 36 14.382813 32.683594 12.71875 28.054688 L 6.195313 33.078125 C 9.503906 39.554688 16.226563 44 24 44 Z "
                ></path>
                <path
                  style="fill: #1976d2"
                  d="M 43.609375 20.082031 L 42 20.082031 L 42 20 L 24 20 L 24 28 L 35.304688 28 C 34.511719 30.238281 33.070313 32.164063 31.214844 33.570313 C 31.21875 33.570313 31.21875 33.570313 31.21875 33.570313 L 37.410156 38.808594 C 36.972656 39.203125 44 34 44 24 C 44 22.660156 43.863281 21.351563 43.609375 20.082031 Z "
                ></path>
              </svg>
            </span>
            <span class="text-desktop"> với tài khoản Google </span>
            <span class="text-mobile"> với Google </span>
          </a>
        </div>
      </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form
      method="POST"
      action="{{route('employer.register')}}"
    >
    @csrf
    <div class="form-group row">
      <label for="name" class="col-md-12">Tên người đại diện</label>
      <div class="col-md-12">
        <input
          id="name"
          type="text"
          class="form-control"
          name="name"
          value="{{old('name')}}"
        />
      </div>
    </div>
      <div class="form-group row">
        <label for="phone" class="col-md-12">Số điện thoại</label>
        <div class="col-md-12">
          <input
            id="phone"
            type="text"
            class="form-control"
            name="phone"
            value="{{old('phone')}}"
          />
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-md-12">Email</label>
        <div class="col-md-12">
          <input
            id="email"
            type="email"
            class="form-control"
            name="email"
            value="{{old('email')}}"
            placeholder="Sử dụng email có thật để xác thực."
          />
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-md-12">Địa chỉ</label>
        <div class="col-md-12">
          <input
            id="address"
            type="text"
            class="form-control"
            name="address"
            value="{{old('address')}}"
          />
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-md-12">Mật Khẩu</label>

        <div class="col-md-12">
          <input
            id="password"
            type="password"
            class="form-control"
            name="password"
            placeholder="Từ 6 đến 50 ký tự, 1 chữ hoa, 1 số."
          />
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-md-12">Mật Khẩu</label>

        <div class="col-md-12">
          <input
            id="re_password"
            type="password"
            class="form-control"
            name="re_password"
            placeholder="Nhập lại mật khẩu"
          />
        </div>
      </div>
      <div class="form-group term-and-policy-wrapper">
          <input
            type="checkbox"
            class="checkbox"
            id="checkbox"
            autocomplete="off"
          />
        <label class="" for="checkbox"
          >Tôi đồng ý với
          <a
            href=""
            target="_blank"
            title="Thoả thuận sử dụng"
            >Thoả thuận sử dụng</a
          >
          và
          <a
            href=""
            target="_blank"
            title="Quy định bảo mật"
            >Quy&nbsp;định bảo&nbsp;mật</a
          >
          của 2t.</label
        >
      </div>

      <p class="error-msg" id="error-msg">
        Vui lòng đánh dấu vào hộp chọn để tiếp tục đăng ký.
      </p>

      <div class="form__field form-group column">
        <input
          type="submit"
          id="button-register"
          class="button-register"
          value="Đăng Ký"
        />
        
      </div>
    </form>

    <p class="text-center m-b-none register">
      Bạn là thành viên VietnamWorks?
      <a href="">
        <strong>Đăng Nhập</strong>
      </a>
    </p>
    <hr class="hidden-xs" />
    <div class="login__footer">
      <div class="text-center register-as-employer">
        Nếu bạn đang có nhu cầu tuyển dụng, <br />
        vui lòng đăng ký tại
        <a
          href=""
          title="Trang Tuyển Dụng"
          >đây</a
        >.
      </div>
    </div>
  </div>
 </div>

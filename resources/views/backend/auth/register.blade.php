<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tham gia</title>
    <link rel="stylesheet" href="public/css/login-style.css">
    <link rel="stylesheet" href="public/css/login-style2.css">

</head>

<body>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKNN69" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <div class="vnw-login__top-header">
        <div class="p-1 p-lg-2 p-xl-4">
            <a href="/">
                <img src="https://live.staticflickr.com/65535/52907425913_d130d426c7_o.png" alt="" height="55rem">
            </a>
        </div>
    </div>
    <style>
        .form-control.is-invalid:focus,
        .form-control.is-invalid:hover {
            border-color: #ff4a53 !important;
        }
    </style>
    
<div class="grid main register-box">
        <div class="form login">
            <div class="grid-logo-vnw">
                <div class="vnw-title">
                    <div class="title">Join Us Today!</div>
                    <div class="vnw-login__social">
                        <a href="#"
                            class="btn btn-default full-width facebook-btn">
                            <span class="img-container m-r-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path d="M44,38.44A5.56,5.56,0,0,1,38.44,44H9.56A5.56,5.56,0,0,1,4,38.44V9.56A5.56,5.56,0,0,1,9.56,4H38.44A5.56,5.56,0,0,1,44,9.56Z"
                                        style="fill:#3f51b5"></path>
                                    <path d="M35.52,25.11H31.78V39.56H26.22V25.11H22.89V20.67h3.33V18c0-3.9,1.62-6.21,6.22-6.21h3.78v4.44H33.68c-1.79,0-1.91.67-1.91,1.91v2.53h4.44Z"
                                        style="fill:#fff"></path>
                                </svg>
                            </span>
                            <span class="text-desktop">with Facebook account </span>
                            <span class="text-mobile">with Facebook </span>
                        </a>
                        <a href="#" class="btn btn-default full-width google-btn m-r-sm">
                            <span class="img-container m-r-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" version="1.1">
                                    <path style=" fill:#FFC107;"
                                        d="M 43.609375 20.082031 L 42 20.082031 L 42 20 L 24 20 L 24 28 L 35.304688 28 C 33.652344 32.65625 29.222656 36 24 36 C 17.371094 36 12 30.628906 12 24 C 12 17.371094 17.371094 12 24 12 C 27.058594 12 29.84375 13.152344 31.960938 15.039063 L 37.617188 9.382813 C 34.046875 6.054688 29.269531 4 24 4 C 12.953125 4 4 12.953125 4 24 C 4 35.046875 12.953125 44 24 44 C 35.046875 44 44 35.046875 44 24 C 44 22.660156 43.863281 21.351563 43.609375 20.082031 Z ">
                                    </path>
                                    <path style=" fill:#FF3D00;"
                                        d="M 6.304688 14.691406 L 12.878906 19.511719 C 14.65625 15.109375 18.960938 12 24 12 C 27.058594 12 29.84375 13.152344 31.960938 15.039063 L 37.617188 9.382813 C 34.046875 6.054688 29.269531 4 24 4 C 16.316406 4 9.65625 8.335938 6.304688 14.691406 Z ">
                                    </path>
                                    <path style=" fill:#4CAF50;"
                                        d="M 24 44 C 29.164063 44 33.859375 42.023438 37.410156 38.808594 L 31.21875 33.570313 C 29.210938 35.089844 26.714844 36 24 36 C 18.796875 36 14.382813 32.683594 12.71875 28.054688 L 6.195313 33.078125 C 9.503906 39.554688 16.226563 44 24 44 Z ">
                                    </path>
                                    <path style=" fill:#1976D2;"
                                        d="M 43.609375 20.082031 L 42 20.082031 L 42 20 L 24 20 L 24 28 L 35.304688 28 C 34.511719 30.238281 33.070313 32.164063 31.214844 33.570313 C 31.21875 33.570313 31.21875 33.570313 31.21875 33.570313 L 37.410156 38.808594 C 36.972656 39.203125 44 34 44 24 C 44 22.660156 43.863281 21.351563 43.609375 20.082031 Z ">
                                    </path>
                                </svg>
                            </span>
                            <span class="text-desktop">with Google account </span>
                            <span class="text-mobile">with Google </span>
                        </a>
                    </div>
                </div>
            </div>

            <form method="POST" id="sso-register__form"
                action="./Register/NguoiDungDangKy">
                <div class="form-group row">
                    <label for="firstname" class="col-6">First Name</label>
                    <label for="lastname" class="col-6">Last Name</label>
                    <div class="col-6">
                        <input id="firstname" type="text" class="form-control" name="firstname" value="" autofocus>
                    </div>
                    <div class="col-6">
                        <input id="lastname" type="text" class="form-control" name="lastname" value="">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label class="col-md-12">Phone number</label>
                    <div class="col-md-12">
                        <div class="react-phone-number"></div>
                    </div>
                </div> -->
                <div class="form-group row">
                    <label for="phonenumber" class="col-md-12">Phone Number</label>

                    <div class="col-md-12">
                        <input id="phonenumber" type="text" class="form-control" name="phonenumber" value=""
                            placeholder="">
                    </div>
                </div>
              
                <div class="form-group row">
                    <label for="username" class="col-md-12">Email</label>

                    <div class="col-md-12">
                        <input id="username" type="email" class="form-control" name="email" value=""
                            placeholder="Please use real email for verification.">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-12">Password</label>
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password"
                            placeholder="From 6 to 50 characters, 1 uppercase, 1 number.">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-12">Confirm Password</label>
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password"
                            placeholder="From 6 to 50 characters, 1 uppercase, 1 number.">
                    </div>
                </div>

                <p class="form-group accept-text">By clicking the "Register" button, I agree to the
                    <a href="#" target="_blank" title="Terms of Use">Terms ofUse</a> and <a href="#" target="_blank" title="Privacy Policy">Privacy&nbspPolicy</a>
                    of VietnamWorks.
                </p>

                <div class="form__field form-group">
                    <input type="submit" id="button-register" name="btnRegister" value="Register">
                </div>
            </form>

            <p class="text-center m-b-none register">Already have an account?
                <a href="/Register">
                    <strong>Sign In</strong>
                </a>
            </p>
            <hr class="hidden-xs">
            <div class="login__footer">
                <div class="text-center register-as-employer">If you are an Employer, <br />
                    please
                    <a href="#"
                        title="Employer Site">click here</a> to register.
                </div>
            </div>
        </div>


        <script>
            var registerForm = document.getElementById('sso-register__form');
            registerForm.addEventListener("submit", function (e) {
                document.getElementById('firstname').classList.add('disabled');
                document.getElementById('lastname').classList.add('disabled');
                document.getElementById('username').classList.add('disabled');
                document.getElementById('password').classList.add('disabled');
                document.getElementById('phone').classList.add('disabled');
                document.getElementById("firstname").blur();
                document.getElementById("lastname").blur();
                document.getElementById("username").blur();
                document.getElementById("password").blur();
                document.getElementById("phone").blur();
            })
        </script>
    </div>
  
    <div class="grid text-right terms mt-3">
        <a class="login__footer-text login__footer-term" target="_blank" href="#">Terms</a>
        <span class="separator">|</span>
        <a class="login__footer-text" href="#" target="_blank">Privacy</a>
    </div>
    <script src="https://secure.vietnamworks.com/js/libs/prop-types.min.js?version=1686664778"></script>
    <script src="https://secure.vietnamworks.com/js/libs/react.production.min.js?version=1686664778"></script>
    <script src="https://secure.vietnamworks.com/js/libs/react-dom.production.min.js?version=1686664778"></script>
    <script src="https://secure.vietnamworks.com/js/libs/styled-components.min.js?version=1686664778"></script>
    <script
        src="https://secure.vietnamworks.com/js/react-component/i11lPhoneNumberInput.umd.js?version=1686664778"></script>
    <script>
        var phoneNumber = {
            langCode: 'en',
            elementSelector: ".react-phone-number",
            className: "phone-box",
            urlMeta: "https://ms.vietnamworks.com/meta/v1.0/international-phone-number",
            hiddenInput: {
                id: "phone",
                className: "phone",
                name: "phone"
            },
            value: "",
        }

        window.addEventListener('DOMContentLoaded', () => {
            new i11lPhoneNumberInput(
                phoneNumber.langCode,
                phoneNumber.elementSelector,
                phoneNumber.className,
                phoneNumber.urlMeta,
                phoneNumber.hiddenInput,
                phoneNumber.value,
            );

            var clearIcon = document.querySelector('.phone-box .i11l-remove-icon')
            clearIcon.style.display = 'none';

            var phoneError = '';
            var phoneBox = document.querySelector('.phone-box .i11l-input');
            if (phoneError === '1') {
                phoneBox.classList.add("form-control");
                phoneBox.classList.add("is-invalid");
            }
        });

    </script>
</body>

</html>
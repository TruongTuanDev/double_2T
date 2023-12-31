
 <!-- bootstrap js -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
 crossorigin="anonymous"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
@if(isset($config['js']) && is_array($config['js']))
@foreach ($config['js'] as $key => $val)
    {!! '<script src = "'.$val.'"></script>' !!}
@endforeach
@endif
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
    <script>
        $('#lfmcv').filemanager('image');
    </script>
    <script>
        $('#description').summernote({
          placeholder: 'Nhập đoạn mô tả ngắn....',
          tabsize: 2,
          height: 120,
          toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
          ]
        });
      </script>
    

   
    <script src="{{ asset('js/option_two/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/option_one/detail-jobs.js')}}"></script>
    <script src="{{ asset('js/option_one/swipper.js')}}"></script>
    <script src="{{ asset('js/option_one/cart.js')}}"></script>
    <script src="{{ asset('js/option_one/form-apply.js')}}"></script>
    <script src="{{ asset('js/option_one/active.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    {{-- <script>
      $.ajax({
        url: '/check-auth',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          if (response.authId != null) {
            $('#profile').addClass('visible').removeClass('hidden');
            $('#login').addClass('hidden').removeClass('visible');
          } else {
            $('#profile').addClass('hidden').removeClass('visible');
            $('#login').addClass('visible').removeClass('hidden');
          }
        },
        error: function(error) {
          console.error('Error checking authentication status:', error);
        }
      });
    </script> --}}


<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment, employment, salary lookup & career advice platform | VietNamWorks</title>
   
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/option_one/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/option_one/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/option_one/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/option_one/customize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/option_one/detailjob.css') }}">
    <link rel="stylesheet" href="{{ asset('css/option_one/footer.css') }}">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    @if(isset($config['css']) && is_array($config['css']))
    @foreach ($config['css'] as $key => $val)
        {!! '<link href = "'.$val.'" rel="stylesheet"></link>' !!}
    @endforeach
    @endif
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Perform Ajax request to check authentication status
        $.ajax({
          url: '{{ route("check-auth") }}',
          type: 'GET',
          dataType: 'json',
          data: { csrf_token: '{{ csrf_token() }}' }, // Include CSRF token
          success: function(response) {
            // Toggle visibility based on the authentication status
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
      </script>
    {{-- <script src="{{ asset('js/option_two/jquery-3.1.1.min.js') }}"></script> --}}
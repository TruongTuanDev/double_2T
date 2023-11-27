<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Fonts -->
<title></title>
<link rel="stylesheet" href="css/option_one/customize.css">
<link href="css/option_one/login-style.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/option_one/login-style2.css">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://secure.vietnamworks.com/css/app.css?version=1699458724">
<link rel="stylesheet" href="https://secure.vietnamworks.com/css/custom.css?version=1699458724"> 
<script src="js/option_two/jquery-3.1.1.min.js"></script>

@if(isset($config['css']) && is_array($config['css']))
@foreach ($config['css'] as $key => $val)
    {!! '<link href = "'.$val.'" rel="stylesheet"></link>' !!}
@endforeach
@endif
<link href="css/option_two/bootstrap.min.css" rel="stylesheet">
<link href="css/option_two/animate.css" rel="stylesheet">
<link href="css/option_two/plugins/iCheck/custom.css" rel="stylesheet">

<!-- Toastr style -->
<link href="css/option_two/plugins/toastr/toastr.min.css" rel="stylesheet">
<!-- Gritter -->
<link href="js/option_two/plugins/gritter/jquery.gritter.css" rel="stylesheet">

<link href="css/option_two/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/option_one/customize.css">

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

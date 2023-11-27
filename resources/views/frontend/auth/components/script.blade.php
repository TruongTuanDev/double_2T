 <!-- Mainly scripts -->
 <script src="vendor/laravel-filemanager/js/stand-alone-button.js"></script>
 <script>
     $('#lfm').filemanager('image');
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
 
 <script src="js/option_two/jquery-3.1.1.min.js"></script>
 <script src="js/option_two/bootstrap.min.js"></script>
 <script src="js/option_two/plugins/metisMenu/jquery.metisMenu.js"></script>
 <script src="js/option_two/plugins/slimscroll/jquery.slimscroll.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
 <!-- jQuery UI -->
 <script src="js/option_two/plugins/jquery-ui/jquery-ui.min.js"></script>
 <script src="library/library.js"></script>
 @if(isset($config['js']) && is_array($config['js']))
 @foreach ($config['js'] as $key => $val)
     {!! '<script src = "'.$val.'"></script>' !!}
 @endforeach
 @endif
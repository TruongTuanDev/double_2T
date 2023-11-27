<!DOCTYPE html>
<html lang="en">
<head>
   @include('frontend.auth.components.head')
</head>
<body>
    <div id="wrapper">
      @include('frontend.auth.components.header')
      <div id="page-wrapper">
        @include($template)
      </div>
      @include('frontend.auth.components.footer')
    </div>
    @include('frontend.auth.components.script')
</body>
</html>
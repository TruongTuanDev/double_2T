<!DOCTYPE html>
<html lang="en">
<head>
   @include('backend.auth.components.head')
</head>
<body>
    <div id="wrapper">
      @include('backend.auth.components.header')
      <div id="page-wrapper">
        @include($template)
      </div>
      @include('backend.auth.components.footer')
    </div>
    @include('backend.auth.components.script')
</body>
</html>
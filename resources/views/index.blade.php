<!DOCTYPE html>
<html lang="vi">

<head>
    @include('frontend.components.head')
</head>

<body>
    <header>
      @include('frontend.components.header')
    </header>
    <div class="pageContentWrapper">
        <div class="hh">
        @include('frontend.components.filter')
        @include($template)
    </div>
    @include('frontend.components.footer')
    @include('frontend.components.script')
</body>

</html>
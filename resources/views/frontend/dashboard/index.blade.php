<!DOCTYPE html>
<html>

<head>
   @include('frontend.dashboard.components.head')
</head>

<body>
    <div id="wrapper">
        @include($sidebar)
        <div id="page-wrapper" class="gray-bg">
            @include('frontend.dashboard.components.nav')
            @include($template)
            @include('frontend.dashboard.components.footer')
        </div>
    </div> 
   @include('frontend.dashboard.components.script')
</body>
</html> 

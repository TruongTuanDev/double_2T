<!DOCTYPE html>
<html>

<head>
   @include('frontend.dashboard.components.head')
</head>

<body>
    <div id="wrapper">
        @if(isset($sidebar))
        @include($sidebar)
        @else
        @include('frontend.dashboard.layouts.sidebarstudent')
        @endif
        <div id="page-wrapper" class="gray-bg">
           @include('frontend.dashboard.components.nav')
            @include($template)
            @include('frontend.dashboard.components.footer')
        </div>
    </div> 
   @include('frontend.dashboard.components.script')
</body>
</html>

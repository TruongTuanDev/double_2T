<!DOCTYPE html>
<html>

<head>
   @include('backend.dashboard.components.head')
</head>

<body>
    <div id="wrapper">
        @include('backend.dashboard.components.sidebar')
        <div id="page-wrapper" class="gray-bg">
            @include('backend.dashboard.components.nav')
            @include($template)
            @include('backend.dashboard.components.footer')
        </div>
    </div> 
   @include('backend.dashboard.components.script')
</body>
</html>

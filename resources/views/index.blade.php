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
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
    intent="WELCOME"
    chat-title="Hỗ trợ"
    agent-id="648a2a67-b11e-475c-829d-0dd72b4b9471"
    language-code="vi"
    config="{
        enableHistory: true,
        disableTextInput: false
      }"
    ></df-messenger>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đầm Sen Park</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/damsen-logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
</head>

<body class="bg">
    <div class="main">
        @yield('content')
        {{-- Chat Zalo --}}
        <div class="zalo-chat-widget" data-oaid="2920828326549610293" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height=""></div>

    <script src="https://sp.zalo.me/plugins/sdk.js"></script>

        <!-- Messenger Plugin chat Code -->
        <div id="fb-root"></div>

        <!-- Your Plugin chat code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "102179685842482");
            chatbox.setAttribute("attribution", "biz_inbox");
        </script>

        <!-- Your SDK code -->
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true,
                    version: 'v13.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </div>
</body>

</html>

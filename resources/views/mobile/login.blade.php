<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Your app title -->
    <title>My App</title>
    <!-- Path to Framework7 iOS CSS theme styles-->
    <link rel="stylesheet" href="{{asset('css/framework7.ios.min.css')}}">
    <!-- Path to Framework7 iOS related color styles -->
    <link rel="stylesheet" href="{{asset('css/framework7.ios.colors.min.css')}}">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="{{asset('css/my-app.css')}}">
</head>
<body>
<!-- Views -->
<div class="views">
    <!-- Your main view, should have "view-main" class -->
    <div class="view view-main">
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
            <!-- Page, "data-page" contains page name -->
            <div data-page="index" class="page">
                <!-- Scrollable page content -->
                <div class="page-content">
                    <div class="content-block">
                        <div class="content-block-title">系统登录</div>
                        <form id="login-form" class="list-block">
                            {{csrf_field()}}
                            <ul>
                                <li>
                                    <div class="item-content">
                                        <div class="item-inner">
                                            <div class="item-title label">用户名</div>
                                            <div class="item-input">
                                                <input type="text" name="username" placeholder="Your name">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-content">
                                        <div class="item-inner">
                                            <div class="item-title label">密码</div>
                                            <div class="item-input">
                                                <input type="password" name="userpwd" placeholder="Your password">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>

                        <a href="#" id="btn_login" class="button button-big button-fill">Login</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Path to Framework7 Library JS-->
<script type="text/javascript" src="{{asset('js/framework7.min.js')}}"></script>
<!-- Path to your app js-->
<script type="text/javascript" src="{{asset('js/my-app.js')}}"></script>
<script type="text/javascript">
    $$("#btn_login").on("click", function () {
        var data = myApp.formToJSON('#login-form');
        console.log(data);
        $$.ajax({
            url: '/m/login/check',
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function (res) {
                console.log(res);
                if (res.state === 1) {
                    myApp.alert(res.msg, '提示', function () {
                        window.location.href = '/m';
                    });
                } else {
                    myApp.alert(res.msg, '提示');
                }
            }
        });
    })
</script>
</body>
</html>

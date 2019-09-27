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
    <link rel="stylesheet" href="/css/framework7.ios.min.css">
    <!-- Path to Framework7 iOS related color styles -->
    <link rel="stylesheet" href="/css/framework7.ios.colors.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="/css/my-app.css">
</head>
<body class="theme-white">
<!-- Status bar overlay for full screen mode (PhoneGap) -->
<div class="statusbar-overlay"></div>
<!-- Panels overlay-->
<div class="panel-overlay"></div>
<!-- Left panel with reveal effect-->
<div class="panel panel-left panel-reveal">
    <div class="content-block">
        <p>Left panel content goes here</p>
    </div>
</div>
<!-- Views -->
<!-- Tabs, 现在容器是"views" -->
<div class="views tabs toolbar-fixed">
    <!-- Tab 1 同时也是 View 1, 默认激活 -->
    <div id="tab1" class="view tab active">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="center">View 1</div>
            </div>
        </div>
        <div class="pages navbar-fixed">
            <div data-page="home-1" class="page">
                <div class="page-content">
                    <div class="content-block">
                        <p>This is view 1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab 2 - View 2 -->
    <div id="tab2" class="view tab">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="center">View 2</div>
            </div>
        </div>
        <div class="pages navbar-fixed">
            <div data-page="home-2" class="page">
                <div class="page-content">
                    <div class="content-block">
                        <p>This is view 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab 3 - View 3 -->
    <div id="tab3" class="view tab">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="center">View 3</div>
            </div>
        </div>
        <div class="pages navbar-fixed">
            <div data-page="home-3" class="page">
                <div class="page-content">
                    <div class="content-block">
                        <p>This is view 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="toolbar tabbar tabbar-labels">
        <div class="toolbar-inner">
            <a href="#tab1" class="tab-link active">
                <i class="icon demo-icon-1"></i>
                <span class="tabbar-label">Label 1</span>
            </a>
            <a href="#tab2" class="tab-link">
                <i class="icon demo-icon-2">
                    <span class="badge bg-red">5</span>
                </i>
                <span class="tabbar-label">Label 2</span>
            </a>
            <a href="#tab3" class="tab-link">
                <i class="icon demo-icon-3"></i>
                <span class="tabbar-label">Label 3</span>
            </a>
            <a href="#tab4" class="tab-link">
                <i class="icon demo-icon-4"></i>
                <span class="tabbar-label">Label 4</span>
            </a>
        </div>
    </div>
</div>

<!-- Path to Framework7 Library JS-->
<script type="text/javascript" src="/js/framework7.min.js"></script>
<!-- Path to your app js-->
<script type="text/javascript" src="/js/my-app.js"></script>
</body>
</html>

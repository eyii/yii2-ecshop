<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Basic Accordion - jQuery EasyUI Mobile Demo</title>
    <link rel="stylesheet" type="text/css" href="../../themes/metro/easyui.css">
    <link rel="stylesheet" type="text/css" href="../../themes/mobile.css">
    <link rel="stylesheet" type="text/css" href="../../themes/icon.css">
    <script type="text/javascript" src="../../jquery.min.js"></script>
    <script type="text/javascript" src="../../jquery.easyui.min.js"></script>
    <script type="text/javascript" src="../../jquery.easyui.mobile.js"></script>
</head>
<body>
<div class="easyui-navpanel">
    <header>
        <div class="m-toolbar">
            <span class="m-title">Basic Accordion</span>
        </div>
    </header>
    <div class="easyui-accordion" fit="true" border="false">
        <div title="List">
            <ul class="m-list">
                <li>WLAN</li>
                <li>Memory</li>
                <li>Screen</li>
                <li>More...</li>
            </ul>
        </div>
        <div title="Ajax" href="_content.html" style="padding:10px"></div>
    </div>
</div>
</body>
</html>

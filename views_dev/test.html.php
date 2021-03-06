<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no, email=no">
    <title>测试首页</title>
    <link rel="stylesheet" type="text/css" href="/components/test/css/index.css">
</head>
<body>
{%include file='_include.php'%}
<div id="app"></div>
<script type="text/javascript" src="http://cdn.staticfile.org/zepto/1.0rc1/zepto.min.js"></script>
<script>
    window.data = {%json_encode($new)%};
    console.log(window.data);
</script>
<script type="text/javascript" src="/components/test/js/index.js"></script>
</body>
</html>

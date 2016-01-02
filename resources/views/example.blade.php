<!DOCTYPE html>
<html>
<head>
	<title>Captcha</title>
	<link type="text/css" rel="stylesheet" href="{{ CaptchaUrls::LayoutStylesheetUrl() 
 }}">
</head>
<body>

  {!! $captchaHtml !!}
  <input type="text" id="CaptchaCode" name="CaptchaCode">

</body>
</html>
  


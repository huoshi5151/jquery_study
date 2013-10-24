<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>jquery属性选择器</title>
	<style>
	div{
		width: 90px;
		height: 90px;
		float: left;
		background: #bbbbbb;
		border: solid 5px #aaafff;
		margin: 5px;
	}
	</style>
	<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
	<script>
	$(document).ready(function() {
		// $('div[title^="en"]').css('background', '#aaafff');
		// $("div[title*=en]").css('background','#aaafff');
		// 选取title等于en，或以en开头（后面以-连接）的属性
		// $("div[title|=en]").css('background', '#aaafff');
		// 选取属性用空格分隔的值中包含字符uk的元素的背景
		$("div[title~=uk]").css('background', '#aaafff');
	});
	</script>
</head>
<body>
	<div title="en">title为en的div元素</div>
	<div title="en-UK">title为en-UK的div元素</div>
	<div title="english">title为engli的div元素</div>
	<div title="en uk">title为en uk的div元素</div>
	<div title="uken">title为uken的div元素</div>
</body>
</html>
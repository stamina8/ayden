@extends('layouts.nav')
@section('content')
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="pear/css/pear.css" rel="stylesheet" />
		<link href="admin/css/other/error.css" rel="stylesheet" />
	</head>
	<body>
		<div class="content">
			<img src="admin/images/404.svg" alt="">
			<div class="content-r">
				<h1>404</h1>
				<p>The page your looking for is not available</p>
				
				<a  class="pear-btn pear-btn-primary" href="{{url('contact')}}">Contact</a>

				<a  class="pear-btn pear-btn-primary" href="/">Back to home</a>
			</div>
		</div>
		<script src="layui/layui.js"></script>
		<script src="pear/pear.js"></script>
	</body>
</html>
@endsection
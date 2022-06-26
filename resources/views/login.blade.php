@extends('layouts.nav')
@section('content')


<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Login</title>
        <!-- 样 式 文 件 -->
        <link rel="stylesheet" href="pear/css/pear.css">
        <link rel="stylesheet" href="admin/css/other/login.css">
    <style type="text/css" abt="234"></style><link id="layuicss-laydate" rel="stylesheet" href="layui/css/modules/laydate/default/laydate.css?v=5.3.1" media="all">
    <link id="layuicss-layer" rel="stylesheet" href="layui/css/modules/layer/default/layer.css?v=3.5.1" media="all">
    <link id="layuicss-skincodecss" rel="stylesheet" href="layui/css/modules/code.css?v=2" media="all"></head>
<!-- 代 码 结 构 -->

<body background="admin/images/background2.svg" style="background-size: cover;">
    <form class="layui-form form-row" method="post" action="{{url('login')}}">
    @csrf
        <div class="layui-form-item">
            <div class="title"></div>
            <div class="desc">
                LOGIN
            </div>
        </div>
        <div class="layui-form-item">
            <input id="name" name="name" placeholder="name :  " hover class="layui-input"  />
        </div>
        <div class="layui-form-item">
            <input type="password" id="password" name="password" placeholder="password :  " hover class="layui-input"  />
        </div>
        <div class="layui-form-item">
            <!-- <input type="submit" > -->
            <button type="submit" class="pear-btn pear-btn-success login" lay-submit lay-filter="login">
                Login
            </button>
        </div>
        <div class="layui-form-item">
                <input type="checkbox" name="" title="Remember me" lay-skin="primary" checked=""><div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin="primary" required="required" placeholder="Enter your password">><span>Remember me</span><i class="layui-icon layui-icon-ok"></i></div>
            </div>
    </form>
    <!-- 资 源 引 入 -->
    <script src="layui/layui.js"></script>
    <script src="pear/pear.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $('.form-row').on('submit',function(){
            if($('#name').val()==""){
                alert('Please enter your name');
                return false;
            }
            if($('#password').val()==""){
                alert('Please enter your password');
                return false;
            }
        });
    });

</script>
</body>

</html>
@endsection
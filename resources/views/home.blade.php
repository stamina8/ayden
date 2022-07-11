@extends('layouts.nav')
@section('content')

        <link rel="stylesheet" href="pear/css/pear.css">
        <link rel="stylesheet" href="admin/css/other/login.css">
    <style type="text/css" abt="234"></style><link id="layuicss-laydate" rel="stylesheet" href="layui/css/modules/laydate/default/laydate.css?v=5.3.1" media="all">
    <link id="layuicss-layer" rel="stylesheet" href="layui/css/modules/layer/default/layer.css?v=3.5.1" media="all">
    <link id="layuicss-skincodecss" rel="stylesheet" href="layui/css/modules/code.css?v=2" media="all"></head>
        @if(Auth::user())
        <h1>Login successful ! </h1>
        @endif


                 <table cellspacing="0" cellpadding="0" border="0" class="layui-table" lay-skin="line">
                <tbody>
                 <tr>
                    <th>API</th>
                    <th>Description</th>
                    <th>Auth</th>
                    <th>HTTPS</th>
                    <th>Cors</th>
                    <th>Link</th>
                    <th>Category</th>
                </tr>
          @foreach($product['entries'] as $v)

                <tr>
                    <td>{{$v['API']}}</td>
                    <td>{{$v['Description']}}</td>
                    <td>{{$v['Auth']}}</td>
                    <td>{{$v['HTTPS']}}</td>
                    <td>{{$v['Cors']}}</td>
                    <td><a style="color: blue" href="{{$v['Link']}}" target="_blank">API link</a></td>
                    <td>{{$v['Category']}}</td>

                </tr>
            @endforeach

    </div>

    <br><br><br>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    </body>
</html>
@endsection

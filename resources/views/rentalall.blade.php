@extends('layouts.nav')
@section('content')

    <table style="margin: 60px" border="1">
      <th style="width: 1%">product_name</th>
      <th style="width: 1%">manufactures</th>
      <th style="width: 1%">image</th>
      <th style="width: 1%">os</th>
      <th style="width: 1%">insurance 保险</th>
      <th style="width: 1%">duration 租用时长</th>
      <th style="width: 1%">total_price 总价</th>
      <th style="width: 1%">status 订单状态</th>
      <th style="width: 1%"> 操作</th>
      @foreach ($rentals as $rental)
      <tr>
        <td>{{ $rental->Computer->product_name }}</td>
        <td>{{ $rental->Computer->manufactures }}</td>
        <td><img src="{{ $rental->Computer->image }}" width="70%"> </td>
        <td>{{ $rental->Computer->os }}</td>

        <td>{{ $rental->insurance }}</td>
        <td>{{ $rental->duration }} h</td>
        <td>{{ $rental->total_price }}</td>
        <td>
          @if($rental->status == 0)
          租用中
          @elseif($rental->status == 1)
          客户归还中
          @else
         已经归还
          @endif
        </td>
        <td>
          @if($rental->status == 0)
          <a href='{{url("rental/$rental->rental_id")}}'>归还</a>
          @endif
        </td>
      </tr>
      @endforeach
    </table>
@endsection
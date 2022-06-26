@extends('layouts.nav')
@section('content')
<a class="btn btn-primary" href='{{url("manager_add")}}'>Add</a>
    <table style="margin: 60px" border="1">
      <th style="width: 20%">product_name</th>
      <th style="width: 20%">manufactures</th>
      <th style="width: 20%">status</th>

      <th style="width: 20%"> confirm</th>
      <th> edit</th>
      <th> delete</th>
      @foreach ($rentals as $rental)
      <tr>
        <td>{{ $rental->computer_id }}</td>
        <td>{{ $rental->remark }}</td>

        <td>
          @if($rental->status == 0)
          租用中
          @elseif($rental->status == 1)
          归还
          @else
          归还
          @endif
        </td>
      

        <td style="white-space:nowrap">
          @if($rental->status == 0)
          <form method="post" action='{{url("manager_confirm/$rental->rental_id")}}'>
          @csrf
          <input type="hidden" name="insurance" value="{{ $rental->insurance }}">
           <input type="submit" class="btn btn-success"  value="Confirm">
          </form>
          @endif
        </td>
        <td>
            <a class="btn btn-primary" href='{{url("manager_edit/$rental->rental_id")}}'>Edit</a>
        </td>
        <td>      
          <form method="post" action='{{url("manager_delete/$rental->rental_id")}}'>
          @csrf
           <input type="submit" class="btn btn-danger"  value="Delete">
          </form>
        </td>



      </tr>
      @endforeach
    </table>
@endsection
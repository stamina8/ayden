@extends('layouts.nav')
@section('content')
        <title>UCR Services</title>

        <link href="{{asset('css/rental.css')}}" rel="stylesheet">
    <body>


      <!--background picture & search bar-->
  <!--     <div class="background-container">
        <img class="computer" src="{{asset('img/test.jpg')}}">
        <div class="shadow"></div>
        <div class="searchtext">
          <h1 class="title">UCR Services</h1>
          <form>
            <div class="container">
              <form action="" class="parent">
                <input type="searchtext" class="search" placeholder="Search Brand">
                <input type="button" class="btn btn-primary" id="btnsearch" value="search">
              </form>
            </div>
          </form>
        </div>
      </div> -->
      <br><br>

      <h1 class="moredevice">{{$computer->product_name}}</h1>
      <hr>

      <!--grid-->
      <div class="devices">
        <div class="row">
            <div class="col-3 offset-4">
                <div class="introduction" >
                    <img src="{{asset($computer->image)}}" class="device">
                    <div class="text">
                        <h5>{{ $computer->manufactures }}</h5>
                        <p>Availability: {{ $computer->quantity }}</p>
                        <p>display_size: {{ $computer->display_size }}</p>
                        <p>ram: {{ $computer->ram }}</p>
                        <p>usb_port: {{ $computer->usb_port }}</p>
                        <p>hdmi_port: {{ $computer->hdmi_port }}</p>
                        <p>price: {{ $computer->price }}</p>
                    </div>
                </div>
            </div>
  
        </div>

        <!-- Button -->
        <div class="row">
            <div class="col-sm-3 offset-4 btn">
                @if($computer->quantity == 0 or !Auth::user()) 
                <button class="btn btn-primary" disabled>Rent</button>&nbsp;
               
                <button class="btn btn-primary" disabled >Availability</button>
                @else
                <button class="btn btn-primary" id="btn-mac">Rent</button>

                <button class="btn btn-primary">Availability</button>
                @endif
            </div>
     
        </div>
        
    <!-- Mac Modal -->
    <div class="modal" id="macbookpro">
      <div class="modal-dialog">
          <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">Macbook pro</h4>

              </div>

              <!--  Modal Body-->
              <div class="modal-body">
              <!--   <div id="main_image" class="detail_pic">
                    <img src="img/apple.png" style="margin-right: auto;margin-left: auto; display: block; width: 40%;">
                    
                </div> -->
                <div calss="table-responsive">
            <table class="table" id="price-table">
              <form method="post" action="{{url('rental')}}">
                @csrf
                <tbody>
                    <tr>
                        <td >Model name :</td>
                        <td> {{ $computer->product_name }}</td>
                    </tr>
                    <tr>
                        <td >Brand :</td>
                        <td>{{ $computer->manufactures }}</td>
                    </tr>
                    <tr>
                        <td>Display size :</td>
                        <td>{{ $computer->display_size }}</td>
                    </tr>
                    <tr>
                        <td>Operating system :</td>
                        <td>{{ $computer->os }}</td>
                    </tr>
                    <tr>
                        <td>Hard disk size :</td>
                        <td>{{ $computer->ram }}</td>
                    </tr>
                    <tr>
                          <td>Price :</td>
                          <td>{{ $computer->price }}</td>
                    </tr>
                    @if(Auth::user()->is_student == 1)
                    <tr>
                          <td>Student price:</td>
                          <td>{{ $computer->price * 0.9}}</td>
                    </tr>
                    @endif
                    <tr>
                      <td>Rent time：</td>
                      <td>
                        <select name="rent_time">
                            <option value="1">1h</option>
                            <option value="1.5">1.5h</option>
                            <option value="2">2h</option>
                            <option value="2.5">2.5h</option>
                            <option value="3">3h</option>
                            <option value="3.5">3.5h</option>
                            <option value="4">4h</option>
                            <option value="4.5">4.5h</option>
                            <option value="5">5h</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                        <td>Deposit :</td>
                        <td>$ 50</td>
                    </tr>
                    <tr>
                        <td>Insure :</td>
                        <td>
                          <select name="insure">
                              <option value="0">$ 0</option>
                              <option value="10">$ 10</option>
                          </select>
                        </td>
                    </tr>

                </tbody>
            </table>
            <input type="hidden" name="computer_id" value="{{ $computer->computer_id }}">
            <input type="hidden" name="price" value="{{ $computer->price }}">
            <input type="submit" class="btn btn-danger"  value="Rent">
            &nbsp;
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn-mac-close">Close</button>
            </form>
        </div>
    </div>
    </div>
    </div>
</div>
      
        <script src="{{asset('js/rental.js')}}"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
    </body>
</html>
@endsection
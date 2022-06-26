<!doctype html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Services</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="{{asset('css/rental.css')}}" rel="stylesheet">
        <link href="http://at.alicdn.com/t/font_3272091_cx16veygrct.css" rel="stylesheet">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Services</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('homepage')}}">Home</a>
              </li>


              @if(!Auth::user())
              <li class="nav-item">
                <a class="nav-link" href="{{url('registration')}}">Registration</a>
              </li>
              @endif

              <li class="nav-item">
                <a class="nav-link" href="{{url('404')}}">404</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('500')}}">500</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">contact</a>
              </li>

              @if( Auth::user())

              <li class="nav-item">
                <a class="nav-link" href="{{url('managerrental')}}">Manager</a>
              </li>

              @endif
              
             
            </ul>

            @if(Auth::user())

              <span class="navbar-text">
              <a href="{{url('usercenter')}}" class="navbar nav-link" style="color: inherit; text-decoration: none;">{{ Auth::user()->name }}</a>
            </span>

            <span class="navbar-text">
              <a class="nav-link" href="{{url('logout')}}" style="color: inherit; text-decoration: none;">Log out</a>
            </span>

            @else

            <span class="navbar-text">
              <a  class="navbar nav-link" href="{{url('login')}}">Login</a>
            </span>

            @endif

              <span class="navbar-text">

            </span>
          </div>
        </div>
      </nav>

     
            @yield('content')
      
    </div>

        <!-- Login Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
          <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">Login</h4>
                  <button type="button" class="Close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal Body-->
              <div class="modal-body">
                  <form method="post" action="{{url('login')}}">
                    @csrf
                    <!-- 
                      <label for="fname">First name:</label><br>
                      <input class="inputlg" type="text" id="fname" name="name" required="required"
                      placeholder="Enter your first name"><br> -->

                      <label for="lname">name:</label><br>
                      <input class="inputlg" type="text" id="lname" name="name" required="required"
                      placeholder="Enter your last name"><br>

                      <label for="password">Password:</label><br>
                      <input class="inputlg" type="password" id="password" name="password" 
                      required="required"
                      placeholder="Enter your password"><br>
<br>
                  <!--     <label for="Identity">Identity</label><br>

                      <input type="radio" id="student" name="Identity">
                      <label for="student">student</label><br>
      
                      <input type="radio" id="staff" name="Identity">
                      <label for="staff">staff</label><br>

                      <input type="radio" id="Web Manager" name="Identity">
                      <label for="Web Manager">Web Manager</label><br><br> -->

                      <input type="Submit" value="Submit" class="btn btn-primary">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </form>
              </div>

              <!-- Modal Footer-->
              <div class="modal-footer"></div>
          </div>
        </div>
        </div>
</body>
</html>

<style>
    .navbar .navbar-nav .nav-link{
    margin-right: 0px;
    padding: 5px 10px;
    cursor: pointer;
    }

</style>

<div class="container-fluid bg-dark px-0">

            <div class="col-lg-6 ps-5 text-start">

            </div>

                </div>
            </div>
        </div>
    </div>

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">Train Management System</h1>
        </a>

        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link  active">Home</a>
                {{-- <a href="" class="nav-item nav-link active">Milks</a> --}}
                {{-- <a class="nav-item nav-link " href="{{route('cart.view')}}">
                    Cart {{session()->has('cart') ? array_sum(array_column(session()->get('cart'),'quantity')):0}} items
                </a> --}}
              {{-- @if (auth()->user())
                 @auth
                 <p class="nav-item nav-link">
                     {{ucfirst(auth()->user()->name)}}
                 </p>
                 @endauth
                 <a class="nav-item nav-link" href="{{route('customer.logout')}}">Logout</a>
              @else --}}
              {{--
              @endif --}}
              <a class="nav-item nav-link mx-5 " data-bs-toggle="modal" data-bs-target="#exampleModal">Registration</a>
                <a href="{{route('login.form')}}" class="nav-item nav-link">Login</a>

                <div class="nav-item dropdown">
            </div>
        </div>
    </nav>
    <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Customer Registration</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('customer.registration')}}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" placeholder="Enter User Name" class="form-control" required>
                    {{-- <b class="text-danger"><span>{{$errors->first('name')}}</span></b> --}}
                </div>
                <div class="mb-3">
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="c_password" placeholder="Re-Type Password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
            {{-- <div class="modal-footer"> --}}
                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
            {{-- </div> --}}
      </div>
    </div>
  </div>

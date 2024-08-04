<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Train Management System - Login</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('admin/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('admin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Nunito:wght@300;400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background: url('https://images.unsplash.com/photo-1557683304-673a23048d34') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      margin: 0;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.9);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }

    .login-container .form-control {
      border-radius: 30px;
      padding-left: 45px;
    }

    .login-container .input-group-text {
      border-radius: 30px 0 0 30px;
      border-right: 0;
      background: #6c63ff;
      color: #fff;
    }

    .login-container .btn-primary {
      border-radius: 30px;
      background: #6c63ff;
      border: none;
    }

    .login-container .logo {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 20px;
      color: #6c63ff;
      text-align: center;
    }

    .login-container .form-label {
      color: #6c63ff;
    }

    .back-to-top {
      display: none;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <div class="text-center mb-4">
      <a href="{{ route('home') }}" class="btn btn-success">Home</a>
    </div>
    <div class="text-center logo">
     Train Management System
    </div>
    {{-- <h5 class="text-center mb-4">Login to Your Account</h5> --}}
    <form action="{{ route('admin.login') }}" method="post" class="row g-3">
      @csrf
      <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email" value="{{ old('email') }}" required>
        </div>
        <b><span class="text-danger">{{ $errors->first('email') }}</span></b>
      </div>
      <div class="col-12">
        <label for="password" class="form-label">Password</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-lock"></i></span>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter Your Password" value="{{ old('password') }}" required>
        </div>
        <b><span class="text-danger">{{ $errors->first('password') }}</span></b>
      </div>
      <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Login</button>
      </div>
    </form>
  </div>

  <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('admin/assets/js/main.js') }}"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  {!! Toastr::message() !!}
</body>

</html>

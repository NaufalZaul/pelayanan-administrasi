<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>
    <div class="min-vh-100 position-relative d-flex align-items-center">  
        <div class="container d-flex">           
            <div class="position-absolute top-0 start-0 end-0 ">
                @if(session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if($errors->any())
                    @foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif
            </div>
            <div class="w-50 m-auto px-5 border border-end-0 rounded-start bg-light">            
                <form class="log-form " action="{{ route('login.users') }}" method="POST">
                    <h1 class="text-center fs-2">Lorem ipsum dolor sit.</h1>
                    <p class="text-center mb-4">Lorem ipsum dolor sit amet consectetur.</p>
                    @csrf
                    <div class="mb-4">
                        <input type="email" name="email" class="w-100 border-0 py-2 ps-2 border-bottom bg-light" placeholder="Email">
                    </div>
                    <div class="mb-4">
                        <input type="password" name="password" class="w-100 border-0 py-2 ps-2 border-bottom bg-light" placeholder="Password">
                    </div>
                    <div class="mb-3 pb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Login</button>
                    <p class="mt-3">
                        Belum punya akun?
                    <a href="{{ url('/registrasi') }}">Register</a>
                </p>
                </form>

                <div class="">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet</p>
                </div>
            </div>

            <div class="w-50 rounded-end d-flex" style="background: url('{{ asset('Image/autumn-studio-221wufG10eg-unsplash.jpg') }}') center center/cover no-repeat;">
                <div class="login-des m-auto w-75 p-4 py-5 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-text text-white float-start mt-3 mx-3 ms-4" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                        <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <h1 class="text-white ms-4">Layanan Masyarakat</h1>
                    <p class="text-white fs-5 my-3">Lorem ipsum dolor, sit amet consectetur </p>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
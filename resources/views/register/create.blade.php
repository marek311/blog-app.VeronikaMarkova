<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <title>TRM-blog </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

<section class="px-6 py-8 ">

    <main class="container mt-5  max-w-lg bg-light border border-2 border-secondary p-4 rounded">

        <h1 class="text-center font-bold text-xl">REGISTRÁCIA</h1>

        <form method="POST" action="/register" class="mt-4">
@csrf
            <div class="mb-5">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}" required>
                @error('name')
                <p class="text-red-500 text-xs mt-1"> {{$message}}</p>
                @enderror

            </div>




            <div class="mb-5">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" type="text" name="username" id="username" value="{{old('username')}}" required>
                @error('username')
                <p class="text-red-500 text-xs mt-1"> {{$message}}</p>
                @enderror
            </div>


            <div class="mb-5">
                <label class="form-label" for="password">Email</label>
                <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}" required>
                @error('email')
                <p class="text-red-500 text-xs mt-1"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" required>
                @error('password')
                <p class="text-red-500 text-xs mt-1"> {{$message}}</p>
                @enderror
            </div>




            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

        </form>

    </main>

</section>

</body>

</html>

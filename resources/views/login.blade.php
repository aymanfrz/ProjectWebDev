<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaya Boys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>
    @include('layouts.kayanavigation')
    <section class="main">
        <h1 class="header">Log In As Staff</h1>

        <div class="KayaForm">
            <form>
                <div class="formInput">
                    <label class="font-bold" for="email">Email</label><br>
                    <input class="EmailInput" type="text" name="email"><br>
                </div>
                <div class="formInput">
                    <label class="font-bold" for="password">Password</label><br>
                    <input class="PasswordInput" type="text" name="password"><br>
                </div>
                <div class="ButtonInt">
                    <button name="log" class="cursor-pointer" type="submit">Log In
                    </button>
                </div>
            </form>
        </div>
        <div class="ButtonExt">
            <a href="/"><button class="cursor-pointer">Return</button>
            </a>
        </div>
        
    </section>
    @include('layouts.kayacontact')
</body>

</html>
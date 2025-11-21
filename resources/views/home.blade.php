<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaya Boys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>
    @include('layouts.kayanavigation')

    <div class="main">
        <section class="topSection">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="text-light">Welcome to</h1>
                    <img src="{{asset('images/logo.png')}}" width="300">
                </div>
                <div class="col">
                    <img src="{{asset('images/FrontImage.png')}}" width="450">
                </div>
            </div>
        </section>

        <section class="bg-light m-6">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <img src="{{asset('images/OfflineStore.png')}}" width="450">
                    </div>
                    <div class="col">
                        <h1 class="text-warning display-1"><strong>Visit our store!</strong></h1>
                        <div class="d-flex flex-row">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                                    class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                </svg>
                            </div>
                            <h3 class="display-5">Barkeley Walk 06, UC</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.kayacontact')
</body>

</html>
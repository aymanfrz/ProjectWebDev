<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Products - KayaBoys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>
    @include('layouts.kayanavigation')

    <section class="kaya-hero">
        <div class="container">
        </div>
    </section>

    <section class="kaya-about">
        <div class="container">
            @if (auth()->check() && auth()->user()->status == 'admin')
                <a href="{{ route('pageContents.create') }}" class="btn btn-outline-primary">Create</a>
            @endif
            <h2 class="kaya-section-title">{{ $ourProducts->title }}</h2>
            <p>{{ $ourProducts->content }}</p>
            @if (auth()->check() && auth()->user()->status == 'admin')
                <td>
                    <div class="mt-2">
                        <a href="{{ route('pageContents.edit', $ourProducts->id) }}" class="btn btn-primary">Update</a>
                    </div>
                    <div class="mt-2">
                        <form action="{{ route('pageContents.destroy', $ourProducts->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            @endif
        </div>
    </section>

    <!-- Products List -->
    <section class="kaya-products">
        <div class="container">
            <h2 class="kaya-section-title">Flavor Variety</h2>

            @if (auth()->check() && auth()->user()->status == 'admin')
                <a href="{{ route('createproduct.create') }}" class="btn btn-outline-primary">Create</a>
            @endif

            <!-- Sweet Products -->
            <div class="mb-5">
                <h3 class="kaya-category-title sweet-category">Sweet Variants</h3>
                <div class="kaya-scroll-container">
                    @foreach ($sweetProducts as $product)
                        <div class="card kaya-product-card">
                            <div class="kaya-product-image"
                                style="background-image: url('{{ $product->image_path }}');">
                            </div>
                            <div class="kaya-product-body">
                                <h5 class="kaya-product-name">{{ $product->name }}</h5>
                                <p class="kaya-product-desc">{{ $product->description }}</p>
                                <span class="kaya-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            </div>
                            @if (auth()->check() && auth()->user()->status == 'admin')
                                <td>
                                    <div class="mt-2">
                                        <a href="{{ route('createproduct.edit', $product->id) }}"
                                            class="btn btn-primary">Update</a>
                                    </div>
                                    <div class="mt-2">
                                        <form action="{{ route('createproduct.destroy', $product->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Savory Products -->
            <div class="mb-5">
                <h3 class="kaya-category-title savory-category">Savory Variants</h3>
                <div class="kaya-scroll-container">
                    @foreach ($savoryProducts as $product)
                        <div class="card kaya-product-card">
                            <div class="kaya-product-image"
                                style="background-image: url('{{ $product->image_path }}');">
                            </div>
                            <div class="kaya-product-body">
                                <h5 class="kaya-product-name">{{ $product->name }}</h5>
                                <p class="kaya-product-desc">{{ $product->description }}</p>
                                <span class="kaya-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            </div>
                            @if (auth()->check() && auth()->user()->status == 'admin')
                                <td>
                                    <div class="mt-2">
                                        <a href="{{ route('createproduct.edit', $product->id) }}"
                                            class="btn btn-primary">Update</a>
                                    </div>
                                    <div class="mt-2">
                                        <form action="{{ route('createproduct.destroy', $product->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="kaya-advantages">
        <div class="container">
            <h2 class="kaya-section-title">KayaBoys Advantages</h2>
            @if (auth()->check() && auth()->user()->status == 'admin')
                <a href="{{ route('advantages.create') }}" class="btn btn-outline-primary">Create</a>
            @endif
            <div class="row">
                @foreach ($advantages as $advantage)
                    <div class="col-md-6 col-lg-3">
                        <div class="kaya-advantage-item">
                            <h5>{{ $advantage->title }}</h5>
                            <p>{{ $advantage->description }}</p>
                        </div>
                        @if (auth()->check() && auth()->user()->status == 'admin')
                            <td>
                                <div class="mt-2">
                                    <a href="{{ route('advantages.edit', $advantage->id) }}"
                                        class="btn btn-primary">Update</a>
                                </div>
                                <div class="mt-2">
                                    <form action="{{ route('advantages.destroy', $advantage->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @include('layouts.kayacontact')
</body>

</html>

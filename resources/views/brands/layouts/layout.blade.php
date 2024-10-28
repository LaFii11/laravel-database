<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('categories.index') }}">Categories</a></li>
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="{{ route('suppliers.index') }}">Suppliers</a></li>
                <li><a href="{{ route('brands.index') }}">Brands</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2020</p>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.head')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <header>
                @include('includes.sidebar')
            </header>
            <div class="col-2"></div>
            <div class="col-10">
                @yield('content')
                <h1>hheeeeeeeee Lorem ipsum, dolor sit amet que quidem
                    provident, earum, quasi mollitia sapiente! Vero voluptatem qui enim recusandae!
                </h1>
            </div>
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </div>
</body>

</html>

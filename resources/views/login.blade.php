<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    <body>
        <main class="container">
            <form action="news" method="post">
                <div>email <input type="text"></div>
                <div>password <input type="password"></div>
                <div><input type="submit" value="Log in"></div>
            </form>
        </main>

        @include('partials.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

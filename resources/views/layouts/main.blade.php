<!doctype html>
<html lang="pt-BR">
    @include('layouts.build.head')
<body>
    @include('layouts.build.header')
        <div id="main" class="container">
            @yield('content')
        </div>
        @include('layouts.build.footer')
        @include('layouts.build.scripts')
        @include('layouts.build.destroy-register')
</body>
</html>
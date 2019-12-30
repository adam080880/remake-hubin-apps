@include('templates/header')
@include('templates/sidebar')
@include('templates/navbar')

<div class="right_col" role="main">
    @yield('content')
</div>

@include('templates/footer')
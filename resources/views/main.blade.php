@include('layout.header')


@include('layout.sidebar')

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">

        @include('layout.navbar')

        <div class="page-wrapper">
            <div class="content">
                <br>
                @yield('content')
            </div>
        </div>
    </div>

    @include('layout.footer')

<!DOCTYPE html>
<html lang="en">

@include('admin.layout.url_css')

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">

        <!-- ! Sidebar -->
        @include('admin.layout.sidebar')

        <div class="main-wrapper">

            <!-- ! Main nav -->
            @include('admin.layout.navbar')

            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                @yield('content-admin')
            </main>

            <!-- ! Footer -->
            @include('admin.layout.footer')
        </div>
    </div>
    @include('admin.layout.url_js')
</body>

</html>

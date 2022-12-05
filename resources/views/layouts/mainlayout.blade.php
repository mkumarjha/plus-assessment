<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layouts.partials.head')
 </head>
 <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
    <!-- @include('layouts.partials.nav') -->
    <!-- @include('layouts.partials.header') -->
        @include('layouts.partials.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('layouts.partials.top-navbar')    
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- End of Main Content -->
            @include('layouts.partials.footer')
        </div>
        @include('layouts.partials.footer-scripts')
    </div>
</body>
</html>
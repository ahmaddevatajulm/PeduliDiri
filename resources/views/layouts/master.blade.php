
<!DOCTYPE html>
<html lang="en">
<body>
    @include('style')
    
    <div id="app">
        <div class="main-wrapper"></div>
        @include('layouts.navbar')
        @include('layouts.sidebar')
    </div>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('title')</h1>
            </div>
            <div class="section-body">
                @yield('content')
            </div>
        </section>
    </div> 
</body>
</html>
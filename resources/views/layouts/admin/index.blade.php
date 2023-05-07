@include('includes.header')
<link href="/assets/css/soft-ui-dashboard-tailwind.css" rel="stylesheet" />

@include('layouts.admin.sidebar')
<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
@include('layouts.admin.navbar')
<div>
    @yield('content')
</div>
@include('includes.footer')

<style>
.nav .nav-link:hover{
    background-color:darkslategrey;
}

</style>

<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Sidebar Lists</div>
            <a class="nav-link" href="{{route('dashboard')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <a class="nav-link" href="{{route('category.index')}}"><i class="fa-sharp fa-light fa-grid-2"></i>
                <div class="sb-nav-link-icon"></div>
                Categories
            </a>
            <a class="nav-link" href="{{route('vehicle.index')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-car"></i></div>
                Vehicles
            </a>
            <a class="nav-link" href="{{route('toll-chart.index')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-simple"></i></div>
                TollCharts
            </a>
            <a class="nav-link" href="{{route('customer.index')}}">
                <div class="sb-nav-link-icon"><i class="fa-brands fa-intercom"></i></div>
                Customers
            </a>
            <a class="nav-link" href="{{route('toll.index')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-toilets-portable"></i></div>
               Tolls
            </a>
            <a class="nav-link" href="{{route('payment.index')}}">
                <div class="sb-nav-link-icon"><i class="fa-light fa-bag-shopping"></i></div>
                Payments
            </a>
            <a class="nav-link" href="{{route('booth.index')}}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-booth-curtain"></i></div>
                Booths
            </a>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Reports
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>

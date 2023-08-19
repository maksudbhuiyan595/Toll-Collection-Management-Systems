
<style>
    
.nav .nav-link:hover{
    background-color:darkslategrey;
  
   
}

</style>

<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Sidebar Lists</div>
            <a class="nav-link" href="{{route('dashboard')}}"><i class="fa-solid fa-gauge"></i>
                <div class="sb-nav-link-icon"></div>
                Dashboard
            </a>
            <a class="nav-link" href="{{route('category.index')}}"><i class="fa-solid fa-house"></i>
                <div class="sb-nav-link-icon"></div>
                Categories
            </a>
           
            <a class="nav-link" href="{{route('vehicle.index')}}"><i class="fa-solid fa-car"></i>
                <div class="sb-nav-link-icon"></div>
                Vehicles
            </a>
            
            <a class="nav-link" href="{{route('customer.index')}}"><i class="fa-brands fa-intercom"></i>
                <div class="sb-nav-link-icon"></div>
                Customers
            </a>
            <a class="nav-link" href="{{route('toll-chart.index')}}"><i class="fa-solid fa-chart-simple"></i>
                <div class="sb-nav-link-icon"></div>
                Toll Charts
            </a>
            <a class="nav-link" href="{{route('collection.index')}}"><i class="fa-solid fa-toilets-portable"></i>
                <div class="sb-nav-link-icon"></div>
               Tolls
            </a>
            <a class="nav-link" href="{{route('payment.index')}}"><i class="fa-brands fa-get-pocket"></i>
                <div class="sb-nav-link-icon"></div>
                Payments
            </a>
            

            <!-- reports section -->

            <p>
            <button style="border-style: none;" class="btn active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
   
            Reports
            </button>
            </p>
            <div style="">
                <div class="collapse collapse-vertical" id="collapseWidthExample">
                    <div class="card card-body bg-secondary">

                <a class="nav-link" href="{{route('category.report')}}">
                    <div class="sb-nav-link-icon"></div>
                        Categories Report
                </a>
                <a class="nav-link" href="{{route('vehicle.report')}}">
                    <div class="sb-nav-link-icon"></i></div>
                    Vehicles Report
                </a>
                <a class="nav-link" href="{{route('tollChart.report')}}">
                    <div class="sb-nav-link-icon"></i></div>
                    TollCharts Report
                </a>
                <a class="nav-link" href="{{route('customer.report')}}">
                    <div class="sb-nav-link-icon"></div>
                    Customers Report
                </a>
                <a class="nav-link" href="{{route('collection.report')}}">
                    <div class="sb-nav-link-icon"></div>
                    TollBootsh Report
                </a>
                <a class="nav-link" href="{{route('payment.report')}}">
                    <div class="sb-nav-link-icon"></div>
                    Payments Report
                </a>
               
                </div>
             </div>
            </div>


        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        {{auth()->user()->name}}
    </div>
</nav>

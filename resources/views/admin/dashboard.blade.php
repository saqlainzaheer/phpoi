@include('admin.layouts.navbar')
<main class="app-content">

    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
                <div class="info">
                    <h4>Job Positions</h4>
                    <p><b>{{$jobCount}}</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon bi bi-envelope fs-1"></i>
                <div class="info">
                    <h4>Contacts Messages</h4>
                    <p><b>{{$contactCount}}</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon bi bi-cash-coin fs-1"></i>
                <div class="info">
                    <h4>Job Requests</h4>
                    <p><b>{{$jobRequestCount}}</b></p>
                </div>
            </div>
        </div>
     
    </div>
    <!-- <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Monthly Deposits</h3>
                <div class="ratio ratio-16x9">
                    <canvas id="depositChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Yearly Returns</h3>
                <div class="ratio ratio-16x9">
                    <canvas id="returnChart"></canvas>
                </div>
            </div>
        </div>
     
    </div> -->
</main>
@include('admin.layouts.footer')
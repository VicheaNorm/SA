@extends('layouts.dashboardlayout')

@section('content')
<div class="sidebar" data-color="white" data-active-color="danger" style="width:15%;">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small" style="width: 30px; height: 35px;">
                <img src="{{asset('admina/assets/img/1logo-small.png')}}">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal" style="font-size: 15px; font-weight: bold;color: #FF4720;">
            COFFEE GANG
        </a>
    </div>
    <div class="sidebar-wrapper" style="width:205px; font-family: ubuntu">
        <ul class="nav" style="margin-top: -10px;">
            <li class="active" style="margin-bottom: -10px;">
                <a href="./dashboard.html">
                    <i class="nc-icon nc-bank"></i>
                    <p style="color:#FF4720; font-weight: 900;">Dashboard</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/order">
                    <i class="nc-icon nc-box"></i>
                    <p style="color:#1A5276; font-weight: 700;">CREATE ORDER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/customer">
                    <i class="nc-icon nc-single-02"></i>
                    <p style="color:#1A5276; font-weight: 700;">CUSTOMER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/product">
                    <i class="nc-icon nc-box-2"></i>
                    <p style="color:#1A5276; font-weight: 700;">PRODUCT</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/addproduct">
                    <i class="nc-icon nc-bag-16"></i>
                    <p style="color:#1A5276; font-weight: 700;">ADD PRODUCT</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/stock">
                    <i class="nc-icon nc-shop"></i>
                    <p style="color:#1A5276; font-weight: 700;">STOCK</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/supplier">
                    <i class="nc-icon nc-paper"></i>
                    <p style="color:#1A5276; font-weight: 700;">SUPPLIER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/user">
                    <i class="nc-icon nc-single-02"></i>
                    <p style="color:#1A5276; font-weight: 700;">User Profile</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/expense">
                    <i class="nc-icon nc-money-coins"></i>
                    <p style="color:#1A5276; font-weight: 700;">EXPENSE</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/setupuser">
                    <i class="nc-icon nc-simple-add"></i>
                    <p style="color:#1A5276; font-weight: 700;">SETUP USER</p>
                </a>
            </li>
            <li style="margin-bottom: -10px;">
                <a href="/staff">
                    <i class="nc-icon nc-circle-10"></i>
                    <p style="color:#1A5276; font-weight: 700;">STAFF</p>
                </a>
            </li>
            <li style="margin-top: 0px;">
                <a href="#">
                    <i class="nc-icon nc-cloud-upload-94"></i>
                    <p style="color:#E74C3C; font-weight: 700;">LOG OUT</p>
                </a>
            </li>
        </ul>
    </div>
</div>
{{-- Content --}}
<div class="content" style="margin-top: 80px;">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Capacity</p>
                    <p class="card-title">150GB
                    <p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i> Update Now
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-money-coins text-success"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Revenue</p>
                    <p class="card-title">$ 1,345
                    <p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-calendar-o"></i> Last day
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-vector text-danger"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Errors</p>
                    <p class="card-title">23
                    <p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-clock-o"></i> In the last hour
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-favourite-28 text-primary"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Followers</p>
                    <p class="card-title">+45K
                    <p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i> Update now
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header ">
              <h5 class="card-title">Users Behavior</h5>
              <p class="card-category">24 Hours performance</p>
            </div>
            <div class="card-body ">
              <canvas id=chartHours width="400" height="100"></canvas>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-history"></i> Updated 3 minutes ago
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card ">
            <div class="card-header ">
              <h5 class="card-title">Email Statistics</h5>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-body ">
              <canvas id="chartEmail"></canvas>
            </div>
            <div class="card-footer ">
              <div class="legend">
                <i class="fa fa-circle text-primary"></i> Opened
                <i class="fa fa-circle text-warning"></i> Read
                <i class="fa fa-circle text-danger"></i> Deleted
                <i class="fa fa-circle text-gray"></i> Unopened
              </div>
              <hr>
              <div class="stats">
                <i class="fa fa-calendar"></i> Number of emails sent
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card card-chart">
            <div class="card-header">
              <h5 class="card-title">NASDAQ: AAPL</h5>
              <p class="card-category">Line Chart with Points</p>
            </div>
            <div class="card-body">
              <canvas id="speedChart" width="400" height="100"></canvas>
            </div>
            <div class="card-footer">
              <div class="chart-legend">
                <i class="fa fa-circle text-info"></i> Tesla Model S
                <i class="fa fa-circle text-warning"></i> BMW 5 Series
              </div>
              <hr/>
              <div class="card-stats">
                <i class="fa fa-check"></i> Data information certified
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-black  footer-white ">
      <div class="container-fluid">
        <div class="row">
          <nav class="footer-nav">
            <ul>
              <li>
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
              </li>


            </ul>
          </nav>
          <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Vichea
              </span>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div> 
    
@endsection
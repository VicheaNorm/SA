@extends('layouts.dashboardlayout')

@section('content')
{{-- NavBar --}}
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
            <li style="margin-bottom: -10px;">
                <a href="/dashboard">
                    <i class="nc-icon nc-bank"></i>
                    <p style="color:#1A5276; font-weight: 700;">Dashboard</p>
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
            <li class="active" style="margin-bottom: -10px;">
                <a href="/product">
                    <i class="nc-icon nc-box-2"></i>
                    <p style="color:#ff8000; font-weight: 900;">PRODUCT</p>
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
<!--Table-->
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="font-family: ubuntu"> PRODUCT LIST</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th class="text-right">
                        Salary
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          Niger
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                        <td class="text-right">
                          $36,738
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Minerva Hooper
                        </td>
                        <td>
                          Curaçao
                        </td>
                        <td>
                          Sinaai-Waas
                        </td>
                        <td class="text-right">
                          $23,789
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Sage Rodriguez
                        </td>
                        <td>
                          Netherlands
                        </td>
                        <td>
                          Baileux
                        </td>
                        <td class="text-right">
                          $56,142
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Philip Chaney
                        </td>
                        <td>
                          Korea, South
                        </td>
                        <td>
                          Overland Park
                        </td>
                        <td class="text-right">
                          $38,735
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Doris Greene
                        </td>
                        <td>
                          Malawi
                        </td>
                        <td>
                          Feldkirchen in Kärnten
                        </td>
                        <td class="text-right">
                          $63,542
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $78,615
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Jon Porter
                        </td>
                        <td>
                          Portugal
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $98,615
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
<!--Table-->
@endsection

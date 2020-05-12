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
            <li class="active" style="margin-bottom: -10px;">
                <a href="/expense">
                    <i class="nc-icon nc-money-coins"></i>
                    <p style="color:#ff8000; font-weight: 900;">EXPENSE</p>
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
<div class="container-fluid" style="margin-left: 35px;">
  <h3 class="card-title" style="font-family: ubuntu; margin-top: 70px;"> EXPENSE</h3>
  <div class="container-fluid">
    <div class="row" style="height: 120px; background-color: #ff8000; border-radius: 5px">
        <div class="col-xl ">
            <div class="form-group">
            <label style="padding-top: 5px">Item</label>
            <input type="text" class="form-control" id="txtcode" placeholder="Enter Items" name="txtcode">
        </div>
        </div>
      <div class="col-xl ">
          <div class="form-group">
            <label style="padding-top: 5px">Description</label>
            <input type="text" class="form-control" id="txtcode" placeholder="Description" name="txtcode">
        </div>
      </div>
      <div class="col-xl ">
          <div class="form-group">
            <label style="padding-top: 5px">Cost</label>
            <input type="text" class="form-control" id="txtcode" placeholder="Enter Cost" name="txtcode">
        </div>
      </div>
      <div class="col-xl ">
        <div class="form-group">
            <label style="padding-top: 5px">Qty</label>
            <input type="text" class="form-control" id="txtcode" placeholder="Enter QTY" name="txtcode">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="height: 30px; width: 150px;padding: 0px;">Save</button>
        </div>
      </div>
      <div class="col-xl ">
        <div class="form-group">
            <label style="padding-top: 5px">Other</label>
            <input type="text" class="form-control" id="txtcode" placeholder="Other......" name="txtcode">
            <button type="button" class="btn btn-danger" style="height: 30px; width: 150px;padding: 0px;"> <a href="/expense" style="color: #fff">Cancel</a></button>
        </div>
      </div>
      <div class="col-xl ">
        <div class="form-group">
            <label style="padding-top: 5px">Amount Notes</label>
            <input type="text" class="form-control" id="txtcode" placeholder="Enter Amount" name="txtcode">
            <button type="button" class="btn btn-warning" style="height: 30px; width: 150px;padding: 0px;">Clear</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Table-->
<div class="content" style="margin-top: 5px; margin-left: 50px;">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Items
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Cost
                      </th>
                      <th>
                        QTY
                      </th>
                      <th>
                        Other
                      </th>
                      <th class="text-right">
                        Total Amount
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          001
                        </td>
                        <td>
                          Coffee
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td class="text-right">
                          Simple
                        </td>
                      </tr>
                      <tr>
                        <td>
                          002
                        </td>
                        <td>
                          Coffee
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td class="text-right">
                          Simple
                        </td>
                      </tr>
                      <tr>
                        <td>
                          003
                        </td>
                        <td>
                          Coffee
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td>
                          Simple
                        </td>
                        <td class="text-right">
                          Simple
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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #2DFF69;">
            {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
            <h2 style="font-family: ubuntu; color: aliceblue; padding: 0px;">Successful</h2>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
@endsection

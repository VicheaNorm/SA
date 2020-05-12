@extends('layouts.dashboardlayout')

@section('content')
{{-- Content --}}
<div class="container-fluid" style="margin-left: 10px;">
  <h3 class="card-title" style="font-family: ubuntu; margin-top: 70px;"> EXPENSE</h3>
  <div class="container-fluid">
    <div class="row" style="width: 130%; height: 120px; background-color: #ff8000; border-radius: 5px">
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
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="height: 30px; width: 200px;padding: 0px;">Save</button>
        </div>
      </div>
      <div class="col-xl ">
        <div class="form-group">
            <label style="padding-top: 5px">Other</label>
            <input type="text" class="form-control" id="txtcode" placeholder="Other......" name="txtcode">
            <button type="button" class="btn btn-danger" style="height: 30px; width: 200px;padding: 0px;"> <a href="/expense" style="color: #fff">Cancel</a></button>
        </div>
      </div>
      <div class="col-xl ">
        <div class="form-group">
            <label style="padding-top: 5px">Amount Notes</label>
            <input type="text" class="form-control" id="txtcode" placeholder="Enter Amount" name="txtcode">
            <button type="button" class="btn btn-warning" style="height: 30px; width: 200px;padding: 0px;">Clear</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Table-->
<div class="content" style="margin-top: 5px; margin-left: 23px; width: 123%">
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
                      </tr><tr>
                        <td>
                          004
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
                      </tr><tr>
                        <td>
                          005
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
                      </tr><tr>
                        <td>
                          006
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

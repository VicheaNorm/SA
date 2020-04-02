@extends('layouts.order')

@section('content')

{{-- Bar Button group --}}
<div class="btn-group btn-group-justified" role="group" aria-label="Basic example" style="margin-top: 55px">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-secondary">Waiter</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-secondary">Order Detail</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-secondary">Customer</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-secondary">Table</button>
  </div>
</div>
{{-- Layout Grid --}}
<div id="btn-grid" style="border: 1px solid gray; border-radius:5px; float: left; width:13%; height: 550px; margin-top: 5px;">
    <div id="box" style="margin-top: 365px;">
        <button type="button" class="btn btn-primary" style="width: 140px; height: 40px; margin: 5px 0px 0px 4px; padding: 0px"> <a href="#" style="color: aliceblue">Order List</a></button>
        <button type="button" class="btn btn-primary" style="width: 140px; height: 40px; margin: 5px 0px 0px 4px; padding: 0px"> <a href="#" style="color: aliceblue">Print KOT</a></button>
        <button type="button" class="btn btn-primary" style="width: 140px; height: 40px; margin: 5px 0px 0px 4px; padding: 0px"> <a href="#" style="color: aliceblue">Modifly Order</a></button>
        <button type="button" class="btn btn-primary" style="width: 140px; height: 40px; margin: 5px 0px 0px 4px; padding: 0px"> <a href="#" style="color: aliceblue">Cancel Order</a></button>
    </div>
</div>
<div class="left-side" style="border: 1px solid gray; border-radius:5px; float: left; height: 550px; margin: 5px;">
  <table style="width: 435px;">
    <tr>
      <th colspan="4" style="text-align: center; font-weight: bold;height: 40px;">Order List</th>
    </tr>
    <tr style="width: 180px; text-align: center; background-color: darkgray; height: 35px">
      <span><th style="width: 200px; padding-left: 15px;">Item</th></span>
      <th style="text-align: center;">QTY</th>
      <th >Price</th>
      <th >Amount</th>
    </tr>
    <tr style="text-align: center;">
      <td style="text-align: left; padding-left: 10px;"> Iced Latte</td>
      <td>1</td>
      <td>2.50$</td>
      <td>2.50$</td>
    </tr>
  </table>
  <div class="payment-grib" style="border-top: 1px solid grey; width: 100%;  margin-top: 380px; font-family: 'Courier New', Courier, monospace;">
    <div>
      <div class="left-box" style="width: 30%; float: left">      
          <p>Total Item : 01</p>        
      </div>    
      <div class="" style="width: 50%; float: left; font-weight: bold">
        <p style=" text-align: right">Sub Total :</p>
      </div>
      <div class="right-box" style="width: 20%; float: right">
        <p style="padding-left: 15px">$2.50</p>
      </div>
    </div>
          

    <div class="btn-process" style="float: left; font-weight: bold">
      <button type="button" class="btn btn-danger" style="width: 130px; height: 30px; padding: 0px; margin-left: 10px;">Cancel</button>
      <button type="button" class="btn btn-success" style="width: 130px; height: 30px; padding: 0px; ">Hold</button>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter" style="width: 130px; height: 30px; padding: 0px; ">Place Order</button>
    </div>
  </div>
  
</div>

<div class="right-side" style="border: 1px solid dimgrey; border-radius:5px; width: 48%; height: 550px; float: left; margin: 5px;">
  <div id="btn-catgaory" style="padding: 3px; margin-top: 5px;">
    <button type="button" class="btn btn-primary active" style="width: 130px; height: 35px; padding: 0px;margin-left: 15px;"><h5>ICE Drink</h5></button>
    <button type="button" class="btn btn-primary" style="width: 130px; height: 35px; padding: 0px"><h5>Hot Drink</h5></button>
    <button type="button" class="btn btn-primary" style="width: 130px; height: 35px; padding: 0px"><h5>Frappe</h5></button>
    <button type="button" class="btn btn-primary" style="width: 130px; height: 35px; padding: 0px"><h5>Bakery</h5></button>
  </div>
  <div id="image-box">
    <div class="btn-cafe" style="margin-top: 5px;" >
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 17px;">Cafe Latte</button>
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 1px;">Americano</button>
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 1px;">Cappuccino</button>
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 1px;">Espresso</button>
    </div>
    <div class="btn-cafe" style="margin-top: 5px;" ></div>
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 17px;">Caramel Macchiato</button>
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 1px;">Mocha Latte</button>
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 1px;">Vanilla Latte</button>
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 1px;">Caramel Latte</button>
    </div>
    <div class="btn-cafe" style="margin-top: 5px;" >
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 17px;">Hazelnut Latte</button>
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 1px;">White Chocolate</button>
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 1px;">Dark Chocolate</button>
      <button type="button" class="btn btn-info" style="padding: 0px;width:130px;height: 100px;margin-left: 1px;">Red Eyes Latte</button>
    </div>

  </div>
</div>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="height: 50px; background-color: #5DADE2">
        <h4 class="modal-title" id="exampleModalLongTitle"​ style="font-family: Khmer OS Siemreap; color: #fff">ទូទាត់ប្រាក់</h4>
      </div>
        <div class="modal-body" class="popup-font" style="height: 0px;">          
          <div class="popup-font">
            <label for="usr">សរុបប្រាក់ដែលត្រូវបង់ (TOTAL)</label>
              <div>            
                <input type="text" class="btn-input" id="txtus" placeholder="ប្រាក់ទទួលជា US ($)">
                <input type="text" class="btn-input" id="txtrail" placeholder="ប្រាក់ទទួលជារៀល (៛)">                        
              </div>
          </div>
          <div class="popup-font" style="margin-top: 5px;">
            <label for="usr">សរុបប្រាក់ដែលទទួលបាន</label>
              <div>            
                <input type="text" class="btn-input" id="txtus" placeholder="ប្រាក់ទទួលជា US ($)">
                <input type="text" class="btn-input" id="txtrail" placeholder="ប្រាក់ទទួលជារៀល (៛)">     
                <input type="text" class="btn-input" id="txtrail" placeholder="Customer ID / លេខអថិជន">                        
              </div>
          </div>
          <div class="popup-font">
            <label for="usr">សរុបប្រាក់ដែលត្រូវបង់ (TOTAL)</label>
              <div>            
                <input type="text" class="btn-input" id="txtus" placeholder="ប្រាក់ដែលនៅសល់ជា US ($)">
                <input type="text" class="btn-input" id="txtrail" placeholder="ប្រាក់ដែលនៅសល់ជារៀល (៛)"> 
                <button type="button" class="btn btn-danger" style="width: 100px;">Cancel</button>
                <button type="button" class="btn btn-success" style="width: 200px;">Enter</button>
              </div>
          </div>
          <div class="popup-font">
            <label for="usr">សរុបប្រាក់ដែលត្រូវបង់ (TOTAL)</label>
              <div>            
                <input type="text" class="btn-input" id="txtus" placeholder="ប្រាក់អាប់ជា US ($)">
                <input type="text" class="btn-input" id="txtrail" placeholder="ប្រាក់អាប់រៀល (៛)"> 
                <button type="button" class="btn btn-info" style="width: 100px;">Print & Save</button>
                <button type="button" class="btn btn-info" style="width: 100px;">Save</button>              
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 100px;">Close</button>
              </div>
          </div>
        </div>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
@endsection
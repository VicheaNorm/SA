 @extends('layouts.order')

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="/">COFFEE GANG</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="/dashboard">Dashboard</a></li>            
        <li><a href="/">Profile</a></li>
        </ul>        
    </div>
    </div>
</nav>     
{{-- Bar Button group --}}
<div class="btn-group btn-group-justified" role="group" aria-label="..." style="margin-top: 50px">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Waiter</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Order Detail</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Customer</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Table</button>
  </div>
</div>
{{-- Layout Grid --}}
<div id="btn-grid" style="border: 1px solid gray; border-radius:5px; float: left; width:200px ;height: 550px; margin: 10px;">


</div>
<div class="left-side" style="border: 1px solid gray; border-radius:5px; float: left; height: 550px; margin: 10px;">
  <table style="width: 400px;">
    <tr>
      <th colspan="4" style="padding-left: 160px;height: 40px;">Order List</th>
    </tr>
    <tr style="width: 150px;background-color: cadetblue;">
      <span><th style="width: 150px;">Item</th></span>
      <th>QTY</th>
      <th>Price</th>
      <th>Amount</th>
    </tr>
  </table>
</div>

<div class="right-side" style="border: 1px solid dimgrey; border-radius:5px; width: 600px; height: 550px; float: right; margin: 10px;">
  <div id="btn-catgaory" style="padding: 3px; margin-top: 5px;">
    <button type="button" class="btn btn-primary active" style="width: 140px; height: 35px; padding: 0px;margin-left: 10px;"><h5>ICE Drink</h5></button>
    <button type="button" class="btn btn-primary" style="width: 140px; height: 35px; padding: 0px"><h5>Hot Drink</h5></button>
    <button type="button" class="btn btn-primary" style="width: 140px; height: 35px; padding: 0px"><h5>Frappe</h5></button>
    <button type="button" class="btn btn-primary" style="width: 140px; height: 35px; padding: 0px"><h5>Bakery</h5></button>
  </div>
  <div id="image-box">    
    <div class="btn-cafe" style="margin-top: 5px;" >
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 13px;">Cafe Latte</button> 
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 1px;">Americano</button> 
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 1px;">Cappuccino</button> 
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 1px;">Espresso</button> 
    </div>  
    <div class="btn-cafe" style="margin-top: 5px;" >
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 13px;">Caramel Macchiato</button>
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 1px;">Mocha Latte</button> 
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 1px;">Vanilla Latte</button> 
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 1px;">Caramel Latte</button> 
    </div>  
    <div class="btn-cafe" style="margin-top: 5px;" >
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 13px;">Hazelnut Latte</button> 
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 1px;">White Chocolate</button> 
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 1px;">Dark Chocolate</button> 
      <button type="button" class="btn btn-info" style="padding: 0px;width:140px;height: 100px;margin-left: 1px;">Red Eyes Latte</button> 
    </div>  

  </div>
</div>
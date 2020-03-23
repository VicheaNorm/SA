@extends('layouts.app')

@section('content')
    <div id="header" style="font-family: Ubuntu;">
        <h1>ADD PRODUCTS</h1>
    </div>
    <div id="box-left" style="float: left; width: 50%; margin-left: -90px;">
        <div class="container">
            <form class="form-horizontal" action="" >
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Product Code:</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter Code" name="pwd">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Product Name:</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Input Name" name="pwd">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Categories:</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Input Name" name="pwd">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Product Price:</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Input Name" name="pwd">
                    </div>
                </div>
                <br><div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Date :</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Input Name" name="pwd">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Product QTY:</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Input Name" name="pwd">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Product Cost:</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Input Name" name="pwd">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Unit:</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Input Name" name="pwd">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px">
                    <label class="control-label col-sm-2" for="pwd" style="padding-top: 5px">Re-Order Unit:</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Input Name" name="pwd">
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin-bottom: -5px; padding-left: 170px;">
                    <button type="button" class="btn btn-danger" style="width: 150px; height: 35px; padding:0px">Cancel</button>
                    <button type="button" class="btn btn-success" style="width: 150px; height: 35px; padding:0px">Add</button>
                </div>
            </form>
        </div>
    </div>
    <div id="box-right" style=" float: right; width: 300px;">

        <div class="container" style="width: 256px; height: 256px; border: 1px solid #1f292e; border-radius: 5px; margin-left: -430px">
            <img src="https://lh3.googleusercontent.com/proxy/l1iSyjCUefNqpTz2iUaIz90MoGjSASreRGvsKXvE8aFvuxEErSMmudWzO0xRfjMkmZ-B_BXJxdRD5A" alt="">
        </div>

    </div>
    <div class="form-group" style="margin-top: 270px;">
        <button type="button" class="btn btn-warning" style="width: 150px; height: 35px; padding:0px; margin-left: -15px;">Browse</button>
    </div>



    @endsection

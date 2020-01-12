@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center pb-1"><h1>Electrical Conversion</h1></div>
    <div class="row">
        <h3>Units From</h3>
        <form>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
             <label class="form-check-label" for="inlineRadio1">Inches</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Millimetres</label>
        </div>
        <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
        <label class="form-check-label" for="inlineRadio3">Feet</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
        <label class="form-check-label" for="inlineRadio3">Metres</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
        <label class="form-check-label" for="inlineRadio3">Miles</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
        <label class="form-check-label" for="inlineRadio3">Kilometres</label>
        </div>
        </form>
    </div>
   


  
    <div class="row">
            <h3>Units To</h3>
            <form>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Inches</label>
            </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Millimetres</label>
        </div>
        <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                 <label class="form-check-label" for="inlineRadio3">Feet</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                <label class="form-check-label" for="inlineRadio3">Metres</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                <label class="form-check-label" for="inlineRadio3">Miles</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                <label class="form-check-label" for="inlineRadio3">Kilometres</label>

        </div>
        </form>
    </div>
    
    <div class="row pt-3"></br>
    <form name="calculate" action="">
    <div class="row">
    <div class="col-md-5">
      <input type="number" class="form-control" placeholder="Units From" step="any" />
    </div>
  </div>
  </br>
        <button type="submit" class="btn btn-primary">Calculate</button>
        <button type="submit" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-info">Save</button>
        <a href="{{url('/home')}}"><button role="button" class="btn btn-warning">Dashboard</button></a>

    </form>
    </div>
    </div>

</div>
@endsection
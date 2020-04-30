@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center pb-1"><h1>Distance Calculation</h1></div>
    
    <div class="row pt-3">
           <div class="col-lg-12">
           <form name="calculate" action="{{url('/distance')}}" method="post" >
           {{csrf_field()}}
                 <h3 class="pr-1">Units From</h3>
             
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="unitsfrom" id="frominches" checked="checked" value="frominches">
                    <label class="form-check-label" for="frominches">Inches</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="unitsfrom" id="frommm" value="frommm">
                    <label class="form-check-label" for="frommm">Millimetres</label>
                </div>
                <div class="form-check">
                     <input class="form-check-input" type="radio" name="unitsfrom" id="fromfeet" value="fromfeet">
                     <label class="form-check-label" for="fromfeet">Feet</label>
                </div>
                <div class="form-check">
                     <input class="form-check-input" type="radio" name="unitsfrom" id="frommetres" value="frommeters">
                     <label class="form-check-label" for="frommetres">Metres</label>
                </div>
                <div class="form-check">
                     <input class="form-check-input" type="radio" name="unitsfrom" id="frommiles" value="frommiles">
                     <label class="form-check-label" for="frommiles">Miles</label>
                </div>
                <div class="form-check">
                 <input class="form-check-input" type="radio" name="unitsfrom" id="fromkm" value="fromkm">
                 <label class="form-check-label" for="fromkm">Kilometres</label>
                </div>
          
  
            <h3 class="pr-1">Units To</h3>
              
              <div class="form-check">
                 <input class="form-check-input" type="radio" name="unitsto" id="toinches" value="toinches">
                 <label class="form-check-label" for="toinches">Inches</label>
              </div>
              <div class="form-check">
                 <input class="form-check-input" type="radio" name="unitsto" id="tommm" value="tommm" checked="checked">
                 <label class="form-check-label" for="tomm">Millimetres</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="unitsto" id="tofeet" value="tofeet" >
                  <label class="form-check-label" for="tofeet">Feet</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="unitsto" id="tometres" value="tometres" >
                  <label class="form-check-label" for="tometres">Metres</label>
             </div>
             <div class="form-check">
                  <input class="form-check-input" type="radio" name="unitsto" id="tomiles" value="tomiles" >
                  <label class="form-check-label" for="tomiles">Miles</label>
             </div>
             <div class="form-check">
                  <input class="form-check-input" type="radio" name="unitsto" id="tomkm" value="tomkm" >
                  <label class="form-check-label" for="tokm">Kilometres</label>
             </div>  <div class="form-check">
              <label class="form-check-label" for="calcvalue">Enter Numerical Quantity:</label>
              <input type="number" class="form-control" placeholder="Units From" step="any" name="calcvalue" id="calcvalue" value=""/>
           
          </div>
          <div class="form-check pt-1">
        
              <button type="submit" class="btn btn-info" onsubmit="distance()">Calculate</button>
              <button type="button" class="btn btn-danger"><a href="{{url('/distance')}}">Reset</a></button>
              <button type="button" class="btn btn-info">Save</button>
              <button type="button" class="btn btn-info"><a href="{{url('/home')}}">Dashboard</a></button>
          </div>  
      </form>
            
       
       
    </div>
    </div>
    <div class="row pt-2">
    <div class="col-lg-6">
    <formula-update></fomrula-update>
    </div>
    <div class="col-lg-6">
        @if(isset($results)) {
     <calculation-update :assoc-array="{{ $results }}"></calculation-update> }
     @else <calculation-update></calculation-update> 
     @endif
       </div>
  </div>
  </div>

  @endsection
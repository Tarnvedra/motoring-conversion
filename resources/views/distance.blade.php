@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center pb-1"><h1>Distance Calculation</h1></div>
    <div class="row">
    <div class="dropdown pr-5">
         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Units From
         </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">Inches</button>
            <button class="dropdown-item" type="button">Millimetres</button>
            <button class="dropdown-item" type="button">Feet</button>
            <button class="dropdown-item" type="button">Metres</button>
            <button class="dropdown-item" type="button">Miles</button>
            <button class="dropdown-item" type="button">Kilometres</button>
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Units To
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">Inches</button>
            <button class="dropdown-item" type="button">Millimetres</button>
            <button class="dropdown-item" type="button">Feet</button>
            <button class="dropdown-item" type="button">Metres</button>
            <button class="dropdown-item" type="button">Miles</button>
            <button class="dropdown-item" type="button">Kilometres</button>
        </div>
    </div>
    </div>
    <div class="row">
    <form name="calculate" action="">
    <div class="row">
    <div class="col">
      <input type="number" class="form-control" placeholder="Units From">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="Units To">
    </div>
  </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>
    </div>
</div>
@endsection
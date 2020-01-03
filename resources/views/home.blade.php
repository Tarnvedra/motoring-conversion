@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center pb-3"><h1>Motoring Conversion Dashboard</h1></div>
    <div class="d-flex pt-1">
        <div class="pr-5"><a href="{{url('/distance')}}"><img src="img/length.svg" style="height: 100px"></a>
        <figcaption>Distance</figcaption></div>
        <div class="pr-5"><a href="{{url('/volume')}}"><img src="img/volume.svg" style="height: 100px"></a>
        <figcaption>Volume</figcaption></div>
        <div><img src="img/weight.svg" style="height: 100px">
        <figcaption>Mass</figcaption></div>
    </div>
    <div class="d-flex pt-1">
        <div class="pr-5"><img src="img/force.svg" style="height: 100px">
        <figcaption>Force</figcaption></div>
        <div class="pr-5"><img src="img/pressure.svg" style="height: 100px">
        <figcaption>Pressure</figcaption></div>
        <div><img src="img/torque.svg" style="height: 100px">
        <figcaption>Torque</figcaption></div>
    </div>
    <div class="d-flex pt-1">
        <div class="pr-5"><img src="img/power.svg" style="height: 100px">
        <figcaption>Power</figcaption></div>
        <div class="pr-5"><img src="img/speed.svg" style="height: 100px">
        <figcaption>Velocity</figcaption></div>
        <div><img src="img/fuel.svg" style="height: 100px">
        <figcaption>Fuel Consumption</figcaption></div>
    </div>
        <div class="d-flex pt-1">
            <div class="pr-5"><img src="img/temperature.svg" style="height: 100px"> 
            <figcaption>Temperature</figcaption></div>
            <div class="pr-5"><img src="img/electrical.svg" style="height: 100px">
            <figcaption>Electrical</figcaption></div>
            <div><img src="img/retrieve.svg" style="height: 100px"> 
            <figcaption>Retrieve</figcaption></div>
        </div>
    
</div>
@endsection

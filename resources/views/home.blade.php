@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center pb-3"><h1>Motoring Conversion Dashboard</h1></div>
    <div class="d-flex pt-1">
        <div class="pr-5"><a href="{{url('/distance')}}"><img src="img/length.svg" style="height: 100px"></a>
        <figcaption>Distance</figcaption></div>
        <div class="pr-5"><a href="{{url('/volume')}}"><img src="img/volume.svg" style="height: 100px"></a>
        <figcaption>Volume</figcaption></div>
        <div><a href="{{url('/mass')}}"><img src="img/weight.svg" style="height: 100px"></a>
        <figcaption>Mass</figcaption></div>
    </div>
    <div class="d-flex pt-1">
        <div class="pr-5"><a href="{{url('/force')}}"><img src="img/force.svg" style="height: 100px"></a>
        <figcaption>Force</figcaption></div>
        <div class="pr-5"><a href="{{url('/pressure')}}"><img src="img/pressure.svg" style="height: 100px"></a>
        <figcaption>Pressure</figcaption></div>
        <div><a href="{{url('/torque')}}"><img src="img/torque.svg" style="height: 100px"></a>
        <figcaption>Torque</figcaption></div>
    </div>
    <div class="d-flex pt-1">
        <div class="pr-5"><a href="{{url('/power')}}"><img src="img/power.svg" style="height: 100px"></a>
        <figcaption>Power</figcaption></div>
        <div class="pr-5"><a href="{{url('/velocity')}}"><img src="img/speed.svg" style="height: 100px"></a>
        <figcaption>Velocity</figcaption></div>
        <div><a href="{{url('/consumption')}}"><img src="img/fuel.svg" style="height: 100px"></a>
        <figcaption>Fuel Consumption</figcaption></div>
    </div>
        <div class="d-flex pt-1">
            <div class="pr-5"><a href="{{url('/temperature')}}"><img src="img/temperature.svg" style="height: 100px"></a>
            <figcaption>Temperature</figcaption></div>
            <div class="pr-5"><a href="{{url('/electrical')}}"><img src="img/electrical.svg" style="height: 100px"></a>
            <figcaption>Electrical</figcaption></div>
            <div><a href="{{url('/retrieve')}}"><img src="img/retrieve.svg" style="height: 100px"></a>
            <figcaption>Retrieve</figcaption></div>
        </div>
    
</div>
@endsection

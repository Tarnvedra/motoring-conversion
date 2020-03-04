@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center pb-3"><h1>Motoring Conversion Dashboard</h1></div>
   <div class="row">
    <div class="d-flex pt-1">
        <div class="pr-5"><a href="{{url('/distance')}}"><img src="img/length.svg" height="150" width="150"></a>
        <figcaption>Distance</figcaption></div>
        <div class="pr-5"><a href="{{url('/volume')}}"><img src="img/volume.svg" height="150" width="150"></a>
        <figcaption>Volume</figcaption></div>
        <div><a href="{{url('/mass')}}"><img src="img/weight.svg" height="150" width="150"></a>
        <figcaption>Mass</figcaption></div>
    </div>
    </div>

    <div class="row">
    <div class="d-flex pt-1">
        <div class="pr-5"><a href="{{url('/force')}}"><img src="img/force.svg" height="150" width="150"></a>
        <figcaption>Force</figcaption></div>
        <div class="pr-5"><a href="{{url('/pressure')}}"><img src="img/pressure.svg" height="150" width="150"></a>
        <figcaption>Pressure</figcaption></div>
        <div><a href="{{url('/torque')}}"><img src="img/torque.svg" height="150" width="150"></a>
        <figcaption>Torque</figcaption></div>
    </div>
    </div>

    <div class="row">
    <div class="d-flex pt-1">
        <div class="pr-5"><a href="{{url('/power')}}"><img src="img/power.svg"height="150" width="150" ></a>
        <figcaption>Power</figcaption></div>
        <div class="pr-5"><a href="{{url('/velocity')}}"><img src="img/speed.svg" height="150" width="150"></a>
        <figcaption>Velocity</figcaption></div>
        <div><a href="{{url('/consumption')}}"><img src="img/fuel.svg" height="150" width="150"></a>
        <figcaption>Fuel Consumption</figcaption></div>
    </div>
    </div>

    <div class="row">
        <div class="d-flex pt-1">
            <div class="pr-5"><a href="{{url('/temperature')}}"><img src="img/temperature.svg" height="150" width="150"></a>
            <figcaption>Temperature</figcaption></div>
            <div class="pr-5"><a href="{{url('/electrical')}}"><img src="img/electrical.svg" height="150" width="150"></a>
            <figcaption>Electrical</figcaption></div>
            <div><a href="{{url('/retrieve')}}"><img src="img/retrieve.svg" height="150" width="150" ></a>
            <figcaption>Retrieve</figcaption></div>
        </div>
    </div>
</div>
@endsection

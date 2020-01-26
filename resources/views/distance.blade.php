<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Application CSS and JS files-->
	<link rel="stylesheet" href="{{ asset('css/conversion.css') }}">
    <script src="{{ asset('js/conversion.js') }}"></script>
    <title>Motoring Converter</title>
    
</head>
<body>
    <div class="text-center pb-1"><h1>Distance Calculation</h1></div>
    
    <div class="row pt-3">
           <div class="col-lg-3">
           <h3 class="pr-1">Units From</h3>
             <form>
             <div class="form-check">
                <input class="form-check-input" type="radio" name="unitsfrom" id="frominches" value="1">
                <label class="form-check-label" for="frominches">Inches</label>
             </div>
             <div class="form-check">
                <input class="form-check-input" type="radio" name="unitsfrom" id="frommm" value="2">
                <label class="form-check-label" for="frommm">Millimetres</label>
             </div>
             <div class="form-check">
                 <input class="form-check-input" type="radio" name="unitsfrom" id="fromfeet" value="3" >
                 <label class="form-check-label" for="fromfeet">Feet</label>
             </div>
             <div class="form-check">
                 <input class="form-check-input" type="radio" name="unitsfrom" id="frommetres" value="4" >
                 <label class="form-check-label" for="frommetres">Metres</label>
            </div>
            <div class="form-check">
                 <input class="form-check-input" type="radio" name="unitsfrom" id="frommiles" value="5" >
                 <label class="form-check-label" for="frommiles">Miles</label>
            </div>
            <div class="form-check">
                 <input class="form-check-input" type="radio" name="unitsfrom" id="fromkm" value="6" >
                 <label class="form-check-label" for="fromkm">Kilometres</label>
            </div>
            </form>
          </div>
          <div class="col-lg-3">
            <h3 class="pr-1">Units To</h3>
              <form>
              <div class="form-check">
                 <input class="form-check-input" type="radio" name="unitsto" id="toinches" value="1">
                 <label class="form-check-label" for="toinches">Inches</label>
              </div>
              <div class="form-check">
                 <input class="form-check-input" type="radio" name="unitsto" id="tommm" value="2">
                 <label class="form-check-label" for="tomm">Millimetres</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="unitsto" id="tofeet" value="3" >
                  <label class="form-check-label" for="tofeet">Feet</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="unitsto" id="tometres" value="4" >
                  <label class="form-check-label" for="tometres">Metres</label>
             </div>
             <div class="form-check">
                  <input class="form-check-input" type="radio" name="unitsto" id="tomiles" value="5" >
                  <label class="form-check-label" for="tomiles">Miles</label>
             </div>
             <div class="form-check">
                  <input class="form-check-input" type="radio" name="unitsto" id="tomkm" value="6" >
                  <label class="form-check-label" for="tokm">Kilometres</label>
             </div>
             </form>
           </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                Algebraic Formula
              </div>
              <div class="card-block">
                <h5 class="card-title">Inches to Millimetres</h5>
                <p class="card-text"> Algebraic Steps / Dimensional Analysis Formula</br>
                  1 in	*	2.54 cm</br>
                  1 in	*	10 mm</br>
                  1 cm	=	25.4 mm</br>
                </br>
                  Direct Conversion Formula</br>
                  1 in	*	25.4 mm</br>
                  1 in	=	25.4 mm</p>
              </div>
            </div>
</div>
    </div>
    
    
    <div class="row pt-5">
      <div class="col-lg-4">
        <form name="calculate">
          <div class="form-check">
              <label class="form-check-label" for="calcvalue">Enter Numerical Quantity:</label>
              <input type="number" class="form-control" placeholder="Units From" step="any" name="calcvalue" id="calcvalue" value=""/>
           
          </div>
          <div class="form-check">
              <input type="button" type="submit" class="btn btn-primary" onclick="distance()" value ="Calculate"/>
              <button type="submit" class="btn btn-danger">Reset</button>
              <button type="submit" class="btn btn-info">Save</button>
              <button type="submit" class="btn btn-info"><a href="{{url('/home')}}">Dashboard</a></button>
          </div>  
      </form>
    </div>
    <div class="col-lg-2">
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          Calculation Results
        </div>
        <div class="card-block">
          
          <p class="card-text">Inches: </br>
                               Millimetres: </br>
                               Feet: </br>
                               Metres: </br>
                               MIles: </br>
                               Kilometres </br>
            </p>
        </div>
      </div>
    </div>
    </div>

  </body>
</html>
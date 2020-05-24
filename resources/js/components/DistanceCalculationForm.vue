<template>
<div class="row pt-3">
           <div class="col-lg-12">
           <form name="calculate" @submit.prevent="submit">
          
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
                     <input class="form-check-input" type="radio"  name="unitsfrom" id="fromfoot" value="fromfoot">
                     <label class="form-check-label" for="fromfeet">Foot</label>
                </div>
                <div class="form-check">
                     <input class="form-check-input" type="radio"  name="unitsfrom" id="frommetres" value="frommetres">
                     <label class="form-check-label" for="frommetres">Metres</label>
                </div>
                <div class="form-check">
                     <input class="form-check-input" type="radio" name="unitsfrom" id="frommiles" value="frommiles">
                     <label class="form-check-label" for="frommiles">Miles</label>
                </div>
                <div class="form-check">
                 <input class="form-check-input" type="radio"  name="unitsfrom" id="fromkm" value="fromkm">
                 <label class="form-check-label" for="fromkm">Kilometres</label>
                </div>
          
  
              <div class="form-check col-md-4 pt-2">
              <label class="form-check-label" for="calcvalue">Enter Numerical Quantity:</label>
              <input type="number" class="form-control" placeholder="Units From"  step="any" name="calcvalue" id="calcvalue" value="" required/>
             
          </div>
          <div class="form-check pt-2">
        
              <button id="dpost" type="submit"  class="btn btn-primary">Calculate</button>
    
            <button type="submit" onsubmit="ResetCalculation()" class="btn btn-danger active">Reset</button>
            <a href="#"  class="btn btn-success active">Save</a>
            <a href="/home" class="btn btn-secondary active">Dashboard</a>    
        
   
            
          </div>  
      </form>
      

 </div>
 <div class="row pt-2">
    <div class="col-lg-6">
    <distance-formula-update></distance-formula-update>
    </div>
   
    <div class="col-lg-6">
        
     <distance-calculation-update v-bind:display="display"></distance-calculation-update> 
     
       </div>
  </div>

    </div>
</template>
 <script>


 export default { 
  
  data() {
    return {
        unitsFrom : '',
        unitsTo : '',
        calcValue: '',
        display: '', 
        output: '' ,
        result: []  
    }
  },
  methods:  
  { ResetCalculation: function() {

    resetDisplay = '                  <br> ' +'                    <br> ' +  '                 <br> ' + '               <br> ' +  '                <br> ';
    console.log(resetDisplay);

    document.getElementById("display").innerHTML = resetDisplay;
  },
        submit(e) {
        e.preventDefault();
        let currentObj = this;
        axios.post('/distance', {
          unitsFrom: this.unitsFrom,
          unitsTo: this.unitsTo,
          calcValue: this.calcValue

      }
      ).then(function (response) {
          currentObj.output = response.data;
          // get user input values and set up calculation variables
          var convertFrom = document.getElementsByName('unitsfrom');
          var convertTo = document.getElementsByName('unitsto');
          var calc = document.getElementById('calcvalue').value;
          var result = [];
          var unitsSelectedFrom;
          var unitsSelectedTo;
          var display = '';
          result[6] = 'inches';
          result[7] = 'millimetres';
          result[8] = 'foot';
          result[9] = 'metres';
          result[10] = 'miles';
          result[11] = 'km';
        //  alert('calc value =' +calc);
    
          // check to see which radio button was selected
          for (var i = 0; i < convertFrom.length; i++) 
            {
              if (convertFrom[i].checked) {
                  unitsSelectedFrom = convertFrom[i].value;
             //     alert('Units From ='+ unitsSelectedFrom);
                  }
            }
      
          switch (unitsSelectedFrom)
          {
            case "frominches":
            result[0] = calc; // inches entered value 
            result[1] = calc * 25.4; //inches to mm
            result[2] = calc / 12; // inches to feet
            result[3] = calc / 39.37; //inches to metres
            result[4] = calc / 63360; // inches to miles
            result[5] = calc / 39370; // inches to km
            result[6] = 'inches';
            result[7] = 'millimetres';
            result[8] = 'foot';
            result[9] = 'metres';
            result[10] = 'miles';
            result[11] = 'km';
            result[6] = result[6] +  ' <b>converted to =</b>';
            for (var j = 0; j < 6; j++) 
            {
              display  = display + result[j] + ' : '+ result[j+6]+'<br>';
            }
            document.getElementById("display").innerHTML = display;
            break

        case "frommm":
            result[0] = calc; // milimetres entered value
            result[1] = calc / 25.4; // mm to inches
            result[2] = calc / 305; // mm to feet
            result[3] = calc /1000; // mm to metres
            result[4] = calc / 1.609e+6; // mm to miles
            result[5] = calc / 1e+6; // mm to km 
            result[6] = 'millimetres';
            result[7] = 'inches';
            result[8] = 'foot';
            result[9] = 'metres';
            result[10] = 'miles';
            result[11] = 'km';
            result[6] = result[6] +  ' <b>converted to =</b>';
            for (var j = 0; j < 6; j++) 
            {
              display  = display + result[j] + ' : '+ result[j+6]+'<br>';
            }
            document.getElementById("display").innerHTML = display;
          break

        case "fromfoot":
            result[0] = calc; // foot entered value
            result[1] = calc * 12; // foot to inches  
            result[2] = calc * 305; // foot to milimetres
            result[3] = calc / 3.281; //foot to metres
            result[4] = calc / 5280; //foot to miles
            result[5] = calc / 3281; //foot to km
            result[6] = 'foot';
            result[7] = 'inches';
            result[8] = 'milimetres';
            result[9] = 'metres';
            result[10] = 'miles';
            result[11] = 'km';
            result[6] = result[6] +  ' <b>converted to =</b>';
            for (var j = 0; j < 6; j++) 
            {
              display  = display + result[j] + ' : '+ result[j+6]+'<br>';
            }
            document.getElementById("display").innerHTML = display;
          break

        case "frommetres":
            result[0] = calc; // metres entered value
            result[1] = calc * 39.37 ; // metres to inches
            result[2] = calc * 1000; // metres to mm
            result[3] = calc * 3.281; // metres to foot
            result[4] = calc / 1609; //metres to miles
            result[5] = calc / 1000; //metres to km
            result[6] = 'metres';
            result[7] = 'inches';
            result[8] = 'milimetres';
            result[9] = 'foot';
            result[10] = 'miles';
            result[11] = 'km';
            result[6] = result[6] +  ' <b>converted to =</b>';
            for (var j = 0; j < 6; j++) 
            {
              display  = display + result[j] + ' : '+ result[j+6]+'<br>';
            }
            document.getElementById("display").innerHTML = display;
          break

        case "frommiles":
            result[0] = calc; // miles entered value
            result[1] = calc * 63360; // miles to inches 
            result[2] = calc * 1.609e+6; // miles to mm
            result[3] = calc * 5280; // miles to foot
            result[4] = calc * 1609; // miles to metres
            result[5] = calc * 1.609; // miles to km
            result[6] = 'miles';
            result[7] = 'inches';
            result[8] = 'milimetres';
            result[9] = 'foot';
            result[10] = 'metres';
            result[11] = 'km';
            result[6] = result[6] +  ' <b>converted to =</b>';
            for (var j = 0; j < 6; j++) 
            {
              display  = display + result[j] + ' : '+ result[j+6]+'<br>';
            }
            document.getElementById("display").innerHTML = display;
          break

        case "fromkm":
            result[0] = calc; // km entered value
            result[1] = calc * 39370; // km to inches
            result[2] = calc * 1e+6; // km to mm
            result[3] = calc * 3281; // km to foot
            result[4] = calc * 1000; // km to metres
            result[5] = calc / 1.609; // km to miles
            result[6] = 'km';
            result[7] = 'inches';
            result[8] = 'milimetres';
            result[9] = 'foot';
            result[10] = 'metres';
            result[11] = 'miles';
            result[6] = result[6] +  ' <b>converted to =</b>';
            for (var j = 0; j < 6; j++) 
            {
              display  = display + result[j] + ' : '+ result[j+6]+'<br>';
            }
            document.getElementById("display").innerHTML = display;
          break

        default:
          document.alert('unknown selection');
    } 
      }); 
    },
   
    
  },
  
}
 </script>

 <style scoped>
 </style>

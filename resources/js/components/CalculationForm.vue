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
    
            <a href="/distance" class="btn btn-danger active">Reset</a>
            <button type="button" class="btn btn-success">Save</button>
            <a href="/home'" class="btn btn-secondary active">Dashboard</a>    
        
   
            
          </div>  
      </form>
      

 </div>
 <div class="row pt-2">
    <div class="col-lg-6">
    <formula-update></formula-update>
    </div>
   
    <div class="col-lg-6">
        
     <calculation-update v-bind:display="display"></calculation-update> 
     
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
  methods: { 
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
            result[0] = calc; // feet entered value
            result[1] = calc * 12; // feet to inches  
            result[2] = calc * 305; // feet to milimetres
            result[3] = calc / 3.281; //feet to metres
            result[4] = calc / 5280; //feet to miles
            result[5] = calc / 3281; //feet to km
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
            result[0] = calc; // metres entered milimetres
            result[1] = calc; 
            result[2] = calc;
            result[3] = calc;
            result[4] = calc; 
            result[5] = calc; 
            result[9] = result[9] +  ' <b>converted to =</b>';
            for (var j = 0; j < 6; j++) 
            {
              display  = display + result[j] + ' : '+ result[j+6]+'<br>';
            }
            document.getElementById("display").innerHTML = display;
          break

        case "frommiles":
            result[0] = calc; // miles enterd value
            result[1] = calc; 
            result[2] = calc;
            result[3] = calc;
            result[4] = calc; 
            result[5] = calc; 
            result[10] = result[10] +  ' <b>converted to =</b>';
            for (var j = 0; j < 6; j++) 
            {
              display  = display + result[j] + ' : '+ result[j+6]+'<br>';
            }
            document.getElementById("display").innerHTML = display;
          break

        case "fromkm":
            result[0] = calc; // km enterd value
            result[1] = calc; 
            result[2] = calc;
            result[3] = calc;
            result[4] = calc; 
            result[5] = calc; 
            result[11] = result[11] +  ' <b>converted to =</b>';
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

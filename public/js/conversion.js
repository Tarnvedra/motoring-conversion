/* $(document).ready(function() {

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
 
  $(".btn-submit").click(function(e){

      e.preventDefault();
 
      var unitsFrom = $("input[name=unistfrom]").val();
      var unitsTo = $("input[name=unitsto]").val();
      var calcvalue = $("input[name=calcvalue]").val();
 
      $.ajax({
         type:'POST',
         url:"{{ route('distance.post') }}",
         data:{name:unitsFrom, name:unitsTo, name:calcvalue},
         success:function(data){
            alert(data.success);
            var user = JSON.stringify(data.entry);
            alert('You entered: '+ user);
         },
         //cache: false;
      });

});

});

*/

/*
$(document).ready(function(){

document.getElementById('dpost').addEventListener('click', postDistance);


function postDistance() {

  //console.log('post distance function called');
  //distance();

  var convertFrom = document.getElementsByName('unitsfrom');
  var convertTo = document.getElementsByName('unitsto');
  calc = 10;
  //alert(convertFrom);
  //alert(convertTo);
  //alert('calc val ='+calc)

  axios.post('/distance', {

    unitsfrom: convertFrom,
    unitsto: convertTo,
    calcvalue: calc,
    cache: false
  })
  .then(result => console.log(result))
  .catch(error => console.error(error));
}

function distance()
 {
    var convertFrom = document.getElementsByName('unitsfrom');
    var convertTo = document.getElementsByName('unitsto');
    var calc = document.getElementById('calcvalue').value;
    var result = [];
    var unitsSelectedFrom;
    var unitsSelectedTo;

    alert('calc value is:' + calc);
   
    for (var i = 0; i < convertFrom.length; i++) 
        {
            if (convertFrom[i].checked) {
           unitsSelectedFrom = convertFrom[i].value;
         //  console.log("unitsFrom " + i + ": " + convertFrom[i].value);
            }
        }
        alert('units selected'+ unitsSelectedFrom);
        for (var i = 0; i < convertTo.length; i++) 
        {
            if (convertTo[i].checked) {
           unitsSelectedTo = convertTo[i].value;
         //  console.log("unitsTo" + i + ": " + convertTo[i].value);
            }
        }
        alert('units selected'+ unitsSelectedTo);

    switch (unitsSelectedFrom)
    {
        case "frominches":
          alert('You Selected inches');
          result[0] = calc; // inches entered value 
          result[1] = calc * 25.4; //inches to mm
          result[2] = calc / 12; // inches to feet
          result[3] = calc * 0.0254; //inches to metres
          result[4] = calc * 1.5782828282828E-5; // inches to miles
          result[5] = 2.54E-5 / calc; // inches to km
          for (var j = 0; j < 6; j++) 
        {
          console.log("j = "+j);
          //document.getElementById('results').innerHTML = result;
          document.write('result = '+result[j]);
          document.write('<br>');
        }
          break

        case "frommm":
          alert('You Selected mm');
          result[0] = calc; // mm entered value 
          result[1] = calc * 25.4; //mm to inches
          result[2] = calc / 12; // mm to feet
          result[3] = calc * 0.0254; //mm to metres
          result[4] = calc * 1.5782828282828E-5; // mm to miles
          result[5] = 2.54E-5 / calc; // mm to km
          for (var j = 0; j < 6; j++) 
        {
          console.log("j = "+j);
          //document.getElementById('results').innerHTML = result;
          document.write('result = '+result[j]);
          document.write('<br>');
        }
          break

        case "fromfeet":
          document.write('You Selected feet');
          break

        case "frommetres":
          document.write('You selected metres');
          break

        case "frommiles":
          document.write('You Selected miles');
          break

        case "fromkm":
          document.write('You selected km');
          break

        default:
          document.write('unknown selection');
    } 
 }

}) */
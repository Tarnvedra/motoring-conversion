function distance()
 {

  
    var unitsFrom = document.getElementsByName("unitsfrom").value;
    var calc = document.getElementById('calcvalue').value;
    var result = [];

    alert('calc value is:' + calc);
   
    for (var i = 0; i < unitsfrom.length; i++) 
        {
            if (unitsfrom[i].checked)
           var unitsSelected = unitsFrom[i].value;
        }
        
    alert('units selected' + unitsSelected);

    switch (unitsSelected)
    {
        case 1:
          alert('You Selected inches');
          result[0] = calc; // inches entered value 
          result[1] = calc * 25.4; //inches to mm
          result[2] = calc / 12; // inches to feet
          result[3] = calc * 0.0254; //inches to metres
          result[4] = calc * 1.5782828282828E-5; // inches to miles
          result[5] = calc; // inches to km
          break

        case 2:
          document.write('You selected mm');
          break

        case 3:
          document.write('You Selected feet');
          break

        case 4:
          document.write('You selected metres');
          break

        case 5:
          document.write('You Selected miles');
          break

        case 6:
          document.write('You selected km');
          break

        default:
          document.write('unknown selection');
    } 
 }
<template>
    <div class="card" style="width: 30rem;">
          <div class="card-header">Calculation Results</div>
              <div class="card-block">
                   <p class="card-text" id="results"> 
                    <br>
                    <ul>
                    <li id="display">  {{display}}</li>
                    
                 </ul>
                  </p>
              </div>
    </div>
</template>

<script>


    export default {
        
    
       
    name: "CalculationUpdate",
    props:  { unitsFrom : '',
        unitsTo : '',
        calcValue: '',
        display: '', 
        output: '' ,
         },
    mounted() {
      console.log('Calc Update Comp mounted')
    }

   
    }
</script>

<style scoped>
ul {
    list-style: none;
}
</style>
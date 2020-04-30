<template>
    <div class="card">
          <div class="card-header">Calculation Results</div>
              <div class="card-block">
                   <p class="card-text" id="results"> 
                  @foreach($results as $key =>$value)
                 {{ $results}}     <br>
                 @endforeach
                  </p>
              </div>
    </div>
</template>

<script>
    export default {
        
    
       
    
    mounted() {
      console.log('Calc Update Comp mounted')
    },

   
    }
</script>

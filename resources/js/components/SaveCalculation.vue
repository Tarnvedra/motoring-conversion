<template>
    <div>
 <form>
    <h1 class="text-center"> Save your current calculation</h1>
    <div class="form-check col-md-6 pt-2">
        <label class="form-check-label" for="calcvalue">Enter Title of calculation:</label>
        <input type="text" class="form-control"  name="title" id="title" value="">
        <label class="form-check-label" for="calcvalue">Enter Description of calculation:</label>
        <input type="text" class="form-control"  name="description" id="description" value="">
    </div>
    <div class="form-check pt-2">
        
        <button id="savecalc" type="submit"  class="btn btn-primary">Save Calculation</button>
        <button class="btn btn-danger active" onclick="goBack()" >Cancel</button>
         <a href="/home" class="btn btn-secondary active">Dashboard</a>    
  

      
    </div>
</form>  

    </div>
           
</template>

<script>
    export default {
        mounted() {
            console.log('Save Calculation Component mounted.')
        }

    }

    function goBack() {
        var x = history.length;
        console.log(x);
  window.history.go();
}
</script>

<style scoped>

</style>

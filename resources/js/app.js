/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('calculation-form', require('./components/CalculationForm.vue').default);
Vue.component('formula-update', require('./components/FormulaUpdate.vue').default);
Vue.component('calculation-update', require('./components/CalculationUpdate.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
        data() {
          return {
              unitsFrom : '',
              unitsTo : '',
              calcValue: '',
              display: '', 
              output: ''   
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
            }); //.catch(function (error) {
             //currentObj.output = error;
            //});
          },
        },
   
});

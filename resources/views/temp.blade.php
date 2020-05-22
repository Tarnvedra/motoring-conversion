import Axios from 'axios';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

export default new VueRouter ({
    routes: [{
        path: '/' , component: CalculationUpdate
    }

    ],
    mode: 'history'
});

window.axios = axios;
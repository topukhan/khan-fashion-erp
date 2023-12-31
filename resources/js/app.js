require('./bootstrap');

// Import your Vue component
import ExampleComponent from './ExampleComponent.vue';

// Initialize Vue
const app = new Vue({
    el: '#app',
    components: {
        ExampleComponent,
    },
});

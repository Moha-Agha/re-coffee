/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**	
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    delimiters: ['${', '}'],
    data: {
        ECoffee: 10,
        DCoffee: 1
    },
    filters: {
    	blupp: function(value) {
    		return "00" + value;
    	},
    },
      methods: {

    coffeeOpen: function () {
 
    }

  }

});

const app2 = new Vue({

    el: '#app2',
    delimiters: ['${', '}'],
    data: {
        ECoffee2: 8,
        DCoffee2: 2
    },
    filters: {
    	blupp: function(value) {
    		return "00" + value;
    	},
    },
      methods: {

    coffeeOpen: function () {
 
    }

  }
});


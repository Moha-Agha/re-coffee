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
    	nullMe: function(value) {
    		if (value <10){
    			return "00" + value;
    		} else if (value < 99) {
			    return "0" + value;
			} else {
			    return value;
			}
    		
    	},
    },
      methods: {

    coffeeOpen: function () {
 
    }

  }
});




// accoredion

Vue.transition('slideTop',{
  css: false,
  enter: function(el,done){
    $(el).hide();
    $(el).velocity('slideDown',{duration: 700, easing: [200,12], complete: done});
  },
  enterCancelled: function(el){
    $(el).stop();
  },
  leave: function(el,done){
    $(el).velocity('slideUp',{duration: 350, easing: 'ease-out', complete: done});
  },
  leaveCancelled: function(el){
    $(el).stop();
  }
});

Vue.component('accordion',{
  template: '#accordion',
  components: {
    heading: {
      template: '#heading'
    },
    content: {
      template: '#content'
    }
  },
  props: {
    open: { // toggles accordion
      type: Boolean,
      default: false
    },
    id: { type: String },
    class: { type: String }
  },
});

new Vue({ el: 'main' });
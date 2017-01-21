// add Vue 'Root Component'
var App = Vue.extend({});

// create postList Component
var postList = Vue.extend({
  template:'#post-list-template'
})

var router = new VueRouter();

router.map({
  '/':{
    component: postList
  }
})

router.start(App, '#app');


console.log('hello world!');

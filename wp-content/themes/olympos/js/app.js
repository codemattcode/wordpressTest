// add Vue 'Root Component'
var App = Vue.extend({});

// create postList Component
var postList = Vue.extend({
  template:"<h1>Hello World!</h1>"
})

var router = new VueRouter();

router.map({
  '/':{
    component: postList
  }
})

router.start(App, '#app');

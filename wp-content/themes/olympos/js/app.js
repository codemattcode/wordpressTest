// add Vue 'Root Component'
var App = Vue.extend({});

var router = new VueRouter();

router.map({
  '/':{
    component: postList
  }
})

router.start(App, '#app');

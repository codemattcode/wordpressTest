// add Vue 'Root Component'
var App = Vue.extend({});

// create postList Component
var postList = Vue.extend({
  template:'#post-list-template'
})

var router = new VueRouter();

var router = new VueRouter({
  routes: [
    { path: '/', component: postList }
  ]
})

new Vue({
  el: '#app',
  router: router,
  template: '<router-view></router-view>'
})

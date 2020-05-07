// import './bootstrap'
// import Vue from 'vue'
Vue.component('image-component', require('./components/ImageComponent.vue').default);
// import ArticleLike from './components/ArticleLike'

const app = new Vue({
  el: '#app',
  components: {
    // ArticleLike,
  }
})

import './bootstrap'
import Vue from 'vue'
import AnswerLike from './components/AnswerLike'
import ThemeTagsInput from './components/ThemeTagsInput'

const app = new Vue({
  el: '#app',
  components: {
    AnswerLike,
    ThemeTagsInput,
  }
})

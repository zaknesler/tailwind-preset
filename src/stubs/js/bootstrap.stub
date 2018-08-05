import Vue from 'vue'
import axios from 'axios'

window.Vue = Vue
window.axios = axios

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    'X-Requested-With': 'XMLHttpRequest'
}

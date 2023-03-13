import { createRouter, createWebHistory } from 'vue-router'

import App from '../components/App.vue'

export default createRouter({
    history: createWebHistory('/'),
    routes: [
        {
            name: 'homepage',
            path: '/',
            component: App
        },
    ]
})
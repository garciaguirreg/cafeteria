import RegisterForm from './components/RegisterForm.vue';
import './bootstrap';

import { createApp } from 'vue';

const app = createApp({});

app.component('register-form', RegisterForm); // ¡Esta línea falta!

app.mount('#app');
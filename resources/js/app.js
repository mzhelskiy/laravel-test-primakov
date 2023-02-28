require('./bootstrap');

import {createApp} from 'vue'
import GlobalMenu from "../components/app";

const app = createApp(GlobalMenu);
app.mount('#app');



import { createApp } from 'vue'
import { createPinia } from 'pinia'
import {List,Menu,Drawer, Button, message,Card,Table,Avatar,Select,Input } from 'ant-design-vue';//ant vue
import 'ant-design-vue/dist/reset.css';
import router from './router/index.js'
import App from './App.vue'
import 'bootstrap/dist/css/bootstrap-grid.min.css'
import 'bootstrap/dist/css/bootstrap-utilities.min.css'
import axios from 'axios'
window.axios=axios;

const app = createApp(App)
app.use(createPinia());
app.use(router)
app.use(Button);
app.use(Card);
app.use(Table);
app.use(Select);
app.use(Drawer);
app.use(Avatar);
app.use(Input);


app.use(List);
app.use(Menu);

app.mount('#app')
app.config.globalProperties.$message = message;
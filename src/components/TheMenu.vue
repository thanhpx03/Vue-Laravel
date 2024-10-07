<template>
    <a-menu
    
      mode="inline"
      >
      <a-menu-item key="admin-user">
        <router-link :to="{name:'admin-user'}">
          <span> Tài khoản</span>
        </router-link>
      </a-menu-item>

      <a-menu-item key="admin-role">
        <router-link :to="{name:'admin-role'}">
          <span> vai trò</span>
        </router-link>
      </a-menu-item>

      <a-menu-item key="admin-setting">
        <router-link :to="{name:'admin-setting'}">
          <span> Cài đặt</span>
        </router-link>
      </a-menu-item>
      </a-menu>
</template>
<script >
import { defineComponent } from 'vue'
import { storeToRefs } from 'pinia'
import {useMenu} from "../stores/use-menu.js"
export default defineComponent({
  setup() {
    const store =useMenu();

    return {
      ...storeToRefs(store)
  
    };
  },
});



</script>
<template>
  <div class="container-fluid">
    <div
      class="row align-items-center"
      style="background-color: red; padding: 1rem"
    >
      <div
        class="col-1 d-flex d-sm-none align-items-center justify-content-center"
      >
        <span @click="showDrawer()">x</span>
      </div>
      <div
        class="col-10 col-sm-8 d-flex align-items-center justify-content-center"
      >
        <img src="../logo" alt="logo" />
        <span>Quan tri</span>
      </div>
      <div
        class="col-1 d-flex d-sm-none align-items-center justify-content-center"
      >
        <span @click="showDrawerUser()">x</span>
      </div>
      <div
        class="col-sm-3 d-none d-sm-flex align-items-center justify-content-end"
      >
        <span>admin</span>
      </div>
    </div>
  </div>

  <a-drawer
    v-model:open="open"
    title="Danh mục"
    placement="left">
   <TheMenu />
  </a-drawer>

    <a-drawer
    v-model:open="open_users"
    title="admin"
    placement="right">
    <p>Some contents...</p>
    <p>Some contents...</p>
    <p>Some contents...</p>
  </a-drawer>
</template>
<script>
import TheMenu from "../components/TheMenu.vue";

import { defineComponent,ref } from "vue";
export default defineComponent({
  components:{
    TheMenu,
  },
  setup(){
      const open = ref(false);
      const open_users = ref(false);


      const showDrawer = () => {
        open.value = true;
      };
      const showDrawerUser = () => {
        open_users.value = true;
      };
      return {
      open,
      open_users,
      showDrawer,
      showDrawerUser
      };
}


});

</script>

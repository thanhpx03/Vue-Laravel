<template>
<form @submit.prevent="">
  <a-card title="cập nhật tài khoản" >
    <div class="row">
      <div class="col-12 col-sm-4">

        <div class="row">
          <div class="col-12 d-flex justify-content-center mb-3 ">
              <a-avatar shape="square" :size="200">
                <template #icon>
                  <img src="../../../assets/avatar.jpg" alt="avatar">
                </template>
              </a-avatar>
          </div>
        </div>
      <div class="col-12 d-flex justify-content-center ">
        <a-button type="primary">
          <span>chọn ảnh</span> 
        </a-button>
      </div>
      </div>

      <div class="col-12 col-sm-8">
        <div class="row mb-3">
          <div class="col-12 col-sm-3 text-start text-sm-end">
            <label>
              <span class="text-danger me-1">*</span>
              <span :class="{
                'text-danger':errors.status_id

              }">Tinh trang:</span>
            </label>
          </div>

          <div class="col-12 col-sm-9">
            <a-select
            show-search
            placeholder="Tinh trang"
            style="width:100%"
            :options="users_status"
            :filter-option="filterOption"
           allow-clear
           v-model:value="status_id"
          ></a-select>
          <div class="w-1"></div>
          <small v-if="errors.status_id" class="text-danger">{{errors.status_id[0]}}</small>
          </div>
        </div>


        <div class="row mb-3">
          <div class="col-12 col-sm-3 text-start text-sm-end">
            <label>
              <span class="text-danger me-1">*</span>
              <span>Tai khoan:</span>
            </label>
          </div>
          <div class="col-12 col-sm-9 ">
          <a-input  placeholder="tai khoan" allow-clear  v-model:value="username" />
          </div>
        </div>

              <div class="row mb-3">
          <div class="col-12 col-sm-3 text-start text-sm-end">
            <label>
              <span class="text-danger me-1">*</span>
              <span>ho ten:</span>
            </label>
          </div>
          <div class="col-12 col-sm-9 ">
          <a-input  placeholder="ho ten" allow-clear    v-model:value="name" />
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-12 col-sm-3 text-start text-sm-end">
            <label>
              <span class="text-danger me-1">*</span>
              <span>email:</span>
            </label>
          </div>
          <div class="col-12 col-sm-9 ">
          <a-input  placeholder="email" allow-clear   v-model:value="email" />
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-12 col-sm-3 text-start text-sm-end">
            <label>
              <span class="text-danger me-1">*</span>
              <span>phong ban:</span>
            </label>
          </div>
          <div class="col-12 col-sm-9 ">
          <a-select
            show-search
            placeholder="phong ban"
            :options="departments"
            :filter-option="filterOption"
            allow-clear
            v-model:value="department_id"
          ></a-select>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-12 col-sm-3 text-start text-sm-end">
            <label>
              <span class="text-danger me-1">*</span>
              <span>mat khau:</span>
            </label>
          </div>
          <div class="col-12 col-sm-9 ">
          <a-input  placeholder="mat khau" allow-clear  v-model:value="password" />
          </div>
        </div>

        
        <div class="row mb-3">
          <div class="col-12 col-sm-3 text-start text-sm-end">
            <label>
              <span class="text-danger me-1">*</span>
              <span>xac nhan mat khau:</span>
            </label>
          </div>
          <div class="col-12 col-sm-9 ">
          <a-input  placeholder="xac nhan mat khau" allow-clear   v-model:value="password_confirmation"/>
          </div>
        </div>

        
      </div>


    

    </div>

    <div class="row">
      <div class="col-12 d-grid d-sm-flex justify-content-sm-end mx-auto">
        <a-button class="me-0 me-sm-2 mb-3 mb-sm-0">
        <router-link :to="{name:'admin-user'}">
          <span>huy</span>
        </router-link>
        </a-button>

        <a-button type="primary" html-type="submit">
          <span>luu</span>
        </a-button>
      </div>
    </div>
  </a-card>
</form>
</template>

<script>
import { defineComponent, ref,reactive, toRefs } from "vue";
import { useMenu } from "../../../stores/use-menu.js";

export default defineComponent({
setup(){
   useMenu().onSelectedKeys(["admin-user"]);
    const users_status=ref([]);
    const departments=ref([]);

    const user=reactive({
      username:"",
      name:"",
      email:"",
      password:"",
      password_confirmation:"",
      department_id:[],
      status_id:[]
    })
    const errors=ref([]);
  

   const filterOption = (input, option) => {
  return option.value.toLowerCase().indexOf(input.toLowerCase()) >= 0;
};


   return {
    users_status,
    departments,
    filterOption,
    ...toRefs(user),
    errors


   }
 
}
});

</script>

<style>

</style>
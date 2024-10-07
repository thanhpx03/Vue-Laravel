<template>
  <a-card title="tài khoản" style="width: 100%">
    <div class="row mb-3 ">
        <div class="col-12">
            <a-button type="primary">
                <router-link :to="{name:'admin-user-create'}"> thêm</router-link>
            </a-button>
        </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a-table :dataSource="users" :columns="columns" :scroll="{ x: 576}">
          <template #bodyCell="{ column, index ,record}">
            <template v-if="column.key === 'index'">
              <span>{{ index + 1 }}</span>
            </template>

             <template v-if="column.key === 'status'">
              <span v-if="record.status_id==1" class="text-primary">{{ record.status }}</span>
              <span v-if="record.status_id==2" class="text-danger">{{ record.status }}</span>
            </template>

          <template v-if="column.key === 'action'">
            <a-button type="primary">sửa</a-button>
            </template>

          </template>
        </a-table>
      </div>
    </div>
  </a-card>
</template>
                    <script>
import { defineComponent, ref } from "vue";
import { useMenu } from "../../../stores/use-menu.js";

export default defineComponent({
  setup() {
    useMenu().onSelectedKeys(["admin-user"]);
    const users = ref([]);
    const columns = [
      {
        title: "stt",
        key: "index",
      },
      {
        title: "tên",
        dataIndex: "name",
        key: "name",
      },
      {
        title: "tài khoản",
        dataIndex: "username",
        key: "username",
      },
      {
        title: "avatar",
        dataIndex: "avatar",
        key: "avatar",
      },
      {
        title: "email",
        dataIndex: "email",
        key: "email",
      },
      {
        title: "mật khẩu",
        dataIndex: "password",
        key: "password",
      },
      {
        title: "vai trò",
        dataIndex: "departments",
        key: "departments",
      },
      {
        title: "trạng thái",
        dataIndex: "status",
        key: "status",
      },
        {
        title: "công cụ",
        fixed:'right',
        key: "action",
      },
    ];
    const getUsers = () => {
      axios
        .get("http://127.0.0.1:8000/api/users")
        .then(function (response) {
          users.value = response.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    };
    getUsers();
    return {
      users,
      columns,
    };
  },
});
</script>
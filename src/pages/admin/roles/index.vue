<template>
    đây là trang quản lý  phân quyền
</template>
<script>
import {useMenu} from "../../../stores/use-menu.js"

export default {
    setup(){
        useMenu().onSelectdKeys(["admin-role"]);
    },

}
</script>
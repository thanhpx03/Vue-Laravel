<template>
    đây là trang cài đặt
</template>
<script>
import {useMenu} from "../../../stores/use-menu.js"

export default {
    setup(){
        useMenu().onSelectdKeys(["admin-setting"]);
    },

}
</script>
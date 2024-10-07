import { defineStore } from 'pinia'

export const useMenu = defineStore('menuId', {
  // arrow function recommended for full type inference
  state: () => ({
    selectedKeys:[],
    onpenKeys:[]
  }),
  actions:{
    onSelectedKeys(data){
        this.selectedKeys =data;
    },
    onOpenKeys(data){
        this.openKeys= data;
    }
  }
 
})
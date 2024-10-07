const admin = [
    {
        path:"/admin",
        component: () => import("../views/admin.vue"),
        children: [
            //quản lý user
            {
                path:"users",
                name:"admin-user",
                component: () => import("../pages/admin/users/index.vue")
            },
            {
                path:"users/create",
                name:"admin-user-create",
                component: () => import("../pages/admin/users/create.vue")
            },
            {
                path:"users/:id/edit",
                name:"admin-user-edit",
                component: () => import("../pages/admin/users/edit.vue")
            },
            //quản lý cài đặt
            {
                path:"settings",
                name:"admin-setting",
                component: () => import("../pages/admin/settings/index.vue")
            },
            {
                path:"roles",
                name:"admin-role",
                component: () => import("../pages/admin/roles/index.vue")
            },

        ]
    }
];
export default admin;
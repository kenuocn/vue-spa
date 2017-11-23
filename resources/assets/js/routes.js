import VueRouter from 'vue-router'

let routes= [
    {
        path:'/',
        component: required('./components/Home')
    },
];

export default new VueRouter({
    routes
})
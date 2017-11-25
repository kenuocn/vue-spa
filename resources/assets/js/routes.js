import VueRouter from 'vue-router'

/**定义路由*/
let routes = [
    {
        path: '/',
        component : require('./components/pages/Home'),
    },
    {
        path: '/about',
        component : require('./components/pages/About'),
    },
    {
        path: '/posts/:id',
        name: 'posts',
        component : require('./components/posts/Post'),
    },
    {
        path:'/register',
        name:'register',
        component : require('./components/register/register'),
    },
    {
        path:'/confirm',
        name:'confirm',
        component : require('./components/confirm/Email'),
    }
];

/**实例化router组件*/
export default new VueRouter({
    mode:'history',
    routes
})
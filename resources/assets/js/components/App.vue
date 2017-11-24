<template>
    <div>
        <to-menu></to-menu>
        <transition name="fade" mode="out-in">
            <router-view></router-view>
        </transition>
    </div>
</template>

<script>
    import ToMenu from './common/TopMenu'
    export default {
        components:{
            ToMenu
        }
    }
</script>

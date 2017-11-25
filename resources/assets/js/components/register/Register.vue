<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">注册 </div>

                    <div class="panel-body">
                        <regster-form></regster-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>

</style>
<script>
    import RegsterForm from './RegsterForm'
    export default {
        components:{
            RegsterForm
        }
    }
</script>
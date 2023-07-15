<template>
    <div class="alert" >
        <h3>{{ message }}</h3>
    </div>
</template>

<script>
export default {
    name: 'App',
    data() {
        return {
            message: 'Мы вас приветствуем!',
            mess: ['Мы вас ждем!', 'Мы рады вам!', 'Мы вас любим!','Мы вас приветствуем!'],
            i:0

        }
    },
    methods: {
        changeMess() {

            this.message = this.mess[this.i];
            this.i++;
            if(this.i==this.mess.length) this.i=0;
        }

        },
    mounted() {

            setInterval(()=> {
                this.changeMess()
            },5000);
        }
};

</script>

<style>
.alert {
    background: linear-gradient(rgb(161, 122, 122), #848484);
    text-align: center;
    margin-bottom: 15px;
}
.alert h3 {
    text-transform: uppercase;
    text-shadow: #2d3748;
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
}
</style>

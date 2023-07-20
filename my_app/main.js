const { createApp } = Vue;

const app = createApp({
    data(){
        return{
            tasks:["HTML", "CSS", "JavaScript", "PHP"]

        }
    }

});

app.mount('#app')
new Vue({
    el : '#app',

    data: {
        name:'',
        description:'',
        errors:{}
    },
    methods:{
        onsubmit(){
            // alert('submitted');
            axios.post('/projects',this.$data)
                .then(response=>alert('success'))
                .catch(error=>{
                    console.log(error.response);
                })
        }
    }
})

Vue.component('message',{
    props:['title','body'],

    data() {
        return {
            isVisible:true
        };
    },

    template:
        '<article class="message is-dark" v-show="isVisible">\n' +
            '  <div class="message-header">' +
            '{{ title }}'+
            '<button type="button" @click="isVisible= false">X</button>'+
            '</div>'+
            '<div class="message-body">'+
            '{{ body }}' +
            '</div>'+
            '</article>'
    // methods:{
    //     hideModel(){
    //         this.isVisible = false;
    //     }
    // }
});

new Vue({
    el : '#root'
});
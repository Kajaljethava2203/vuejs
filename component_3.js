Vue.component('tabs',{
    template:'<div>' +
        '<div class="tabs">\n' +
        '  <ul>\n' +
        '<li v-for="tab in tabs">'+
        '<a href="#"> {{ tab.name }}</a>' +
        '</li>\n'+
        '  </ul>\n' +
        '</div>\n' +
    '<div class="tabs-details">' +
        '<slot></slot>' +
        '</div>' +
        '</div>',
    data(){
        return { tabs : [] }
    },
    created()
    {
       this.tabs=this.$children;
    }
});

Vue.component('tab',{
   template: '<div><slot></slot></div>',

    props: {
       name : { required:true },
       selected:{ default:false }
    }
});
new Vue({
    el : '#root'
    });



const adminApp = new Vue({
    el: '#create',
    data:{
            name:null,
            slug:null
    },
    methods: {
        getSlug() {
            axios.post('/admin/category/getSlug', {slug: this.name}).then(function (res) {
                adminApp.slug = res.data.slug;
            })
        },
    }

})
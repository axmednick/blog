const adminApp = new Vue({
    el: '#edit',
    data:{

    },
    methods: {
        getSlug(e) {
            var name=e.target.value;
            var slug=document.getElementById("slug");
            console.log(slug.value)
            axios.post('/admin/category/getSlug', {slug:name}).then(function (res) {
                adminApp.slug = res.data.slug;
                console.log(res.data.slug)
               slug.value=res.data.slug
            })
        },
    }

})
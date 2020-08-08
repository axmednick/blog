new Vue({
    el:'#show',
    methods:{
        deleteImage:function (id) {
            alertify.confirm('Siz bunu silmək istədiyinizdən əminsiniz?',function(){
                axios.delete('/admin/galleryImages/'+id).then((res)=>{
                    if (res.data.delete=='true'){
                        location.reload()
                    }
                })
            });



        }
    }
})
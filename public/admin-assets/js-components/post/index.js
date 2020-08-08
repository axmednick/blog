new Vue({
el:'#index',
    methods:{
    deletePost(id){
        alertify.confirm('Siz bunu silmək istədiyinizdən əminsiniz?', function(){

            axios.delete('/admin/post/'+id).then((res)=> {
                if (res.data.delete=true){
                    location.reload()
                }
            })

        });



    }
    }
});
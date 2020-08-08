new Vue({
    el:'#index',
    methods:{
        deletePage:function(id){
            alertify.confirm('Siz bu səhifəni silmək istədiyinizdən əminsiniz??', function(){
                axios.delete('page/'+id).then((res)=>{
                    if (res.data.delete=='true'){
                        location.reload()
                    }

                })
            });





        }
    }
})
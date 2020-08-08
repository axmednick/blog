const adminApp = new Vue({
    el: '#index',
    data:{

    },
    methods: {
        deleteCategory:function (id) {
            alertify.confirm('Siz bunu silmək istədiyinizdən əminsiniz?', function(){
              axios.delete('/admin/category/'+id).then((res)=>{
                  if (res.data.delete=='true'){
                      alertify.success('Kateqoriya silindi')
                      location.reload()
                  }
              })


            });
        }
    }

})
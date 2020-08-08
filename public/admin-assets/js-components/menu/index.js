new Vue({
    el: '#index',
    methods: {
        nameChange(id) {
            const value = document.getElementById(id).value;

            axios.put('/admin/menu/' + id, {name: value}).then(function (res) {
                if (res.data.change=='true'){
                    alertify.success('Dəyişdirildi')
                }
            })
        },
        deleteMenu(id){
            axios.delete('/admin/menu/'+id).then(function (res) {
               if (res.data.delete=='true'){
                   location.reload()
               }
            })
        }
    }
})
new Vue({
    el:'#create',
    data:{
        type:'',
        item:'',
        categories:[],
        pages:[],

    },
    methods:{
        change(){
            var type=this.type;
            axios.get('/admin/menu/'+type).then((res)=>{
            if (res.data.categories){
                this.categories=res.data.categories;

            }
                if (res.data.pages){
                    this.pages=res.data.pages;
                }
            })
        },
        save(){
            axios.post('/admin/menu',{type:this.type,item:this.item}).then((res)=>{
                if (res.data.save=='true'){
                    location.href='/admin/menu'
                }
            })
        }
    }
})
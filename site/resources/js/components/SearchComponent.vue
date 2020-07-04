<template>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
            <input class="search_input" type="text" name="" placeholder="Pesquisar..." v-model="search" v-on:input="busca">
            <a class="search_icon"><img src="/img/icon/search.png"></a>
            </div>  
            <div class="drop-search mt-5 position-absolute w-75" v-bind:class="{'d-none': isHidden}"> 
                <ul class="list-group">
                    <div v-for="produto in filteredProdutos" :key="produto.id">
                    <a v-bind:href="'/loja/'+ produto.id">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col"><img class="" width="75" v-bind:src="'/storage/produtos/' + produto.foto"></div>
                                <div class="col">
                                    <p class="nome">{{produto.nome}}</p>
                                    <p class="preco">R${{produto.preco}}</p>
                                </div>
                            </div>                      
                        </li></a>
                    </div>
                </ul>
            </div>
        </div>
       
    </div>
</template>

<style>
.list-group-item:hover{
    background-color: rgb(226, 226, 226);
}

.list-group a{
    text-decoration: none;
}
.nome{
  color: rgb(8, 80, 50);
  font-family: 'Merienda', cursive; 
}

.preco{
  color: rgb(8, 80, 50);
}
</style>

<script>
    export default {
        data(){
            return{
                produtos: [],
                search: '',
                isHidden: true
            }
        },

        beforeCreate(){
            axios.get('/produtos')
            .then(response => this.produtos = response.data);
        },

        computed: {
            filteredProdutos(){
                return this.produtos.filter((produto) => {
                    return produto.nome.toLowerCase().includes(this.search.toLowerCase());
                })
            }
        },

        methods: {
            busca(){
                if(this.search.length > 0){
                    this.isHidden = false;
                }else{
                    this.isHidden = true;
                }
            }
        }
    }
</script>

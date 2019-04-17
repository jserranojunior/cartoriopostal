<template>
    <div>
        <div class="container-fluid">
    
    
           <div class="row justify-content-center">
                <div class=" col-6 container-back">   
                    <div class="row row-space text-white justify-content-center">
                    <div class="col-8">
                        <!-- <img  src="/solucaosmart/img/previa.png" class="img-fluid img-center" alt=""> -->
                        <img src="/img/cartorio-postal.png" class="img-fluid img-center" alt="">
                        <h1 class="text-white text-center">CONTATO</h1>

                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" placeholder="Nome">

                        <label for="nome">Telefone</label>
                        <input type="text" class="form-control" placeholder="Telefone">

                        <label for="nome">Produtos e Serviços</label>
                        <input type="text" class="form-control" placeholder="">

                        <label for="nome">Observação</label>
                        <input type="text" class="form-control" placeholder="">

                        <div class="btn btn-primary align-rigth">ENVIAR</div>

                        
                   

                    </div>
</div>
<div class="row">
                            <div class="btn btn-success">WHATSAPP</div>
                        </div>
                    <div class="row text-center">
                            <div class="btn btn-primary">FACEBOOK</div>
                   </div>
                        <div class="row align-items-center">
                            <div class="btn btn-white align-items-center">White</div>
                        </div>

                        <h3 class="text-white">RUA BRESSER</h3>
                </div>
            
           </div>
    
    
    
    
        </div>
    
    </div>
</template>

<script>
export default {
    name: "SiteProg",
    monted() {
        console.log(';funciondn')
    }
}
</script>

<style>
.container-back {
    background-image: url('/img/postal-fundo.png');
    background-repeat: no-repeat;
    background-size: cover;
}
.row-space{
    padding: 10px;
}
</style>


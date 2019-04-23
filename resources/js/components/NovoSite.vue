<template>
    <div>
        <div class="container-fluid">
    
    
            <div class="row justify-content-center">
                <div class="col-6 container-back">
                    <div class="row row-space text-white justify-content-center">
                        <div class="col-8">
                            <!-- <img  src="/solucaosmart/img/previa.png" class="img-fluid img-center" alt=""> -->
                            <img src="/img/cartorio-postal.png" class="img-fluid img-center" alt="">
                            <h2 class="text-white text-center">CONTATO</h2>
    
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" placeholder="Nome">
    
                            <label for="nome">Telefone</label>
                            <input type="text" class="form-control" placeholder="Telefone">
    
                            <label for="nome">Produtos e Serviços</label>
                            <input type="text" class="form-control" placeholder="Produtos e Serviços">
    
                            <label for="nome">Observação</label>
                            <input type="text" class="form-control" placeholder="Observação">
    
                            <div class="row row-space">
                                <div class="col text-right">
                                    <div class="btn btn-primary ">ENVIAR</div>
                                </div>
                            </div>
    
                            <div class="row row-space">
                                <div class="col text-right">
                                    <div class="btn btn-success btn-100 row-space"><i class="fab fa-whatsapp"></i> 11 95745-9000</div>
                                </div>
                            </div>
    
                            <div class="row row-space">
                                <div class="col text-right">
                                    <div class="btn btn-primary btn-100 row-space"><i class="fab fa-facebook-f"></i>.com/cartoriopostalbras</div>
                                </div>
                            </div>
    
                            <div class="row row-space">
                                <div class="col text-right">
                                     <div class="btn btn btn-light btn-100 row-space"><i class="far fa-envelope"></i> contato@cartoriopostalbras.com.br</div>
                                </div>
                            </div>
    
    
    
    
                           
    
    
    
                        </div>
                    </div>
                    <p class="text-white text-center">RUA BRESSER, 1235, CEP 03053-000, BRÁS, SÃO PAULO-SP</p>
    
                    <div class="row text-center align-items-center">
    
                    </div>
    
    
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
.btn-100{
        width: 100%! important;
}
.row-space {
    padding: 10px;
}
</style>


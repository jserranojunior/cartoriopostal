<template>
    <div>
        <div class="container-fluid">
    
    
           <div class="row justify-content-center">
                <div class=" col-8 container-back">   
                    <div class="row row-space justify-content-center">
                    <div class="col-6 text-center">
                        <!-- <img  src="/solucaosmart/img/previa.png" class="img-fluid img-center" alt=""> -->
                        <img src="/img/cartorio-postal.png" class="img-fluid img-center" alt="">
                    </div>
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
.row-space{
    padding: 10px;
}
</style>


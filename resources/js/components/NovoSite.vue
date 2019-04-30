<template>
    <div>
        <div class="container-fluid">
    
    
            <div class="row justify-content-center">
                <div class="col-8 container-back">
                    <div class="row row-space text-white justify-content-center">
                        <div class="col-10">
                            <!-- <img  src="/solucaosmart/img/previa.png" class="img-fluid img-center" alt=""> -->
                            <img src="/img/cartorio-postal.png" class="img-fluid img-center" alt="">
                            <h2 class="text-white text-center">CONTATO</h2>
    
                            <label for="nome">Nome</label>
                            <input type="text" v-model="fields.nome" class="form-control" placeholder="Nome">
    
                            <label for="nome">Telefone</label>
                            <input type="text" v-model="fields.telefone" class="form-control" placeholder="Telefone">
                            <br>
                            <div class="btn btn-light btn-100" @click="openProdutos()">
                                <span class="text-left">Produtos e Serviços</span>
                                <span class="text-right">
                                        <i class="text-right fas fa-angle-down">
                                        </i>
                                        </span>
                            </div>
                            <!-- <input type="text" class="form-control" placeholder="Produtos e Serviços"> -->
    
    
                            <div class="section-produtos" v-if="produtos">
                                <br>
                                <p class="font-weight-bold">PESSOA FÍSICA (PF)</p>
    
    
                                <input type="checkbox" true-value="tramitacao" v-model="fields.tramitacao" name="TRAMITAÇÃO">
                                <label for="TRAMITAÇÃO">TRAMITAÇÃO DE RNM (RNE), CPF E CARTEIRA DE TRABALHO</label>
                                <br>
    
    
                                <input type="checkbox" true-value="protesto" v-model="fields.protesto" name="protesto">
                                <label for="pesquisa">PESQUISA SPC, SERASA E PROTESTO</label>
                                <br>
    
    
                                <input type="checkbox" true-value="debitos" v-model="fields.debitos" name="debitos">
                                <label for="pesquisa">PESQUISA DE DÉBITOS DE VEÍCULOS</label>
                                <br>
    
                                <input type="checkbox" true-value="dividas" v-model="fields.dividas" name="dividas">
                                <label for="pesquisa">NEGOCIAÇÕES DE DÍVIDAS</label>
                                <br>
    
                                <input type="checkbox" true-value="pontoscnh" v-model="fields.pontoscnh" name="pontoscnh">
                                <label for="pesquisa">PESQUISA DE PONTOS DA CNH</label>
                                <br>
    
                                <input type="checkbox" true-value="impostos" v-model="fields.impostos" name="imposto">
                                <label for="pesquisa">ELABORAÇÃO DE IMPOSTO DE RENDA</label>
                                <br>
    
                                <input type="checkbox" true-value="decore" v-model="fields.decore" name="decore">
                                <label for="pesquisa">EMISSÃO DE DECORE</label>
                                <br>
    
                                <input type="checkbox" true-value="bancaria" v-model="fields.bancaria" name="bancaria">
                                <label for="pesquisa">VIABILIZAÇÃO DE CONTA BANCÁRIA</label>
                                <br>
    
                                <input type="checkbox" true-value="contrato" v-model="fields.contrato" name="contrato">
                                <label for="pesquisa">ELABORAÇÃO DE CONTRATO DE COMPRA E VENDA
                                    E LOCAÇÃO</label>
                                <br>
    
                                <input type="checkbox" true-value="apostila" v-model="fields.apostila" name="apostilamento">
                                <label for="pesquisa">APOSTILAMENTO DE HAIA</label>
                                <br>
    
                                <input type="checkbox" true-value="juramentada" v-model="fields.juramentada" name="juramentada">
                                <label for="pesquisa">TRADUÇÃO JURAMENTADA</label>
                                <br>
    
                                <input type="checkbox" true-value="autenticacao" v-model="fields.autenticacao" name="autenticacao">
                                <label for="pesquisa">AUTENTICAÇÃO DE DOCUMENTOS</label>
                                <br>
    
                                <input type="checkbox" true-value="auteracao" v-model="fields.auteracao" name="auteracao">
                                <label for="pesquisa">ALTERAÇÃO DE NOME E SOBRENOME (APELIDO)</label>
                                <br>
    
    
                                <p class="font-weight-bold">PESSOA JURÍDICA (PJ)</p>
    
                                <input type="checkbox" true-value="constituicao" v-model="fields.constituicao" name="constituicao">
                                <label for="pesquisa">CONSTITUIÇÃO, ALTERAÇÃO E ENCERRAMENTO DE CNPJ</label>
                                <br>
    
                                <input type="checkbox" true-value="encerramento" v-model="fields.encerramento" name="encerramento">
                                <label for="pesquisa">ALTERAÇÃO E ENCERRAMENTO DE MEI</label>
                                <br>
    
                                <input type="checkbox" true-value="declaracao" v-model="fields.declaracao" name="declaracao">
                                <label for="pesquisa">DECLARAÇÃO ANUAL DO MEI</label>
                                <br>
    
                                <input type="checkbox" true-value="emicao" v-model="fields.emicao" name="emicao">
                                <label for="pesquisa">EMISSÃO DO DAS DO MEI</label>
                                <br>
    
                                <input type="checkbox" true-value="associacoes" v-model="fields.associacoes" name="associacoes">
                                <label for="pesquisa"> CONSTITUIÇÃO, ALTERAÇÃO E ENCERRAMENTO DE ASSOCIAÇÕES</label>
                                <br>
    
                                <input type="checkbox" true-value="igrejas" v-model="fields.igrejas" name="igrejas">
                                <label for="pesquisa"> CONSTITUIÇÃO, ALTERAÇÃO E ENCERRAMENTO DE IGREJAS</label>
                                <br>
    
                                <input type="checkbox" true-value="guias" v-model="fields.guias" name="guias">
                                <label for="pesquisa"> EMISSÃO DE GUIAS DE IMPOSTOS</label>
                                <br>
    
    
    
                                <input type="checkbox" true-value="estadual" v-model="fields.estadual" name="estadual">
                                <label for="pesquisa"> CONSTITUIÇÃO, ALTERAÇÃO E ENCERRAMENTO ESTADUAL</label>
                                <br>
    
                                <input type="checkbox" true-value="municipal" v-model="fields.municipal" name="municipal">
                                <label for="pesquisa">CONSTITUIÇÃO, ALTERAÇÃO E ENCERRAMENTO MUNICIPAL</label>
                                <br>
    
                                <input type="checkbox" true-value="certificado" v-model="fields.certificado" name="certificado">
                                <label for="pesquisa">CERTIFICADO DIGITAL</label>
                                <br>
    
                                <input type="checkbox" true-value="nota" v-model="fields.nota" name="nota">
                                <label for="pesquisa">EMISSÃO DE NOTA FISCAL ELETRÔNICA</label>
                                <br>
    
                                <input type="checkbox" true-value="estatuto" v-model="fields.estatuto" name="estatuto">
                                <label for="pesquisa">2ª VIA DE ATA E ESTATUTO DE ASSOCIAÇÕES E IGREJAS</label>
                                <br>
    
                                <input type="checkbox" true-value="social" v-model="fields.social" name="social">
                                <label for="pesquisa">2ª VIA DE CONTRATO SOCIAL</label>
                                <br>
    
                                <input type="checkbox" true-value="empresarios" v-model="fields.empresarios" name="empresarios">
                                <label for="pesquisa">2ª VIA DE REQUERIMENTO DE EMPRESÁRIOS</label>
                                <br>
    
                                <input type="checkbox" true-value="certidoes" v-model="fields.certidoes" name="certidoes">
                                <label for="pesquisa">EMISSÃO DE CERTIDÕES</label>
                                <br>
    
                                <input type="checkbox" true-value="viabilizacao" v-model="fields.viabilizacao" name="viabilizacao">
                                <label for="pesquisa">VIABILIZAÇÃO DE CONTA BANCÁRIA JURÍDICA</label>
                                <br>
    
    
                                <p class="font-weight-bold">CORRESPONDENTE BANCÁRIO</p>
                                <input type="checkbox" true-value="bancario" v-model="fields.bancario" name="bancario">
                                <label for="pesquisa">PAGAMENTOS DE CONTA, SAQUES E DEPÓSITOS SERVIÇOS GRÁFICOS</label>
                                <br><br>
    
                                <p class="font-weight-bold">SERVIÇOS GRÁFICOS</p>
                                <input type="checkbox" true-value="folhetos" v-model="fields.folhetos" name="folhetos">
                                <label for="pesquisa">CARTÃO DE VISITA, FOLDERS, FOLHETOS, CRACHÁS, BANNERS FOTOCÓPIAS</label>
                                <br> <br>
    
                                <p class="font-weight-bold">FOTOCÓPIAS</p>
                                <input type="checkbox" true-value="xeros" v-model="fields.xeros" name="xeros">
                                <label for="pesquisa">XÉROS E SCANNER</label>
                                <br>
    
                            </div><br>
    
                            <label for="nome">Observação</label>
                            <input type="text" class="form-control" placeholder="Observação">
    
                            <div class="row row-space">
                                <div class="col text-right">
                                    <div class="btn btn-primary" @click="enviarFormulario()">ENVIAR</div>
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
import axios from 'axios'
export default {
    name: "NovoSite",
    data() {
        return {
            fields: {},
            produtos: false,
        }
    },
    monted() {
        console.log(';funciondn')
    },
    methods: {
        openProdutos() {
            if(this.produtos){
                this.produtos = false;
            }else{
                this.produtos = true;    
            }
            
        },
        enviarFormulario() {
            let url = '/api/email/contato';
            axios
                .post(url, this.fields)
                .then(response => {
                    console.log(response.data)
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
    }
}
</script>

<style>
.container-back {
    background-image: url('/img/postal-fundo.png');
    background-repeat: no-repeat;
    background-size: cover;
}

.btn-100 {
    width: 100% ! important;
}

.row-space {
    padding: 10px;
}

.section-produtos {
    /* display:none; */
}

.strong {}

.btn-100 {
    width: 100%;
}

.text-left {
    text-align: left ! important;
    float: left;
}

.text-right {
    text-align: right ! important;
    float: right;
}
</style>


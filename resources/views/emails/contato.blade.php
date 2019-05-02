

Dados do contato do Cartório<br><br>


Meu nome é: @if(isset($dados['nome'])) {{$dados['nome']}} @endif <br>

Meu telefone é: @if(isset($dados['telefone'])) {{$dados['telefone']}} @endif <br><br>

Produtos e Serviços a qual desejo:<br><br>

@if(isset($dados['tramitacao'])) TRAMITAÇÃO DE RNM (RNE), CPF E CARTEIRA DE TRABALHO <br> @endif 
@if(isset($dados['protesto'])) PESQUISA SPC, SERASA E PROTESTO <br> @endif 
@if(isset($dados['debitos'])) PESQUISA DE DÉBITOS DE VEÍCULOS <br> @endif 
@if(isset($dados['dividas'])) NEGOCIAÇÕES DE DÍVIDAS <br> @endif 
@if(isset($dados['pontoscnh'])) PESQUISA DE PONTOS DA CNH <br> @endif 
@if(isset($dados['impostos'])) ELABORAÇÃO DE IMPOSTO DE RENDA <br> @endif 
@if(isset($dados['decore'])) EMISSÃO DE DECORE <br> @endif 
@if(isset($dados['bancaria'])) VIABILIZAÇÃO DE CONTA BANCÁRIA <br> @endif 
@if(isset($dados['contrato'])) ELABORAÇÃO DE CONTRATO DE COMPRA E VENDA <br> @endif 
@if(isset($dados['apostila'])) APOSTILAMENTO DE HAIA <br> @endif 
@if(isset($dados['juramentada'])) TRADUÇÃO JURAMENTADA <br> @endif 
@if(isset($dados['autenticacao'])) AUTENTICAÇÃO DE DOCUMENTOS <br> @endif 
@if(isset($dados['auteracao'])) ALTERAÇÃO DE NOME E SOBRENOME (APELIDO) <br> @endif 
<!-- 13 -->
<br>
@if(isset($dados['constituicao'])) CONSTITUIÇÃO, ALTERAÇÃO E ENCERRAMENTO DE CNPJ <br> @endif 
@if(isset($dados['encerramento'])) ALTERAÇÃO E ENCERRAMENTO DE MEI <br> @endif 
@if(isset($dados['declaracao'])) DECLARAÇÃO ANUAL DO MEI <br> @endif 
@if(isset($dados['emicao'])) EMISSÃO DO DAS DO MEI <br> @endif 
@if(isset($dados['associacoes'])) CONSTITUIÇÃO, ALTERAÇÃO E ENCERRAMENTO DE ASSOCIAÇÕES <br> @endif 
@if(isset($dados['igrejas'])) CONSTITUIÇÃO, ALTERAÇÃO E ENCERRAMENTO DE IGREJAS <br> @endif 
@if(isset($dados['guias'])) EMISSÃO DE GUIAS DE IMPOSTOS <br> @endif 
@if(isset($dados['estadual'])) CONSTITUIÇÃO, ALTERAÇÃO E ENCERRAMENTO ESTADUAL <br> @endif 
@if(isset($dados['municipal'])) CONSTITUIÇÃO, ALTERAÇÃO E ENCERRAMENTO MUNICIPAL <br> @endif 
@if(isset($dados['certificado'])) CERTIFICADO DIGITAL <br> @endif 
@if(isset($dados['nota'])) EMISSÃO DE NOTA FISCAL ELETRÔNICA <br> @endif 
@if(isset($dados['estatuto'])) 2ª VIA DE ATA E ESTATUTO DE ASSOCIAÇÕES E IGREJAS <br> @endif 
@if(isset($dados['social'])) 2ª VIA DE CONTRATO SOCIAL <br> @endif 
@if(isset($dados['empresarios'])) 2ª VIA DE REQUERIMENTO DE EMPRESÁRIOS <br> @endif 
@if(isset($dados['certidoes'])) EMISSÃO DE CERTIDÕES <br> @endif 
@if(isset($dados['viabilizacao'])) VIABILIZAÇÃO DE CONTA BANCÁRIA JURÍDICA <br> @endif 
<br>
<!-- 16 -->
@if(isset($dados['bancario'])) PAGAMENTOS DE CONTA, SAQUES E DEPÓSITOS SERVIÇOS GRÁFICOS <br> @endif 


<br><br>
Observação: @if(isset($dados['observacao'])) {{$dados['observacao']}} @endif <br><br>


<br>
<br>
<br>Enviado pelo formulario do site cartoriopostal.com.br
Dados do contrato <br><br>

Projeto que tenho interesse: @if($dados['projetos']) {{$dados['projetos']}} @endif<br>

Valor do Aporte: @if($dados['valor_aporte']) {{$dados['valor_aporte']}} @endif<br>

Forma do aporte: @if($dados['forma_pagamento']) {{$dados['forma_pagamento']}} @endif<br>

Transferencia: @if($dados['transferencia']) {{$dados['transferencia']}} @endif<br>

Deposito: @if($dados['deposito']) {{$dados['deposito']}} @endif <br>

Meu nome é: @if($dados['nome']) {{$dados['nome']}} @endif <br>

Minha data de nascimento é: @if($dados['data_nascimento']) {{$dados['data_nascimento']}} @endif <br>

Meu estado civil: @if($dados['estado_civil']) {{$dados['estado_civil']}} @endif <br>

Meu RNE: @if($dados['rne']) {{$dados['rne']}} @endif <br>

Meu CPF: @if($dados['cpf']) {{$dados['cpf']}} @endif <br>

Meu telefone é: @if($dados['telefone']) {{$dados['telefone']}} @endif <br>

Meu celular é: @if($dados['celular']) {{$dados['celular']}} @endif <br>

Meu E-email é: @if($dados['email']) {{$dados['email']}} @endif <br>

Minha Profissão: @if($dados['profissao']) {{$dados['profissao']}} @endif <br>

Minha nacionalidade: @if($dados['nacionalidade']) {{$dados['nacionalidade']}} @endif <br>

Meu endereço: @if($dados['logradouro']) {{$dados['logradouro']}} @endif <br>

CEP: @if($dados['cep']) {{$dados['cep']}} @endif, 

bairro: @if($dados['bairro']) {{$dados['bairro']}} @endif,

numero: @if($dados['numero']) {{$dados['numero']}} @endif,

complemento: @if($dados['complemento']) {{$dados['complemento']}} @endif<br>

Observações: @if($dados['observacao']) {{$dados['observacao']}} @endif<br>



<br>
<br>
<br>Enviado pelo formulario de contato do site solucaosmart.com.br
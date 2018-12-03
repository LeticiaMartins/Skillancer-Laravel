@extends('layouts.app')

@section('css-custom')
@section('content')

<fieldset>
<form method="POST" action="">
	<!-- Pagamento Por Boleto -->
	<input type="radio" name="tiposDePagamento" id="boleto" value="Boleto Bancário">
	<label for="boleto">Boleto Bancário</label> <br>
		<label>Nome:</label>
		<input type="text" name="nome" value="" /> <br>
		<label>Sobrenome:</label>
		<input type="text" name="sobrenome" value="" /> <br>
		<label>CPF/CNPJ:</label>
		<input type="number" name="CPF/CNPJ" value="" /> <br><br>
		<input type="submit" name="gerarBoleto" value="Gerar Boleto"/><br><br>

	<!-- Pagamento Por Cartão -->
	<input type="radio" name="tiposDePagamento" id="cartão" value="Cartão De Crédito">
	<label for="boleto">Cartão de Crédito</label> <br>
		<label>Número do Cartão:</label>
		<input type="number" name="numeroCartao" value="" /> <br>
		<label>Vencimento:</label>
		<input type="number" name="mês" value="" placeholder="Mês"/>
		<input type="number" name="ano" value="" placeholder="Ano"/> <br>
		<label>Código de Segurança:</label>
		<input type="number" name="codSeg" value="" /> <br>
		<label>Nome do Cartão:</label>
		<input type="text" name="nomeCartao" value="" /> <br>
		<label>CPF:</label>
		<input type="number" name="codSeg" value="" /> <br><br>
		<input type="submit" name="finalizarPagamento" value="Finalizar Pagamento"/><br><br>

</form>
</fieldset>

<div class="clearfix">
</div>
@stop

window.carrinhoAdicionarProduto = function(idproduto){
	$('#form-adicionar-produto input[name="id"]').val(idproduto);
	$('#form-adicionar-produto').submit();
}
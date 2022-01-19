function inserir(){
    $('#id_editar').val();
	$('#nome').val();
	$('#email').val();
	$('#cpf').val();
	$('#telefone').val();
	$('#endereco').val();

	$('#mensagem').text('');
	$('#tituloModal').text('Inserir Registro');
	var myModal = new bootstrap.Modal(document.getElementById('modalForm'), {
		backdrop: 'static',
	});
	myModal.show();
    //limparCampos();
}


function excluir(id, nome){
    $('#id-excluir').val(id);
    $('#nome-excluido').text(nome);
    var myModal = new bootstrap.Modal(document.getElementById('modalExcluir'), {       });
    myModal.show();
    $('#mensagem-excluir').text('');
}






$("#form").submit(function () {
	event.preventDefault();
	var formData = new FormData(this);
    var id= $('#id_editar').val();
    if(id!=''){
        $.ajax({
            url: pag + "atualizar",
            type: 'POST',
            data: formData,
    
            success: function (mensagem) {
                $('#mensagem').text('');
                $('#mensagem').removeClass()
                if (mensagem.trim() == "Salvo com Sucesso") {
                        //$('#nome').val('');
                        //$('#cpf').val('');
                        $('#id_editar').val('');
                        $('#btn-fechar').click();
                         window.location.reload();
                    } else {
    
                        $('#mensagem').addClass('text-danger')
                        $('#mensagem').text(mensagem)
                    }
    
    
                },
    
                cache: false,
                contentType: false,
                processData: false,
                
            });
    }else{
        $.ajax({
            url: pag + "inserir",
            type: 'POST',
            data: formData,
    
            success: function (mensagem) {
                $('#mensagem').text('');
                $('#mensagem').removeClass()
                if (mensagem.trim() == "Salvo com Sucesso") {
                        //$('#nome').val('');
                        //$('#cpf').val('');
                        $('#btn-fechar').click();
                         window.location.reload();
                    } else {
    
                        $('#mensagem').addClass('text-danger')
                        $('#mensagem').text(mensagem)
                    }
    
    
                },
    
                cache: false,
                contentType: false,
                processData: false,
                
            });
    }

});




$("#form-excluir").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    
    $.ajax({
        url: pag + "/excluir.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem-excluir').text('');
            $('#mensagem-excluir').removeClass()
            if (mensagem.trim() == "Excluído com Sucesso") {
                $('#btn-fechar-excluir').click();
                window.location="index.php?pag=" + pag;
               		
            } else {

                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }


        },

        cache: false,
        contentType: false,
        processData: false,

    });

});




$(document).ready(function() {
	$('#example').DataTable({
		"ordering": false
	});
} );

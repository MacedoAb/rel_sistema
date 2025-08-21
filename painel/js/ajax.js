$(document).ready(function() { 
    $('#listar').text("Carregando Dados...");   
    listar();    
} );

function listar(p1, p2, p3, p4, p5, p6){   
    var id_usuario = localStorage.id_usu;
    $.ajax({
        url: 'paginas/' + pag + "/listar.php",
        method: 'POST',
        data: {id_usuario},
        dataType: "html",

        success:function(result){
            $("#listar").html(result);
            $('#mensagem-excluir').text('');
        }
    });
}

function inserir(){
    $('#id_usuario').val(localStorage.id_usu);
    $('#mensagem').text('');
    $('#titulo_inserir').text('Inserir Registro');
    $('#modalForm').modal('show');
    limparCampos();
}




$("#form").submit(function () {

    event.preventDefault();
    var formData = new FormData(this);
    $('#mensagem').text('Carregando!!');
    $('#btn_salvar').hide();    

    $.ajax({
        url: 'paginas/' + pag + "/salvar.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {

                $('#btn-fechar').click();
                listar();          

            } else {

                $('#mensagem').addClass('text-danger')
                $('#mensagem').text(mensagem)
            }

            $('#btn_salvar').show();
        },

        cache: false,
        contentType: false,
        processData: false,

    });

});



function excluir(id){
    $.ajax({
        url: 'paginas/' + pag + "/excluir.php",
        method: 'POST',
        data: {id},
        dataType: "html",

        success:function(mensagem){
            if (mensagem.trim() == "Excluído com Sucesso") {
                listar();
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
}





function ativar(id, acao){
    $.ajax({
         url: 'paginas/' + pag + "/mudar-status.php",
        method: 'POST',
        data: {id, acao},
        dataType: "text",

        success: function (mensagem) {
            if (mensagem.trim() == "Alterado com Sucesso") {
                 listar();
            }               
        },

    });
}

function voucher(id, nome_cliente, tel_cliente, acao){
    $.ajax({
         url: 'paginas/' + pag + "/mudar-status.php",
        method: 'POST',
        data: {id, nome_cliente, tel_cliente, acao},
        dataType: "text",

        success: function (mensagem) {
            if (mensagem.trim() == "Alterado com Sucesso") {
                 listar();
            }               
        },

    });
}

function baixar(id, pg, id_listar){    
    var id_usuario = localStorage.id_usu;
    $('#mensagem-excluir').text("Baixando!!")

    if(pg != "" && pg != "undefined" && pg != undefined){        
        pag = pg;        
    }

    $.ajax({
        url: 'paginas/' + pag + "/baixar.php",
        method: 'POST',
        data: {id, id_usuario},
        dataType: "html",

        success:function(mensagem){
            if (mensagem.trim() == "Baixado com Sucesso") {
                if(id_listar == "" || id_listar == "undefined" || id_listar == undefined){
                    listar();
                }else{
                    listarContas(id_listar);
                    alert('Pagamento Confirmado!')
                }
                
                
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
}

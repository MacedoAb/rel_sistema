*<?php 
$tabela = 'usuarios';

echo <<<HTML
<small>
	<table class="table table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead>  
	<tr> 
	<th align="center" width="5%" class="text-center">Selecionar</th>
	<th>Nome</th>	
	<th class="esc">Telefone</th>	
	<th class="esc">Email</th>	
	<th class="esc">Nível</th>	
	<th class="esc">Foto</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>	
HTML;

echo <<<HTML
<tr>
<td align="center">
<div class="custom-checkbox custom-control">
<input type="checkbox" class="custom-control-input" id="seletor" onchange="">
<label for="seletor" class="custom-control-label mt-1 text-dark"></label>
</div>
</td>
<td>Hugo Vasconcelos</td>
<td class="esc">(31) 97527-5084</td>
<td class="esc">contato@hugocursos.com.br</td>
<td class="esc"><span class="badge bg-primary me-1 my-2">Administrador</span></td>
<td class="esc"><img src="images/perfil/eu.jpeg" width="25px"></td>
<td>
	<big><a href="#" onclick="" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

						<div class="dropdown" style="display: inline-block;">                      
                        <a href="#" aria-expanded="false" aria-haspopup="true" data-bs-toggle="dropdown" class="dropdown"><i class="fe fe-trash-2 text-primary"></i> </a>
                        <div  class="dropdown-menu tx-13">
                        <div style="width: 240px; padding:15px 5px 0 10px;" class="dropdown-item-text">
                        <p>Confirmar Exclusão? <a href="#" onclick=""><span class="text-danger">Sim</span></a></p>
                        </div>
                        </div>
                        </div>





<big><a href="#" onclick="" title="Mostrar Dados"><i class="fa fa-info-circle text-primary"></i></a></big>



</td>
</tr>
HTML;


echo <<<HTML
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>
</table>
HTML;
?>


<script type="text/javascript">
	$(document).ready( function () {
        $('#tabela').DataTable({
    	"language" : {
            "url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
        },
        "ordering": false,
		"stateSave": true
    });

    $('#tabela_filter label input').focus();
} );
</script>


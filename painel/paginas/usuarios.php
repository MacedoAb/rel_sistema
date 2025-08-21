<?php 
$pag = 'usuarios';

//verificar se ele tem a permissão de estar nessa página
if(@$usuarios == 'ocultar'){
    echo "<script>window.location='../index.php'</script>";
    exit();
}
?>




        <!-- breadcrumb -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="left-content mt-2">
                            <a class="btn ripple btn-primary text-white" onclick="inserir()" type="button"><i class="fe fe-plus me-2"></i> Adicionar <?php echo ucfirst($pag); ?></a>



                        <div class="dropdown" style="display: inline-block;">                      
                        <a href="#" aria-expanded="false" aria-haspopup="true" data-bs-toggle="dropdown" class="btn btn-danger dropdown" id="btn-deletar" style="display:none"><i class="fe fe-trash-2"></i> Deletar</a>
                        <div  class="dropdown-menu tx-13">
                        <div style="width: 240px; padding:15px 5px 0 10px;" class="dropdown-item-text">
                        <p>Excluir Selecionados? <a href="#" onclick="deletarSel()"><span class="text-danger">Sim</span></a></p>
                        </div>
                        </div>
                        </div>


                        </div>


                        


          
                    </div>
                    <!-- /breadcrumb -->




<div class="row row-sm">
<div class="col-lg-12">
<div class="card custom-card">
<div class="card-body" id="listar">

</div>
</div>
</div>
</div>


<input type="hidden" name="ids" id="ids">


        <!-- New User Modal-->
            <div class="modal fade" id="modalForm">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header bg-primary text-white">
                            <h6 class="modal-title"><span id="titulo_inserir"></span></h6>
                            <button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
                        </div>
                        <form id="form">
                        <div class="modal-body">
                            

                            <div class="row">
                        <div class="col-md-6 mb-3">                          
                                <label>Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu Nome" required>                          
                        </div>

                        <div class="col-md-6 mb-3">                          
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email"  required>                         
                        </div>

                        
                    </div>


                    <div class="row">

                        <div class="col-md-6 mb-3">                          
                                <label>Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Seu Telefone" required>                          
                        </div>
                        

                        <div class="col-md-6 mb-3">                          
                                <label>Nível</label>
                                <select class="form-control sel" name="nivel" id="nivel" style="width:100%;">
                                 <option>Selecionar Nível</option>
                                </select>                           
                        </div>


                        
                    </div>

                    <div class="row">

                        <div class="col-md-12 mb-3">                         
                                <label>Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Seu Endereço" >                          
                        </div>
                    </div>

                    

           


                    <input type="hidden" class="form-control" id="id" name="id">                    

                <br>
                <small><div id="mensagem" align="center"></div></small>


                        </div>
                    
                        <div class="modal-footer">
                             <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Fechar</button>
                             <button type="submit" id="btn_salvar" class="btn ripple btn-primary">Salvar</button>
                           
                        </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /New User Modal-->



            <!-- Modal Dados -->
<div class="modal fade" id="modalDados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header bg-primary text-white">
                            <h6 class="modal-title"><span id="titulo_dados"></span></h6>
                            <button id="btn-fechar-dados" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
                        </div>
            
            <div class="modal-body">
                <div class="row" style="margin-top: 0px">
                 

                    
                    <div class="col-md-12" style="margin-bottom: 5px">
                        <span><b>Email: </b></span><span id="email_dados"></span>
                    </div>

                    <div class="col-md-6" style="margin-bottom: 5px">
                        <span><b>Telefone: </b></span><span id="telefone_dados"></span>
                    </div>

                    <div class="col-md-6" style="margin-bottom: 5px">
                        <span><b>Nível: </b></span><span id="nivel_dados"></span>
                    </div>

                    <div class="col-md-6" style="margin-bottom: 5px">
                        <span><b>Ativo: </b></span><span id="ativo_dados"></span>
                    </div>

                    <div class="col-md-6" style="margin-bottom: 5px">
                        <span><b>Data Cadastro: </b></span><span id="data_dados"></span>
                    </div>

                    <div class="col-md-12" style="margin-bottom: 5px">
                        <span><b>Endereço: </b></span><span id="endereco_dados"></span>
                    </div>

                    <div class="col-md-12" style="margin-bottom: 5px">
                        <div align="center"><img src="" id="foto_dados" width="200px"></div>
                    </div>
                </div>
            </div>
                    
        </div>
    </div>
</div>



<!-- Modal Permissões -->
            <div class="modal fade" id="modalPermissoes">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header bg-primary text-white">
                            <h4 class="modal-title">Usuário: <span id="nome-usuario"></span>
                                 <span style="position:absolute; right:35px">
                        <input class="form-check-input" type="checkbox" id="input-todos" onchange="marcarTodos()">
                        <label class="" >Marcar Todos</label>
                    </span>
                            </h4>
                            <button id="btn-fechar-permissoes" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true"> &times;</span></button>
                        </div>
                        <div class="modal-body">
                          
                        <div id="listar-permissoes">


                        </div>

                <div class="row">   
                    <div class="col-md-12">                     
                
                        
                    </div>  
                </div>  

                        <br>
                        <input type="hidden" name="id" id="id-usuario"> 
                        <small><div id="mensagem-permissao" align="center" class="mt-3"></div></small>    


                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Fim: Modal Permissões -->


<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>

<script type="text/javascript">
        $(document).ready(function() {
            $('.sel').select2({
                dropdownParent: $('#modalForm')
            }); 
                    
        });
    </script>


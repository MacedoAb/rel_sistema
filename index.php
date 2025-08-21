<?php 
require_once("conexao.php");

$query = $pdo->query("SELECT * from usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
$senha = '123';
$senha_crip = sha1($senha);
if($linhas == 0){
	$pdo->query("INSERT INTO usuarios SET nome = '$nome_sistema', email = '$email_sistema', senha = '', senha_crip = '$senha_crip', nivel = 'Administrador', ativo = 'Sim', foto = 'sem-foto.jpg', telefone = '$telefone_sistema', data = curDate() ");
}

 ?>
<!DOCTYPE html>
<html lang="pt-BR">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<!-- META DATA -->
        <meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Fluxo Comunicação Inteligente">
		<meta name="Author" content="Samuel Lima">
		<meta name="Keywords" content="fluxo, comunicacao, inteligente, marketing, whatsapp"/>
		
		<!-- TITLE -->
		<title><?php echo $nome_sistema ?></title>


		<link rel="icon" href="assets/img/comum/favicon.png" type="image/x-icon"/>
		<link href="assets/css/icons.css" rel="stylesheet">
		<link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/custom.css" rel="stylesheet">
		<link href="assets/css/style-dark.css" rel="stylesheet">
		<link href="assets/css/style-transparent.css" rel="stylesheet">
		<link href="assets/css/skin-modes.css" rel="stylesheet" />
		<link href="assets/css/animate.css" rel="stylesheet">


		

	</head>
	<body class="ltr error-page1 bg-primary">


		<div class="square-box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		<div class="page" >
			
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-4 justify-content-center">
							<div class="card-sigin">
								 <!-- Demo content-->
								 <div class="main-card-signin d-md-flex">
									 <div class="wd-100p"><div class="d-flex mb-4 justify-content-center"><a href="index.html"><img src="assets/img/comum/logo.png" class="sign-favicon" alt="logo"></a></div>
										 <div class="">
											<div class="main-signup-header">
											
												<div class="panel panel-primary">
							
												   <div class="panel-body tabs-menu-body border-0 p-3">			

												   <?php
			if(isset($_SESSION['msg'])){

				echo '<div class="alert alert-danger mg-b-0 mb-3 alert-dismissible fade show" role="alert">
											<strong><span class="alert-inner--icon"><i class="fe fe-slash"></i></span></strong> '.$_SESSION['msg'].'!
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>';

				unset($_SESSION['msg']);
			}
		?>		


						
														
															   <form method="post" action="painel">
																   <div class="form-group">
																	   <label>Usuário</label> 
																	   <input class="form-control" name="usuario" placeholder="Digite seu Usuário" type="text" required>
																   </div>
																   <div class="form-group">
													              <label class="control-label">Senha</label>           
													              <input id="password-field" type="password" class="form-control" name="senha" placeholder="Digite sua Senha" required>
													              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        
          														</div>
																   <button class="btn btn-primary btn-block">Entrar no Sistema</button>
																
																</form>													
													  
												   </div>
											   </div>

												<div class="main-signin-footer text-center mt-3">
													<p><a href="" class="mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Esqueceu sua Senha?</a></p>
												</div>
											</div>
										 </div>
									 </div>
								 </div>
							 </div>
						 </div>
					</div>
				</div>
			</div>
		</div>





	</body>

</html>

				


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true" class="text-white">&times;</span></button>
    
      </div>
      <form method="post" id="form-recuperar">
      <div class="modal-body">
        	<label for="recipient-name" class="col-form-label">Email:</label>
        	<input placeholder="Digite seu Email" class="form-control" type="email" name="email" id="email-recuperar" required>        	
       
       <br>
       <small><div id="mensagem-recuperar" align="center"></div></small>
      </div>
      <div class="modal-footer">  
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>    
        <button type="submit" class="btn btn-primary">Recuperar Senha</button>
      </div>
  </form>
    </div>
  </div>
</div>


<script src="assets/plugins/jquery/jquery.min.js"></script>
		<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/js/eva-icons.min.js"></script>        
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/themecolor.js"></script>
        <script src="assets/js/custom.js"></script>


 
<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
<?php 
@session_start();
require_once("../conexao.php");
require_once("verificar.php");

$data_atual = date('Y-m-d');
$mes_atual = Date('m');
$ano_atual = Date('Y');
$data_inicio_mes = $ano_atual."-".$mes_atual."-01";
$data_inicio_ano = $ano_atual."-01-01";

$data_ontem = date('Y-m-d', strtotime("-1 days",strtotime($data_atual)));
$data_amanha = date('Y-m-d', strtotime("+1 days",strtotime($data_atual)));


if($mes_atual == '04' || $mes_atual == '06' || $mes_atual == '07' || $mes_atual == '09'){
	$data_final_mes = $ano_atual.'-'.$mes_atual.'-30';
}else if($mes_atual == '02'){
	$bissexto = date('L', @mktime(0, 0, 0, 1, 1, $ano_atual));
	if($bissexto == 1){
		$data_final_mes = $ano_atual.'-'.$mes_atual.'-29';
	}else{
		$data_final_mes = $ano_atual.'-'.$mes_atual.'-28';
	}

}else{
	$data_final_mes = $ano_atual.'-'.$mes_atual.'-31';
}



$pag_inicial = 'home';
if(@$_SESSION['nivel'] != 'Administrador'){
	require_once("verificar_permissoes.php");
}

if(@$_GET['pagina'] != ""){
	$pagina = @$_GET['pagina'];
}else{
	$pagina = $pag_inicial;
}

$id_usuario = @$_SESSION['id'];
$query = $pdo->query("SELECT * from usuarios where id = '$id_usuario'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
	$nome_usuario = $res[0]['nome'];
	$email_usuario = $res[0]['email'];
	$telefone_usuario = $res[0]['telefone'];
	$senha_usuario = $res[0]['senha'];
	$nivel_usuario = $res[0]['nivel'];
	$foto_usuario = $res[0]['foto'];
	$endereco_usuario = $res[0]['endereco'];
}

?>
<!DOCTYPE HTML>
<html lang="pt-BR" dir="ltr">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		

		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Fluxo Comunicação Inteligente">
        <meta name="Author" content="Samuel Lima">
        <meta name="Keywords" content="fluxo, comunicacao, inteligente, marketing, whatsapp"/>

		<title><?php echo $nome_sistema ?></title>

		<link rel="icon" href="../assets/img/comum/favicon.png" type="image/x-icon"/>
		<link href="../assets/css/icons.css" rel="stylesheet">
		<link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/style-dark.css" rel="stylesheet">
		<link href="../assets/css/style-transparent.css" rel="stylesheet">
		<link href="../assets/css/skin-modes.css" rel="stylesheet" />
		<link href="../assets/css/animate.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<link href="../assets/css/custom.css" rel="stylesheet" />
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/modernizr.custom.js"></script>		


		


	</head>

	<body class="ltr main-body app sidebar-mini">



		<!-- Page -->
		<div class="page">

			<div>
				<!-- APP-HEADER1 -->
				<div class="main-header side-header sticky nav nav-item">
						<div class=" main-container container-fluid">
							<div class="main-header-left ">
								<div class="responsive-logo">
									<a href="index.php" class="header-logo">
										<img src="../assets/img/comum/logo-branco.png" class="mobile-logo logo-1" alt="logo" style="width:40% !important">
										<img src="../assets/img/comum/logo-branco.png" class="mobile-logo dark-logo-1" alt="logo" style="width:40% !important">
									</a>
								</div>
								<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
									<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left" ></i></a>
									<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
								</div>
								<div class="logo-horizontal">
									<a href="index.php" class="header-logo">
										<img src="../assets/img/comum/logo-branco.png" class="mobile-logo logo-1" alt="logo">
										<img src="../assets/img/comum/logo-branco.png" class="mobile-logo dark-logo-1" alt="logo">
									</a>
								</div>
								<div class="main-header-center ms-4 d-sm-none d-md-none d-lg-block form-group">
									<input class="form-control" placeholder="Pesquisar..." type="search">
									<button class="btn"><i class="fas fa-search"></i></button>
								</div>
							</div>
							<div class="main-header-right">
								<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical "></span>
								</button>
								<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
									<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
										<ul class="nav nav-item header-icons navbar-nav-right ms-auto">
								
											<li class="dropdown nav-item">
												<a class="new nav-link theme-layout nav-link-bg layout-setting" >
													<span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"/></svg></span>
													<span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"/></svg></span>
												</a>
											</li>




											<li class="dropdown nav-item  main-header-message ">
												<a class="new nav-link"  data-bs-toggle="dropdown" href="javascript:void(0);">
													<small><i class="fa fa-money" style="color:#d8f6e1;"></i></small>
													<span class="badge header-badge" style="background:green">5</span>
												</a>
												<div class="dropdown-menu">
													<div class="menu-header-content text-start border-bottom">
														<div class="d-flex">
															<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Constas à Receber</h6>
															<span class="badge badge-pill badge-warning ms-auto my-auto float-end">Mark All Read</span>
														</div>
														<p class="dropdown-title-text subtext mb-0 op-6 pb-0 tx-12 "><?php echo $linhas ?> Contas Vencidas </p>
													</div>
													<div class="main-message-list chat-scroll">
														<a href="chat.html" class="dropdown-item d-flex border-bottom">
															<div class="  drop-img  cover-image  " data-image-src="../assets/img/faces/3.jpg">
																<span class="avatar-status bg-teal"></span>
															</div>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-0 name">Teri Dactyl</h5>
																</div>
																<p class="mb-0 desc">I'm sorry but i'm not sure how to help you with that......</p>
																<p class="time mb-0 text-start float-start ms-2 mt-2">Mar 15 3:55 PM</p>
															</div>
														</a>
														<a href="chat.html" class="dropdown-item d-flex border-bottom">
															<div class="drop-img cover-image" data-image-src="../assets/img/faces/2.jpg">
																<span class="avatar-status bg-teal"></span>
															</div>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-0 name">Allie Grater</h5>
																</div>
																<p class="mb-0 desc">All set ! Now, time to get to you now......</p>
																<p class="time mb-0 text-start float-start ms-2 mt-2">Mar 06 01:12 AM</p>
															</div>
														</a>
														<a href="chat.html" class="dropdown-item d-flex border-bottom">
															<div class="drop-img cover-image" data-image-src="../assets/img/faces/9.jpg">
																<span class="avatar-status bg-teal"></span>
															</div>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-0 name">Aida Bugg</h5>
																</div>
																<p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
																<p class="time mb-0 text-start float-start ms-2 mt-2">Feb 25 10:35 AM</p>
															</div>
														</a>
														<a href="chat.html" class="dropdown-item d-flex border-bottom">
															<div class="drop-img cover-image" data-image-src="../assets/img/faces/12.jpg">
																<span class="avatar-status bg-teal"></span>
															</div>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-0 name">John Quil</h5>
																</div>
																<p class="mb-0 desc">Here are some products ...</p>
																<p class="time mb-0 text-start float-start ms-2 mt-2">Feb 12 05:12 PM</p>
															</div>
														</a>
														<a href="chat.html" class="dropdown-item d-flex border-bottom">
															<div class="drop-img cover-image" data-image-src="../assets/img/faces/5.jpg">
																<span class="avatar-status bg-teal"></span>
															</div>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-0 name">Liz Erd</h5>
																</div>
																<p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
																<p class="time mb-0 text-start float-start ms-2 mt-2">Jan 29 03:16 PM</p>
															</div>
														</a>
													</div>
													<div class="text-center dropdown-footer">
														<a class="btn btn-primary btn-sm btn-block text-center"  href="chat.html">VIEW ALL</a>
													</div>
												</div>
											</li>
											
											
											
											<li class="nav-item full-screen fullscreen-button">
												<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"/></svg></a>
											</li>
						
											<li class="dropdown main-profile-menu nav nav-item nav-link ps-lg-2">
												<a class="new nav-link profile-user d-flex" href="#" data-bs-toggle="dropdown"><img src="images/perfil/eu.jpeg"></a>
												<div class="dropdown-menu">
													<div class="menu-header-content p-3 border-bottom">
														<div class="d-flex wd-100p">
															<div class="main-img-user"><img src="images/perfil/eu.jpeg"></div>
															<div class="ms-3 my-auto">
																<h6 class="tx-15 font-weight-semibold mb-0">Hugo Vasconcelos</h6><span class="dropdown-title-text subtext op-6  tx-12">Administrador</span>
															</div>
														</div>
													</div>
													<a class="dropdown-item" href="" data-bs-target="#modalPerfil" data-bs-toggle="modal"><i class="fa fa-user"></i>Perfil</a>	
													<a class="dropdown-item" href=""><i class="fa fa-cogs"></i>  Configurações</a>
													<a class="dropdown-item" href="logout.php"><i class="fa fa-arrow-left"></i> Sair</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							
							</div>
						</div>
					</div>				<!-- /APP-HEADER -->

				<!--APP-SIDEBAR-->
				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="index.php">
								<img src="../assets/img/comum/logo-branco.png" class="main-logo  desktop-logo" alt="logo">
								<img src="../assets/img/comum/logo-branco.png" class="main-logo  desktop-dark" alt="logo">
								<img src="../assets/img/comum/favicon.png" class="main-logo  mobile-logo" alt="logo">
								<img src="../assets/img/comum/favicon.png" class="main-logo  mobile-dark" alt="logo">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
							<ul class="side-menu">

								<li class="slide">
									<a class="side-menu__item" href="index.php"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg><span class="side-menu__label">Dashboard</span></a>
								</li>


								<li class="slide <?php echo @$menu_usuarios ?>">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"/></svg><span class="side-menu__label">Pessoas</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
									
									<li class="<?php echo @$usuarios ?>"><a class="slide-item" href="usuarios"> Usuários</a></li>
										
									</ul>
								</li>
		
						
							
			
								
							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
						</div>
					</aside>
				</div>				<!--/APP-SIDEBAR-->
			</div>

			<!-- MAIN-CONTENT -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">



				<?php 
				require_once('paginas/'.$pagina.'.php');
				?>

					


				</div>
				<!-- Container closed -->
			</div>
			<!-- MAIN-CONTENT CLOSED -->

				
			






			<!-- FOOTER -->
			<div class="main-footer">
				<div class="container-fluid pt-0 ht-100p">
					 Copyright © <?php echo date('Y'); ?> <a href="javascript:void(0);" class="text-primary">PORTAL HUGO CURSOS</a>. Todos os direitos reservados
				</div>
			</div>			<!-- FOOTER END -->

		</div>
		<!-- End Page -->

		<!-- BUYNOW-MODAL -->
		       
		
	
		<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>


		<!-- GRAFICOS -->
		<script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>		
		<script src="../assets/js/apexcharts.js"></script>

		<!--INTERNAL  INDEX JS -->
		<script src="../assets/js/index.js"></script>
	

	
		<script src="../assets/plugins/jquery/jquery.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="../assets/plugins/moment/moment.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>
		<script src="../assets/js/eva-icons.min.js"></script>
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>
		<script src="../assets/js/sticky.js"></script>
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>


		<!-- INTERNAL DATA TABLES -->
		<script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
		<script src="../assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="../assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
		<script src="../assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="../assets/plugins/datatable/responsive.bootstrap5.min.js"></script>


		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


		<!-- POPOVER JS -->
		<script src="../assets/js/popover.js"></script>

		<script src="../assets/js/themecolor.js"></script>
		<script src="../assets/js/custom.js"></script>		

		<!--INTERNAL  INDEX JS -->
		<script src="../assets/js/index.js"></script>




		
	</body>

</html>


<!-- Modal Perfil -->
<div class="modal fade" id="modalPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
				<div class="modal-header bg-primary text-white">
                            <h4 class="modal-title">Alterar Dados</h4>
                            <button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
                        </div>

			<form id="form-perfil">
			<div class="modal-body">
				

					<div class="row">
						<div class="col-md-6 mb-3">							
								<label>Nome</label>
								<input type="text" class="form-control" id="nome_perfil" name="nome" placeholder="Seu Nome" value="<?php echo @$nome_usuario ?>" required>							
						</div>

						<div class="col-md-6 mb-3">							
								<label>Email</label>
								<input type="email" class="form-control" id="email_perfil" name="email" placeholder="Seu Nome" value="<?php echo @$email_usuario ?>" required>							
						</div>
					</div>


					<div class="row">
						<div class="col-md-4 mb-3">							
								<label>Telefone</label>
								<input type="text" class="form-control" id="telefone_perfil" name="telefone" placeholder="Seu Telefone" value="<?php echo @$telefone_usuario ?>" required>							
						</div>

						<div class="col-md-4 mb-3">							
								<label>Senha</label>
								<input type="password" class="form-control" id="senha_perfil" name="senha" placeholder="Senha" value="<?php echo @$senha_usuario ?>" required>							
						</div>

						<div class="col-md-4 mb-3">							
								<label>Confirmar Senha</label>
								<input type="password" class="form-control" id="conf_senha_perfil" name="conf_senha" placeholder="Confirmar Senha" value="" required>							
						</div>

						
					</div>


					<div class="row">
						<div class="col-md-12 mb-3">	
							<label>Endereço</label>
							<input type="text" class="form-control" id="endereco_perfil" name="endereco" placeholder="Seu Endereço" value="<?php echo @$endereco_usuario ?>" >	
						</div>
					</div>
					


					<div class="row">
						<div class="col-md-8 mb-3">							
								<label>Foto</label>
								<input type="file" class="form-control" id="foto_perfil" name="foto" value="<?php echo @$foto_usuario ?>" onchange="carregarImgPerfil()">							
						</div>

						<div class="col-md-4 mb-3">								
							<img src="images/perfil/sem-foto.jpg"  width="80px" id="target-usu">								
							
						</div>

						
					</div>


					<input type="hidden" name="id_usuario" value="<?php echo @$id_usuario ?>">
				

				<br>
				<small><div id="msg-perfil" align="center"></div></small>
			</div>
			<div class="modal-footer">       
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
			</form>
		</div>
	</div>
</div>

	<!-- Mascaras JS -->
<script type="text/javascript" src="js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script> 



<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    
<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <img src="../assets/img/menu-toggler.png" alt=""/>
            </a>
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
                <?php
                    $menuOptions = [
                        [
                            'title' => 'Dashboard',
                            'icon' => 'fa fa-home',
                            'link' => 'index.html',
                            'submenu' => []
                        ],
                        [
                            'title' => 'Cadastro',
                            'icon' => 'fa fa-file-text',
                            'submenu' => [
                                ['title' => 'Cliente', 'link' => '#'],
                                ['title' => 'Fornecedor', 'link' => '#'],
                                ['title' => 'Usuário', 'link' => '#'],
                                ['title' => 'Produtos', 'link' => '#'],
                                ['title' => 'Perfil de acesso', 'link' => '#']
                            ]
                        ],
                        [
                            'title' => 'Relatório',
                            'icon' => 'fa fa-bar-chart-o',
                            'submenu' => [
                                ['title' => 'Cliente', 'link' => '#'],
                                ['title' => 'Faturamento', 'link' => '#'],
                                ['title' => 'Produtos', 'link' => '#']
                            ]
                        ]
                    ];

                    function gerarMenu($options)
                    {
                        echo '<ul class="page-sidebar-menu">';

                        foreach ($options as $option) {
                            echo '<li';
                            
                            // No caso usariamos os parametros da URL para a mudança para classe start active, como não temos a navegação resolvi mudar diretamente
                            if (isset($option['title']) && $option['title'] === 'Dashboard') {
                                echo ' class="start active"';
                            }
                            
                            echo '>';
                            echo '<a href="' . ($option['link'] ?? '#') . '">';

                            if (isset($option['icon'])) {
                                echo '<i class="' . $option['icon'] . '"></i>';
                            }

                            echo '<span class="title">' . $option['title'] . '</span>';

                            if (!empty($option['submenu'])) {
                                echo '<span class="arrow"></span>';
                                echo '</a>';
                                echo '<ul class="sub-menu">';
                                gerarMenu($option['submenu']);
                                echo '</ul>';
                            } else {
                                echo '</a>';
                            }

                            echo '</li>';
                        }

                        echo '</ul>';
                    }

                    // Chamando a função
                    gerarMenu($menuOptions);
                ?>


			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cockie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js" type="text/javascript"></script>
<script src="assets/scripts/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   Index.init();
});
</script>
<!-- END JAVASCRIPTS -->
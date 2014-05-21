<!DOCTYPE html>
<html lang="es">
	<head>
		<!--[if lt IE 9]>
    		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Jondesan</title>
		<meta name="description" content="" />
		<meta name="author" content="Luis" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	</head>

	<body>
		<div id="contenido">
			<header>
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" width="200" style="float: left;" />
				<ul class="menu-idioma">
					<li>
						<a href="#">Castellano</a>
					</li>
					<li>
						<a href="#">Català</a>
					</li>
					<li><a href="#">English</a></li>
					<li><a href="<?php echo admin_url(); ?>">Admin</a></li>
				</ul>
			</header>
			<div class="menu-principal">
				<nav>
				    
					<ul class="menu-principal">
					    <?php wp_list_pages(array('title_li'     => __(''))); ?>
						<!--<li class="selected">
							<a href="#">¿Quienes somos?</a>
						</li>
						<li>
							<a href="#">Servicios</a>
						</li>
						<li>
							<a href="#">Telecomunicaciones</a>
						</li>
						<li>
							<a href="#">Energia</a>
						</li>
						<li>
							<a href="#">Contactar</a>
						</li>-->
					
					</ul>
					
				</nav>
			</div>
			
			<div id="cuerpo">
			    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                <header>
                    <h1><?php echo get_the_title(); ?> </h1>
                </header>
                <div class="text-box">
                    <section id="principal">
                    <?php the_content(); ?>
                    </section>
                </div>
                </div>
                <?php endwhile; endif; ?>
				
			</div>

			<footer>
				
			</footer>
		</div>
	</body>
</html>

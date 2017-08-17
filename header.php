  <html <?php language_attributes(); ?>>
    <head>
        <meta <?php bloginfo('charset')?>>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title> <?php bloginfo('name'); ?> 
		<?php is_front_page() ? bloginfo('description'): wp_title();  ?>
		</title>

        <!-- Bootstrap -->
        <!--<link rel="stylesheet" href="<?php  bloginfo('template_url')?>/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
        <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_head(); ?>
    </head>
    <body>
		<div id="nav-placeholder">
			        <div class="container">
            <nav class="navbar navbar-inverse navbar-fixed-top">                
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" ></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav custom-navbar">
                            <li ><a href="#"><i class="fa fa-user-o " aria-hidden="true">&nbsp;&nbsp;Profile</i></a></li>
                            <li><a href="#"><i class="fa fa-rss">&nbsp;&nbsp;Blog</i></a></li>
                            <li><a href="#"><i class="fa fa-certificate">&nbsp;&nbsp;Certifications</i></a></li>
                            <li><a href="https://github.com/faintdream"><i class="fa fa-github">&nbsp;&nbsp;Github</i></a></li>
                            <li><a href="#"><i class="fa fa-trophy">&nbsp;&nbsp;Work</i></a></li>
                        </ul>
                    </div>
            </nav>
        </div>

        </div>

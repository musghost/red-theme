<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

		<header class="menu">
      <div class="container">
        <nav class="navbar navbar-default">
          <div class="container-fluid col-md-offset-1">
            <div class="logo-pafc">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/logo.png">
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Universidad en línea</a></li>
                <li><a href="#">Créditos</a></li>
                <li><a href="#">Red_magisterial</a></li>
                <li><a href="#">Contacto</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->

            <div class="social_nav">
              <ul>
                <li class="twitter_header_icon"><a href="#twitter"><i class="fa fa-twitter fa-2x"></i></a></li>
                <li class="facebook_header_icon"><a href="#facebook"><i class="fa fa-facebook fa-2x"></i></a></li>
              </ul>
            </div>

          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </header>

    <section id="carousel">
      <div class="carousel-control">
        <div class="carousel-buttons">
          <a href="#" class="active"></a>
          <a href="#"></a>
          <a href="#"></a>
        </div>
      </div>
      <div class="carousel-control-direction">
        <a class="left" href="#">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="right" href="#">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
      <div class="slides">
<?php
		$r = new WP_Query( array(
			'post_status'         => 'publish',
			'post_type' 		  => 'slide',
			'posts_per_page'	  => -1
		) );
		if ($r->have_posts()) :
		$count = 1;
?>
			<?php while ( $r->have_posts() ) : $r->the_post(); ?>
				<?php $slide = get_post_meta( get_the_ID(), 'wpcf-image-carousel', true ); ?>
				<div class="slide <?php if($count==1) echo 'active'; ?>" style="background-image: url('<?php echo esc_html($slide); ?>')">
          <div class="slide-text">
            <h1><?php the_title(); ?></h1><br>
            <h3><?php the_content(); ?></h3>
          </div>
        </div>
        <?php $count++; ?>
			<?php endwhile; ?>

<?php
		endif;
?>
      </div>
    </section>


    <section id="scheme">
      <h2>
        <span class="i-scheme"></span>
        <br>
        <span class="t-scheme">Conoce los programas</span>
      </h2>
      <p>Aproveche esta oportunidad para superarse y obtener mayores ingresos.<br>
         Financiamiento, licenciaturas y acceso a los mejores materiales digitales para<br>
         apoyar tu educación.
      </p>
    </section>


    <section id="features">
      <div class="section-header">
        <h2>Conoce la <strong>Universidad en línea</strong></h2>
        <p>Encuentra aquí el mejor programa de estudios</p>
      </div>
      <div class="features">
        <div class="feature-image">
          <img src="images/holder/home/book.jpg">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="feature">
                <span class="i-feature organization"></span>
                <h3>Licenciatura en psicología organizacional</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
                <div class="button-right">
                  <a href="#">Leer más</a>
                </div>
              </div>
              <div class="feature">
                <span class="i-feature cup"></span>
                <h3>Maestría en dirección de instituciones educativas</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
                <div class="button-right">
                  <a href="#">Leer más</a>
                </div>
              </div>
              <div class="feature">
                <span class="i-feature pencil"></span>
                <h3>Maestría en educación y formación docente</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
                <div class="button-right">
                  <a href="#">Leer más</a>
                </div>
              </div>
              <div class="feature">
                <span class="i-feature qrcode"></span>
                <h3>Maestría en educación y formación docente</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
                <div class="button-right">
                  <a href="#">Leer más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>

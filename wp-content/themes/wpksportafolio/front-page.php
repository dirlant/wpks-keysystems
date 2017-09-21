<?php get_header(); ?>

    <!-- Page Content -->
    <?php 
      $args = array(      
        //Type & Status Parameters
        'p' => 96,
        'post_type'   => 'landing',
        'post_status' => 'publish',      
      );

      $query = new WP_Query( $args );
    ?>        
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <?php 
        global $post;
        $thumbID = get_post_thumbnail_id( $post->ID );
        $url_img = wp_get_attachment_url( $thumbID );              
      ?>
      <section id="inicio" class="content-section-a">            
        <div class="container">
          <div class="row">            
            <div class="col-lg-4 ml-auto">
              <div class="clearfix"></div>  
              <h1 class="section-heading"><?php echo $post->post_title ?></h1>
              <hr class="section-heading-spacer">
              <br><br>
              <p class="lead"><?php echo $post->post_content ?></p>
            </div>
            <div class="col-lg-8 mr-auto">
              <img class="img-fluid" src="<?php echo $url_img ?>" alt="">
            </div>          
          </div>
        </div>
      </section>
    <?php endwhile; wp_reset_postdata(); ?>


    <section id="descargar" class="content-section-b p-t-b-70">
      <br>
      <div class="container">
        <div class="row justify-content-md-center">
          <p class="lead">Descarga tu primera <b>Página  Web</b> completamnte <b>GRATIS!</b> el enlace llegará a tu correo</p>
          
          <div class="col-lg-10 ">
            <?php echo do_shortcode('[contact-form-7 id="59" title="Descarga de tema"]' ); ?>
          </div>
        </div>
      </div>
    </section>


    <?php 
      $args = array(      
        //Type & Status Parameters
        'p' => 100,
        'post_type'   => 'landing',
        'post_status' => 'publish',      
      );

      $query = new WP_Query( $args );
    ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php 
      global $post;
      $thumbID = get_post_thumbnail_id( $post->ID );
      $url_img = wp_get_attachment_url( $thumbID );              
    ?>
      <section  id="estilo"   class="content-section-b p-t-b-70" style="background: url('<?php echo get_template_directory_uri()?>/html_template/img/lineas.png');">

        <div class="container">
          <div class="row">          
            <div class="col-lg-12 ml-auto">
              <div class="clearfix"></div>
              <h2 class="section-heading"><?php echo $post->post_title ?></h2>
              <hr class="section-heading-spacer">
              <br><br>
              <p class="lead">
                <?php echo $post->post_content ?>
              </p>
            </div>                         
          </div>
          <div class="row p-t-100 justify-content-md-center">
            <div class="col-lg-4 center">
              <img class="img-fluid" src="<?php echo get_template_directory_uri()?>/html_template/img/desktop.png" alt="">
              <h2 class="section-heading p-t-50">Desktop</h2>
            </div>
            <div class="col-lg-3 center">
              <img class="img-fluid" src="<?php echo get_template_directory_uri()?>/html_template/img/tablet.png" alt="">
              <h2 class="section-heading p-t-50">tablet</h2>
            </div>
            <div class="col-lg-2 center">
              <img class="img-fluid" src="<?php echo get_template_directory_uri()?>/html_template/img/mobil.png" alt="">
              <h2 class="section-heading p-t-50">Móvil</h2>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile; wp_reset_postdata(); ?>
    <!-- /.content-section-b -->

    <?php 
      $args = array(      
        //Type & Status Parameters
        'p' => 101,
        'post_type'   => 'landing',
        'post_status' => 'publish',      
      );

      $query = new WP_Query( $args );
    ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <section id="nuestro-trabajo" class="content-section-b2" style="background: url(<?php echo get_field('imagen') ?>);">
        <div class="content-section-b2">
          <div class="container p-t-b-70">
            <div class="row">
              <div class="col-lg-12 ml-auto">
                <div class="clearfix"></div>
                <h2 class="section-heading white"><?php echo $post->post_title ?></h2>
                <hr class="section-heading-spacer-2">
                <br><br>
                <p class="lead white"><?php echo $post->post_content ?></p>
              </div>
            </div>
          </div>
        <div>
      </section>
    <?php endwhile; wp_reset_postdata(); ?>
    <!-- /.content-section-a -->

    
    <section id="portafolio" class="content-section-b" style="background: url('<?php echo get_template_directory_uri()?>/html_template/img/lineas.png');">
      <div class="container">
        <!--
        <div class="row">
          <div class="col-md-12 center">
            <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/html_template/img/gallery/pc.png" width="650">
          </div>
        </div>
        -->
        <br><br>
        <?php 
          $args = array(      
            //Type & Status Parameters
            'p' => 103,
            'post_type'   => 'landing',
            'post_status' => 'publish',      
          );

          $query = new WP_Query( $args );
        ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="row">
          <div class="col-lg-12 mr-auto center">
            <h2 class="section-heading"><?php echo $post->post_title ?></h2>
            <hr class="section-heading-spacer-3">
            <br>
            <p class="lead">
              <?php echo $post->post_content ?>
            </p>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>

        <div class="row p-t-b-30">
          <?php 
            $args = array(      
              //Type & Status Parameters
              'post_type'   => 'portafolio',
              'post_status' => 'publish',          
              //Order & Orderby Parameters
              'orderby' => 'date'         
            );
      
            $query = new WP_Query( $args );
          ?>       

          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php 
              // Ruta de la imagen destacada (tamaño completo)
              global $post;
              $thumbID = get_post_thumbnail_id( $post->ID );
              $url_img = wp_get_attachment_url( $thumbID );
              
            ?>
            <div class="col-md-4 center hover01" style="margin-top: 25px;">
              <a href="<?php echo get_field('url') ?>" target="_blank">
                <img class="img-responsive b-r-4" src="<?php echo $url_img ?>">
              </a>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
    </section>




    <section id="temas" class="content-section-b p-t-b-70" >
      <div class="container">
        <div class="row">
          <?php 
            $args = array(      
              //Type & Status Parameters
              'p' => 104,
              'post_type'   => 'landing',
              'post_status' => 'publish',      
            );

            $query = new WP_Query( $args );
          ?>
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-lg-12 mr-auto center">
              <h2 class="section-heading"><?php echo $post->post_title ?></h2>
              <hr class="section-heading-spacer-3">
              <br>
              <p class="lead">
                <?php echo $post->post_content ?> 
              </p>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <br><br>
        <div class="row">
          <?php 
            $args = array(      
              //Type & Status Parameters
              'post_type'   => 'temas',
              'post_status' => 'publish',          
              //Order & Orderby Parameters
              'orderby' => 'date'         
            );
      
            $query = new WP_Query( $args );
          ?>       

          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php 
              // Ruta de la imagen destacada (tamaño completo)
              global $post;
              $thumbID = get_post_thumbnail_id( $post->ID );
              $url_img = wp_get_attachment_url( $thumbID );
              
            ?>
            <div class="col-md-4 center hover01" style="margin-top: 25px;">
              <a href="<?php echo get_field('url') ?>" target="_blank">
                <img class="img-responsive b-r-4" src="<?php echo $url_img ?>">
              </a>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
    </section> 


    <?php 
      $args = array(      
        //Type & Status Parameters
        'p' => 105,
        'post_type'   => 'landing',
        'post_status' => 'publish',      
      );

      $query = new WP_Query( $args );
    ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <?php 
        // Ruta de la imagen destacada (tamaño completo)
        global $post;
        $thumbID = get_post_thumbnail_id( $post->ID );
        $url_img = wp_get_attachment_url( $thumbID );
        
      ?>
      <section  id="quienes-somos"  class="content-section-b p-t-b-70" style="background: url('<?php echo get_template_directory_uri()?>/html_template/img/lineas.png');">
        <div class="container">        
          <div class="row">        
            <div class="col-lg-12 mr-auto">
              <div class="clearfix"></div>
              <h2 class="section-heading"><?php echo $post->post_title ?></h2>
              <hr class="section-heading-spacer">
              <br><br>
              <p class="lead">
                <?php echo $post->post_content ?> 
              </p>
            </div>
          </div>
          <div class="row p-t-100">
            <div class="col-lg-8 center">
              <div class="col-lg-8 center">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="http://localhost/KeySystems/cursoWordpress/wpks-keysystems/wp-content/uploads/2017/09/venezolano-maickel-melamed-filosofia-psicoterapeuta_lprima20160809_0134_33.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="http://localhost/KeySystems/cursoWordpress/wpks-keysystems/wp-content/uploads/2017/09/puramides.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="http://localhost/KeySystems/cursoWordpress/wpks-keysystems/wp-content/uploads/2017/09/bancolombia.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 center">
              <img class="img-fluid" src="<?php echo $url_img ?>" alt="">
            </div>
          </div>
        </div>
      </section>
      <?php endwhile; wp_reset_postdata(); ?>

    <section  id="pensamientos"  class="content-section-b2" style="background: url('<?php echo get_template_directory_uri()?>/html_template/img/capa3.png');">
      <div class="content-section-b2">
        <div class="container p-t-b-70">
          <div class="row">
            <div class="col-lg-11 ml-auto">
              <div class="clearfix"></div>
              <h2 class="section-heading white">pensamientos</h2>
              <hr class="section-heading-spacer-2">
              <br><br>
              <div class="row">
                <div class="col-lg-1">
                  <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/html_template/img/globo.png">
                </div>
                <div class="col-lg-10">
                  <p class="lead white">Observa, escucha y aprende. No puedes saberlo todo. Todo el que piensa que lo sabe todo está destinado a la mediocridad</p>
                  <p class="lead white">- Donald Trump</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div>
    </section>
    
    <?php 
      $args = array(      
        //Type & Status Parameters
        'p' => 107,
        'post_type'   => 'landing',
        'post_status' => 'publish',      
      );

      $query = new WP_Query( $args );
    ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <?php 
        // Ruta de la imagen destacada (tamaño completo)
        global $post;
        $thumbID = get_post_thumbnail_id( $post->ID );
        $url_img = wp_get_attachment_url( $thumbID );
        
      ?>
      <section  id="importancia"  class="content-section-b" style="background: url('<?php echo get_template_directory_uri()?>/html_template/img/lineas.png');">

        <div class="container">

          <div class="row">
            <div class="col-lg-3 center">
              <img class="img-fluid" src="<?php echo get_template_directory_uri()?>/html_template/img/iphone-png-14.png" alt="">
            </div>
            <div class="col-lg-9 mr-auto">
              <div class="clearfix"></div>
              <h2 class="section-heading"><?php echo $post->post_title ?></h2>
              <hr class="section-heading-spacer">
              <br><br>
              <p class="lead">
                <?php echo $post->post_content ?>
              </p>
            </div>
          </div>
        </div>
        <!-- /.container -->

      </section>
    <?php endwhile; wp_reset_postdata(); ?>
    

    <?php 
      $args = array(      
        //Type & Status Parameters
        'p' => 109,
        'post_type'   => 'landing',
        'post_status' => 'publish',      
      );

      $query = new WP_Query( $args );
    ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <?php 
        // Ruta de la imagen destacada (tamaño completo)
        global $post;
        $thumbID = get_post_thumbnail_id( $post->ID );
        $url_img = wp_get_attachment_url( $thumbID );
        
      ?>
      <section id="contacto" class="content-section-b2" style="background: url('<?php echo get_template_directory_uri()?>/html_template/img/capa4.png');">
        <div class="content-section-b2">
          <div class="container p-t-b-70">
            <div class="row">
              <div class="col-lg-12 ml-auto">
                <div class="clearfix"></div>
                <h2 class="section-heading white"><?php echo $post->post_title ?></h2>
                <hr class="section-heading-spacer-2">
                <br><br>
                <p class="lead white">
                  <?php echo $post->post_content ?>
                </p>
              </div>
              <div class="col-lg-12 ml-auto p-t-50">
                <?php echo do_shortcode('[contact-form-7 id="48" title="Contacto"]'); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>
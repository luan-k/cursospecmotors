
            
            <footer class="page-footer bg-pec-graymid text-white font-poppins font-semibold pb-20" style="background-image: url(<?php echo get_theme_file_uri('./images/footer.jpg') ?>) ">
                
                <!-- Footer Links -->
                <div class="container text-center md:text-left text-lg font-semibold">

                    <div class="grid grid-cols-1 md:grid-cols-3 col-g gap-6">

                        <div class="col-12 col-sm-4" data-anime="left">
                            <h4 class="title-3 text-4xl font-poppins font-bold mb-6 ">
                                Central de Atendimento
                            </h4>
                            <p class="footer-text">
                                <i class="fas fa-phone-alt"></i> (41) 3156-7257
                            </p>
                            <p class="footer-text">
                                <i class="fab fa-whatsapp"></i> (41) 99524-0664
                            </p>
                            <a class="footer-text" href="<?php echo esc_url(site_url('/contato')); ?>">
                                <i class="far fa-envelope"></i> Enviar uma mensagem
                            </a>
                            <hr class="white">
                            <h4 class="title-3 text-4xl font-poppins font-bold mb-6 title-intert mt-5">
                                Onde Estamos:
                            </h4>
                            <p class="footer-text">
                                <i class="fas fa-map-marker-alt"></i> RUA CONSELHEIRO LAURINDO, 2935 PRADO VELHO - CURITIBA
                            </p>
                        </div>
                       
                        <div class="col-12 col-sm-4" data-anime="bottom">
                            <h4 class="title-3 text-4xl font-poppins font-bold mb-6">
                                A Empresa
                            </h4>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/inicio')); ?>"> In??cio </a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/sobre-nos')); ?>">Sobre N??s</a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/cursos-presenciais')); ?>"> Cursos Presenciais </a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/cursos-a-distancia')); ?>"> Cursos ?? Distancia </a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/calendario-de-cursos')); ?>"> Calendario de Cursos </a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/instrutores')); ?>">Instrutores</a>
                            </div>  
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/contato')); ?>">Contato</a>
                            </div>  
                            <hr class="white">
                            
                        </div>
                        <div class="col-12 col-sm-4" data-anime="right">
                            <h4 class="title-3 text-4xl font-poppins font-bold mb-6">
                                Cursos
                            </h4>
                            <?php
                                $footerPosts = new WP_Query(array(
                                'posts_per_page' => 5,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                ));

                                while($footerPosts->have_posts()){
                                $footerPosts->the_post(); ?>
                                <div class="mt-3">
                                    <a href="<?php the_permalink(); ?>" class="footer-text">
                                        <?php the_title() ?>
                                    </a>
                                </div>
                                
                            <?php } wp_reset_postdata(); ?>
                            <hr class="white">
                        </div>

                    </div>
                       


            
            </footer>
            <!-- Footer -->
            
            <?php wp_footer() ?>

        </div>
    </body>
</html>
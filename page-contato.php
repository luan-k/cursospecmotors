<?php get_header();
?>
<div class="page-wraper contact">
    <div class="container contato-text mt-5 pt-40 font-poppins">
        <div class="row grid grid-cols-1 md:grid-cols-2">
            <div class="col-sm-6 font-poppins">
                <h3 class="font-poppins" data-anime="top">Telefone:</h3>
                <ul class="font-poppins" data-anime="left">
                    <li> (41) 99681-0097 </li>
                    <li> (41) 3156-7257 </li>
                </ul>

                <h3 class="mt-6 font-poppins" data-anime="left">Localização:</h3>
                <ul class="font-poppins pr-3" data-anime="bottom">
                    <li class="font-poppins mt-12">
                        Rua Conselheiro Laurindo 2935, Prado Velho - Curitiba - Paraná - CEP 80215-232
                    </li>
                    <li class="font-poppins mt-12">
                        Rua Fernandes Cardoso da Silva 671, Serraria - São José - Santa Catarina - CEP 88113-125
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 mt-9 md:mt-0 font-poppins" data-anime="right">
                <?php echo do_shortcode('[wpforms id="108"]') ?>

            </div>
        </div>
    </div>
    <br><br>

    <br><br>

    <!-- GOOGLE MAPS -->
    <section>
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59747.12254615366!2d-49.25835122798631!3d-25.478708579776516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce530f5e482b1%3A0xaf05ebb6c9999da4!2sCentro%20T%C3%A9cnico%20de%20Lubrifica%C3%A7%C3%A3o%20Pecmotors%20Troca%20de%20%C3%93leo%20em%20Curitiba!5e0!3m2!1sen!2sbr!4v1649623567458!5m2!1sen!2sbr" width="100" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</div>
<?php
    get_footer();
?>
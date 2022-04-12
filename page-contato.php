<?php get_header();
?>
<div class="page-wraper contact">
    <div class="container contato-text mt-5 pt-40 font-poppins">
        <div class="row grid grid-cols-1 md:grid-cols-2">
            <div class="col-sm-6 font-poppins">
                <h3 class="font-poppins" data-anime="top">Telefone:</h3>
                <ul class="font-poppins" data-anime="left">
                    <li> (41) 99524-0664 </li>
                    <li> (41) 3156-7257 </li>
                </ul>

                <h3 class="mt-6 font-poppins" data-anime="left">Localização:</h3>
                <ul class="font-poppins" data-anime="bottom">
                    <li class="font-poppins">
                        RUA CONSELHEIRO LAURINDO, 2935 PRADO VELHO - CURITIBA
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 mt-9 md:mt-0 font-poppins" data-anime="right">
                <?php echo do_shortcode('[wpforms id="108"]') ?>
                <!-- <form data-anime="right">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Insira seu email">
                    </div>
                    <div class="form-group">
                        <label for="messageTitle">Título</label>
                        <input type="text" class="form-control" id="messageTitle"
                            placeholder="Insira o titulo da mensagem">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea type="textarea" class="form-control" id="message"
                            placeholder="Insira o titulo da mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form> -->
            </div>
        </div>
    </div>
    <br><br>
    <!-- <div class="container text-center contato-text">
        <h3>Nossos Horários: </h3>
        <ul>

            Segunda a Sexta, das 08h00 às 18h.

        </ul>
    </div> -->
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
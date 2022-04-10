<?php
// There is nothing output here because block themes do not use php templates.
// There is a core ticket discussing removing this requirement for block themes:
// https://core.trac.wordpress.org/ticket/54272.
?>
<?php get_header(); ?>

<div class="wrapper container">
    <a href="" class="fon font-bold">Em destaque</a>
    <span class="a">|</span>
    <a href="" class="fon font-bold">Bibilioteca</a>
    <span class="a">|</span>
    <a href="" class="fon font-bold">mais Noticias</a>
    <div class="grid grid-cols-2 min-h-screen gap-9">
    <?php

        $produtosRecomendados = new WP_Query(array(
        'post_type' => array('post'),
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC' ,
        ));

        while($produtosRecomendados->have_posts()){
            $produtosRecomendados->the_post();
            get_template_part('template-parts/cards/content', 'primary');
            get_template_part('template-parts/cards/content', 'secondary');
        } wp_reset_postdata();?>

        <div class="grid grid-rows-5 gap-9">
            <div class=" grid grid-rows-2 gap-6">
                <div class="bg-gray-light border-l-8 border-purple-dark flex flex-row justify-evenly items-center">
                    <h3 class="text-purple-dark uppercase inline ml-9 text-3xl">Artsoft 21</h3>
                    <p class="inline text-2xl ml-6">Salami beef bacon porchetta pork belly t-bone meatball</p>
                    <i class="fas fa-arrow-circle-right text-purple-dark ml-auto text-5xl"></i>
                </div>
                <div class="bg-gray-light">ha</div>
            </div>
            <div class="row-span-5 bg-gray-light py-16 px-24"> 
                <h4 class="text text-green-600 inline">Publicado Hoje | <span>informação desaparece em 2 dias</span></h4>
                <h1 class="uppercase text-5xl font-black">Formação de Gestão de vendas e stocks</h1>
                <h2 class="text-purple-dark text-3xl mt-20">Spicy jalapeno bacon ipsum dolor amet salami ham turducken, ham hock rump pork belly shoulder porchetta alcatra meatloaf chuck jerky. Leberkas bresaola meatball pancetta. Shank bacon pork chop ham. </h2>
                <p class="text-2xl mt-28">Salami beef bacon porchetta pork belly t-bone meatball frankfurter turducken beef ribs andouille prosciutto sirloin kevin. Short ribs kevin bacon pig chislic </p>
                <div class="flex flex-row content-center justify-evenly items-center mt-20">
                    <a href="" class="flex flex-col">
                        <i class="fas fa-plus-circle text-6xl"></i>
                        saber mais
                    </a>
                    <a href="" class="flex flex-col">
                        <i class="fas fa-search text-6xl"></i>
                        saber mais
                    </a>
                    <a href="" class="flex flex-col">
                        <i class="fas fa-paper-plane text-6xl"></i>
                        saber mais
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
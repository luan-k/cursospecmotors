<?php get_header();
while(have_posts()){
the_post();

?>
<div class="page-wraper">
<section class="single-featured-image" style="background-image:url( <?php if(has_post_thumbnail()){  the_post_thumbnail_url('full'); } else { echo get_theme_file_uri('/img/standart-banner.png'); }  ?>)" alt="" >
    <div class="container">
        <h1 class="title title-page"><?php the_title() ?></h1>
    </div>

</section>
<div class="container content text-white wysiwyg">
    <div class="row">
        <div class="col-12">
            <div class="content"><?php the_content() ?></div>
			<div class="mt-12">
				<div class="selection-wrapper flex flex-col">
					<?php $local = get_terms(['taxonomy' => 'local', 'hide_empty' => false,]); ?>
					<label class="mb-12 text-center" for="cars">Escolha sua Cidade!</label>

					<select name="cars" id="cars" class="bg-black text-center calendario-selection">
						<option value="Selecionar" >Selecionar</option>
						<?php
						foreach ( $local as $term ) {
							echo '<option value="' . $term->name . '">' . $term->name . '</option>';
						}
						?>
					</select>
				</div>
			</div>
        </div>
    </div>
</div>
<script>
			// Get the select element
			var select = document.getElementById("cars");

			// Add event listener to the select element
			select.addEventListener("change", function() {
				// Get the selected value
				var selectedValue = this.value;

				// If a value is selected, open the corresponding URL in a new tab
				if (selectedValue !== "") {
					var url = "/calendario-de-cursos/cidade=" + selectedValue;
					window.open(url, "_blank");
				}
			});
</script>


</div>

<?php
    }
    get_footer();

?>

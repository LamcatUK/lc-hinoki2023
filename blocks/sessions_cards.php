<section class="sessions_cards">
    <div class="container-xl">
        <div class="row g-3 justify-content-center">
            <?php
    if(have_rows('sessions')) {
        while(have_rows('sessions')) {
            the_row();
            ?>
            <div class="col-md-6 col-lg-3 pb-3">
                <a href="<?=get_sub_field('page')?>"
                    class="sessions_cards__card washi">
                    <img src="<?=wp_get_attachment_image_url(get_sub_field('image'), 'large')?>"
                        alt="<?=get_sub_field('name')?>"
                        class="sessions_cards__cardimg">
                    <div class="sessions_cards__content">
                        <img src="<?=wp_get_attachment_image_url(get_sub_field('icon'), 'full')?>"
                            alt="<?=get_sub_field('name')?>">
                        <h3>
                            <?=get_sub_field('name')?>
                        </h3>
                    </div>
                </a>
            </div>
            <?php
        }
    }
            ?>
        </div>
    </div>
</section>
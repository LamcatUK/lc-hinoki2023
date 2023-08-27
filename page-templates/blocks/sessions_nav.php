<section class="sessions_nav py-5">
    <div class="container-xl">
        <div class="row justify-content-center">
            <?php
        if(have_rows('sessions')) {
            while(have_rows('sessions')) {
                the_row();
                ?>
            <div class="col-md-6 col-lg-4 pb-5">
                <a href="<?=get_sub_field('page')?>"
                    class="sessions_nav__card washi">
                    <div class="sessions_nav__content">
                        <img src="<?=wp_get_attachment_image_url(get_sub_field('icon'), 'full')?>"
                            alt="<?=get_sub_field('name')?>">
                        <h2>
                            <?=get_sub_field('name')?>
                        </h2>
                    </div>
                    <div>
                        <?=get_sub_field('intro')?>
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
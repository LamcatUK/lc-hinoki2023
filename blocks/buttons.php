<section class="py-5">
    <div class="container d-flex justify-content-around flex-wrap">
        <?php
if (have_rows('buttons')) {
    while(have_rows('buttons')) {
        the_row();
        ?>
        <a href="<?=get_sub_field('button')['url']?>"
            target="<?=get_sub_field('button')['target']?>"
            class="btn btn-primary mb-4"><?=get_sub_field('button')['title']?></a>
        <?php
    }
}
        ?>
    </div>
</section>
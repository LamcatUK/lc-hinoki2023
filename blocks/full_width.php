<?php
$py = isset(get_field('compact')[0]) == 'Yes' ? '' : 'py-5';
$center = isset(get_field('center')[0]) == 'Yes' ? 'text-center' : '';
$larger = isset(get_field('larger')[0]) == 'Yes' ? 'text-larger' : '';
$classes = $block['className'] ?? null;
?>
<!-- full_width -->
<?php
if (get_field('id')) {
    ?>
<a class="anchor" id="<?=get_field('id')?>"></a>
<?php
}
?>
<div
    class="full_width container <?=$py?> <?=$center?> <?=$larger?> <?=$classes?>">
    <div class="max-ch mx-auto">
        <?=get_field('content')?>
    </div>
</div>
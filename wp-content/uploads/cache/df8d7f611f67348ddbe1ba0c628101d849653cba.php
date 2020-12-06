

<?php 
    $block_has_content = has_fields_content(get_fields());
?>

<?php if(!$block_has_content && is_admin()): ?> 
    <?php echo $__env->make('partials.empty-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($block_has_content): ?>
<header class="header vh-100 text-center">
    <?php if (get_field('image')) : ?>
        <?php $image_id = get_field('image'); ?>
        <?php echo image($image_id,'full','header__image img-fluid'); ?>

    <?php endif; ?>
    <div class="container h-100">
        <div class="header-inner d-flex justify-content-center align-items-center flex-column h-100">
            <h1 class="page-header pb-5">
                <?= get_field('title'); ?>
            </h1>
            <?php if (get_field('link')) : ?>
            <a class="btn btn-primary btn-rounded" href="<?= get_field('link')['url']; ?>" role="button">
                <?= get_field('link')['title']; ?>
            </a>
            <?php endif; ?>
            <button class="header__arrow btn-primary mx-auto"></button>
        </div>
    </div>
</header>
<?php endif; ?>



<?php 
    $block_has_content = has_fields_content(get_fields());
?>

<?php if(!$block_has_content && is_admin()): ?> 
    <?php echo $__env->make('partials.empty-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($block_has_content): ?>
<section class="section my-5 py-5 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col">
                <blockquote class="<?php echo e($block['classes']); ?>">
                    <p> <?= get_field('testimonial'); ?></p>
                    <cite>
                        <span><?= get_field('author'); ?></span>
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

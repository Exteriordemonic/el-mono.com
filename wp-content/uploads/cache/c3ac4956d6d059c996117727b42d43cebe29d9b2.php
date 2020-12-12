

<?php 
    $block_has_content = has_fields_content(get_fields());

    $options = get_field('options');
    $bg = $options['background'];
    $offset = $options['offset'];
    $direction = $options['direction'];
?>

<?php if(!$block_has_content && is_admin()): ?> 
    <?php echo $__env->make('partials.empty-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($block_has_content): ?>
<section class="section <?php echo e($bg); ?> <?php echo e(text_color($bg)); ?> <?php echo e($offset ? 'section--offset' : ''); ?>">
  <div class="container">
    <div class="row <?php echo e($direction); ?> gx-5 gx-xl-10">
      <div class="col-md-6 section__offset">
        <?php if (get_field('image')) : ?>
          <?php $image_id = get_field('image'); ?>
          <?php echo image($image_id,'full','img-cover'); ?>

        <?php endif; ?>
      </div>
      <div class="col-md-6 py-5">
        <?php if (have_rows('content')) : ?><?php while (have_rows('content')) : the_row(); ?>
          <?php if (get_sub_field('content')) : ?>
          <div class="default-content mb-4">
            <?= get_sub_field('content'); ?>
          </div>
          <?php endif; ?>

          <?php if (get_sub_field('link')) : ?>
          <a class="btn <?php echo e(btn_color($bg)); ?>" href="<?= get_sub_field('link')['url']; ?>" role="button">
              <?= get_sub_field('link')['title']; ?>
          </a>
          <?php endif; ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

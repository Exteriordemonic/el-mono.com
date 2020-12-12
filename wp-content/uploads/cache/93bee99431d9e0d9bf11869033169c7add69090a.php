

<?php 
    $block_has_content = has_fields_content(get_fields());

    $options = get_field('options');
    $bg = $options['background'];
    $offset = $options['offset'];
?>

<?php if(!$block_has_content && is_admin()): ?> 
    <?php echo $__env->make('partials.empty-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($block_has_content): ?>
<section class="block-icon-list section <?php echo e($bg); ?> <?php echo e(text_color($bg)); ?> <?php echo e($offset ? 'section--offset' : ''); ?>">
  <div class="container">
    <header class="section__header my-5 text-center">
      <?php if (get_field('title')) : ?> <h2 class="section-title"> <?= get_field('title'); ?> </h2> <?php endif; ?>
      <?php if (get_field('content')) : ?> <p class="section-content"> <?= get_field('content'); ?> </p> <?php endif; ?>
      <?php if (get_field('subtitle')) : ?> <h3 class="section-subtitle"> <?= get_field('subtitle'); ?> </h2> <?php endif; ?>
    </header>
    <?php if (get_field('icon-list')) : ?>
    <ul class="my-5 row list-unstyled my-n-2">
      <li class="item d-flex py-2 col-sm-6 col-md-3">
        <h3 class="d-block lead">
          <?= get_field('arrow-info'); ?>
        </h3>
        <span class="icon">
          @svg('arrow-right-rounded')
        </span>
      </li>
      <?php if (have_rows('icon-list')) : ?><?php while (have_rows('icon-list')) : the_row(); ?>
      <li class="item py-2 col-sm-6 col-md-3 text-center">
        <span class="d-block icon icon--image mb-3">
          <?php $image_id = get_sub_field('image'); ?>
          <?php echo image($image_id,'full', ''); ?>

        </span>
        <h3 class="d-block lead <?php if(get_sub_field('bold') == 1): ?> font-weight-bold <?php endif; ?>">
          <?= get_sub_field('text'); ?>
        </h3>
      </li>
      <?php endwhile; endif; ?>
    </ul>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

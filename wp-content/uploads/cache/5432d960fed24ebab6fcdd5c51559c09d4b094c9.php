

<?php 
    $block_has_content = has_fields_content(get_fields());

    $options = get_field('options');
    $bg = $options['background'];
    $offset = $options['offset'];
?>

<?php if(!$block_has_content && is_admin()): ?> 
    <?php echo $__env->make('partials.empty-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif($block_has_content): ?>
<section class="block-list section <?php echo e($bg); ?> <?php echo e(text_color($bg)); ?> <?php echo e($offset ? 'section--offset' : ''); ?>">
  <div class="container">
    <header class="section__header my-5 text-center">
      <?php if (get_field('title')) : ?> <h2 class="section-title"> <?= get_field('title'); ?> </h2> <?php endif; ?>
      <?php if (get_field('content')) : ?> <p class="section-content"> <?= get_field('content'); ?> </p> <?php endif; ?>
      <?php if (get_field('subtitle')) : ?> <h3 class="section-subtitle"> <?= get_field('subtitle'); ?> </h2> <?php endif; ?>
    </header>
    <?php if (get_field('list')) : ?>
    <ul class="my-5 row list-unstyled my-n-1">
      <?php if (have_rows('list')) : ?><?php while (have_rows('list')) : the_row(); ?>
      <li class="item d-flex py-1 col-md-6 pl-0 pl-md-10">
        <span class="dot mr-1" style="background-color: <?= get_sub_field('color'); ?>;"></span><?= get_sub_field('text'); ?>
      </li>
      <?php endwhile; endif; ?>
    </ul>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

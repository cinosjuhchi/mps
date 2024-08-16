<div class="accordion-item">
    <h2 class="accordion-header" id="<?php echo e($headingId); ?>">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo e($collapseId); ?>"
            aria-expanded="true">
            <?php echo e($title); ?>

            <?php if(!$attributes->has('code')): ?>
            <span class="badge text-bg-primary mx-1"><?php echo e($code); ?></span>
            <?php endif; ?>
            <?php if($attributes->has('jawatan')): ?>
                <span class="badge text-bg-danger mx-1"><?php echo e($jawatan); ?></span>
            <?php endif; ?>
            <?php if($attributes->has('name')): ?>
                <span class="badge text-bg-success mx-1"><?php echo e($name); ?></span>
            <?php endif; ?>
            <?php if($attributes->has('udang')): ?>
            <span class="badge text-bg-secondary"><?php echo e($udang); ?></span>
            <?php endif; ?>
        </button>
    </h2>
    <div id="<?php echo e($collapseId); ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo e($headingId); ?>"
        data-bs-parent="#<?php echo e($parentId); ?>">
        <div class="accordion-body text-black">

            <?php echo e($slot); ?>

        </div>
    </div>
</div>
<?php /**PATH D:\BELAJAR-PROYEK\GRAVIX\mps_cino\mps\resources\views/components/accordion-item.blade.php ENDPATH**/ ?>
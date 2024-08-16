<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button text-black" type="button" data-bs-toggle="collapse"
            data-bs-target="#<?php echo e($collapseId); ?>" aria-expanded="true" aria-controls="<?php echo e($collapseId); ?>">
            <?php echo e($title); ?>

            <?php if($attributes->has('code')): ?>
                <span class="badge text-bg-primary mx-1"><?php echo e($code); ?></span>
            <?php endif; ?>
            <?php if($attributes->has('jawatan')): ?>
                <span class="badge text-bg-success mx-1"><?php echo e($jawatan); ?></span>
            <?php endif; ?>
            <?php if($attributes->has('name')): ?>
                <span class="badge text-bg-danger mx-1"><?php echo e($name); ?></span>
            <?php endif; ?>
        </button>
    </h2>
    <div id="<?php echo e($collapseId); ?>" class="accordion-collapse collapse text-black" data-bs-parent="#<?php echo e($parentId); ?>">
        <div class="accordion-body">
            <?php echo e($slot); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\mps\resources\views/components/accordion/item.blade.php ENDPATH**/ ?>
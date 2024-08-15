<?php echo $__env->make('layouts.navcss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<nav class="navbar navbar-dark navbar-expand fixed-bottom justify-content-evenly">
    <div class="navbar-nav">
        <a class="nav-item nav-link" href="/dashboard"><i class='bx bx-home-alt'></i> Utama</a>
    </div>
    <div class="navbar-nav">
        <a class="nav-item nav-link" href="#"><i class='bx bx-book-content'></i> Tugas</a>
    </div>
    <div class="navbar-nav">
        <a class="nav-item nav-link" href="/jadual-guru-bertugas-harian"><i class='bx bx-calendar'></i> Takwim</a>
    </div>
    <div class="navbar-nav">
        <a class="nav-item nav-link" href="#"><i class='bx bx-home-alt'></i> Menu</a>
    </div>
</nav>
<?php /**PATH C:\laragon\www\mps\resources\views/layouts/bottom-nav.blade.php ENDPATH**/ ?>
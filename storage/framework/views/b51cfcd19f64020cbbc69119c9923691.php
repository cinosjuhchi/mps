<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Tema'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Tema</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tetapan</a></li>
                        <li class="breadcrumb-item active">Tema</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3 d-none float-end me-3" id="open-overlay">
        <div class="mb-2">
            <span id="close-overlay"><i class="bx bx-x fs-5"></i></span>
        </div>
        <img src="" class="img-fluid d-block mb-3" id="img-overlay">
        <span class="text-muted">img1.jpg</span>
        <hr class="border border-dark border-opacity-10 my-3">
        <p class="fw-bold">Action</p>

        <div class="d-flex">
            <button class="btn btn-danger btn-sm me-2"><i class="bx bx-trash"></i> Delete</button>
            <button class="btn btn-primary btn-sm"><i class="bx bx-save"></i> Change Background</button>
        </div>
    </div>

    <div class="light-dark-mode">
        <h5 class="mt-3 mb-4">Layout Mode</h5>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-mode" id="light" value="light">
            <label class="form-check-label" for="layout-mode-light">Light</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-mode" id="dark" value="dark">
            <label class="form-check-label" for="layout-mode-dark">Dark</label>
        </div>
    </div>



    <div class="sidebar-color">
        <h5 class="mt-4 mb-3">Sidebar Color</h5>
        <div class="d-flex border border-primary p-2 mb-2 rounded" style="width: 220px;">
            <input type="color" id="colorPicker" class="color-picker border-0 me-2" name="colorPicker" value="#ff0000">
            <input type="text" id="colorCode" class="color-code border-0" name="colorCode" value="#ff0000" readonly>
        </div>
        <div class="color d-flex flex-wrap">
            <div class="color1 me-2 mb-2"></div>
            <div class="color2 me-2 mb-2"></div>
            <div class="color3 me-2 mb-2"></div>
        </div>
    </div>

    <div class="img-sidebar">
        <h5 class="mt-4 mb-3">Sidebar Image</h5>
        <div class="row">
            <div class="col">
                <div class="upload-imej mb-3">
                    <button type="button" class="btn btn-primary" data-bs-target="#create" data-bs-toggle="modal">Upload Imej <i class="bx bx-plus"></i></button>
                    <!-- Modal Tambah Imej -->
                    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editLabel">Imej Latar Belakang</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <label for="imej" class="form-label"></label>
                                        <div class="" id="drop-area">
                                            <p class="mt-5">Drag file here</p>
                                            <p>or</p>
                                            <img src="" id="preview-image" alt="">
                                        </div>
                                        <center>
                                            <button type="button" class="btn btn-primary position-relative overflow-hidden mt-3">Pilih Imej
                                                <input type="file" class="position-absolute start-0 end-0 scale-3 opacity-0" id="imej">
                                            </button>
                                        </center>
                                    </form>
                                </div>
                                <div class="alert fst-italic">
                                    *Imej yang dimuat naik adalah lebih baik pada 1440 x 980 (3:2)
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="button" class="btn btn-primary">Upload Imej</button>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="imej d-flex flex-wrap">
            <div class="me-2 mb-2">
                <img class="imej-tetapan border-primary border-3" id="img1" onclick="return openImg('img1')"
                    src="<?php echo e(URL::asset('images/img1.jpg')); ?>" alt="" width="100" height="80">
            </div>
            <div class="me-2 mb-2">
                <img class="imej-tetapan border-primary border-3" id="img2" onclick="return openImg('img2')"
                    src="<?php echo e(URL::asset('images/img2.jpg')); ?>" alt="" width="100" height="80">
            </div>
            <div class="me-2 mb-2">
                <img class="imej-tetapan border-primary border-3" id="img3" onclick="return openImg('img3')"
                    src="<?php echo e(URL::asset('images/img3.jpg')); ?>" alt="" width="100" height="80">
            </div>
        </div>
    </div>

    <div class="change-font">
        <h5 class="mt-4 mb-3">Font Style</h5>
        <select class="form-select w-50" id="font-selector">
            <option value="IBM Plex Sans">IBM Plex Sans</option>
            <option value="Arial">Arial</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Courier New">Courier New</option>
        </select>

    </div>


    <div class="background-color">
        <h5 class="mt-4 mb-3">Background Color</h5>
        <div class="d-flex border border-primary p-2 mb-2 rounded" style="width: 220px;">
            <input type="color" id="colorsPicker" class="colors-picker border-0 me-2" name="colorsPicker" value="#ff0000">
            <input type="text" id="colorsCode" class="colors-code border-0" name="colorsCode" value="#ff0000" readonly>
        </div>
        <div class="colors d-flex flex-wrap">
            <div class="color-box color1 me-2 mb-2"></div>
            <div class="color-box color2 me-2 mb-2"></div>
            <div class="color-box color3 me-2 mb-2"></div>
        </div>
    </div>









    <script>
        function openImg(id) {
            const img = document.getElementById(id);
            const imgSrc = img.src;
            const openOverlay = document.getElementById('open-overlay');
            const imgOverlay = document.getElementById('img-overlay');
            const closeOverlay = document.getElementById('close-overlay');

            const imejTetapans = document.getElementsByClassName('imej-tetapan');
            for (let i = 0; i < imejTetapans.length; i++) {
                const imejTetapan = imejTetapans[i];
                imejTetapan.classList.remove('border');
                if (imejTetapan.classList.contains('border')) {
                    imejTetapan.classList.remove('border');
                }
            }

            img.classList.add('border')
            openOverlay.classList.remove('d-none')
            imgOverlay.src = imgSrc;

            closeOverlay.addEventListener('click', function() {
                openOverlay.classList.add('d-none');
                for (let i = 0; i < imejTetapans.length; i++) {
                    const imejTetapan = imejTetapans[i];
                    imejTetapan.classList.remove('border');
                }
            })
        }
        const colorBoxes = document.querySelectorAll('.color div');

        colorBoxes.forEach(box => {
            box.addEventListener('click', () => {
                colorBoxes.forEach(otherBox => {
                    otherBox.style.border = '2px solid transparent';
                });
                box.style.border = '3px solid  #556EE6';
            });
        });

        const colorsBoxes = document.querySelectorAll('.color-box');

        colorsBoxes.forEach(box => {
            box.addEventListener('click', () => {
                colorsBoxes.forEach(otherBox => {
                    otherBox.style.border = '2px solid transparent';
                });
                box.style.border = '3px solid #556EE6';
            });
        });




        var fontSelector = document.getElementById('font-selector');
        var allElements = document.querySelectorAll('*');

        fontSelector.addEventListener('change', function() {
            var selectedFont = fontSelector.value;
            allElements.forEach(function(element) {
                element.style.fontFamily = selectedFont;
            });
        });

        const colorPicker = document.getElementById('colorPicker');
        const colorCodeInput = document.getElementById('colorCode');


        colorPicker.addEventListener('input', function() {
            const selectedColor = colorPicker.value;
            colorCodeInput.value = selectedColor;
        });

        const colorsPicker = document.getElementById('colorsPicker');
        const colorsCodeInput = document.getElementById('colorsCode');


        colorsPicker.addEventListener('input', function() {
            const selectedColor = colorsPicker.value;
            colorsCodeInput.value = selectedColor;
        });
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.gravix.id/resources/views/tema.blade.php ENDPATH**/ ?>
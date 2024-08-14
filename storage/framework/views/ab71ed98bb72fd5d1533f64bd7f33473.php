<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Imej Latar Belakang'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Imej Latar Belakang</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tetapan</a></li>
                        <li class="breadcrumb-item active">Imej Latar Belakang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col">
            <div class="upload-imej mb-3">
                <button type="button" class="btn btn-primary" data-bs-target="#create" data-bs-toggle="modal">Muat naik Imej <i class="bx bx-plus"></i></button>
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
                                <button type="button" class="btn btn-primary">Muat naik Imej</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imej d-flex flex-wrap">
                <div class="me-2 mb-2">
                    <img class="imej-tetapan border-primary border-3" id="img1" onclick="return openImg('img1')"
                        src="<?php echo e(URL::asset('images/img1.jpg')); ?>" alt="" width="340" height="220">
                </div>
                <div class="me-2 mb-2">
                    <img class="imej-tetapan border-primary border-3" id="img2" onclick="return openImg('img2')"
                        src="<?php echo e(URL::asset('images/img2.jpg')); ?>" alt="" width="340" height="220">
                </div>
                <div class="me-2 mb-2">
                    <img class="imej-tetapan border-primary border-3" id="img3" onclick="return openImg('img3')"
                        src="<?php echo e(URL::asset('images/img3.jpg')); ?>" alt="" width="340" height="220">
                </div>
            </div>
        </div>
        <div class="col-sm-3 d-none" id="open-overlay">
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

            const dropArea = document.getElementById("drop-area");
                dropArea.addEventListener("dragenter", (e) => {
                    e.preventDefault();
                    dropArea.style.background = "#f7f7f7";
                });
                dropArea.addEventListener("dragover", (e) => {
                    e.preventDefault();
                });
                dropArea.addEventListener("dragleave", () => {
                    dropArea.style.background = "#fff";
                });
                dropArea.addEventListener("drop", (e) => {
                    e.preventDefault();
                    dropArea.style.background = "#fff";

                    const imageFile = e.dataTransfer.files[0];

                    if (imageFile.type.startsWith("image/")) {
                        const reader = new FileReader();

                        reader.readAsDataURL(imageFile);

                        reader.addEventListener("load", () => {
                            const image = new Image();
                            image.src = reader.result;

                            dropArea.innerHTML = "";
                            dropArea.appendChild(image);
                        });
                    } else {
                        alert("File yang dijatuhkan bukan gambar!");
                    }
                });

            const fileInput = document.getElementById('imej');
            const imageSection = document.getElementById('drop-area');
            const previewImage = document.getElementById('preview-image');

            fileInput.addEventListener('change', function() {
                if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.setAttribute('src', e.target.result);
                };
                reader.readAsDataURL(fileInput.files[0]);
                imageSection.style.display = 'block';
                }
            });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5788632/public_html/mpsonline.gravix.id/resources/views/imej-latar-belakang.blade.php ENDPATH**/ ?>
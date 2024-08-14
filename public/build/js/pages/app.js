/*
Template Name: Minia - Bootstrap 5 Admin & Dashboard Template
Author: Themesbrand
Version: 1.0.0
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Main Js File
*/


(function ($) {

    'use strict';

    var language = localStorage.getItem('language');
    // Default Language
    var default_lang = 'en';

    function setLanguage(lang) {
        if (document.getElementById("header-lang-img")) {
            if (lang == 'en') {
                document.getElementById("header-lang-img").src = "assets/images/flags/us.jpg";
            } else if (lang == 'sp') {
                document.getElementById("header-lang-img").src = "assets/images/flags/spain.jpg";
            } else if (lang == 'gr') {
                document.getElementById("header-lang-img").src = "assets/images/flags/germany.jpg";
            } else if (lang == 'it') {
                document.getElementById("header-lang-img").src = "assets/images/flags/italy.jpg";
            } else if (lang == 'ru') {
                document.getElementById("header-lang-img").src = "assets/images/flags/russia.jpg";
            }
            localStorage.setItem('language', lang);
            language = localStorage.getItem('language');
            getLanguage();
        }
    }

    // Multi language setting
    function getLanguage() {
        (language == null) ? setLanguage(default_lang): false;
        $.getJSON('assets/lang/' + language + '.json', function (lang) {
            $('html').attr('lang', language);
            $.each(lang, function (index, val) {
                (index === 'head') ? $(document).attr("title", val['title']): false;
                $("[data-key='" + index + "']").text(val);
            });
        });
    }

    function initMetisMenu() {
        //metis menu
        $("#side-menu").metisMenu();
    }

    function initCounterNumber() {
        var counter = document.querySelectorAll('.counter-value');
        var speed = 250; // The lower the slower
        counter.forEach(function (counter_value) {
            function updateCount() {
                var target = +counter_value.getAttribute('data-target');
                var count = +counter_value.innerText;
                var inc = target / speed;
                if (inc < 1) {
                    inc = 1;
                }
                // Check if target is reached
                if (count < target) {
                    // Add inc to count and output in counter_value
                    counter_value.innerText = (count + inc).toFixed(0);
                    // Call function every ms
                    setTimeout(updateCount, 1);
                } else {
                    counter_value.innerText = target;
                }
            };
            updateCount();
        });
    }

    function initLeftMenuCollapse() {
        $('#vertical-menu-btn-close').on('click', function (event) {
            event.preventDefault();
            $('body').toggleClass('sidebar-enable');
            if ($(window).width() >= 992) {
                $('body').toggleClass('vertical-collpsed');
                $('#vertical-menu-btn-open').toggleClass('d-md-none');
                $(this).toggleClass('opacity-0');
            } else {
                $('body').removeClass('vertical-collpsed');
            }
        });
        $('#vertical-menu-btn-open').on('click', function (event) {
            event.preventDefault();
            $('body').toggleClass('sidebar-enable');
            if ($(window).width() >= 992) {
                $('body').toggleClass('vertical-collpsed');
                $('#vertical-menu-btn-close').toggleClass('opacity-0');
                $('#vertical-menu-btn-open').toggleClass('d-md-none');
            } else {
                $('body').removeClass('vertical-collpsed');
            }
        });
    }

    function initActiveMenu() {
        // === following js will activate the menu in left side bar based on url ====
        $("#sidebar-menu a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("mm-active"); // add active to li of the current link
                $(this).parent().parent().addClass("mm-show");
                $(this).parent().parent().prev().addClass("mm-active"); // add active class to an anchor
                $(this).parent().parent().parent().addClass("mm-active");
                $(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link
                $(this).parent().parent().parent().parent().parent().addClass("mm-active");
            }
        });
    }

    function initMenuItemScroll() {
        // focus active menu in left sidebar
        $(document).ready(function () {
            if ($("#sidebar-menu").length > 0 && $("#sidebar-menu .mm-active .active").length > 0) {
                var activeMenu = $("#sidebar-menu .mm-active .active").offset().top;
                if (activeMenu > 300) {
                    activeMenu = activeMenu - 300;
                    $(".vertical-menu .simplebar-content-wrapper").animate({
                        scrollTop: activeMenu
                    }, "slow");
                }
            }
        });
    }

    function initHoriMenuActive() {
        $(".navbar-nav a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active");
                $(this).parent().parent().addClass("active");
                $(this).parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().parent().parent().addClass("active");
            }
        });
    }

    function initFullScreen() {
        $('[data-toggle="fullscreen"]').on("click", function (e) {
            e.preventDefault();
            $('body').toggleClass('fullscreen-enable');
            if (!document.fullscreenElement && /* alternative standard method */ !document.mozFullScreenElement && !document.webkitFullscreenElement) { // current working methods
                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }
        });
        document.addEventListener('fullscreenchange', exitHandler);
        document.addEventListener("webkitfullscreenchange", exitHandler);
        document.addEventListener("mozfullscreenchange", exitHandler);

        function exitHandler() {
            if (!document.webkitIsFullScreen && !document.mozFullScreen && !document.msFullscreenElement) {
                $('body').removeClass('fullscreen-enable');
            }
        }
    }

    function initDropdownMenu() {
        if (document.getElementById("topnav-menu-content")) {
            var elements = document.getElementById("topnav-menu-content").getElementsByTagName("a");
            for (var i = 0, len = elements.length; i < len; i++) {
                elements[i].onclick = function (elem) {
                    if (elem && elem.target && elem.target.getAttribute("href") === "#") {
                        elem.target.parentElement.classList.toggle("active");
                        if(elem.target.nextElementSibling)
                        elem.target.nextElementSibling.classList.toggle("show");
                    }
                }
            }
            window.addEventListener("resize", updateMenu);
        }
    }

    function updateMenu() {
        var elements = document.getElementById("topnav-menu-content").getElementsByTagName("a");
        for (var i = 0, len = elements.length; i < len; i++) {
            if (elements[i] && elements[i].parentElement && elements[i].parentElement.getAttribute("class") === "nav-item dropdown active") {
                elements[i].parentElement.classList.remove("active");
                if(elements[i].nextElementSibling)
                elements[i].nextElementSibling.classList.remove("show");
            }
        }
    }

    function initComponents() {
        // tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        // popover
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        });

        // toast
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl)
        })
    }

    function initPreloader() {
        $(window).on('load', function () {
            $('#status').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
        });
    }

    function initSettings() {
        if (window.sessionStorage) {
            var alreadyVisited = sessionStorage.getItem("is_visited");
            if (!alreadyVisited) {
                sessionStorage.setItem("is_visited", "layout-ltr");
            } else {
                $("#" + alreadyVisited).prop('checked', true);
                // changeDirection(alreadyVisited);
            }
        }
        $("#password-addon").on('click', function () {
            if ($(this).siblings('input').length > 0) {
                $(this).siblings('input').attr('type') == "password" ? $(this).siblings('input').attr('type', 'input') : $(this).siblings('input').attr('type', 'password');
            }
        })
        $(".password-addon").on('click', function () {
            if ($(this).siblings('input').length > 0) {
                $(this).siblings('input').attr('type') == "password" ? $(this).siblings('input').attr('type', 'input') : $(this).siblings('input').attr('type', 'password');
            }
        })
    }

    function initLanguage() {
        // Auto Loader
        if (language != null && language !== default_lang)
            setLanguage(language);
        $('.language').on('click', function (e) {
            setLanguage($(this).attr('data-lang'));
        });
    }

    function initCheckAll() {
        $('#checkAll').on('change', function () {
            $('.table-check .form-check-input').prop('checked', $(this).prop("checked"));
        });
        $('.table-check .form-check-input').change(function () {
            if ($('.table-check .form-check-input:checked').length == $('.table-check .form-check-input').length) {
                $('#checkAll').prop('checked', true);
            } else {
                $('#checkAll').prop('checked', false);
            }
        });
    }

    function updateRadio(radioId) {
        document.getElementById(radioId).checked = true;
    }

    function layoutSetting() {
        var body = document.getElementsByTagName("body")[0];
        // right side-bar toggle
        $('.right-bar-toggle').on('click', function (e) {
            $('body').toggleClass('right-bar-enabled');
        });

        $(document).ready(function () {
            // Cek apakah ada status terakhir yang disimpan di localStorage
            if (localStorage.getItem('layoutMode')) {
                // Jika ada, terapkan status terakhir pada elemen-elemen yang sesuai
                var layoutMode = localStorage.getItem('layoutMode');
                var sidebarColor = localStorage.getItem('sidebarColor');

                if (layoutMode === 'dark') {
                    $('#layout-mode-dark').prop('checked', true);
                    document.body.setAttribute('data-layout-mode', 'dark');
                    document.body.setAttribute('data-topbar', 'dark');
                    document.body.setAttribute('data-sidebar', 'dark');
                    updateRadio('layout-mode-dark');
                    updateRadio('sidebar-color-dark');
                    $('.navbar-brand-box').css({ 'background': '#343A40', 'color': 'white' });
                    $('.vertical-menu').css({ 'background': '#343A40', 'color': 'white' });
                    $('body').css('background', '#2a3042');
                    $('body').css('color', 'white');
                } else {
                    $('#layout-mode-light').prop('checked', true);
                    document.body.setAttribute('data-layout-mode', 'light');
                    document.body.setAttribute('data-topbar', 'light');
                    document.body.setAttribute('data-sidebar', 'light');
                    updateRadio('topbar-color-light');
                    updateRadio('sidebar-color-light');
                    $('.navbar-brand-box').css({ 'background': '#FBFAFF', 'color': 'black' });
                    $('.vertical-menu').css({ 'background': '#FBFAFF', 'color': 'black' });
                    $('body').css('background-color', 'white');
                    $('body').css('color', 'black');
                }

                if (sidebarColor === 'dark') {
                    $('#sidebar-color-dark').prop('checked', true);
                    $('.navbar-brand-box').css({ 'background': '#343A40', 'color': 'white' });
                    $('.vertical-menu').css({ 'background': '#343A40', 'color': 'white' });
                    document.body.setAttribute('data-sidebar', 'dark');
                } else if (sidebarColor === 'brand') {
                    $('#sidebar-color-brand').prop('checked', true);
                    $('.navbar-brand-box').css({ 'background': '#5156BE', 'color': 'white' });
                    $('.vertical-menu').css({ 'background': '#5156BE', 'color': 'white' });
                    updateRadio('sidebar-color-dark');
                } else {
                    $('#sidebar-color-light').prop('checked', true);
                    $('.vertical-menu').css({ 'background': '#FBFAFF', 'color': 'black' });
                    $('.navbar-brand-box').css({ 'background': '#FBFAFF', 'color': 'black' });
                    document.body.setAttribute('data-sidebar', 'light');
                }
            }

            // Simpan status saat mode atau warna dipilih
            $('#sidebar-color-light').on('click', function (e) {
                if ($('#layout-mode-dark').is(':checked')) {
                    // Jika layout mode sedang dalam keadaan dark, nonaktifkan tombol sidebar-color-light
                    return false;
                }

                document.body.setAttribute('data-sidebar', 'light');
                $('.vertical-menu').css({ 'background': '#FBFAFF' });
                $('.navbar-brand-box').css({ 'background': '#FBFAFF' });
                $('.navbar-brand-box > div > span > a ').css('color', 'black');
                (body.hasAttribute("data-layout") && body.getAttribute("data-layout") == "horizontal") ? '' : document.body.setAttribute('data-sidebar', 'light');
                updateRadio('topbar-color-light');
                updateRadio('sidebar-color-light');

                // $('body').css('background-color', 'white');
                $('body').css('color', 'black');

                // Checkbox/Radio logic
                var sidebarColorWhiteCheckbox = $('#sidebar-color-white');
                if ($('#layout-mode-dark').is(':checked')) {
                    sidebarColorWhiteCheckbox.prop('disabled', true);
                } else {
                    sidebarColorWhiteCheckbox.prop('disabled', false);
                }

                // Simpan status terbaru pada localStorage
                localStorage.setItem('layoutMode', 'light');
                localStorage.setItem('sidebarColor', 'light');
            });

            // Simpan status saat mode atau warna dipilih
            $('#sidebar-color-dark').on('click', function (e) {
                $('.navbar-brand-box').css({ 'background': '#343A40', 'color': 'white' });
                $('.vertical-menu').css({ 'background': '#343A40', 'color': 'white' });
                document.body.setAttribute('data-sidebar', 'dark');

                // Simpan status terbaru pada localStorage
                localStorage.setItem('sidebarColor', 'dark');
            });

            // Simpan status saat mode atau warna dipilih
            $('#sidebar-color-brand').on('click', function (e) {
                if ($('#layout-mode-light').is(':checked')) {
                    // Jika layout mode sedang dalam keadaan dark, nonaktifkan tombol sidebar-color-light
                    return false;
                }

                $('.navbar-brand-box').css({ 'background': '#5156BE', 'color': 'white' });
                $('.vertical-menu').css({ 'background': '#5156BE', 'color': 'white' });
                updateRadio('sidebar-color-dark');

                // Simpan status terbaru pada localStorage
                localStorage.setItem('sidebarColor', 'brand');
            });

            // Simpan status saat mode atau warna dipilih
            $('#layout-mode-light').on('click', function (e) {
                document.body.setAttribute('data-layout-mode', 'light');
                document.body.setAttribute('data-topbar', 'light');
                document.body.setAttribute('data-sidebar', 'light');
                $('.vertical-menu').css({ 'background': '#FBFAFF' });
                $('.navbar-brand-box').css({ 'background': '#FBFAFF' });
                $('.navbar-brand-box > div > span > a ').css('color', 'black');

                (body.hasAttribute("data-layout") && body.getAttribute("data-layout") == "horizontal") ? '' : document.body.setAttribute('data-sidebar', 'light');
                updateRadio('topbar-color-light');
                updateRadio('sidebar-color-light');

                $('body').css('background-color', 'white');
                $('body').css('color', 'black');

                // Simpan status terbaru pada localStorage
                localStorage.setItem('layoutMode', 'light');
                localStorage.setItem('sidebarColor', 'light');
            });

            // Simpan status saat mode atau warna dipilih
            $('#layout-mode-dark').on('click', function (e) {
                document.body.setAttribute('data-layout-mode', 'dark');
                document.body.setAttribute('data-topbar', 'dark');
                document.body.setAttribute('data-sidebar', 'dark');
                (body.hasAttribute("data-layout") && body.getAttribute("data-layout") == "horizontal") ? '' : document.body.setAttribute('data-sidebar', 'dark');
                updateRadio('layout-mode-dark');
                updateRadio('sidebar-color-dark');
                $('.navbar-brand-box').css({ 'background': '#343A40', 'color': 'white' });
                $('.vertical-menu').css({ 'background': '#343A40', 'color': 'white' });

                $('body').css('background', '#2a3042');
                $('body').css('color', 'white');

                // Simpan status terbaru pada localStorage
                localStorage.setItem('layoutMode', 'dark');
                localStorage.setItem('sidebarColor', 'dark');
            });

            // Saat tombol logout diklik, hapus status yang disimpan pada localStorage
            $('#logout').on('click', function (e) {
                localStorage.removeItem('layoutMode');
                localStorage.removeItem('sidebarColor');
            });
        });

        $(document).on('click', 'body', function (e) {
            if ($(e.target).closest('.right-bar-toggle, .right-bar').length > 0) {
                return;
            }
            $('body').removeClass('right-bar-enabled');
            return;
        });

        if(body.hasAttribute("data-layout") && body.getAttribute("data-layout") == "horizontal") {
            updateRadio('layout-horizontal');
            $(".sidebar-setting").hide();
        } else {
            updateRadio('layout-vertical');
        }

    }

    function init() {
        initMetisMenu();
        initCounterNumber();
        initLeftMenuCollapse();
        initActiveMenu();
        initMenuItemScroll();
        initHoriMenuActive();
        initFullScreen();
        initDropdownMenu();
        initComponents();
        initSettings();
        initLanguage();
        initPreloader();
        layoutSetting();
        Waves.init();
        initCheckAll();
    }

    init();

})(jQuery)


feather.replace()

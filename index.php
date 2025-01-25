<!DOCTYPE html>
<html lang="en">

<head>
    <!-- untuk memanggil file metadata.php -->
    <?php include 'partials/metadata.php'; ?>
    <title>PPDB SISWA</title>
    <!-- untuk memanggil file links.php -->
    <?php include 'partials/links.php'; ?>
</head>

<body class="bg-gray-200 area"
    data-aos="fade-in"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="600"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container py-[60px] px-[100px] m-auto">
        <header class="bg-gradient-to-tr from-gray-200 to-purple-700 rounded-ss-2xl rounded-se-2xl py-5 "
            style="background-image: url('assets/images/background-banner.jpg'); background-repeat: no-repeat; background-size: cover; background-position-y: 37%;padding-bottom: 140px"
            data-aos="zoom-in"
            data-aos-offset="200"
            data-aos-delay="50"
            data-aos-duration="600"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="true">
            <div class="text-center">
                <h1
                    class="text-white drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.6)] outline-4 font-bold text-3xl py-2 shadow-black">
                    Pendaftaran Siswa Baru
                </h1>
            </div>
        </header>
        <div class="drop-shadow-xl shadow-black mt-4 bg-white/60"
            data-aos="zoom-in"
            data-aos-offset="200"
            data-aos-delay="50"
            data-aos-duration="600"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="true">
            <div class="px-5 py-5">
                <!-- untuk memanggil file page-link.php -->
                <?php include 'function/page-link.php'; ?>
            </div>
        </div>
        <footer
            class="bg-gradient-to-r from-amber-200 to-yellow-500 py-4 rounded-b-2xl mt-4 drop-shadow-lg shadow-black">
            <div class="text-center">
                <h1 class="text-white font-bold text-3xl py-2 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.6)] outline-4">
                    Made With 💜 By Fransisco</h1>
                <div class="m-auto flex justify-center align-middle items-center py-1">
                    <div class="bg-white px-3 py-3 rounded-3xl flex justify-evenly gap-3 flex-wrap">
                        <a href="https://github.com/FransisGIT" target="_blank">
                            <img src="assets/images/github.png" alt="Github" class="w-9 h-9">
                        </a>
                        <a href="https://www.instagram.com/fransisco.in" target="_blank">
                            <img src="assets/images/instagram.png" alt="Instagram" class="w-9 h-9">
                        </a>
                        <a href="https://www.linkedin.com/in/fransisco-reyhan-fifaldi-19977b276" target="_blank">
                            <img src="assets/images/linkedin.png" alt="LinkedIn" class="w-9 h-9">
                        </a>
                        <a href="https://www.youtube.com/@Fransiss" target="_blank">
                            <img src="assets/images/youtube.png" alt="Youtube" class="w-9 h-9">
                        </a>
                    </div>
                </div>
                <h1 class="text-white font-bold text-md py-2 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.6)] outline-4">
                    &copy;CopyRight Fransisco 2024 🦊</h1>
            </div>
        </footer>
    </div>
</body>
<!-- untuk memanggil file script.php -->
<?php include 'partials/script.php'; ?>
<script>
    AOS.init({
        // Global settings:
        disable: false,
        startEvent: 'DOMContentLoaded',
        initClassName: 'aos-init',
        animatedClassName: 'aos-animate',
        useClassNames: false,
        disableMutationObserver: false,
        debounceDelay: 50,
        throttleDelay: 99,
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120,
        delay: 0,
        duration: 400,
    });
    AOS.refresh();
</script>

</html>

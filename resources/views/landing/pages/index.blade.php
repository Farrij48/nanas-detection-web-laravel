@extends('landing.layout.main')

@section('content')
<main>

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-person custom-icon me-2"></i>
                        <strong class="text-dark">Welcome to E-Smart Detection</strong>
                    </p>
                </div>

            </div>
        </div>
    </header>


    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                E-Smart Detection
            </a>

            {{-- <a href="ticket.html" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a> --}}

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">Home</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Flow</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Check</a>
                    </li>
                </ul>

                {{-- <a href="ticket.html" class="btn custom-btn d-lg-block d-none">Buy Ticket</a> --}}
            </div>
        </div>
    </nav>


    <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">

                <div class="col-12 mt-auto mb-5 text-center">
                    <small>We Are Presents</small>

                    <h1 class="text-white mb-5">E-Smart Detection</h1>

                    {{-- <button class="btn custom-btn" data-toggle="modal" data-target="#modalpanduan"><span>Video Panduan</span>
                    </button> --}}
                </div>

                <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                    {{-- <div class="date-wrap">
                        <h5 class="text-white">
                            <i class="custom-icon bi-clock me-2"></i>
                            11 Agustus 2023
                        </h5>
                    </div> --}}

                    {{-- <div class="location-wrap mx-auto py-3 py-lg-0">
                        <h5 class="text-white">
                            <i class="custom-icon bi-geo-alt me-2"></i>
                            Auditorium Poltekkes Kemenkes Surabaya
                        </h5>
                    </div> --}}

                    {{-- <div class="social-share">
                        <ul class="social-icon d-flex align-items-center justify-content-center">
                            <span class="text-white me-3">Share:</span>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="video-wrap">
            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                <source src="{{ asset('landing/videos/e-smart.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
                </source>
            </video>
        </div>
    </section>




    <section class="artists-section section-padding" id="section_2">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 text-center">
                    <h2 class="mb-4">About
                    </h2>
                </div>



                <!--<div class="col-lg-5 col-12">-->
                <div class="artists-thumb">

                    <!--<div class="artists-image-wrap">-->
                    <img src="{{ asset('landing/images/e-smart.jpg') }}" class="artists-image">
                    <!--</div>-->

                    <div class="artists-hover">
                        <p>
                            E-Smart Detection merupakan sistem cerdas yang dikembangkan menggunakan beberapa bahasa pemograman untuk mendeteksi tingkat kematangan buah Nanas.
                        </p>

                    </div>
                </div>
                <!--</div>-->

                <!--<div class="col-lg-5 col-12">-->
                <!--    <div class="artists-thumb">-->
                <!--        <div class="artists-image-wrap">-->
                <!--            <img src="{{ asset('landing/images/artists-abstral-official-bdlMO9z5yco-unsplash.jpg') }}" class="artists-image img-fluid">-->
                <!--        </div>-->

                <!--        <div class="artists-hover">-->
                <!--            <p>-->
                <!--                <strong>Name:</strong>-->
                <!--                Rihana-->
                <!--            </p>-->

                <!--            <p>-->
                <!--                <strong>Birthdate:</strong>-->
                <!--                Feb 20, 1988-->
                <!--            </p>-->

                <!--            <p>-->
                <!--                <strong>Music:</strong>-->
                <!--                Country-->
                <!--            </p>-->

                <!--            <hr>-->

                <!--            <p class="mb-0">-->
                <!--                <strong>Youtube Channel:</strong>-->
                <!--                <a href="#">Rihana Official</a>-->
                <!--            </p>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--    <div class="artists-thumb">-->
                <!--        <img src="{{ asset('landing/images/artists-soundtrap-rAT6FJ6wltE-unsplash.jpg') }}" class="artists-image img-fluid">-->

                <!--        <div class="artists-hover">-->
                <!--            <p>-->
                <!--                <strong>Name:</strong>-->
                <!--                Bruno Bros-->
                <!--            </p>-->

                <!--            <p>-->
                <!--                <strong>Birthdate:</strong>-->
                <!--                October 8, 1985-->
                <!--            </p>-->

                <!--            <p>-->
                <!--                <strong>Music:</strong>-->
                <!--                Pop-->
                <!--            </p>-->

                <!--            <hr>-->

                <!--            <p class="mb-0">-->
                <!--                <strong>Youtube Channel:</strong>-->
                <!--                <a href="#">Bruno Official</a>-->
                <!--            </p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->


            </div>
        </div>
    </section>

    {{-- <section class="schedule-section section-padding" id="section_3">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">Steps By Step E-Smart Detection

                        <div class="table-responsive mt-4">
                            <table class="schedule-table table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Step</th>
                                        <th scope="col">Job</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <h3>1</h3>
                                        </th>

                                        <td>
                                            <h3>Persiapan Foto</h3>

                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            <h3>2</h3>

                                        </th>

                                        <td>
                                            <h3>Pastikan Foto Telah Sesuai</h3>

                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            <h3>3</h3>

                                        </th>

                                        <td>
                                            <h3>Upload/Scanner Foto Yang Sudah Anda Siapkan</h3>

                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            <h3>4</h3>

                                        </th>

                                        <td>
                                            <h3>Pilih Check Untuk Melakukan Pemprosesan Foto</h3>

                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            <h3>5</h3>

                                        </th>

                                        <td>
                                            <h3>Tunggu Beberapa Saat Hingga Hasil Output Keluar</h3>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </h2>
                </div>
            </div>
        </div>

    </section> --}}
    <section class="schedule-section section-padding" id="section_3">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">Steps By Step E-Smart Detection
                        <div class="table-responsive mt-4">
                            <table class="schedule-table table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Step</th>
                                        <th scope="col">Job</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <h3>1</h3>
                                        </th>
                                        <td>
                                            <h3>Pastikan foto telah disediakan</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <h3>2</h3>
                                        </th>
                                        <td>
                                            <h3>Pilih Button Upload untuk Memilih Gambar
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <h3>3</h3>
                                        </th>
                                        <td>
                                            <h3>Pilih Foto yang Sesuai</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <h3>4</h3>
                                        </th>
                                        <td>
                                            <h3>Proses Check Kematangan Buah Nanas</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <h3>5</h3>
                                        </th>
                                        <td>
                                            <h3>Hasil Pemeriksaan Kematangan Buah Nanas</h3>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </h2>
                </div>
            </div>
        </div>
              
    </section>


    {{--
    <section class="schedule-section section-padding" id="section_3">
        <div class="container">
            <div class="row">


            </div>
        </div>
    </section> --}}




    <section class="contact-section section-padding" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4">Choose Your Types</h2>
                    <nav class="d-flex justify-content-center">
                        <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactForm" type="button" role="tab" aria-controls="nav-ContactForm" aria-selected="false" tabindex="-1">
                                <h5>Image</h5>
                            </button>
                            <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactMap" type="button" role="tab" aria-controls="nav-ContactMap" aria-selected="true">
                                <h5>Camera</h5>
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel" aria-labelledby="nav-ContactMap-tab">
                            {{-- <div class="text-center alignment-center">
                                <button class="btn custom-btn mb-3" id="toggleButton">Toggle Live Detection</button>
                                <div class="alignment-center text-center">
                                    <video id="video" class="img-fluid" autoplay></video>
                                    <canvas id="canvas" class="img-fluid" style="display: none;"></canvas>
                                    <div class="result mt-3" id="result"></div>
                                </div>
                            </div> --}}

                            <div class="text-center alignment-center">
                                <button class="btn custom-btn mb-3" id="toggleButton">Toggle Live Detection</button>
                                <select class="form-select mb-3" id="cameraSelect"></select>
                                <div class="alignment-center text-center">
                                    <video id="video" class="img-fluid" autoplay></video>
                                    <canvas id="canvas" class="img-fluid" style="display: none;"></canvas>
                                    <div class="result mt-3" id="result"></div>
                                </div>
                            </div>

                            {{-- <div class="text-center alignment-center">
                                <button class="btn custom-btn mb-3" id="toggleButton">Toggle Live Detection</button>
                                <select id="cameraSelect"></select>
                                <div class="alignment-center text-center">
                                    <video id="video" class="img-fluid" autoplay></video>
                                    <canvas id="canvas" class="img-fluid" style="display: none;"></canvas>
                                    <div class="result mt-3" id="result"></div>
                                </div>
                            </div> --}}

                        </div>
                        <div class="tab-pane fade active show" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">

                            <div class="pricing-thumb">
                                <form id="predictForm" enctype="multipart/form-data">
                                    <div class="text-center">
                                        <div>
                                            <h3>Fruit Detection</h3>
                                        </div>
                                    </div>
                                    <ul class="mt-4">
                                        <li class="pricing-list-item">Melakukan prosesing image buah yang diupload,
                                            kemudian melakukan klasifikasi apakah buah tersebut matang atau tidak
                                            matang</li>
                                    </ul>
                                    <div class="text-center">

                                        @csrf
                                        <label class="btn custom-btn" onclick="document.getElementById('fileInput').click();">
                                            <span>Upload</span>
                                        </label>
                                        <input type="file" id="fileInput" name="image" style="display:none" />

                                    </div>
                                    @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>


                                        <?php

                                                $nomer = 1;

                                                ?>

                                        @foreach($errors->all() as $error)
                                        <li>{{ $nomer++ }}. {{ $error }}</li>
                                        @endforeach
                                    </div>
                                    @endif
                                </form>

                                <div class="text-center">
                                    <div id="result2"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
    </section>

    {{-- Modal --}}

    <div class="modal fade bd-example-modal-lg" id="modalpanduan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title custom-btn" id="exampleModalLabel">Video Panduan
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="video-container">
                            <iframe style="" src="https://www.youtube.com/embed/ESzG_kmzpYg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Modal --}}

    <div class="modal fade bd-example-modal-lg" id="modalorder" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title custom-btn" id="exampleModalLabel">Check Detection
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- <form id="predictForm" class="custom-form ticket-form" enctype="multipart/form-data">
                            @csrf
                            <div class="ticket-form-body">
                                <h6>Upload Image</h6>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input type="file" name="image" id="image" class="form-control" placeholder="Upload Image" required>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="text-center">
                                        <button id="predictButton" class="custom-btn">Check</button>
                                    </div>
                                </div>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

@section('script')
<script>
    const videoElement = document.getElementById('video');
    const canvasElement = document.getElementById('canvas');
    const resultElement = document.getElementById('result');
    const toggleButton = document.getElementById('toggleButton');
    const cameraSelect = document.getElementById('cameraSelect');
    let mediaStream = null;
    let isLiveDetectionActive = false;

    resultElement.style.display = 'none';

    async function getCameraDevices() {
        const devices = await navigator.mediaDevices.enumerateDevices();
        return devices.filter(device => device.kind === 'videoinput');
    }

    async function setupCamera(cameraId) {
        const constraints = {
            video: {
                deviceId: cameraId
                , facingMode: 'environment'
            }
        };
        mediaStream = await navigator.mediaDevices.getUserMedia(constraints);
        videoElement.srcObject = mediaStream;
    }

    async function toggleLiveDetection() {
        try {
            if (isLiveDetectionActive) {
                if (mediaStream) {
                    mediaStream.getTracks().forEach(track => track.stop());
                }
                videoElement.srcObject = null;
                resultElement.style.display = 'none';
            } else {
                const cameras = await getCameraDevices();
                if (cameras.length > 0) {
                    await setupCamera(cameras[0].deviceId);
                    videoElement.srcObject = mediaStream;
                    resultElement.style.display = 'block';
                } else {
                    console.error('No cameras available.');
                }
            }
            isLiveDetectionActive = !isLiveDetectionActive;
        } catch (error) {
            console.error('Error accessing the camera: ', error);
        }
    }

    toggleButton.addEventListener('click', toggleLiveDetection);

    cameraSelect.addEventListener('change', async (event) => {
        if (mediaStream) {
            mediaStream.getTracks().forEach(track => track.stop());
        }
        await setupCamera(event.target.value);
        videoElement.srcObject = mediaStream;
    });

    async function populateCameraList() {
        const cameras = await getCameraDevices();
        cameras.forEach(camera => {
            const option = document.createElement('option');
            option.value = camera.deviceId;
            option.text = camera.label || `Camera ${camera.deviceId}`;
            cameraSelect.appendChild(option);
        });
    }

    populateCameraList().catch(console.error);

    function captureAndSendFrame() {
        const canvasContext = canvasElement.getContext('2d');
        canvasContext.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);
        const imageData = canvasContext.getImageData(0, 0, canvasElement.width, canvasElement.height);
        const data = new FormData();
        data.append('image', dataURItoBlob(canvasElement.toDataURL()));

        fetch('http://127.0.0.1:5000/predict', {
                method: 'POST'
                , body: data
            })
            .then(response => response.json())
            .then(data => {
                if (data.prediction == 'nanas_matang') {
                    resultElement.innerHTML = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Hasil Deteksi : </strong> Buah Nanas Matang</div>';
                } else if (data.prediction == 'nanas_mentah') {
                    resultElement.innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Hasil Deteksi : </strong> Buah Nanas Mentah</div>';
                } else if (data.prediction == 'bukan_nanas') {
                    resultElement.innerHTML = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Hasil Deteksi : </strong> Bukan Buah Nanas</div>';
                } else {
                    resultElement.innerHTML = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Hasil Deteksi : </strong> Tidak Ada Object Terdeteksi </div>';
                }
            })
            .catch(error => {
                console.error('Error sending frame to API: ', error);
            });
    }

    function dataURItoBlob(dataURI) {
        const byteString = atob(dataURI.split(',')[1]);
        const mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
        const ab = new ArrayBuffer(byteString.length);
        const ia = new Uint8Array(ab);
        for (let i = 0; i < byteString.length; i++) {
            ia[i] = byteString.charCodeAt(i);
        }
        return new Blob([ab], {
            type: mimeString
        });
    }

    setInterval(captureAndSendFrame, 1000);
    // const videoElement = document.getElementById('video');
    // const canvasElement = document.getElementById('canvas');
    // const canvasContext = canvasElement.getContext('2d');
    // const resultElement = document.getElementById('result');
    // const toggleButton = document.getElementById('toggleButton');

    // let isLiveDetectionActive = false;
    // let mediaStream = null; // Menyimpan objek mediaStream untuk digunakan saat perlu berhenti
    // resultElement.style.display = 'none';

    // async function toggleLiveDetection() {
    //     try {
    //         if (isLiveDetectionActive) {
    //             if (mediaStream) {
    //                 mediaStream.getTracks().forEach(track => track.stop()); // Menghentikan semua track video
    //             }
    //             videoElement.srcObject = null; // Menghentikan tampilan video

    //             // menyembunyikan canvas dan result
    //             resultElement.style.display = 'none';


    //         } else {
    //             mediaStream = await navigator.mediaDevices.getUserMedia({
    //                 video: true
    //             });
    //             videoElement.srcObject = mediaStream;

    //             // menampilkan canvas dan result
    //             resultElement.style.display = 'block';

    //         }
    //         isLiveDetectionActive = !isLiveDetectionActive;
    //     } catch (error) {
    //         console.error('Error accessing the camera: ', error);
    //     }
    // }

    // toggleButton.addEventListener('click', toggleLiveDetection);


    // function captureAndSendFrame() {
    //     canvasContext.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);
    //     const imageData = canvasContext.getImageData(0, 0, canvasElement.width, canvasElement.height);
    //     const data = new FormData();
    //     data.append('image', dataURItoBlob(canvasElement.toDataURL()));

    //     fetch('http://localhost:5000/predict', {
    //             method: 'POST'
    //             , body: data
    //         })
    //         .then(response => response.json())
    //         .then(data => {

    //             if (data.prediction == 'nanas_matang') {
    //                 resultElement.innerHTML = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Hasil Deteksi : </strong> Buah Nanas Matang</div>';
    //             } else if (data.prediction == 'nanas_mentah') {
    //                 resultElement.innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Hasil Deteksi : </strong> Buah Nanas Mentah</div>';
    //             } else if (data.prediction == 'bukan_nanas') {
    //                 resultElement.innerHTML = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Hasil Deteksi : </strong> Bukan Buah Nanas</div>';
    //             } else {
    //                 resultElement.innerHTML = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Hasil Deteksi : </strong> Tidak Ada Object Terdeteksi </div>';
    //             }

    //         })
    //         .catch(error => {
    //             console.error('Error sending frame to API: ', error);
    //         });
    // }

    // function dataURItoBlob(dataURI) {
    //     const byteString = atob(dataURI.split(',')[1]);
    //     const mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
    //     const ab = new ArrayBuffer(byteString.length);
    //     const ia = new Uint8Array(ab);
    //     for (let i = 0; i < byteString.length; i++) {
    //         ia[i] = byteString.charCodeAt(i);
    //     }
    //     return new Blob([ab], {
    //         type: mimeString
    //     });
    // }

    // setInterval(captureAndSendFrame, 1000);

</script>

<script>
    $(document).ready(function() {
        $('#fileInput').on('change', function() {
            var formData = new FormData($('#predictForm')[0]);

            $.ajax({
                type: 'POST'
                , url: '/'
                , data: formData
                , contentType: false
                , processData: false
                , success: function(response) {
                    var hasil = response.hasil;
                    var gambar = response.gambar;
                    var resultDiv = $('#result2');

                    // Clear previous results
                    resultDiv.empty();

                    if (hasil === 'nanas_matang') {
                        resultDiv.append(`
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <img height="200px" width="200px" src="{{ asset('images/buah/') }}/${gambar}" alt="">
                                <br><br>
                                <li>Gambar Yang Anda Upload Merupakan Buah Nanas Matang</li>
                            </div>
                        `);
                    } else if (hasil === 'nanas_mentah') {
                        resultDiv.append(`
                            <div class="alert alert-warning alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <img height="200px" width="200px" src="{{ asset('images/buah/') }}/${gambar}" alt="">
                                <br><br>
                                <li>Gambar Yang Anda Upload Merupakan Buah Nanas Mentah</li>
                            </div>
                        `);
                    } else {
                        resultDiv.append(`
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <img height="200px" width="200px" src="{{ asset('images/buah/') }}/${gambar}" alt="">
                                <br><br>
                                <li>Gambar Yang Anda Upload Bukan Buah Nanas</li>
                            </div>
                        `);
                    }

                    $('#predictForm').hide();

                    $('.alert .close').on('click', function() {
                        $('#predictForm').show();
                    });

                }
                , error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });

</script>


@endsection

@section('sweetalert')
@if($hasil != null)
<script>
    window.location.href = "/#section_4";
    Swal.fire({
        icon: 'success'
        , title: 'Done!'
        , text: 'Gambar Buah Berhasil Diproces!'
    , });

</script>
@endif
@endsection

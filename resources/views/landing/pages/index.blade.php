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
                                <h5>Upload Image</h5>
                            </button>

                            <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactMap" type="button" role="tab" aria-controls="nav-ContactMap" aria-selected="true">
                                <h5>Camera Scanner</h5>
                            </button>
                        </div>
                    </nav>

                    <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">

                            <div class="pricing-thumb">
                                <div class="text-center">
                                    <div>
                                        <h3>Fruit Detection</h3>
                                        {{-- <p>Including good things:</p> --}}
                                    </div>
                                </div>
                                <ul class="mt-4">
                                    <li class="pricing-list-item">Melakukan prosesing image buah yang diupload, kemudian melakukan klasifikasi apakah buah tersebut matang atau tidak matang</li>
                                </ul>

                                <div class="text-center">
                                    <button class="btn custom-btn" data-toggle="modal" data-target="#modalorder"><span>Upload Image</span>
                                    </button>
                                </div>


                            </div>

                            <br>
                            <br>

                            <div class="text-center alignment-center">
                                @if($hasil == 'nanas_matang')
                                <div class="alert alert-success alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <img height="150px" width="150px" src="{{ asset('images/buah/' . $gambar) }}" alt="">
                                    <br><br>
                                    <li>Buah Nanas Matang</li>
                                </div>

                                @elseif ($hasil == 'nanas_mentah')
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <img height="150px" width="150px" src="{{ asset('images/buah/' . $gambar) }}" alt="">
                                    <br><br>
                                    <li>Buah Nanas Mentah</li>
                                </div>

                                @elseif($hasil == 'tidak_diketahui')
                                <div class="alert alert-warning alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <img height="150px" width="150px" src="{{ asset('images/buah/' . $gambar) }}" alt="">
                                    <br><br>
                                    <li>Gambar Yang Anda Upload Tidak Dikenali Oleh System Kita</li>
                                </div>
                                @else

                                @endif
                            </div>



                        </div>

                        <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel" aria-labelledby="nav-ContactMap-tab">
                            <div class="text-center alignment-center">
                                <button class="btn custom-btn mb-3" id="toggleButton">Toggle Live Detection</button>
                                {{-- <div id="reader" width="600px"></div> --}}

                                <div class="alignment-center text-center">
                                    {{-- <iframe id="live-detection-frame" src="" frameborder="0" width="100%" height="500"></iframe> --}}
                                    <video id="video" width="640" height="480" autoplay></video>
                                    <canvas id="canvas" width="640" height="480" style="display: none;"></canvas>
                                    <div class="result" id="result"></div>
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
                        <form class="custom-form ticket-form" action="/" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="ticket-form-body">
                                {{-- <h6>Fill The Form</h6> --}}
                                {{-- <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="name" value="{{ Session::get('dname') }}" id="ticket-form-name" class="form-control" placeholder="Full name" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="email" name="email" value="{{ Session::get('demail') }}" id="ticket-form-email" class="form-control" placeholder="Email address" required>
                            </div>
                    </div> --}}

                    <h6>Upload Image</h6>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <input type="file" name="image" id="ticket-form-image" class="form-control" placeholder="Upload Image" required>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                            <button type="submit" class="form-control">Check</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

</main>
@endsection

@section('script')

<script>
    // const frame = document.getElementById('live-detection-frame');
    // const toggleButton = document.getElementById('toggle-button');
    // let isLiveDetectionActive = false;

    // function toggleLiveDetection() {
    //     if (isLiveDetectionActive) {
    //         frame.src = ''; // Mematikan live detection
    //     } else {
    //         frame.src = 'http://localhost:5000/live_detection'; // Mengaktifkan live detection
    //     }
    //     isLiveDetectionActive = !isLiveDetectionActive;
    // }

    // toggleButton.addEventListener('click', toggleLiveDetection);

</script>
<script>
    const videoElement = document.getElementById('video');
    const canvasElement = document.getElementById('canvas');
    const canvasContext = canvasElement.getContext('2d');
    const resultElement = document.getElementById('result');

    navigator.mediaDevices.getUserMedia({
            video: true
        })
        .then(function(stream) {
            videoElement.srcObject = stream;
        })
        .catch(function(error) {
            console.error('Error accessing the camera: ', error);
        });

    function captureAndSendFrame() {
        canvasContext.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);
        const imageData = canvasContext.getImageData(0, 0, canvasElement.width, canvasElement.height);
        const data = new FormData();
        data.append('image', dataURItoBlob(canvasElement.toDataURL()));

        fetch('http://localhost:5000/detect_and_predict', {
                method: 'POST'
                , body: data
            })
            .then(response => response.json())
            .then(data => {
                // Menampilkan hasil deteksi objek pada halaman web
                const detectedObjects = data.prediction;
                if (detectedObjects) {
                    let resultText = data.prediction;
                    resultElement.innerText = resultText; // Menghapus koma terakhir
                } else {
                    resultElement.innerText = 'Tidak ada objek terdeteksi.';
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

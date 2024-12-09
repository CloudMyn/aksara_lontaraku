<!doctype html>
<html lang="en">

<head>
    <title>Halaman Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/front-end/login-form-11/css/style.css">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .wave-container {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            background-color: #fcfab4;
            /* Background color */
        }

        .wave {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #fbf96b, #e2db17);
            border-radius: 50%;
            transform: scale(0.98) rotate(70deg);
        }

        .wave:nth-child(1) {
            top: -50%;
            left: -20%;
            background: #e2db17;
            z-index: 1;
        }

        .wave:nth-child(2) {
            top: -40%;
            left: -10%;
            background: #c9c62c;
            z-index: 2;
        }

        .wave:nth-child(3) {
            top: -20%;
            left: 0;
            background: #dcda42;
            z-index: 3;
        }

        .wave:nth-child(4) {
            top: 0;
            left: 10%;
            background: #eae750;
            z-index: 4;
        }

        .wave:nth-child(5) {
            top: 29%;
            left: 5%;
            background: #fbf96b;
            z-index: 5;
        }

        .checkbox-primary input:checked~.checkmark:after {
            color: #dcda42;
        }

        .btn.btn-primary {
            background: #eae750 !important;
            border: 1px solid #dcda42 !important;
            color: #b3b013 !important;
            font-weight: 600 !important;
        }

        .box-side {
            position: absolute;
            top: 0;
            left: 0;
            width: 30%;
            height: 100vh;
            background: #fbf96b;
            z-index: 0;
        }

        .ftco-section {
            z-index: 10;
        }
    </style>

    @livewireStyles
    @livewireScripts

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>



</head>

<body style="background-color: #fffef7;">

    <section class="ftco-section">

        {{ $slot }}

    </section>


    <div class="box-side">
    </div>


    <script src="/front-end/login-form-11/js/jquery.min.js"></script>
    <script src="/front-end/login-form-11/js/popper.js"></script>
    <script src="/front-end/login-form-11/js/bootstrap.min.js"></script>
    <script src="/front-end/login-form-11/js/main.js"></script>

</body>

</html>

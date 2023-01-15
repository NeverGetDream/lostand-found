<body>
    <style>
        .ups-text {
            text-align: center;
            font-size: 30pt;
        }

        .ups-text span {
            color: #F9A826;
        }

        .image-back {
            border-radius: 50%;
            width: 30px;
        }

        .back-text {
            font-size: 18pt;
            color: #F9A826;
            text-decoration: none;
        }
    </style>
    <div class="container">
        <div style="padding-top: 200px; padding-bottom: 20px;" class="container">
            <h1 class="ups-text"><span>Upsss...., </span>data tidak ada!</h1>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <a href="<?= base_url($back) ?>" class="mx-auto d-block back-text">
                <h2 class="back-text">
                    <img src="<?= base_url('assets/img/') ?>back.png" alt="" class="image-back">
                    Kembali
                </h2>
            </a>
        </div>
    </div>
</body>
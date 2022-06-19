<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<body>
    <div class="container">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


        <!-- CIPHER NAME -->

        <script>
        var information = document.getElementById("myinformation");
        var instructions = document.getElementById("myinstructions");

        var informtion_button = document.getElementById("information");
        var instructions_button = document.getElementById("instructions");



        var span = document.getElementsByClassName("close1")[0];
        var span1 = document.getElementsByClassName("close2")[0];



        informtion_button.onclick = function() {
            if (information.style.display === "block") {
                information.style.display = "none";
            } else {
                information.style.display = "block";
            }
        }

        instructions_button.onclick = function() {
            if (instructions.style.display === "block") {
                instructions.style.display = "none";
            } else {
                instructions.style.display = "block";
            }

        }

        span.onclick = function() {
            information.style.display = "none";
        }
        span1.onclick = function() {
            instructions.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == information) {
                information.style.display = "none";
            }
        }
        window.onclick = function(event) {
            if (event.target == instructions) {
                instructions.style.display = "none";
            }
        }
        </script>

        <div class="tab-pane active" id="encode">

            <div>
                <form class="form">
                    <div class="form-group">
                        <input class="form-control" type="file" id="validasi_encode" name="baseFile"
                            onchange="previewEncodeImage()">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control message" rows="3" placeholder="Masukkan pesan anda di sini"
                            id="pesan"></textarea>
                    </div>


                    <div class="form-group">
                        <button class="encode btn btn-default pull-right" onclick="encodeMessage()">Encode</button>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>

            <div class="error" style="display: none;"></div>
            <div class="binary" style="display: none;">
                <h3>Binary representation of your message</h3>
                <textarea class="form-control message" style="word-wrap:break-word;"></textarea>
                <form class="form">
                    <div class="form-group">
                        <button class="btn btn-default pull-left" onclick="Download()">Download</button>
                    </div>
                </form>
                <br>
            </div>
            <div class="images" style="display: none;">
                <div class="original" style="display: none;">
                    <h3>Original</h3>
                    <canvas></canvas>
                </div>
                <div class="nulled" style="display: none;">
                    <h3>Normalized</h3>
                    <canvas></canvas>
                </div>
                <div class="message" style="display: none;">
                    <h3>Message hidden in image (right click <span class="glyphicon glyphicon-arrow-right"></span>
                        save as)</h3>
                    <canvas id="download"></canvas>
                </div>
            </div>
        </div>
        <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="button">
                <a href="<?= base_url('user/encript'); ?>">Kembali</a></button>
        </div> -->
    </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <style>
    canvas {
        max-width: 100%;
    }
    </style>

    <script>
    AOS.init({
        duration: 1200,
    })
    </script>
    <script type="text/JavaScript" src="<?php echo base_url('assets/script.js') ?>"></script>
</body>
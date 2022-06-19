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

        <div class="tab-pane" id="decode">
            <div>
                <?php echo form_open('user/decipher')?>
                <!-- <form class="form"> -->
                <div class="form-group">
                    <input class="form-control" type="file" id="validasi" name="decodeFile"
                        onchange="previewDecodeImage()" required>
                </div>
                <div class="form-group">
                    <button class="decode btn btn-default pull-right" onclick="decodeMessage()"
                        type='button'>Decode</button>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="binary-decode" style="display: none;">
                <h3>Hidden message</h3>
                <textarea class="form-control message" id="salin" style="word-wrap:break-word;">
          </textarea>
                <br>
                <button type="button" onclick="cop()">Copy text</button>
            </div>
            <div class="decode" style="display: none;">
                <h3>Input</h3>
                <canvas></canvas>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2 tombol" type="submit" disabled> Dekripsi Pesan Anda</button>
            <!-- <a href="<?= base_url('user/decipher'); ?>">
                    </a> -->
        </div>
        <?php echo form_close()?>

    </div>

    </div>


    <style>
    canvas {
        max-width: 100%;
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
    AOS.init({
        duration: 1200,
    })
    </script>
    <script type="text/JavaScript" src="<?php echo base_url('assets/script.js') ?>"></script>
</body>
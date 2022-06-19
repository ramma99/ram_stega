<html>

<head>
    <title>Stegano</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h1>Steganography Ramma Polije</h1>
            <div>
                <button type="button" class="btn btn-danger">Logout</button>
            </div>
        </div>

        <ul class="nav nav-tabs" id="tabs" data-tabs="tabs">
            <li role="presentation" class="active"> <a href="#encode" data-toggle="tab">Encode</a></li>
            <li role="presentation"> <a href="#decode" data-toggle="tab">Decode</a></li>
        </ul>

        <body>

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

            <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active" id="encode">
                    <textarea name="input" rows="8" cols="160" id="inputMessage" placeholder="Input"></textarea>
                    <span>
                        <br><br>
                        <textarea name="result" rows="8" cols="160" id="result" placeholder="Output"></textarea>
                        <br>
                        <div class="inOut">
                            <input type="text" id="enteredKey" placeholder=" Enter Key">
                        </div>
                        <br>
                        <button class="polyButton cipherMethod" id="cipherButtonPoly"
                            onclick="cipherButtonFunction()">Cipher</button>
                        <button class="polyButton decipherMethod" id="decipherButton"
                            onclick="decipherButtonFunction()">Decipher</button>
                    </span>
                    <div>
                        </p>
                        <form class="form">
                            <div class="form-group">
                                <input class="form-control" type="file" name="baseFile" onchange="previewEncodeImage()">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control message" rows="3"
                                    placeholder="Masukkan pesan anda di sini"></textarea>
                            </div>


                            <div class="form-group">
                                <button class="encode btn btn-default pull-right"
                                    onclick="encodeMessage()">Encode</button>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>

                    <div class="error" style="display: none;"></div>
                    <div class="binary" style="display: none;">
                        <h3>Binary representation of your message</h3>
                        <textarea class="form-control message" style="word-wrap:break-word;">
          </textarea>
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
                            <h3>Message hidden in image (right click <span
                                    class="glyphicon glyphicon-arrow-right"></span>
                                save as)</h3>
                            <canvas></canvas>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="decode">
                    <div>
                        <form class="form">
                            <div class="form-group">
                                <input class="form-control" type="file" name="decodeFile"
                                    onchange="previewDecodeImage()">
                            </div>
                            <div class="form-group">
                                <button class="decode btn btn-default pull-right"
                                    onclick="decodeMessage()">Decode</button>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                    <div class="binary-decode" style="display: none;">
                        <h3>Hidden message</h3>
                        <textarea class="form-control message" style="word-wrap:break-word;">
          </textarea>
                    </div>
                    <div class="decode" style="display: none;">
                        <h3>Input</h3>
                        <canvas></canvas>
                    </div> <textarea name="input" rows="8" cols="160" id="inputMessage" placeholder="Input"></textarea>
                    <span>
                        <br><br>
                        <textarea name="result" rows="8" cols="160" id="result" placeholder="Output"></textarea>
                        <br>
                        <div class="inOut">
                            <input type="text" id="enteredKey" placeholder=" Enter Key">
                        </div>
                        <br>
                        <button class="polyButton cipherMethod" id="cipherButtonPoly"
                            onclick="cipherButtonFunction2()">Cipher</button>
                        <button class="polyButton decipherMethod" id="decipherButton"
                            onclick="decipherButtonFunction2()">Decipher</button>
                    </span>
                </div>

            </div>

            <footer style="text-align: center; margin-top: 20px; margin-bottom: 10px;">
                Skripsi 2022 <a
                    href="https://id.pinterest.com/rammaekap/?amp_client_id=CLIENT_ID(_)&mweb_unauth_id=%7B%7Bdefault.session%7D%7D">Ramma
                    Eka Putera</a>
            </footer>
    </div>

    <style>
    canvas {
        max-width: 100%;
    }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/Hill.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/main.js') ?>"></script>
    <script>
    AOS.init({
        duration: 1200,
    })
    </script>
    <script type="text/JavaScript" src="<?php echo base_url('assets/script.js') ?>"></script>
</body>

</html>
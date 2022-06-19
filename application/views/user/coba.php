<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<body>
    <div class="container">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <textarea name="input" rows="8" cols="160" id="inputMessage" placeholder="Masukkan Pesan Anda"></textarea>
        <span>
            <br><br>
            <textarea name="result" rows="8" cols="160" id="result" placeholder=""></textarea>
            <button type="button" onclick="copy()">Copy text</button>
            <br><br>
            <div class="inOut">
                <input type="text" id="enteredKey" placeholder="Key (contoh: 4 5 19 11)">
            </div>
            <br>
            <button class="polyButton cipherMethod" id="cipherButtonPoly"
                onclick="cipherButtonFunction()">Cipher</button>
            <button class="polyButton decipherMethod" id="decipherButton"
                onclick="decipherButtonFunction()">Decipher</button>
        </span>

        <script type="text/javascript" src="<?php echo base_url('assets/Hill3.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/main3.js') ?>"></script>
        <script type="text/JavaScript" src="<?php echo base_url('assets/script.js') ?>"></script>
    </div>
</body>
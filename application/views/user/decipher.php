<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<body>
    <div class="container">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <textarea name="input" rows="8" cols="160" id="inputMessage" placeholder="Masukkan Pesan Anda"></textarea>
        <span>
            <br><br>
            <textarea name="result" rows="8" cols="160" id="result" placeholder=""></textarea>
            <br>
            <div class="inOut">
                <input type="text" id="enteredKey" placeholder="Masukkan Key">
            </div>
            <br>
            <button class="polyButton decipherMethod" id="decipherButton"
                onclick="decipherButtonFunction()">Decipher</button>
        </span>

        <script type="text/javascript" src="<?php echo base_url('assets/Hill2.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/main2.js') ?>"></script>
        <script type="text/JavaScript" src="<?php echo base_url('assets/script2.js') ?>"></script>
    </div>
    <br>
    <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="button">
            <a href="<?= base_url('user/decript'); ?>">Kembali</a></button>
    </div> -->
</body>
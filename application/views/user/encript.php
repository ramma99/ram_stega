<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<body>
    <?php echo form_open('User/encript2')?>
    <div class="container">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <textarea name="input" rows="8" cols="160" id="inputMessage" placeholder="Masukkan Pesan Anda"
            required></textarea>
        <span>
            <br><br>
            <textarea name="result" rows="8" cols="160" id="result" placeholder="" required></textarea>
            <button type="button" onclick="cops()">Copy text</button>
            <br><br>
            <div class="inOut">
                <input type="text" id="enteredKey" placeholder="key (contoh: 4 5 19 11)" required>
            </div>
            <br>
            <button class="polyButton cipherMethod" id="cipherButtonPoly" type='button'
                onclick="cipherButtonFunction()">Cipher</button>
        </span>

        <script type="text/javascript" src="<?php echo base_url('assets/Hill.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/main.js') ?>"></script>
        <script type="text/JavaScript" src="<?php echo base_url('assets/script.js') ?>"></script>
    </div>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="submit">Sembunyikan Pesan Anda</button>
    </div>
    <?php echo form_close()?>
</body>
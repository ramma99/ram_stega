<body>
    <div class="container">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

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
        </span>

        <script type="text/javascript" src="<?php echo base_url('assets/Hill.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/main.js') ?>"></script>
        <script type="text/JavaScript" src="<?php echo base_url('assets/script.js') ?>"></script>
    </div>
</body>
$('button.encode, button.decode').click(function (event) {
    event.preventDefault();
});

//mengambil gambar yang akan didekripsi
function previewDecodeImage() {

    var file = document.querySelector('input[name=decodeFile]').files[0];

    previewImage(file, ".decode canvas", function () {
        $(".decode").fadeIn();
    });
}

//mengambil gambar yang akan dienkripsi
function previewEncodeImage() {
    var file = document.querySelector("input[name=baseFile]").files[0];

    $(".images .nulled").hide();
    $(".images .message").hide();

    previewImage(file, ".original canvas", function () {
        $(".images .original").fadeIn();
        $(".images").fadeIn();
    });
}

//mendeteksi gambar yang sudah dimasukkan
function previewImage(file, canvasSelector, callback) {
    var reader = new FileReader();
    var image = new Image;
    var $canvas = $(canvasSelector);
    var context = $canvas[0].getContext('2d');

    if (file) {
        reader.readAsDataURL(file);
    }

    reader.onloadend = function () {
        image.src = URL.createObjectURL(file);

        image.onload = function () {
            $canvas.prop({
                'width': image.width,
                'height': image.height
            });

            context.drawImage(image, 0, 0);

            callback();
        }
    }
}

//melakukan penyembunyian pesan ke dalam gambar
function encodeMessage() {
    // validasi pesan apakah memenuhi syarat untuk melakukan proses stegano
    var a = document.getElementById("validasi_encode");
    var filesLength = a.files.length;
    var pesan = document.getElementById("pesan").value;
    if (pesan.length == '0' && filesLength == '0') {
        alert('Isi File Dan Pesan Anda');
    } else if (filesLength != '0' && pesan.length == '0') {
        alert('Harap Isi Pesan Terlebih Dahulu');
    } else if (pesan.length != '0' && filesLength == '0') {
        alert('Harap Isi Gambar Anda Terlebih Dahulu');
    } else {
        $(".error").hide();
        $(".binary").hide();

        var text = $("textarea.message").val();

        var $originalCanvas = $('.original canvas');
        var $nulledCanvas = $('.nulled canvas');
        var $messageCanvas = $('.message canvas');

        var originalContext = $originalCanvas[0].getContext("2d");
        var nulledContext = $nulledCanvas[0].getContext("2d");
        var messageContext = $messageCanvas[0].getContext("2d");

        var width = $originalCanvas[0].width;
        var height = $originalCanvas[0].height;

        // periksa apakah gambarnya cukup besar untuk menyembunyikan pesan
        if ((text.length * 8) > (width * height * 3)) {
            $(".error")
                .text("Text too long for chosen image....")
                .fadeIn();

            return;
        }

        $nulledCanvas.prop({
            'width': width,
            'height': height
        });

        $messageCanvas.prop({
            'width': width,
            'height': height
        });

        // normalisasikan gambar asli
        var original = originalContext.getImageData(0, 0, width, height);
        var pixel = original.data;
        for (var i = 0, n = pixel.length; i < n; i += 4) {
            for (var offset = 0; offset < 3; offset++) {
                if (pixel[i + offset] % 2 != 0) {
                    pixel[i + offset]--;
                }
            }
        }
        nulledContext.putImageData(original, 0, 0);

        // mengubah pesan menjadi angka biner
        var binaryMessage = "";
        for (i = 0; i < text.length; i++) {
            var binaryChar = text[i].charCodeAt(0).toString(2);

            // Pad with 0 until the binaryChar has a lenght of 8 (1 Byte)
            while (binaryChar.length < 8) {
                binaryChar = "0" + binaryChar;
            }

            binaryMessage += binaryChar;
        }
        $('.binary textarea').text(binaryMessage);

        // memasukkan angka biner ke gambar
        var message = nulledContext.getImageData(0, 0, width, height);
        pixel = message.data;
        counter = 0;
        for (var i = 0, n = pixel.length; i < n; i += 4) {
            for (var offset = 0; offset < 3; offset++) {
                if (counter < binaryMessage.length) {
                    pixel[i + offset] += parseInt(binaryMessage[counter]);
                    counter++;
                }
                else {
                    break;
                }
            }
        }
        messageContext.putImageData(message, 0, 0);

        $(".binary").fadeIn();
        $(".images .nulled").fadeIn();
        $(".images .message").fadeIn();

    }
};

//melakukan proses enkripsi terhadapat gambar yang di dalamnya terdapat pesan
function decodeMessage() {
    var a = document.getElementById("validasi");
    var filesLength = a.files.length;
    if (filesLength == '0') {
        alert('Harap Isi Gambar Dulu!');
    } else {
        var $originalCanvas = $('.decode canvas');
        var originalContext = $originalCanvas[0].getContext("2d");

        var original = originalContext.getImageData(0, 0, $originalCanvas.width(), $originalCanvas.height());
        var binaryMessage = "";
        var pixel = original.data;
        for (var i = 0, n = pixel.length; i < n; i += 4) {
            for (var offset = 0; offset < 3; offset++) {
                var value = 0;
                if (pixel[i + offset] % 2 != 0) {
                    value = 1;
                }

                binaryMessage += value;
            }
        }

        //menampilkan pesan yang ada di dalam gambar
        var output = "";
        for (var i = 0; i < binaryMessage.length; i += 8) {
            var c = 0;
            for (var j = 0; j < 8; j++) {
                c <<= 1;
                c |= parseInt(binaryMessage[i + j]);
            }

            output += String.fromCharCode(c);
        }
        //menampilkan huruf dan menghapus simbol piksel
        var temp = [];
        for (i = 0; i < output.length; i++) {
            if (output[i] != '\x00') {
                temp.push(output[i]);
            }
        }
        var hasil = temp.join("");

        $('.tombol').removeAttr('disabled');
        $('.binary-decode textarea').text(hasil);
        $('.binary-decode').fadeIn();
    }
};

function Download() {

    var canvas = document.getElementById("download");
    image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
    var link = document.createElement('a');
    link.download = "my-image.png";
    link.href = image;
    link.click();
}

function cop() {
    var copyText = document.getElementById("salin");
    copyText.select();
    navigator.clipboard.writeText(copyText.value);
}
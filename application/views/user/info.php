<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <div id="my-tab-content" class="tab-content">
            <video width="640" source src="<?= base_url('tutor2.mp4') ?>" type="video/mp4" controls>
                <p>Maaf.. Brower tidak mendukung native video player</p>
            </video><br />
            <h2 class="h3 mb-4 text-black-800">Sangat Disarankan Untuk Melihat Tutorial Terlebih Dahulu!</h2>
            <br />
            <h2 class="text-danger">Penting! Lakukan Test Pada Key Anda!</h2>
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                <p>
                <p> 1. Silahkan masuk pada menu "test key"
                <p>
                <p> 2. masukkan pesan percobaan anda (contoh: coba)
                <p>
                <p>3. Masukkan key berupa 4 angka bilangan bulat positif (contoh: 3 4 19 11)
                <p>
                <p>4. Klik tombol cipher, akan muncul pesan yang sudah diacak
                <p>
                <p> 5. Copy pesan acak kedalam kolom pesan asli
                <p>
                <p>6. Masukkan kunci yang sama ketika anda melakukan proses cipher
                <p>
                <p>7. Jika key yang anda gunakan benar maka pesan acak akan kembali menjadi pesan asli
                <p>
                <p>8. Namun apabila proses decipher tidak berhasil, akan keluar peringatan key anda tidak dapat
                    digunakan
                <p>
                <p>9. Cobalah untuk melakukan proses cipher dengan menggunakan key yang berbeda
                <p>
                <p>10. Setelah melakukan proses test terhadap key dan kunci yang anda gunakan dapat digunakan dalam
                    proses cipher dan decipher, silahkan melakukan proses enkripsi pada menu encrypt
                    dan seterusnya
                <p>
                <p>11. Tetap jaga pesan rahasia anda :)
                <p>
            </div>
            <h2 class="text-primary">Langkah - langkah Untuk Enkripsi Pesan</h2>
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                <p>
                <p> 1. Masukkan Pesan yang akan melalui proses cipher
                <p>
                <p> 2. Masukkan empat digit angka pada "key" beserta spasi pada setiap angkanya (contoh : 3 4 19 11)
                <p>
                <p>3. Setelah berhasil melakukan proses cipher, copy pesan yang sudah teracak
                <p>
                <p>4. Kemudian klik tombol "sembunyikan pesan anda"
                <p>
                <p> 5. Pilih gambar yang akan dijadikan sebagai media penyembunyian pesan
                <p>
                <p>6. Selanjutnya masukkan pesan yang sudah melalui proses cipher
                <p>
                <p>7. Setelah berhasil maka akan muncul tombol download gambar, klik tombol download
                <p>
            </div>
            <h2 class="text-primary">Langkah - langkah Untuk Dekripsi Pesan</h2>
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                <p>
                <p> 1. Masukkan gambar yang akan melalui proses dekrip
                <p>
                <p> 2. Jika di dalam gambar terdapat pesan tersembunyi makan akan ditampilkan, jika tidak yang terlihat
                    hanyalah piksel gambar tersebut
                <p>
                <p> 3. Jika terdapat pesan dalam gambar, maka pesan akan otomatis ditampilkan
                <p>
                <p> 4. Copy Pesan yang ditampilkan
                <p>
                <p> 5. Masukkan pesan tersebut ke dalam kolom input
                <p>
                <p> 6. Masukkan key yang sama ketika melakukan proses cipher pada pesan tersebut (key yang digunakan
                    harus
                    sama pada saat melakukan proses cipher)
                <p>
                <p> 7. Jika berhasil maka akan muncul pesan yang sebelumnya berupa huruf acak menjadi sebuah kalimat

                <p>
            </div>
            <h2 class="text-primary">Catatan</h2>
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                <p> 1. Jika
                    terdapat spasi dalam pesan makan akan dihilangkan
                <p>
                <p> 2. Key yang digunakan
                    harus
                    sama pada saat melakukan proses cipher, gunakan fitur "Test Key" terlebih dahulu
                <p>
                <p> 3. Jika total keseluruhan huruf berjumlah genap
                    maka
                    di akhir kalimat akan ditambahkan huruf "x"
                <p>
                <p>
                    4. Key yang Digunakan Harus Angka Desimal dan Tidak Boleh Berupa Angka Negatif (contoh: -1 -2 -3
                    -4), Maka Key Tidak Dapat Digunakan
                <p>
            </div>
        </div>

    </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>

</html>
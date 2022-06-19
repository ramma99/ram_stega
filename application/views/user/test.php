<?php 
 $image1 = imagecreatefrompng("ig2.png");
 $image2 = imagecreatefrompng("my-image(11).png");
 
 $mse = 0;
 $width = imagesx($image1);
 $height = imagesy($image1);
 $tempr = 0;
 $tempg = 0;
 $tempb = 0;
 
 for ($y=0; $y < $height; $y++) { 
     for ($x=0; $x < $width; $x++) { 
      $rgb1 = imagecolorat($image1, $x, $y);
      $r1 = ($rgb1 >> 16) & 0xFF;
      $g1 = ($rgb1 >>8) & 0xFF; 
      $b1 = $rgb1 & 0xFF;
      $qty1 = $r1 * $g1 * $b1;
 
      $rgb2 = imagecolorat($image2, $x, $y);
      $r2 = ($rgb2 >> 16) & 0xFF;
      $g2 = ($rgb2 >>8) & 0xFF; 
      $b2 = $rgb2 & 0xFF;
     //  $qty2 = $r2 * $g2 * $b2;
      
      //menghitung perbedaan pixel pada warna r,g,b
      $diffr = $r1 - $r2;
      $diffg = $g1 - $g2;
      $diffb = $b1 - $b2;
 
      //jika dihitung nilai r,g,b
     //  $diff = $qty1 - $qty2;
      // echo $diff." ";
      $tempr += pow($diffr, 2);
      $tempg += pow($diffg, 2);
      $tempb += pow($diffb, 2);
     }
 }
 
 // echo "<br> jmlh piksel error (kuadrat) = ".$temp."<br>";
 $mser = $tempr / ($width * $height);
 $mseg = $tempg / ($width * $height);
 $mseb = $tempb / ($width * $height);
 
 // echo "MSE Red= ".$mser."<br>";
 // echo "MSE Green= ".$mseg."<br>";
 // echo "MSE Blue= ".$mseb."<br><br>";
 
 $ratior = pow(255, 2) / $mser;
 $ratiog = pow(255, 2) / $mseg;
 $ratiob = pow(255, 2) / $mseb;
 $psnrr = 10 * log10($ratior);
 $psnrg = 10 * log10($ratiog);
 $psnrb = 10 * log10($ratiob);
?>
<table class="table table-striped">
    <thead>
        <h2 class="text-primary">Pengujian MSE Pada Sampel Gambar</h2>
        <tr>
            <th scope="col">COVER IMAGE</th>
            <th scope="col">STEGO IMAGE</th>
            <th scope="col">PIXEL RED</th>
            <th scope="col">PIXEL GREEN</th>
            <th scope="col">PIXEL BLUE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="<?= base_url('ig2.png') ?>" width="100" alt=""></td>
            <td><img src="<?= base_url('my-image(11).png') ?>" width="100" alt=""></td>
            <td><?= $mser ?></td>
            <td><?= $mseg ?></td>
            <td><?= $mseb ?></td>
        </tr>
    </tbody>
</table>

<table class="table table-striped">
    <thead>
        <h2 class="text-primary">Pengujian PSNR Pada Sampel Gambar</h2>
        <tr>
            <th scope="col">COVER IMAGE</th>
            <th scope="col">STEGO IMAGE</th>
            <th scope="col">PIXEL RED</th>
            <th scope="col">PIXEL GREEN</th>
            <th scope="col">PIXEL BLUE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="<?= base_url('ig2.png') ?>" width="100" alt=""></td>
            <td><img src="<?= base_url('my-image(11).png') ?>" width="100" alt=""></td>
            <td><?= $psnrr ?></td>
            <td><?= $psnrg ?></td>
            <td><?= $psnrb ?></td>
        </tr>
    </tbody>
</table>
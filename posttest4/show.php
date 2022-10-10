<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="./assets/css/sshow.css" rel="stylesheet">
   <title>Show Review</title>
</head>

<body>
   <div class="container">
      <h1> Display Review Produk</h1>
      <table class="rwd-table">
         <tbody>
            <tr>
               <th>Nama Produk</th>
               <th>Penilaian</th>
               <th>Tempat Beli</th>
               <th>Tanggal Beli</th>
               <th>Tanggal Akhir</th>
               <th style="text-align: center;" >Review</th>
            </tr>
            <tr>
               <td data-th="Nama Produk">Toner Hatomugi<br> </td>
               <td data-th="Penilaian">3 Stars</td>
               <td data-th="Tempat Beli">Tokopedia</td>
               <td data-th="Tanggal Beli">2021-12-01</td>
               <td data-th="Tanggal Akhir">2022-04-28</td>
               <td data-th="Review">Enak banget di muka, bikin adem, buruan beli!</td>
            </tr>
            <tr>
               <td data-th="Nama Produk">Serum Avoskin<br> </td>
               <td data-th="Penilaian"> 4 Stars</td>
               <td data-th="Tempat Beli">Offline Store</td>
               <td data-th="Tanggal Beli">2021-10-30</td>
               <td data-th="Tanggal Akhir">2022-01-31</td>
               <td data-th="Review">Sukaaaa, emang produk avoskin jarang gagal ya kuyers xixii</td>
            </tr>
            <tr>
               <td data-th="Nama Produk">Sleeping Mask<br> </td>
               <td data-th="Penilaian">3 Stars</td>
               <td data-th="Tempat Beli">Online Store</td>
               <td data-th="Tanggal Beli">2021-02-09</td>
               <td data-th="Tanggal Akhir">2021-10-10</td>
               <td data-th="Review">Jujurrr jarang pake sleeping mask hmm jadi ya jarang dipake hhe:)</td>
            </tr>
            <tr>
               <td data-th="Nama Produk">Moisturizer Hadalabo<br> </td>
               <td data-th="Penilaian">5 Stars</td>
               <td data-th="Tempat Beli">Tiktok Shop</td>
               <td data-th="Tanggal Beli">2021-01-01</td>
               <td data-th="Tanggal Akhir">2021-11-14</td>
               <td data-th="Review">Enak banget dipake, bukan yang bikin berat di muka gitu 5 bintang</td>
            </tr>
            <tr>
               <td data-th="Nama Produk">Garnier Micellar Water<br> </td>
               <td data-th="Penilaian">2 Stars</td>
               <td data-th="Tempat Beli">Shopee</td>
               <td data-th="Tanggal Beli">2022-03-15</td>
               <td data-th="Tanggal Akhir">2022-09-14</td>
               <td data-th="Review">Harganya mayan pricey, tapi lebih enak micellar water aku sebelumnya, huhuu T_T <br> tapi gapapa deh namanya sudah terlanjur yaaa kuyers..</td>
            </tr>
            <tr>
               <td data-th="Nama Produk"> <?php echo $_POST['nama_produk']; ?> <br> </td>
               <td data-th="Penilaian"><?php echo $_POST['rate']; ?></td>
               <td data-th="Tempat Beli"><?php echo $_POST['tempat']; ?></td>
               <td data-th="Tanggal Beli"><?php echo $_POST['tanggal_beli']; ?></td>
               <td data-th="Tanggal Akhir"><?php echo $_POST['tanggal_akhir']; ?></td>
               <td data-th="Review"><?php echo $_POST['review']; ?></td>
            </tr>
         </tbody>
      </table>
   </div>
</body>

</html>
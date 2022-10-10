<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Skincare Kuy</title>

   <!-- Connect to another file -->
   <link rel="stylesheet" href="./assets/css/style3.css">
   <script src="./assets/js/script.js" defer></script>

   <!-- Icon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />


   <!-- Pop Up -->
   <!-- <script>
      alert("Hay! Selamat kamu sudah menjadi salah satu bagian dari 'Kuyers '");
   </script> -->
</head>

<body>
   <!-- Navbar -->
   <div class="container">
      <div class="navbar">
         <h3>Skincare Kuy</h3>
         <nav>
            <ul>
               <li><a href="./index.html">Home</a></li>
               <li><a class="active" href="">Review</a></li>
               <li><a href="./about.html">About me</a></li>

               <!-- Icon here -->
               <li><i class="bi bi-brightness-high-fill" id="toggleDark"></i></li>
            </ul>
         </nav>
      </div>


      <!-- FORM INPUT REVIEW -->
      <div class="content">
         <div>
            <form method="post" action="show.php">
               <fieldset>
                  <table id="Tabel_inventory">
                     <tr>
                        <td>Nama Produk</td>
                        <td><input type="text" name="nama_produk" id="nama_produk" required></td>
                     </tr>
                     <tr>
                        <td>Give your star</td>
                        <td>
                           <select class="form-control" name="rate" id="rate" required>
                              <option value="1 star">1 Star</option>
                              <option value="2 stars">2 Stars</option>
                              <option value="3 stars">3 Stars</option>
                              <option value="4 stars">4 Stars</option>
                              <option value="5 stars">5 Stars</option>
                           </select>
                        </td>
                     </tr>
                     <td>Tempat beli</td>
                     <td><input type="text" name="tempat" id="tempat" required></td>
                     </tr>

                     <tr>
                        <td>Tanggal Awal Pemakaian</td>
                        <td><input type="date" name="tanggal_beli" id="date" required></td>
                     </tr>
                     <tr>
                        <td>Tanggal Akhir Pemakaian</td>
                        <td><input type="date" name="tanggal_akhir" id="date" required></td>
                     </tr>
                     <tr>
                        <td>Review disini yuk!</td>
                        <td><input type="text" name="review" id="review" required></td>
                     </tr>
                  </table>
                  <br>
                  <p>
                     <input type="submit" id="btn_simpan" value="Simpan">
                  </p>
               </fieldset>
            </form>
         </div>
      </div>
   </div>
</body>

</html>
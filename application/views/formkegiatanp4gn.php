<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Test Kolektif</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      margin: 0;
      padding: 0;
    }

    .header {
      display: flex;
      align-items: center;
      background-color: #0057c2; /* Warna biru tua */
      padding: 10px 20px;
    }

    .header img {
      height: 60px;
    }

    .header h2 {
      color: white;
      text-align: center;
      flex: 1;
      margin: 0;
      font-size: 20px;
      font-weight: bold;
    }

    .container {
      max-width: 400px;
      margin: 40px auto;
      padding: 20px;
    }

    form label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    form input[type="text"],
    form input[type="tel"],
    form input[type="datetime-local"],
    form input[type="file"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: none;
      background-color: #e8e8e8;
      border-radius: 5px;
    }

    form input[type="submit"] {
      background-color: green;
      color: white;
      border: none;
      width: 100%;
      padding: 10px;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
    }

    form input[type="submit"]:hover {
      background-color: darkgreen;
    }
  </style>
</head>
<body>

  <div class="header">
     <img src="<?php echo base_url() ?>/assets/Img/Logo_BNN.png" alt="Logo BNN">
    <h2>Kegiatan 4pgn</h2>
  </div>

  <div class="container">
    <?php echo form_open_multipart('Home/RegisterBnn'); ?>
    <label for="nama_pemohon">Nama pemohon<span style="color: red">*</span></label>
    <input type="text" id="nama_pemohon" name="nama_pemohon" required>
    <small style="color: red"><?php echo form_error('nama_pemohon'); ?></small>

    <label for="instansi">Nama sekolah/Perguruan tinggi/lembaga/instansi<span style="color: red">*</span></label>
    <input type="text" id="instansi" name="instansi" required>
    <small style="color: red"><?php echo form_error('instansi'); ?></small>

    <label for="alamat">Alamat<span style="color: red">*</span></label>
    <input type="text" id="alamat" name="alamat" required>
    <small style="color: red"><?php echo form_error('alamat'); ?></small>

    <label for="no">No.Handphone</label>
    <input type="text" id="no" name="no">
    <small style="color: red"><?php echo form_error('no'); ?></small>

    <label for="tanggal">Tanggal dan waktu</label>
    <input type="datetime-local" id="tanggal" name="tanggal">
    <small style="color: red"><?php echo form_error('tanggal'); ?></small>

    <label for="surat">Surat permohonan Kegiatan</label>
    <input type="file" id="surat" name="surat">
    <small style="color: red"><?php echo form_error('surat'); ?></small>

    <input type="submit" value="Submit"> 
    
    <?php echo form_close(); ?>

</body>
</html>
</div>


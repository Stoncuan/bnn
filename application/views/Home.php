<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta charset="UTF-8">
    <title>Sipinang BNNP PB</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: (f9f9f9);
        }

        header {
            background-color: #0057d9;
            padding: 10px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        header img {
            height: 60px;
            margin-right: 15px;
        }

        h1 {
            margin: 0;
            font-size: 20px;
        }

        .container {
            margin-top: 60px;
        }

        .title {
            font-weight: bold;
            margin-bottom: 30px;
            font-size: 18px;
        }

        .button {
            background-color: #0066ff;
            border: none;
            color: white;
            padding: 15px 3px;
            margin: 10px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #004ecb;

        }

        .header {
            display: flex;
            justify-content: flex-end;
            padding: 10px 20px;
            background-color: #f1f1f1;
        }

        .login-btn {
            text-decoration: none;
            color: black;
            font-weight: bold;
            border: 2px solid #007bff;
            padding: 8px 16px;
            border-radius: 4px;
        }
    </style>

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <div class="header">
        <a href="<?php echo base_url() ?>auth" class="login-btn">Login</a>

    </div>


</head>

<body>

    <header>
        <img src="<?php echo base_url() ?>/assets/Img/Logo_BNN.png" alt="Logo BNN">
        <h1>bnn papua barat</h1>


    </header>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 text-center">
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title text-center">
                    SISTEM INFORMASI PELAYANAN TERINTEGRASI BNNP PAPUA BARAT
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 justify-content-center d-flex ">
                <a href="<?php echo site_url('home/form') ?>" class="btn btn-primary m-2">Pendaftaran sosialisasi
                    p4gn</a>
                <a href="<?php echo site_url('home/RegisterBnn') ?>" class="btn btn-primary m-2">Pendaftaran Kegiatan
                    urine test</a>
            </div>
        </div>
    </div>
    <div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <style>
        body{
            background-image: url("https://wallpapercave.com/wp/wp7080655.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
        ul{
            width: 100%;
            display: inline-block;
            top:0;
            position: fixed;
            margin: 0;
            left: 0;
            background-color: black;
            opacity: 0.8;
            height: 50px;
            line-height: 30px;
        }
        li{
            float: left;
            list-style-type: none;
            text-decoration: none;
            padding: 10px;
            color: white;
            opacity: 1;
        }
        .pilihan li:hover{
            color: black;
            background: rgb(194,233,254);
            background: linear-gradient(0deg, rgba(194,233,254,1) 0%, rgba(255,204,228,1) 100%);
            opacity: 1;
        }
        .right{
            margin-right: 10%;
            float: right;
        }
        h1{
            font-family: 'Lucida Sans';
            font-size: 50px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align:center;
            background-color: rgba(0,0,0, 0.4);
            border: 3px solid #f1f1f1;
            width: 50%;
            position: absolute;
        }
       
    </style>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if (session()->getFlashdata('swal_icon')){ ?>
        Swal.fire({
            icon: '<?php echo session()->getFlashdata('swal_icon')?>',
            title: '<?php echo session()->getFlashdata('swal_title')?>',
            text: '<?php echo session()->getFlashdata('swal_text')?>',
            showConfirmButton: '<?php echo session()->getFlashdata('swal_showConfirmButton')?>',
            timer: '<?php echo session()->getFlashdata('swal_timer')?>'
        })
    <?php } ?>
</script>

<ul>
    <div class="pilihan">
        <a class="nav-link active" aria-current="page" href="#"><li>Home</li></a>
        <a class="nav-link" href="<?=site_url('kelas/index')?>"><li>Data</li></a>
        <a class="nav-link" href="<?=site_url('kelas/tambah')?>"><li>Tambah Data</li></a>
        <a class="nav-link" href="<?=site_url('/')?>"><li class= "right">Log Out</li></a>
    </div>
</ul>

<h1>WELCOME</h1>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
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
        .container{
            margin-top: 60px;
        }
        .data{
            position: absolute;
            left: 50%;
            top: 60%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 300px;
            background-color: rgba(0,0,0,.7);
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            font-family: 'Open Sans', sans-serif;
        } 
        .form-control{
            width: 250px;
            padding: 8px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #2979ff;
            color: #fff;
            font-size: 20px;
            height: 40px;
            border-radius: 0px;
        }
        input:focus{
            border: 3px solid black;
        }
        button{
            width: 250px;
            padding: 5px 0;
            border: none;
            background-color: #2979ff;
            font-size: 15px;
            color: #fafafa;
            cursor: pointer;
            border-radius: 0px;
        }
        button:hover {
            background: rgba(134, 172, 235, 1);
        }
        .form-label{
            font-weight: bold;
            color: white;
            font-family: 'Open Sans', sans-serif;
        }
        h1{
            font-weight: bold;
            font-family: 'Open Sans', sans-serif;
        }
    
    </style>
</head>

<body>
<ul>
    <div class="pilihan">
        <a class="nav-link" href="<?=site_url('kelas/home')?>"><li>Home</li></a>
        <a class="nav-link" href="<?=site_url('kelas/index')?>"><li>Data</li></a>
        <a class="nav-link active" aria-current="page" href="#"><li>Tambah Data</li></a>
        <a class="nav-link" href="<?=site_url('/')?>"><li class= "right">Log Out</li></a>
    </div>
</ul>

<div class="container">
    <center><h1>Tambah Admin</h1></center>

    <?php
    $error=session()->has('error_val'); //menampilkan input error
    $error_val=session()->getFlashdata('error_val'); //get flash data itu temporary, kalau di refresh ilang

    if(session() -> has('msg.success')) //menampilkan input berhasil
        echo '<div class ="alert alert-success">'.session()->getFlashdata('msg.success').'</div>';
    ?>

    <div class="data">
        <div class="mt-4 mb-3 col-md-5">
            <form method='post'>
                <label class="form-label">NRP</label>
                <input type="text" name="nrp" placeholder="Masukkan NRP" id="nrp" class="form-control<?=$error && !empty($error_val['nrp']) ? ' is-invalid' : ''?>">
                <?php if ($error && !empty($error_val['nrp'])):?>
                    <div class="invalid-feedback">
                        <?=$error_val['nrp']?>
                    </div>
                <?php endif ?>
                <br/>

                <label class="form-label">Password</label>
                <input type="password" name="password" placeholder="Masukkan Password" id="password" class="form-control<?=$error && !empty($error_val['password']) ? ' is-invalid' : ''?>">
                <?php if ($error && !empty($error_val['password'])):?>
                    <div class="invalid-feedback">
                        <?=$error_val['password']?>
                    </div>
                <?php endif ?>
                <br/>

                <button class="btn btn-primary" name="submit" value="ya"> Tambah Data</button>
            <?=form_close()?>
        </div>
    </div>
  
</div>

</body>
</html>
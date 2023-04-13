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
        h1{
            font-weight: bold;
            font-family: 'Open Sans', sans-serif;
        }
        .container{
            margin-top: 60px;
        }
    </style>
</head>

<body>
<ul>
    <div class="pilihan">
        <a class="nav-link" href="<?=site_url('kelas/home')?>"><li>Home</li></a>
        <a class="nav-link active" aria-current="page" href="#"><li>Data</li></a>
        <a class="nav-link" href="<?=site_url('kelas/tambah')?>"><li>Tambah Data</li></a>
        <a class="nav-link" href="<?=site_url('/')?>"><li class= "right">Log Out</li></a>
    </div>
</ul>
<div class="container">
  <div class="container my-3">
    <h1>ADMIN</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>NRP</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

      <?php foreach($data_admin as $admin): ?>
          <tr>
            <td>-</td>
            <td><?=htmlspecialchars($admin->nrp)?></td>
            <td>
              <a href="<?=site_url('kelas/sunting/'.$admin->nrp)?>" class="btn btn-secondary btn-sm"> Aktif</a>
            </td>
          </tr>
        <?php endforeach ?>

      </tbody>
    </table>
  </div>
</div>

</body>
</html>
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
      .navbar{
        color: #fff;
      }

      .navbar :active{
        color: skyblue !important;
      }
    </style>
</head>

<body>
<ul>
    <div class="pilihan">
        <a class="nav-link" href="<?=site_url('kelas/home')?>"><li>Home</li></a>
        <a class="nav-link" href="<?=site_url('kelas/index')?>"><li>Data</li></a>
        <a class="nav-link" href="<?=site_url('kelas/tambah')?>"><li>Tambah Data</li></a>
        <a class="nav-link" href="<?=site_url('/')?>"><li class= "right">Log Out</li></a>
    </div>
</ul>

  <div class="container my-5">
  <h1>Sunting Admin</h1>

  <?php 
  
  $error = session()->has('error_val');
  $error_val = session()->getFlashdata('error_val');

  if (session()->has('msg_success'))
    echo '<div class="alert alert-success">'.session()->getFlashdata('msg_success').'</div>';

  ?>

  <div class="mt-4 mb-3 col-md-5">

    <?php if (!$fetch_data): ?>

        <div class="alert alert-danger">
            Data NRP tidak tersedia di dalam database.
        </div>

        <?php else: ?>
            <form method="post">
                <label class="form-label">NRP</label>
                <input type="text" value="<?=htmlspecialchars($fetch_data['nrp'])?>" disabled name="nrp" placeholder="Masukkan NRP" class="form-control<?=$error && !empty($error_val['nrp']) ?' is-invalid' : ''?>">

                <?php if ($error && isset($error_val['nrp'])): ?>

                    <div class="invalid-feedback">
                        <?=$error_val['nrp']?>
                    </div>

                <?php endif ?>
                <br/>

                <label class="form-label">Password</label>
                <input type="text" value="<?=old('password') ?? htmlspecialchars($fetch_data['password']) ?>" name="password" placeholder="Masukkan Password" class="form-control<?=$error && !empty($error_val['password']) ?' is-invalid' : ''?>"><br/>

                <?php if ($error && isset($error_val['password'])): ?>
                    <div class="invalid-feedback">
                        <?=$error_val['password']?>
                    </div>
                <?php endif ?>
                <br/>

                <button class="btn btn-primary" name="submit" value="ya">Sunting</button>
                </form>
        <?php endif ?>
    </div>
    </div>
    </body>
</html>
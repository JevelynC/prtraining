<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <style>
        body{
            background-image: url("https://coolhdwall.com/storage/202101/anime-scenery-horizon-shooting-star-sunset-hd-wallpaper-1280x720.jpg");
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
        .data{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 300px;

            background-color: rgba(0,0,0,.7);
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            font-family: 'Open Sans', sans-serif;
        } 
        h1{
            text-align: left;
            color: #fafafa;
            margin-bottom: 30px;
            text-transform: uppercase;
            border-bottom: 4px solid #2979ff;
            text-align: center;
        }
        h3{
            color: white;
        }
        form input{
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #2979ff;
            color: #fff;
            font-size: 20px;
        }
        input:focus{
            border: 3px solid black;
        }
        button{
            width: 100%;
            padding: 5px 0;
            border: none;
            background-color: #2979ff;
            font-size: 15px;
            color: #fafafa;
            cursor: pointer;
        }
        button:hover {
            background: rgba(134, 172, 235, 1);
        }
    </style>
</head>
<body>
    <div class="data">
        <h1>Log In</h1>
        <?php 
            if(session()->getFlashdata('msg_error')) { 
                echo session()->getFlashdata('msg_error');
            }else{
                echo "gaada data";
            }
        ?>
        <form method="post" action="<?= site_url()?>">
            <h3>NRP</h3>
            <input type="text" id="nrp" name="nrp" required>

            <h3>Password</h3>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="tombol" value="ya" class="btn">Log In</button></a>
        </form>
    </div>

</body>
</html>
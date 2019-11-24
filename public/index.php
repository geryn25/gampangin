<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Makan</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>   
    </head>
    <style>
    #box{
        width: 100%;
        height: 100%;
        border-radius: 40px;
        border-style: solid;
        border-color: #E74C3C;
        padding: 10%;
        margin-bottom: 10%;
    }
    p{
        text-align: center;
        font-size: 15px;
    }
    h1{
        text-align: center;
        font-size: 20px;
    }
    h2{
        font-size: 15px;
        text-align: center;
    }
    h{
        text-align: center;
    }
    </style>
    <body>
            <div id="liffData">
                    <h2 id="liffDataHeader" class="textLeft">LIFF Data</h2>
                    <table>
                        <tr>
                            <th>OS</th>
                            <td id="deviceOS" class="textLeft"></td>
                        </tr>
                        <tr>
                            <th>Language</th>
                            <td id="browserLanguage" class="textLeft"></td>
                        </tr>
                        <tr>
                            <th>LIFF SDK Version</th>
                            <td id="sdkVersion" class="textLeft"></td>
                        </tr>
                        <tr>
                            <th>isInClient</th>
                            <td id="isInClient" class="textLeft"></td>
                        </tr>
                        <tr>
                            <th>isLoggedIn</th>
                            <td id="isLoggedIn" class="textLeft"></td>
                        </tr>
                    </table>
                </div>

        <?php include('number.php') ?>
        
        <div class="container" style="padding: 5%; margin-bottom:10px; ;" >
            <div class="row" style="position: relative; margin-left: 7%;">
                <div class="">
                    <span class="col-sm-2">
                        <img src="location.png" style="width: 20px; height: 20px; text-align: right;">
                    </span>
                    <span class="col-sm-6">
                        <h style=" font-size: 18px;">Telkom University</h>
                    </span>
                    <span class="col-sm-4">
                        <img src="profilgampangin.png" style="width: 30px; height: 30px; text-align: center;">
                    </span>
                    <hr />
                </div>
            </div>
            <div class="row" style="text-align: center; margin-left: 10%;">
                    <div class="">
                        <span class="col-sm-4">
                            <img src="new.png" style="width: 20px; height: 20px;">
                            <h>Baru</h>
                        </span>
                        <span class="col-sm-4">
                                <img src="24.png" style="width: 20px; height: 20px;">
                                <h>24 Jam</h>
                        </span>
                        <span class="col-sm-4">
                                <img src="promo.png" style="width: 20px; height: 20px;">
                                <h>Promo</h>
                        </span>
                        <hr />
                    </div>
            </div>
            <h1><b>Daftar Restoran</b></h>
            <hr />

            <?php 
            $data = getMitra();
            $mitra = json_decode($data, true);

            foreach($array as $mitra):
            ?>
            <div id="box">
                <div class="row">
                    <div class="col-sm-4" style="text-align: center;">
                        <img width="100%" height="100%" src="udin.jpg" style=" border-radius: 10%;"/>
                    </div>
                    <div class="col-sm-8">
                        <h1><b><?php echo $array['nama_mitra'] ?></b></h1>
                        <p style="text-align: center;">jl. Sukabirus no. 53 (depan MSU)</p>
                        <h2 style="color: green;">Buka</h2>
                        <h2>08.00 - 22.00</h2>
                        <div style="text-align: center;">
                            <button  type="button" class="btn btn-success">Pesan</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <div id="box">
                <div class="row">
                    <div class="col-sm-4" style="text-align: center;">
                        <img width="100%" height="100%" src="udin.jpg" style=" border-radius: 10%;"/>
                    </div>
                    <div class="col-sm-8">
                        <h1><b>Warung Pecel Lele Udin</b></h1>
                        <p style="text-align: center;">jl. Sukabirus no. 53 (depan MSU)</p>
                        <h2 style="color: green;">Buka</h2>
                        <h2>08.00 - 22.00</h2>
                        <div style="text-align: center;">
                            <button  type="button" class="btn btn-success">Pesan</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
        <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
        <script src="liff-starter.js"></script>
    </body>
    
</html>

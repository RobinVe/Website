<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<link href="css/table.css" type="text/css" rel='stylesheet'>
<head>
    <title>Contact</title>
</head>

<style>

.navbar-brand img{
    max-height: 8vh;
}
    .content-left{
            background: #ffffff;
            min-height: 100vh;
            padding: 0px;
            padding-top: 290px;
    }

    .content-right{
        background-color: #f58a08;
        min-height: 100vh;
    }

    .content-block{
        position: relative;
        top: -50px;
        padding-top: 10vh;
    }

    p, h1, h3,label{
        color:white;

    }

    p, label{
        font-size: 1.1em;
        font-weight: 400;
        margin-top: 5px;
        margin-bottom: 0px;
    }
    h1, h3{
        font-weight: bold;
        padding-bottom:5px;
    }
    .single-block{
        background-color: #f58a08;
        min-height: 50vh;
    }

    input{
        min-height:6vh;
        margin-top: 20px;
        margin-bottom: 0px;
    }

    h1, .underline{
        margin-top:0px;
            margin-bottom: 0px;
    }

    .btn-default{
        width: 100%;
        background: #0872f5;
        border: #0872f5 solid 4px;
        border-radius: 4px;
        transition: 0.5s all;
    }

        .btn-default:hover, .btn-default:active{
            background: #ffffff;
            border: white solid 4px;

        }
        .btn-default:hover>p, .btn-default:active>p{
            color:#f58a08;
        }
    button p{
        font-size: 1.5em;
    }

    .second-row p, .second-row h3{
        color: #6e6e6e;
    }

    body {
    background: #ffffff ;
}

</style>
<div class='container-fluid'>
    <div class='row single-block content-block'>
            <div class='col-md-6 col-md-offset-3'>
            <h1 class='text-center'>Bedankt voor uw interesse!</h1>
            <form>
                <div class='form-group col-sm-12'>
                  <select class='form-control'>
                    <option value="starter">Starter</option>
                    <option value="basic">Basic</option>
                    <option value="premium">Premium</option>
                  </select>
                  <input type="text" class="form-control" placeholder="Bedrijfsnaam">
                </div>
                <div class="form-group col-sm-6">
                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Voornaam">
                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Achternaam">
                </div>

                <div class="form-group col-sm-6">
                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Email">
                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Telefoonnummer">
                </div>

                <div class="form-group col-sm-12">
                  <textarea class='form-control' placeholder="Bericht" rows="4"></textarea>
                </div>
                <div class="form-group col-sm-12">

                <button type="submit" class="btn btn-default"><p>Versturen</p></button>
            </div>

            </form>
        </div>
    </div>

    <div class='row second-row'>
        <div class='col-md-10 col-md-offset-1'>
        <div class='col-md-4'>
            <div class='col-md-10 col-md-offset-1'>
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet porttitor finibus. Phasellus facilisis, velit ut congue tristique, velit orci auctor leo, sed porta metus tellus sit amet erat. Proin lobortis, nisl eu dignissim tempus, nisl ligula consequat ligula, quis aliquet odio quam eget urna. Proin lacinia porttitor libero, placerat finibus tellus consequat nec. Pellentesque posuere, lectus vel auctor ornare, mi lacus pellentesque dui, vitae suscipit neque nunc nec risus. Cras vitae quam nulla. Morbi sit amet lacus non lorem ultricies auctor nec ut turpis. Proin iaculis pellentesque est, quis tempus purus iaculis a. Pellentesque imperdiet nisl a gravida laoreet. Quisque nec mollis turpis.<p>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='col-md-10 col-md-offset-1'>
                <h3>Proin sagittis</h3>
                <p>Proin sagittis, urna eget euismod pretium, arcu leo finibus nisl, eu sagittis turpis arcu eu metus. Vivamus vel hendrerit odio. Vestibulum efficitur efficitur eros. Donec finibus gravida ligula vitae mollis. Quisque ut varius erat, iaculis convallis eros. Aliquam lobortis sodales eleifend. Quisque eros est, commodo sit amet tincidunt id, facilisis vitae tortor. Curabitur interdum dui quis felis porta ultricies. Phasellus eu metus id orci elementum vehicula. Sed scelerisque ligula a varius porta. Suspendisse placerat ornare felis, consequat hendrerit metus consectetur congue. Nam vehicula lectus ligula, sed porta dolor dapibus ultrices. Cras at tellus ut ipsum lobortis dictum at convallis mauris. Nunc egestas volutpat viverra.<p>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='col-md-10 col-md-offset-1'>
                <h3>Curabitur quis</h3>
                <p>Curabitur quis leo quis erat rhoncus sodales nec vitae ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, auctor id tellus et, lobortis dictum risus. Quisque commodo augue in velit cursus, bibendum consectetur libero imperdiet. Aliquam molestie vitae urna ac euismod. Cras accumsan ligula vel arcu varius, ut ornare lorem viverra. Etiam suscipit faucibus lorem sit amet varius. In vitae ullamcorper quam, vitae tempor dui. Integer quam augue, ultricies sed facilisis vel, tempus sit amet libero. Pellentesque molestie scelerisque augue eget tristique. Nunc eu urna vitae sapien tincidunt tempus a sed libero. Donec vitae dui porttitor, porta libero non, dictum augue.<p>
            </div>
        </div>
    </div>
    </div>
</div>




<?php include('footer.php'); ?>

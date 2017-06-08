<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<link href="css/table.css" type="text/css" rel='stylesheet'>
<head>
    <title>Contact</title>
</head>

<style>

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



    .second-row p, .second-row h3{
        color: #6e6e6e;
    }

    body {
    background: #ffffff ;
}

</style>
    <div class='row single-block content-block'>
            <div class='col-md-6 col-md-offset-3'>
            <h1 class='text-center'>Neem Contact met ons op</h1>
            <h3 class='text-center underline'>moet hier nog een underline?</h3>
            <form>

                <div class="form-group col-sm-6">
                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Voornaam">
                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Achternaam">
                </div>

                <div class="form-group col-sm-6">
                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Email">

                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
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




<?php include('footer.php'); ?>

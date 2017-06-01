<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<link href="css/aanvraag.css" rel="stylesheet">
<link href="css/table.css" type="text/css" rel='stylesheet'>

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

    p, h1{
        color:white !important;
    }

    h1{
        margin-top: 35vh;
    }

.popup{
    min-height:5vh;
    position:absolute;
    right:0px;
    top:44vh;
    width:180px;
    background:#ff6800;
    opacity: 0;
    transition: 0.5s all;
    padding: 20px;
    border-radius: 4px 0px 0px 4px;
    color: #fff;
    font-size: 18px;
}
.popup>a{
  border: solid 1px #fff;
  padding: 5px;
  background-color: #fff;
  color: #ff6800;
  text-decoration: none;
  border-radius: 4px;
  margin-top: 15px;

}
.popup>a:hover{
  border: solid 1px #fff;
  padding: 5px;
  color: #fff;
  background-color: transparent;
  text-decoration: none;
  border-radius: 4px;
  margin-top: 15px;
}
</style>
<div class='container-fluid'>
    <div class='row'>
        <div class='col-md-6 content-block content-left'>
            <?php include('process/calculator.php');?>

        </div>
        <div class='col-md-6 content-block content-right'>
            <h1 class='text-center'  id='price'>€0</h1>
            <button class='button center-block' form="form"><p>Bereken</p></button>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>

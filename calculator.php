<?php $title = 'Bereken kosten';
include('header.php'); ?>
<?php include('navbar.php'); ?>
<link href="css/calculator.min.css" rel="stylesheet">
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
<script>
    $("#form").submit(function (e) {
        var url = "<?php echo current_link();?>process/calculator_process.php"; // the script where you handle the form input.
        console.log($("#form").serialize());
        $.ajax({
            type: "POST",
            url: url,
            data: $("#form").serialize(), // serializes the form's elements.
            success: function (data){
                var obj = JSON.parse(data);
                console.log(obj.price);
                var objPrice = obj.price;
                var price = objPrice.toLocaleString(undefined, { minimumFractionDigits: 2 });
;

                $('#price').html('<p>â‚¬ '+price+'</p>')
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
</script>

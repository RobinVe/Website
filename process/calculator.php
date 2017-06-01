<head>
    <meta charset="utf-8">
</head>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
 </script>
<div class='container-fluid'>
    <div class='row'>
        <form enctype="multipart/form-data" id='form'>
<?php


$array_1 = array(
    1    => 'Keuze uit Templates',
    2    => 'Uw eigen design',
    3    => 'Nieuw ontwerp',
);

$array_2 = array(
    4    => 'WordPress CMS',
    5    => 'WordPress Webshop',
    6    => 'Bootstrap Platform',
    7    => 'Tot 50GB dataverkeer',
    8    => 'Tot 100GB dataverkeer',
    9    => 'Variabele up & down scaling',
    10    => 'SSL Certificaat',
    11    => 'Standaard server',
    12    => 'SSD server',
    13    => 'Technische Zoekmachine Optimalisatie',
    14    => 'Inhoudelijke Zoekmachine Optimalisatie',
    15    => 'Social Media deelbuttons',
);

$array_3 = array(

    16    => 'URL behoud',
    17    => 'Zoekfunctie',
    18    => 'Zoekfunctie maatwerk',
    19    => 'Chatfunctie',
    20    => 'Download functionaliteit',
    21    => 'Cookie controle',
    22    => 'Formulieren',
    23    => 'Blog & Nieuwsberichten',
    24    => 'Klanten omgeving',
    25    => 'Meertalige website',
    26    => 'Testimonials',
    27    => 'RSS Feed',
);

$array_4 = array(
    28    => 'Google Maps',
    29    => 'Antivirus Software',
    30    => 'Mailchimp koppeling',
    31    => 'Google Analytics',
    32    => 'Teksten schrijven',
    33    => 'WordPress Training',
    34    => 'Adword Campagne',
    35    => 'Service Level Agreement maatwerk',
    36    => 'Algemene Voorwaarden',
    37    => 'Online KPI management',
    38    => 'Customer Journey Program'
);
// na google maps : 	>'Overige diensten',;
// na ssdserver : 	>'	>'Website opties,
// na bootstrap platform : 	>'	>'Website opties,
// na niue ontwerp : 	>'	>'	>'Techniek,,

$price_list = array(
    1=>'100',
    2=>'750',
    3=>'1500',
    4=>'100',
    5=>'250',
    6=>'1500',
    7=>'50',
    8=>'150',
    9=>'250',
    10=>'150',
    11=>'50',
    12=>'150',
    13=>'250',
    14=>'750',
    15=>'50',
    16=>'75',
    17=>'50',
    18=>'250',
    19=>'250',
    20=>'150',
    21=>'50',
    22=>'150',
    23=>'150',
    24=>'1750',
    25=>'2500',
    26=>'500',
    27=>'250',
    28=>'50',
    29=>'500',
    30=>'150',
    31=>'250',
    32=>'2500',
    33=>'750',
    34=>'500',
    35=>'650',
    36=>'750',
    37=>'1500',
    38=>'2500'
);

echo "<div class='col-md-3'><h3 class='text-center'>Design</h3>";
foreach ($array_1 as $key => $value) {
    $price = $price_list[$key];
    echo "<div class='option'><label><p>$value<input type='checkbox' name='optie$key' value='$key' ></p></label></div>";
}
echo "</div><div class='col-md-3'><h3 class='text-center'>Techniek</h3>";
foreach ($array_2 as $key => $value) {
    $price = $price_list[$key];
    echo "<div class='option'><label><p>$value<input type='checkbox' name='optie$key' value='$key' ></p></label></div>";
}
echo "</div><div class='col-md-3'><h3 class='text-center'>Techniek</h3>";
foreach ($array_3 as $key => $value) {
    $price = $price_list[$key];
    echo "<div class='option'><label><p>$value<input type='checkbox' name='optie$key' value='$key' ></p></label></div>";
}
echo "</div><div class='col-md-3'><h3 class='text-center'>Overige Diensten</h3>";
foreach ($array_4 as $key => $value) {
    $price = $price_list[$key];
    echo "<div class='option'><label><p>$value<input type='checkbox' name='optie$key' value='$key' ></p></label></div>";
}
echo "</div>";
?>
</form>
  </div>

</div>
<script src='js/send.js'></script>

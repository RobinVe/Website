<?php
    $title = 'Home';
    require 'header.php';
    ?>
<link href="css/index.min.css" type="text/css" rel='stylesheet'>
<?php require 'navbar.php'; ?>
<div class="container-fluid">
<div class='row'>
	<div class='single-slide' id="home" name='home'>
		<div class='landing content-block col-md-6 col-md-offset-3'>
			<h1 class='text-center'>Professionele websites vanaf 499,-</h1>
			<hr>
			<h3 class='text-center'><i>Full Service | No Nonsens | Innovatief</i></h3>
		</div>
		<a href='indexv2.php#Pakketten'>
			<div class='col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1 ghost hidden-xs'>
				<p class='text-center'>Bekijk ons aanbod</p>
			</div>
		</a>
	</div>
	<div class='single-slide' id="Pakketten" name='Pakketten'>
		<div class='col-md-12  block-back'>
			<div id="container">
				<div class="whole">
					<div class="type">
						<p>Starter</p>
					</div>
					<div class="plan">
						<div class="header">
							<span>€</span>499
							<p class="month">€35 per maand</p>
						</div>
						<div class="content">
							<ul>
								<li>WordPress CMS</li>
								<li>Keuze uit Templates</li>
								<li>5 GB Dataverkeer</li>
								<li>8 GB Schrijfruimte</li>
								<li>1 MYSQL Database</li>
								<li>Shared Server</li>
								<li>Domeinregistratie</li>
								<li>10 Emailboxen</li>
								<li>2 GB Email geheugen</li>
								<li>Full Service Support</li>
								<li> - </li>
							</ul>
						</div>
						<a href="<?php echo current_link();?>starter.php" class="more-link">
							<div class='more-button'>
								Bekijk
							</div>
						</a>
					</div>
				</div>
				<div class="whole">
					<div class="type standard">
						<p>Basic</p>
					</div>
					<div class="plan">
						<div class="header">
							<span>€</span>999
							<p class="month">€69 per maand</p>
						</div>
						<div class="content">
							<ul>
								<li>WordPress CMS</li>
								<li>Template met maatwerk</li>
								<li>15 GB Dataverkeer</li>
								<li>25 GB Schrijfruimte</li>
								<li>2 MYSQL Databases</li>
								<li>VPN server</li>
								<li>Domeinregistratie</li>
								<li>40 Emailboxen</li>
								<li>10 GB Email geheugen</li>
								<li>Full Service Support</li>
								<li>+ 4 extra's</li>
							</ul>
						</div>
						<a href="<?php echo current_link();?>basic.php" class="more-link">
							<div class='more-button'>
								Bekijk
							</div>
						</a>
					</div>
				</div>
				<div class="whole ">
					<div class="type ultimate">
						<p>Premium</p>
					</div>
					<div class="plan">
						<div class="header">
							<span>€</span>2.499
							<p class="month">€129 per maand</p>
						</div>
						<div class="content">
							<ul>
								<li>Bootstrap Platform</li>
								<li>Eigen design</li>
								<li>Onbeperkte Dataverkeer</li>
								<li>95 GB Schrijfruimte</li>
								<li>10 MYSQL Databases</li>
								<li>VPN server</li>
								<li>Domeinregistratie</li>
								<li>80 Emailboxen</li>
								<li>35 GB Email geheugen</li>
								<li>Dedicated Full Service Support</li>
								<li>+ 15 extra's</li>
							</ul>
						</div>
						<a href="<?php echo current_link();?>premium.php" class="more-link">
							<div class='more-button'>
								Bekijk
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class='popup hidden-xs'><i class="fa fa-times" aria-hidden="true" id="hide"></i> Wilt u zelf een pakket samen stellen? <br><a href="<?php echo current_link();?>calculator.php">Klik hier!</a></div>
	</div>
	<div class='double-slide' id='Procces' name='Proces'>
		<div class='main flex topside fixheight col-md-12'>
			<div class='flex-center'>
				<h2 class=''>BINNEN 4 UUR EEN COMPLETE WEBSITE</h2>
				<div class='ghost ghost-proces col-md-6 col-md-offset-3 hidden-xs'>
					<a href='#Contact'>
						<p>Ja ik heb hulp nodig</p>
					</a>
				</div>
			</div>
		</div>
		<div class='main'>
			<div class='col-md-10 col-md-offset-1 flex' style='min-height:50vh;'>
				<div class='three-blocks col-md-4 col-xs-12 flex-center' style='min-height: 40vh;'>
					<div classs='customtextblock col-md-10 col-md-offset-1'>
						<div class='circleheader center-block'>
							<h1 class='center-block text-center title-number'>1</h1>
						</div>
						<h2 class='text-center'>KIES HET PRODUCT</h2>
						<p>Gezien de diverse wensen hebben wij 3 pakketten vooraf voor u samengesteld.
							Kies een pakket dat past bij uw wensen.<br>
							Neem goed in overweging wat uw doelstellingen zijn en wat u wilt bieden voor uw bezoekers.<br>
							Wij helpen u graag wanneer u zelf niet weet wat het beste bij u past.<br>
							Neem gerust contact op met één van onze Client Succes Agents.
						</p>
					</div>
				</div>
				<div class='three-blocks col-md-4 col-xs-12 flex-center' style='min-height: 40vh;'>
					<div classs='customtextblock col-md-10 col-md-offset-1'>
						<h1 class='title-number text-center'>2</h1>
						<h2 class='text-center'>U STUURT DE CONTENT</h2>
						<p>
							Wij bieden de service om een nieuwe website binnen 4 werkuren op te leveren.<br>
							Om onze oplevertijden te honoreren is het van belang dat u alle content goed voorbereid.<br>
							Wij verzorgen een roadmap dat u stapje voor stapje begeleid door het proces.<br>
							Dit onderdeel is het enige component waar u zelf in dient te investeren. Het kost u maximaal 3 werkuren. Mocht u vastlopen of geen idee hebben waar te starten en wat te schrijven bieden wij uiteraard een service aan waarbij één van onze communicatie specialisten dit onderwerp volledig van u ontzorgt.
						</p>
					</div>
				</div>
				<div class='three-blocks col-md-4 col-xs-12 flex-center' style='min-height: 40vh;'>
					<div classs='customtextblock col-md-10 col-md-offset-1'>
						<h1 class='title-number text-center'>3</h1>
						<h2 class='text-center'>LIVE!</h2>
						<p>
							Wanneer wij alle content binnen hebben gaan onze specialisten aan de slag. Afhankelijk van het pakket en extra diensten leveren wij de beta versie binnen 4 werkuren. <br>Onze Client Succes Agents lopen samen met u door de beta versie heen en verrichten de laatste punten op de i.<br>
							Na uw akkoord staat de website binnen 20 minuten live en kunt u beginnen met de online kansen te benutten.<br>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class='double-slide vertical-slide row' id='Full-Service' name='Full-Service' style='margin:0px;'>
		<div class='main col-md-6 leftside'>
			<div class='row'>
				<h2 class='text-center fullservicetext'>Wat betekent Full Service?</h2>
				<div class='col-md-6 col-md-offset-3 col-xs-12 fullservicepara'>
					<p>U bent ondernemer en u bent daar goed in. Wij weten als geen ander dat tijd maar één keer besteed kan worden en dat u dient te focussen op uw organisatiedoelstellingen.
						360WEB biedt daarom een volledige ontzorging v.w.t. uw online performances.
					</p>
					<p>U hoeft geen technische kennis te hebben of dure marketing experts in te schakelen. U rust automatisch mee op onze kennisbank en onze collega’s verzorgen continu de invulling van uw wensen. Of u nu 3x per een andere tekst wilt hebben of dat u behoefte heeft aan een nieuwe feature, alles kan!</p>
					<p>Wanneer u complexere wensen heeft zoals bijvoorbeeld het koppelen van een CRM of leverancier software dan krijgt u korting die bij het pakket hoort.
						Hiernaast een duidelijk overzicht van de all-in service componenten per pakket:
					</p>
				</div>
			</div>
		</div>
		<div class='main col-md-6 zebra'>
			<div class='row stripe'>
				<div class='col-md-6'>
					<img class="center-block" src="img/starter.png" height="30">
					<h3 class='text-center'>Starter</h3>
				</div>
				<div class='col-md-6'>
					<p>Respondtime 4 werkuren</p>
					<ul class='rewards'>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>
							<span>Het wijzigen van teksten</span>
						</li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>
							<span>Aanpassingen voor e-mailboxen</span>
						</li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>
							<span>Foto’s en video’s wijzigen</span>
						</li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>
							<span>Pagina’s toevoegen, aanpassen of verwijderen</span>
						</li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>
							<span>Google Analytics</span>
						</li>
					</ul>
				</div>
			</div>
			<div class='row stripe'>
				<div class='col-md-6'>
					<img class="center-block" src="img/basic.png" height="30">
					<h3 class='text-center'>Basic</h3>
				</div>
				<div class='col-md-6 '>
					<p>Respondtime 2 werkuren</p>
					<ul class='rewards'>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i><span>Basic plus</span></li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i><span>Bekijk het gedrag van uw bezoekers</span></li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i><span>Google Analytics adviesrapporten op maat</span></li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i><span>Performance meetingen en proactief</span></li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i><span>Extra Backups</span></li>
					</ul>
				</div>
			</div>
			<div class='row stripe'>
				<div class='col-md-6'>
					<img class="center-block" src="img/premium.png" height="30">
					<h3 class='text-center'>Premium</h3>
				</div>
				<div class='col-md-6'>
					<p>Respondtime 15 minuten binnen openingstijden</p>
					<ul class='rewards'>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i><span>Premium plus</span></li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i><span>Een eigen telefoonnummer</span></li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i><span>Een vast aanspreekpunt</span></li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i><span>Support voor externe software van de website</span></li>
						<li><i class="fa fa-check-circle-o" aria-hidden="true"></i><span>Customer Journey Advies rapporten</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class='single-slide flex' id='Contact' name='Contact' >
		<div class='col-md-6 col-md-offset-3 col-xs-12 flex-center'>
			<h1 class='text-center'>Neem contact met ons op!</h1>
			<h3 class='text-center underline'>Binnen 15 werkdag nemen we contact met u op!</h3>
			<form class='form' enctype="multipart/form-data">
				<div class="form-group col-md-12">
					<input type="text" class="form-control" name='name' placeholder="Naam" required>
					<input type="text" class="form-control" name='telephone' placeholder="Email" required>
				</div>

				<div class="form-group col-md-12">
					<textarea class='form-control' name='message' placeholder="Bericht" rows="4" required></textarea>
				</div>
				<div class="form-group col-sm-12">
					<button type="submit" class="btn-contact">
						<p>Versturen</p>
					</button>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>
<script src='js/submit.js'></script>
</body>

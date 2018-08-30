<link rel="stylesheet" type="text/css" href="app/css/contact.css">

<div class="container contact-container">

	<div class="row contact-header">
		<div
			class="col-xs-6 col-xs-offset-3 col-md-2 col-md-offset-5 text-center">
			<h2>Kontakt</h2>
			<hr style="border-top: 1px solid #000 !important;">
		</div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-4 col-md-offset-2 text-left">
			<div class="form-group">
				<label for="phone">Naš telefon:</label>
				<h2 id="phone">06023890128937</h2>
			</div>
			
			<hr style="border-top: 1px solid #000 !important; width:70%">
			
			<div class="form-group">
				<label for="email">Naša email adresa:</label>
				<h2 id="email">blabla@gmail.com</h2>
			</div>

			<hr style="border-top: 1px solid #000 !important; width:70%">
			
		</div>

		<div class="col-xs-12 col-md-5">
			<form action="app/actions/send_mail.php" method="post">
				<div class="form-group">
					<label for="name">Ime *</label> <input
						type="text" class="form-control" id="name" name="name"
						placeholder="Unesite vaše ime">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Email *</label> <input
						type="email" class="form-control" id="exampleInputEmail1"
						aria-describedby="emailHelp" placeholder="Unesite vaš email">
				</div>

				<div class="form-group">
					<label for="textarea">Recite nam nešto više o vama i idejama za venčanje</label>
					<textarea class="form-control" id="textarea" rows="5"></textarea>
				</div>


				<button type="submit" class="btn btn-primary center-block">Pošalji</button>
			</form>
		</div>

	</div>

</div>

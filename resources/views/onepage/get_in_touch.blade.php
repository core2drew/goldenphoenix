<div class="ui fluid container section" id="GetInTouch" ng-controller="ContactController as ctrl">
	<div class="ui container">
		<h1 class="ui header">Get In Touch</h1>
		<p class="text">
			Let us know what you think about us and we'll get in touch with you!
		</p>
	</div>

	<div class="ui fluid container" id="ContactDetails">
		<div class="ui container grid">
			<div class="two column row">
				<div class="column">
					<form id="SendMail" class="ui form" name="contactForm" ng-submit="ctrl.sendMail(contactForm.$valid)" novalidate>
						<div class="ui dimmer">
							<div class="ui text loader">Sending</div>
						</div>
						<div class="fields">
							<div class="eight wide field" ng-class="{'error':contactForm.fullname.$invalid && ctrl.contactSubmitted}">
								<input ng-model="ctrl.inquirer.fullname" name="fullname" type="text" placeholder="Full Name" required>
							</div>
							<div class="eight wide field" ng-class="{'error':contactForm.email.$invalid && ctrl.contactSubmitted}">
								<input ng-model="ctrl.inquirer.email" name="email" type="email" placeholder="Email Address" required>
							</div>
						</div>
						<div class="field" ng-class="{'error':contactForm.subject.$invalid && ctrl.contactSubmitted}">
							<input ng-model="ctrl.inquirer.subject" name="subject" type="text" placeholder="Subject" required>
						</div>
						<div class="field" ng-class="{'error':contactForm.message.$invalid && ctrl.contactSubmitted}">
							<textarea ng-model="ctrl.inquirer.message" name="message" placeholder="Message" required></textarea>
						</div>
						<button type='submit' class="ui button basic">Send</button>
					</form>
				</div>
				<div class="column">
					<div id="ContactUsDetails">
						<h2 class="ui header">
							Contact Us
						</h2>
						<p class="text">
							We ship nation wide , in all regions possible from Luzon, 
							Visayas and Mindanao
						</p>

						<div class="details">
							<i class="marker icon"></i>
							<p class="text">
								Room 706, Noah's Ark Bldg, Escolta Manila, Philippines
							</p>
						</div>

						<div class="details">
							<i class="call icon"></i>
							<p class="text">
								+63(2) 522-872
							</p>
						</div>

						<div class="details">
							<i class="mail icon"></i>
							<p class="text">
								sales@goldenphoenix.ph
							</p>
						</div>

						<div id="Footer">2017 Golden Phoenix All rights reserved.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

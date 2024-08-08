<?php require_once 'components/header/header.php'; ?>
	
	<section id="servicesHero" class="hero container-xxl text-center my-3">
		<h3 class="my-4 bg-slogans three">Design</h3>
		<h3 class="my-4 bg-slogans three">Development</h3>
		<h3 class="my-4 bg-slogans three">Deployment</h3>
	</section>

	<section id="services" class="container-xxl my-3 text-center bg-light">
		<h2 class="mb-3">Services</h2>
		<p class="my-4">Here's a cost estimate. Prices confirmed following discussion.</p>
		<div id="services_inner">
			<div class="service_option">
				<img src="img/headerLogo.jpg" alt="Logo" class="serviceLogo" />
				<h4>Basic</h4>
				<ul>
					<li>Single page website</li>
				</ul>
				<span><strong>€100</strong></span>
			</div>
			<div class="service_option">
				<img src="img/headerLogo.jpg" alt="Logo" class="serviceLogo" />
				<h4>Standard</h4>
				<ul>
					<li>Multi page website</li>
					<li>Header menu</li>
				</ul>
				<span><strong>€150</strong></span>
			</div>
			<div class="service_option">
				<img src="img/headerLogo.jpg" alt="Logo" class="serviceLogo" />
				<h4>Premium</h4>
				<ul>
					<li>Multi page website</li>
					<li>Header menu</li>
					<li>Contact form</li>
					<li>Custom email address</li>
				</ul>
				<span><strong>€200</strong></span>
			</div>
		</div>
	</section>
	
	<section id="aboutHero" class="hero container-xxl text-center my-3">
		<div id="divHero">
			<h3 class="my-4 bg-slogans two">Professional Delivery</h3>
			<h3 class="my-4 bg-slogans two">Affordable Prices</h3>
		</div>
	</section>

	<section id="about" class="container my-3 p-5 text-center bg-light">
		<h2>About</h2>
		<div>
			<p>I'm a software and website developer with around 7 years experience. I can put a website like this together very quickly.</p>
			<p>As you can see, I have a minimalist approach. I'm passionate about user experience and specialise in quick turnaround.</p>
			<p>I'm a good communicator and will happily keep you in the loop as much as you wish, throughout the process.</p>
			<p>Approx starting rate for design, development, domain name and hosting (keeping your website online) for 1 year is €100.</p>
			<p>Take advantage of professional delivery at low prices while I'm still building my portfolio.</p>
		</div>
	</section>

	<section id="codingskillsHero" class="hero container-xxl text-center my-3">
		<div id="divHero">
			<h3 class="my-4 bg-slogans two">Clean Design</h3>
			<h3 class="my-4 bg-slogans two">Clean Code</h3>
		</div>
	</section>

	<section id="codingskills" class="container-xxl my-3 p-5 text-center bg-light">
		<h2 class="mb-3">Coding Skills</h2>
		<div class="row">
			<div class="card col-md-4 col-lg">
				<div class="card-body p-4">
					<h3 class="card-title">Frontend</h3>
					<ul>
						<li>HTML 5</li>
						<li>CSS 3</li>
						<li>LESS</li>
						<li>Tailwind</li>
						<li>Bootstrap 5</li>
						<li>JavaScript</li>
						<li>TypeScript</li>
						<li>Node.js</li>
						<li>Vue.js</li>
						<li>Angular</li>
						<li>Razor</li>
					</ul>
				</div>
			</div>
			<div class="card col-md-4 col-lg">
				<div class="card-body p-4">
					<h3 class="card-title">Backend</h3>
					<ul>
						<li>ASP.NET (Web Forms, Core, MVC)</li>
						<li>C#</li>
						<li>LINQ</li>
						<li>Testing (NUnit)</li>
						<li>PHP</li>
						<li>Laravel</li>
						<li>Shopify Liquid</li>
						<li>VBA</li>
					</ul>
				</div>
			</div>
			<div class="card col-md-4 col-lg">
				<div class="card-body p-4">
					<h3 class="card-title">Data</h3>
					<ul>
						<li>SQL</li>
						<li>SSRS</li>
						<li>Entity Framework</li>
						<li>ADO</li>
						<li>Ajax</li>
						<li>JSON</li>
						<li>XML</li>
						<li>Umbraco</li>
					</ul>
				</div>
			</div>
			<div class="card col-md-4 col-lg">
				<div class="card-body p-4">
					<h3 class="card-title">Version Control</h3>
					<ul>
						<li>Git</li>
						<li>SVN</li>
						<li>TFS</li>
					</ul>
				</div>
			</div>
			<div class="card col-md-4 col-lg">
				<div class="card-body p-4">
					<h3 class="card-title">Other</h3>
					<ul>
						<li>WordPress</li>
						<li>Shopify</li>
						<li>MailChimp</li>
						<li>Klaviyo</li>
						<li>SendInBlue</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section id="contactHero" class="hero container-xxl text-center my-3">
		<div id="divHero">
			<h3 class="my-4 bg-slogans one">Ask Me Anything</h3>
		</div>
	</section>

	<section id="contact" class="container-xxl my-3 text-center bg-light">
		<form class="col-md-10 offset-md-1" method="post" name="myemailform" action="form-to-email.php">

			<div class="row justify-content-between">
				<h2 class="mb-4">Contact</h2>
				
				<div class="d-none">
					<input type="text" name="website" placeholder="website" />
				</div>
				<div class="col-sm-4">
					<input type="text" name="name" placeholder="Your Name" class="p-2 w-100" />
				</div>
				<div class="col-sm-4">
					<input type="tel" name="phonenumber" placeholder="Phone Number" class="p-2 w-100" />
				</div>
				<div class="col-sm-4">
					<input type="email" name="emailAddress" placeholder="Email Address" class="p-2 w-100" />
				</div>
			</div>

			<div class="row mt-4">
				<div class="col">
					<textarea name="message" placeholder="Insert your message" rows="5" class="w-100 p-3"></textarea>
				</div>
			</div>
				
			<div class="row mt-4">
				<div class="col">
					<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-outline-danger" />
				</div>
			</div>
			
		</form>
	</section>

<?php require_once 'components/footer/footer.php'; ?>
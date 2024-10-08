<?php require_once 'components/header/header.php'; ?>
<?php require_once 'functions/send_email.php'; ?>
	
	<section id="aboutHero" class="hero container-xxl text-center my-3">
		<h3 class="my-4 bg-slogans three">Design</h3>
		<h3 class="my-4 bg-slogans three">Development</h3>
		<h3 class="my-4 bg-slogans three">Deployment</h3>
	</section>

	<section id="about" class="container my-3 p-5 text-center bg-light">
		<h2>About</h2>
		<div>
			<p>Wtih almost 10 years' experience developing and designing software and website applications, I can put a website like this together very quickly.</p>
			<p>The website you're looking at is an of my minimalist and creative design skills. I'm passionate about keeping user experiences simple, and therefore specialise in quick turnaround.</p>
			<p>I'm a proactive and articulate communicator and will happily keep you in the loop as much or as little as you like, throughout the process.</p>
			<p>Approx starting rate for my services is £100. Free quotations provided upon discussion.</p>
			<p>Take advantage of professional delivery at low prices while I'm still building my portfolio.</p>
		</div>
	</section>

	<section id="servicesHero" class="hero container-xxl text-center my-3">
		<div id="divHero">
			<h3 class="my-4 bg-slogans two">Professional Delivery</h3>
			<h3 class="my-4 bg-slogans two">Affordable Prices</h3>
		</div>
	</section>

	<section id="services" class="container-xxl my-3 text-center bg-light">
		<h2 class="mb-3">Services</h2>
		<p class="my-4">The following is a cost estimate. Prices confirmed following discussion.</p>
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
		
		<form class="col-md-10 offset-md-1" id="contact_form" method="post">

			<div class="row justify-content-between">
				<h2 class="mb-4">Contact</h2>
				
				<div class="d-none">
					<input type="text" name="website" placeholder="website" />
				</div>

				<div class="col-sm-6">
					<input id="contact_name" type="text" name="name" placeholder="Your Name"  value="<?php echo isset($_POST['name']) ? $name : ''; ?>" class="p-2 w-100" />
				</div>
				
				<div class="col-sm-6">
					<input id="contact_email" type="email" name="email" placeholder="Email Address"  value="<?php echo isset($_POST['email']) ? $email : ''; ?>" class="p-2 w-100" />
				</div>
			</div>

			<div class="row mt-4">
				<div class="col">
					<textarea id="contact_message" placeholder="Insert your message" name="message" rows="5" class="w-100 p-3"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
				</div>
			</div>
		
			<?php if ($msg != ''): ?>
				<div class="alert <?php echo $msgClass; ?>">
					<?php echo $msg; ?>
				</div>
			<?php endif; ?>
				
			<div class="row mt-4">
				<div class="col">
					<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-outline-danger" />
				</div>
			</div>
			
		</form>
	</section>

<?php require_once 'components/footer/footer.php'; ?>
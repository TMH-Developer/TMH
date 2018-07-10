<?php /*Variables de la página*/
$web_data_title="The Minecraft Hosting: El Mejor Hosting para Servidores de Minecraft";
$web_data_meta_description="The Minecraft Hosting ofrece el mejor servicio de hosting para tu servidor de minecraft. Contamos con los mejores precios, soporte y estabilidad para tu servidor de Minecraft.";
$web_data_meta_keywords="minecraft hosting, minecraft server hosting, free minecraft server hosting, free minecraft hosting,best minecraft hosting, cheap minecraft hosting, best minecraft hosting, the minecraft hosting, best minecraft server hosting, minecrafthosting, hosting para minecraft, host de minecraft, host para minecraft, host minecraft";
 ?>

  <?php include 'header.php';?>
  <div class="home-splash p-0">
    <video autoplay loop class="w-100" poster="https://78.media.tumblr.com/tumblr_p9aimksXSZ1xub7bd_smart1.jpg">
        <source src="https://tmhtumbler.tumblr.com/video_file/t:b7Bg-Ha9SftxugxPRjt1ag/174242840599/tumblr_p9aimksXSZ1xub7bd/480" preload="none" muted type="video/mp4">
    </video>
    <div class="container" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
        <div class="home-intro text-center">
            <p style="font-size: 4vw;background-color: #ffffffd9;border-radius: 25px;display: inline-block;padding-left: 1rem;padding-right: 1rem;"><font color="#2A6EEB">Bienvenido a </font><span class="font-weight-bold"><font color="3F93FF">The Minecraft Hosting</font></span></p>
        </div>
    </div>
  </div>
  <div class="content-wrapper">
      <div class="features">
          <div class="container">
              <div class="feature-intro">
                  <h1 class="display-4 font-weight-bold">El Mejor Hosting de Minecraft</h1>
                  <h3 class="font-weight-bold text-secondary"><span style="border-bottom: #009933 2px solid;"><i class="fas fa-memory"></i> Hardware Dedicado </span>&nbsp;<span style="border-bottom: #ccff00 2px solid;"><i class="fas fa-tachometer-alt"></i> Mejor Rendimiento </span>&nbsp;<span style="border-bottom: #06c 2px solid;;"> <i class="fas fa-hand-holding-usd"></i> Precios Increíbles</span></h3>
                  <!---<p>Use Promo Code: <b><font color="red">WEB</font></b> for <font color="red">10%</font> Off Lifetime</p>-->
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <div class="feature">
                        <i class="fas fa-server fa-3x"></i>
                          <p class="feature-title" ALIGN=center>Baja Latencia</p>
                          <p class="feature-desc">The Minecraft Hosting proporciona servidores de Minecraft con muy baja latencia, usando la tecnología que hemos desarrollado en nuestros Datacenters. Estámos muy orgullosos de ofrecer nuestro hosting para minecraft para todo el mundo.</p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="feature">
                          <i class="fas fa-lock fa-3x"></i>
                          <p class="feature-title">Seguridad</p>
                          <p class="feature-desc">The Minecraft Hosting te ofrece la mejor proteccion DDoS para tu servidor de minecraft. También todos tus datos y pagos estan encriptados completamente con SSL y seguridad extra que ofrecemos en The Minecraft Hosting.</p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="feature">
                          <i class="fas fa-upload fa-3x"></i>
                          <p class="feature-title">Almacenamiento Ilimitado</p>
                          <p class="feature-desc">Cuando eligues The Minecraft Hosting estas eligiendo libertad! En The Minecraft Hosting te ofrecemos disco duro SSD ilimitado para tu servidor de minecraft y slots ilimitados!</p>
                      </div>
                  </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">
                      <div class="feature">
                          <i class="far fa-check-circle fa-3x"></i>
                          <p class="feature-title">RAM Dedicado</p>
                          <p class="feature-desc">The Minecraft Hosting te da la memoria Ram completa que compraste para tu hosting, con un rendimiento maximo gracias al hardware que usamos! Con nosotros tendras una experiencia increible en tu hosting para minecraft.</p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="feature">
                          <i class="fas fa-comments fa-3x"></i>
                          <p class="feature-title">24/7/365 Soporte</p>
                          <p class="feature-desc">The Minecraft Hosting ofrece un increible soporte por livechat y tambien en tickets desde el area de cliente. Nuestro equipo de staff contestara y te ayudara en todos tus dudas para arreglarlas en tu servidor de minecraft.</p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="feature">
                          <i class="far fa-clock fa-3x"></i>
                          <p class="feature-title">99.99% tiempo de actividad</p>
                          <p class="feature-desc">The Minecraft Hosting proporciona un 99.99% uptime, para asegurar que tu servidor esta en linea todo el tiempo. Nosotros no sabemos lo que es downtime por eso siempre eligue TheMinecraftHosting.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="fluid-container contenedor-selector">
      <div class="container">
        <h2 class="maintitle tinymarginbtm">¿Como elegir El Mejor Hosting De Minecraft?</h2>
        <p class="desc" style="font-size: 20px;">Selecciona que tipo de servidor de Minecraft necesitas y su ubicación.</p>
        <div class="break"></div>
        <div id="types">
            <a onClick="chooseType(1);" class="selector"><img src="img/pc-computer-with-monitor.svg" alt="Minecraft Edición para PC">Edición para PC</a>
            <a onClick="chooseType(2);" class="selector"><img src="img/smartphone.svg" alt="Edición Pocket Minecraft">Edición Pocket Minecraft</a>
        </div>
        <div id="pc">
            <a href="es/us-pc-plans.php" class="selector"><img class="selector-flag" src="img/flags/us.svg" alt="Minecraft Edición para PC - Estados Unidos">Estados Unidos</a>
            <a href="es/france-pc-plans.php" class="selector"><img class="selector-flag" src="img/flags/fr.svg" alt="Minecraft Edición para PC - Francia">Francia</a>
            <a href="es/poland-pc-plans.php" class="selector"><img class="selector-flag" src="img/flags/pl.svg" alt="Minecraft Edición para PC - Polonia">Polonia</a>
        </div>
        <div id="pocket">
            <a href="es/us-pe-plans.php" class="selector"><img class="selector-flag" src="img/flags/us.svg" alt="Edición Pocket Minecraft - Estados Unidos">Estados Unidos</a>
            <a href="es/france-pe-plans.php" class="selector"><img class="selector-flag" src="img/flags/fr.svg" alt="Edición Pocket Minecraft - Francia">Francia</a>
            <a href="es/poland-pe-plans.php" class="selector"><img class="selector-flag" src="img/flags/pl.svg" alt="Edición Pocket Minecraft - Polonia">Polonia</a>
        </div>
        <div class="bigbreak"></div>
        <div class="break"></div>
      </div>
    </div>
    <script>
        function chooseType(number) {
            if(number > 2 || number < 1) { return; }
            $("#types").fadeOut("medium");
            if(number == 1) {
                setTimeout(function() { $("#pc").fadeIn("medium"); }, 300);
            } else {
                setTimeout(function() { $("#pocket").fadeIn("medium"); }, 300);
            }
        }

        function scrollToSection(id, speed = "medium") {
            $('html,body').animate({scrollTop: $("#"+id).offset().top},speed);
        }
    </script>
    <div class="fluid-container testimoniales">
      <div class="container">
        <div class="row">
      		<div class="col-sm-12">
      			<h2>Mira lo que <b>Nuestros Clientes</b> Dicen de nosotros:</h2>
      			<div id="myCarousel" class="carousel slide" data-ride="carousel">
      				<!-- Carousel indicators -->
      				<ol class="carousel-indicators">
      					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      					<li data-target="#myCarousel" data-slide-to="1"></li>
      					<li data-target="#myCarousel" data-slide-to="2"></li>
      				</ol>
      				<!-- Wrapper for carousel items -->
      				<div class="carousel-inner">
      					<div class="item carousel-item active">
      						<div class="row">
      							<div class="col-sm-6">
      								<div class="testimonial-wrapper">
      									<div class="testimonial">Very good server hosting! Have 3 servers with them with very good support and amazing performance. I will be purchasing more servers next month!</div>
      									<div class="media">
      										<div class="media-left d-flex mr-3">
      											<img src="img/mc-head/001.jpg" alt="">
      										</div>
      										<div class="media-body">
      											<div class="overview">
      												<div class="name"><b>Paul W.</b></div>
      												<div class="details">LutherGaming</div>
      												<div class="star-rating">
      													<ul class="list-inline">
                                  <li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      													</ul>
      												</div>
      											</div>
      										</div>
      									</div>
      								</div>
      							</div>
      							<div class="col-sm-6">
      								<div class="testimonial-wrapper">
      									<div class="testimonial">I have had a great experience with TheMinecraftHosting. No lag issues or crashes. The server I owned (1gb) run perfectly with 10+ people and 30 or so plugins.</div>
      									<div class="media">
      										<div class="media-left d-flex mr-3">
      											<img src="img/mc-head/002.jpg" alt="">
      										</div>
      										<div class="media-body">
      											<div class="overview">
      												<div class="name"><b>Antonio M.</b></div>
      												<div class="details">NehruZone</div>
      												<div class="star-rating">
      													<ul class="list-inline">
                                  <li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      													</ul>
      												</div>
      											</div>
      										</div>
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>
      					<div class="item carousel-item">
      						<div class="row">
      							<div class="col-sm-6">
      								<div class="testimonial-wrapper">
      									<div class="testimonial">I have a 12GB with TheMinecraftHosting with 40 Plugins and 3 worlds and it's running very smooth. I recommend this minecraft server hosting for a network or a single server.</div>
      									<div class="media">
      										<div class="media-left d-flex mr-3">
      											<img src="img/mc-head/003.jpg" alt="">
      										</div>
      										<div class="media-body">
      											<div class="overview">
      												<div class="name"><b>Michael H.</b></div>
      												<div class="details">GhostTeam</div>
      												<div class="star-rating">
      													<ul class="list-inline">
                                  <li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      													</ul>
      												</div>
      											</div>
      										</div>
      									</div>
      								</div>
      							</div>
      							<div class="col-sm-6">
      								<div class="testimonial-wrapper">
      									<div class="testimonial">I had an issue with my server, and the staff were quick to reply and had my issue resolved within minutes. Brilliant service, would definitely recommend!</div>
      									<div class="media">
      										<div class="media-left d-flex mr-3">
      											<img src="img/mc-head/004.jpg" alt="">
      										</div>
      										<div class="media-body">
      											<div class="overview">
      												<div class="name"><b>Mary S.</b></div>
      												<div class="details">PearsonGaming</div>
      												<div class="star-rating">
      													<ul class="list-inline">
                                  <li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      													</ul>
      												</div>
      											</div>
      										</div>
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>
      					<div class="item carousel-item">
      						<div class="row">
      							<div class="col-sm-6">
      								<div class="testimonial-wrapper">
      									<div class="testimonial">I recommend TheMinecraft for the performance & pricing that they have. I got a 4GB server for only $8 and had a very good time playing.</div>
      									<div class="media">
      										<div class="media-left d-flex mr-3">
      											<img src="img/mc-head/005.jpg" alt="">
      										</div>
      										<div class="media-body">
      											<div class="overview">
      												<div class="name"><b>Dalton T.</b></div>
      												<div class="details">DaltonGaming</div>
      												<div class="star-rating">
      													<ul class="list-inline">
                                  <li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      													</ul>
      												</div>
      											</div>
      										</div>
      									</div>
      								</div>
      							</div>
      							<div class="col-sm-6">
      								<div class="testimonial-wrapper">
      									<div class="testimonial">I really liked their support. They were quick. I am comparing every host that I have to AnvilNode, and they are really close to beating AnvilNode.</div>
      									<div class="media">
      										<div class="media-left d-flex mr-3">
      											<img src="img/mc-head/006.jpg" alt="">
      										</div>
      										<div class="media-body">
      											<div class="overview">
      												<div class="name"><b>SynOfficial</b></div>
      												<div class="details">SynOfficial</div>
      												<div class="star-rating">
      													<ul class="list-inline">
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      														<li class="list-inline-item"><i class="fas fa-star"></i></li>
      													</ul>
      												</div>
      											</div>
      										</div>
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </div>
  <?php include 'footer.php';?>

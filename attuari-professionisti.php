<!DOCTYPE html>
<?php include("basedir.php"); ?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/font-awesome.css">
	<link rel="stylesheet" href="stylesheets/app.css">
	<link rel="stylesheet" href="stylesheets/style.css">

	<script src="javascripts/foundation/modernizr.foundation.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<title>Actuarial Consulting Services - I Nostri Consulenti</title><nav class="top-bar">
    <ul>
      <li class="name"><h1><a href="<?php echo $basedir;?>"><img src="images/logo.png" id="logo"/></a></h1></li>
      <li class="toggle-topbar"><a href="#"></a></li>
    </ul>
    <section>
      <ul class="right">
        <li><a href="<?php echo $basedir;?>">Home</a></li>
        <li><a href="studio-attuariale-chi-siamo.php">Chi Siamo</a></li>
        <li><a href="servizi-consulenza-attuariale.php">Servizi</a></li>
        <li><a href="attuari-professionisti.php">I Nostri Collaboratori</a></li>
        <li><a href="contact.php">Contatti</a></li>
      </ul>
    </section>
  </nav>
<div class="section-header"> <img src="images/attuari.jpg"/></div><br/><br/><?php if(!isset($_GET['lang']) or $_GET['lang'] == "it") { ?>
<div id="content" class="row">
  <div class="twelve columns">
    <h2>I Nostri Consulenti</h2>
    <p>La consulenza, frutto delle conoscenze e del coordinamento delle stesse, viene fornita da un gruppo di esperti consulenti, professionisti nel campo del marketing, dell’informatica e del settore finanziario, tutti profondi conoscitori del mercato di riferimento. </p>
    <p>Gli standard della consulenza sono elevati e la stessa viene fornita in tempi brevi e a costi contenuti. </p>
    <div style="padding-left:4em;">
      <ul>
        <li>Responsabili Valutazioni Attuariali:
          <table class="six">
            <tbody>
              <tr>
                <td>Dottor Stefano Bucci</td>
                <td>attuario iscritto all'Ordine dal 1987</td>
              </tr>
              <tr>
                <td>Dottor Attilio Cupido</td>
                <td>attuario iscritto all'Ordine dal 1991</td>
              </tr>
              <tr>
                <td>Dottor Domenico Cupido</td>
                <td>attuario iscritto all'Ordine dal 1991</td>
              </tr>
              <tr>
                <td>Dottor Umberto Trocino</td>
                <td>attuario iscritto all'Ordine dal 2005</td>
              </tr>
              <tr>
                <td>Dottor Marco  Colace</td>
                <td>attuario iscritto all'Ordine dal 2013</td>
              </tr>
            </tbody>
          </table>
        </li>
        <li>Coordinatore  Team di Attuari:
          <table class="six">
            <tbody>
              <tr>
                <td>Dr.ssa Carla Binnella</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;attuario iscritto all'Ordine dal 2004</td>
              </tr>
            </tbody>
          </table>
        </li>
        <li>Direzione Scientifica e Coordinamento Tecnico della ACS:
          <table class="six">
            <tbody>
              <tr>
                <td>Professor Enzo Ciminelli</td>
                <td>Professore Associato della Facoltà di Statistica dell’Università di Roma “La Sapienza”, docente della cattedra di “Tecnica Attuariale delle Assicurazioni contro i Danni”</td>
              </tr>
            </tbody>
          </table>
        </li>
      </ul>
    </div>
  </div>
</div><?php } else { ?>
<!-- ENGLISH--><?php } ?><footer class="row">
  <div class="twelve columns"><hr />
    <div class="row">

      <div class="six columns">
          <p>&copy; Copyright ACS 2012.</p>
      </div>

      <div class="six columns">
        <ul class="link-list right">
          <li><a href="<?php echo $basedir;?>">Home</a></li>
          <li><a href="contact.php">Contatti</a></li>
        </ul>
      </div>

    </div>
  </div>
</footer><!-- Included JS Files (Uncompressed) -->
	<script src="javascripts/foundation/jquery.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.forms.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.topbar.js"></script>
	
	<script src="javascripts/foundation/jquery.event.move.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.magellan.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.clearing.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.tooltips.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.reveal.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.tabs.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.buttons.js"></script>
	
	<script src="javascripts/foundation/jquery.placeholder.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.navigation.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.mediaQueryToggle.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.accordion.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.alerts.js"></script>
	
	<script src="javascripts/foundation/jquery.cookie.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.orbit.js"></script>
	
	<script src="javascripts/foundation/jquery.event.swipe.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.joyride.js"></script>
	

  <!-- Application Javascript, safe to override -->
  <script src="javascripts/jquery.grid-a-licious.min.js"></script>
  <script src="javascripts/foundation/app.js"></script>
  <script src="javascripts/script.js"></script>
</body>
</html>
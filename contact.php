<?php
	if ($_POST["submit"]) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'anthony@wbdsn.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>js</title>
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
	

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="all">
        
        <link href="main.css" rel="stylesheet" media="all">
    </head>
    <body>






  <div class="navbar-wrapper">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" title="Home">VILLA TING TONG</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
                <li><a href="index.html" title="Home">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The villa <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="entrance.html" title="Entrance">Entrance</a></li>
                    <li><a href="living_area.html" title="Living Area">Living Area</a></li>
                    <li><a href="dining_area.html" title="Dining Area">Dining Area</a></li>
                    <li><a href="toof_terrace.html" title="Roof Terrace">Roof Terrace</a></li>
                    <li><a href="pool_area.html" title="Pool Area">Pool Area</a></li>
                    <li><a href="master_bedroom.html" title="Master Bedroom">Master Bedroom</a></li>
                    <li><a href="bedroom_2.html" title="Bedroom 2">Bedroom 2</a></li>
                    <li><a href="bedroom_3.html" title="Bedroom 3">Bedroom 3</a></li>
                    <li><a href="bedroom_4.html" title="Bedroom 4">Bedroom 4</a></li>
                    <li><a href="bedroom_5.html" title="Bedroom 5">Bedroom 5</a></li>
                    <li><a href="bedroom_6.html" title="Bedroom 6">Bedroom 6</a></li>
                    <li><a href="bedroom_7.html" title="Bedroom 7">Bedroom 7</a></li>
                    <li><a href="gymnasium.html" title="Gymnasium">Gymnasium</a></li>
                    <!--<li role="separator" class="divider"></li>
                    <li><a href="#">Booking</a></li>-->
                  </ul>
                </li>
                <li><a href="location.html" title="Location">Location</a></li>                
                <li><a href="testimonials.html" title="Testimonials">Testimonials</a></li>
                <li class="active"><a href="contact.php" title="Contact">Contact</a></li>
              </ul>
        </div><!--/.navbar-collapse -->
</div>
    </nav>
  </div><!-- navbar-wrapper -->


    <div class="jumbotron location"></div>


<div class="container">
                <div class="row">
                    <div class="col-md-4">
                        
                               <h3>Email</h3>

                                <p>
                                    <a href="mailto:" title="">email@emai.com</a>
                                </p>

                                <h3>Phone</h3>
                                <p>
                                    +4-------
                                </p>
                        <address>
                            <strong>Phukhao</strong>
                            <br />
                            <strong>line 2</strong>
                            <br />
                                        -----
                                        <br>
                                        ----
                                        <br>
                                        <!--Tel./Fax: <a href="tel:+44">+4-------</a>
                                        <br>
                                        Mobile: <a href="tel:+">+4-------</a>
                                        <br>
                                        Email: <a href="mailto:">email</a>
                                        -->
                        </address>
                    </div>



   <div class="container centered" style="text-align:center;margin-top:50px;">


                    <div class="col-md-8">
  
<form class="form-horizontal" role="form" method="post" action="contact.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form> 

  </div>






        
    </div>


</div>

 
    </div> <!-- /container -->
  
      

      <footer class="footer">
<div class="container">
        <p class="text-muted">&copy; Villa Grier &nbsp; | &nbsp; <a href="#" title="Terms &038; Conditions">Terms &#038; Conditions</a></p>
</div>
      </footer>





                <script src="http://adpolitik.com/jmc/js/jquery.validate.js"></script>
        <script src="http://adpolitik.com/jmc/js/jquery.placeholder.js"></script>
        <script src="http://adpolitik.com/jmc/js/jquery.form.js"></script>

		
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		

    </body>
</html>

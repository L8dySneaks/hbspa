<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Demo Contact Form'; 
    $to = 'steph.symosko@gmail.com'; 
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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="insurance, Insurance, Health Insurance, health insurance, Health insurance, Group, Aetna, AIG, Highmark, Health America, Group insurance, Short Term Medical, Pennsylvania health insurance">
    <meta name="description" content="Health benefit services, health insurance specialists and compliance experts serving PA">
    <meta name="author" content="Stephanie Symosko">

    <title>HBSPA - Health Benefit Services LLC Pennsylvania</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>


      <div class="topline">
          <div class="row">
            <section class="col-sm-1 col-xs-1"></section>
            <section class="col-sm-offset-1 col-sm-4 col-xs-offset-1 col-xs-4">
              <div class="intro-phone-number text-left">
                <span class="glyphicon glyphicon-earphone"></span>Toll Free : 1-800-347-8984
              </div>
            </section>
            <section class="col-sm-offset-1 col-sm-4 col-xs-offset-1 col-xs-4">
              <div class="intro-contact-btn text-right">
                <a class="btn btn-default" href="#footerform" role="button">Contact</a>
              </div>
            </section>
            <section class="col-sm-1 col-xs-1"></section>
          </div>
        </div> 

    <!-- Navigation -->
    <nav class="navbar navbar-default">
      
        <div class="container">


            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" 
                        data-toggle="collapse" 
                        data-target="#collapsemenu"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                  <img class="brand-img" src="images/hbs_logo.png" alt="Health Benefit Services"/>
                </a>
                <p class="navbar-text hidden-xs">Health Benefit Services LLC</p>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="collapsemenu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                      <a class="" href="#">About</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-toggle" 
                        data-toggle="dropdown" role="button" 
                        aria-haspopup="true" 
                        aria-expanded="false">Products
                        <span class="caret"></span>
                          <ul class="dropdown-menu">
                            <li><a href="#">Senior Products</a></li>
                            <li><a href="#">Individual Products</a></li>
                            <li><a href="#"> Group Products</a></li>
                          </ul>
                      </a>
                    </li>
                    <li>
                      <a class="" href="#">Career</a>
                    </li>
                    <li>
                      <a class="" href="#">Agent Resources</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<div class="content container">
    <div class="row">
        <section class="col-xs-12">
          <div class="jumbotron">
            <p>Health Benefit Services is an indepenct agency specializing in group, individual and senior health including medicine and retirement strategies.</p>
            <h3>Our commitment to you:</h3>
            <p>
              <ul>
                <li>
                  <b>Service:</b> We will assist you and your employees in resolving claims problems and handle other benefits questions and issues.  We will provide you with our toll-free number, your Account Manager’s business card for each of your employees, and bulletin board posters to create awareness of our service availability.
                </li>
                <li>
                  <b>Market Knowledge:</b> We will keep you current on new ideas and concepts in the benefits arena, to help you control costs while retaining valued employees.  We will evaluate all viable carriers when seeking quotes for your coverage.
                </li>
                <li>
                  <b>Compliance Expertise:</b> We will advise you on insurance compliance issues such as COBRA, HIPAA, coverage mandates, etc.
                </li>
              </ul>
            </p>
          </div>

        </section>
    </div><!-- row -->
</div><!-- content container -->




<div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 class="page-header text-center">Contact Form Example</h1>
        <form class="form-horizontal" role="form" method="post" action="index.php">
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





    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- <script src="../js/script.js"></script> -->
  </body>
</html>
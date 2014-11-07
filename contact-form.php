<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flor Delicious</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="css/custom.css" rel="stylesheet">-->
</head>

<body>

    <div class="container">

        <!--row 0:navigation-->
    <div class="row">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown"><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li class="dropdown"><a href="#" data-toggle="dropdown">Our Store<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="fruit.html">Fruit Arrangements</a></li>
                <li><a href="candy.html">Candy Bouquets</a></li>
                <li><a href="deodorant.html">All-natural Skin Care</a></li>
              </ul>
            </li>
            <li class="active"><a href="contact-form.php">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- row 1 -->

    <!--row 2 -->
    <ol class="breadcrumb">
      <li> <a href="index.html">Home</a></li>
      <li class="active">Contact Us</li>
    </ol>


       <!--row 3 -->
    <div class="row">
      <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">

      <header class="row">
        <div class="col-sm-12">
            <h1>Contact Us To Place Your Order</h1>
        </div>
      </header>

<?php  
  
        // check for a successful form post  
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
  
        // check for a form error  
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
  
?>  
        <form method="POST" action="contact-form-submission.php" class="form-horizontal">
            <div class="control-group name-group">
                <label class="control-label" for="name">Name</label>
                <div class="controls">
                    <input type="text" name="contact_name" id="name" placeholder="Your name">
                    <span class="help-block-name"></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input2">Email Address</label>
                <div class="controls">
                    <input type="text" name="contact_email" id="email" placeholder="Your email address">
                </div>
            </div>

         <div class="control-group">
          <label for="category" class="control-label">Please select category for your order:</label>
          <select type="text" name="category" id="category" class="form-control">
            <option checked>Please select one:</option>
            <option value="candy-bouquets">Candy Bouquets</option>
            <option value="fruit-arrangements">Fruit Arrangements</option>
            <option value="skin-care">All-natural skin care</option>
            <option value="other">Other</option>          
          </select>

            <span class="help-block"></span>
 
         </div>

            <div class="control-group">
                <label class="control-label" for="input3">Message</label>
                <div class="controls">
                    <textarea name="contact_message" id="input3" rows="8" placeholder="Please type in your order or question."></textarea>
                </div>
            </div>

            <div class="form-actions">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>

    </div>
</div>
        
      <!-- row 4 -->
  <footer class="row">
      <p><small>Copyright by Flor Delicious. All rights reserved.</small></p>
  </footer>


</div> <!--closing the container tag-->

<!-- javascript -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/respond.js"></script>
        
</body>
</html>


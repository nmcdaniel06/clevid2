<?php require 'php/hat.php'; ?>

<div class="row">




    <div class="row">
      <h2 class="stitle2">Services</h2>
    </div>

      <div class="col-md-4">
        <h3 class="ctitle">Web Design</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div><!--endCol------------------------------>

      <div class="col-md-4 serv">
        <h3 class="ctitle">Web Developement</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div><!--endCol------------------------------>

      <div class="col-md-4 serv">
        <h3 class="ctitle">Content Creation</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div><!--endCol------------------------------>
    </div><!--endRow-------------------------------->

    <div class="row">
      <div class="col-md-12">
        <!-----Carousel test--------->


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
  <div class="item active">
    <img src="pics/responsive1.png" alt="...">
    <div class="carousel-caption">
      ...
    </div>
  </div>
  <div class="item">
    <img src="pics/browsers.png" alt="...">
    <div class="carousel-caption">

    </div>
  </div>
  <div class="item">
    <img src="pics/seo.png" alt="...">
    <div class="carousel-caption">

    </div>
  </div>

</div>

<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>





        <!--end Carousel test-------->

      </div>
    </div>

<br />

<div class="row">

  <div class="col-md-6">
    <br /><br /><br />
    <img src="pics/whypic.jpg" width="100%" alt="html and css book">
</div>

  <div class="col-md-6">
  <h2 class="stitle2">Why Choose Clevid?</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</div>

<div class="row">

<div class="col-md-6">
  <h2 class="stitle2">Free Consultation</h2>

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
        <label for="number" class="col-sm-2 control-label">Number</label>
        <div class="col-sm-10">
    			<input type="num" class="form-control" id="email" name="number" placeholder="555-555-5555" value="<?php echo htmlspecialchars($_POST['number']); ?>">
    			<!--<?php //echo "<p class='text-danger'>$errEmail</p>";?>-->
    		</div>
    	</div>
    	<div class="form-group">
    		<label for="message" class="col-sm-2 control-label">Your Needs</label>
    		<div class="col-sm-10">
    			<textarea class="form-control" rows="4" name="message" placeholder="A brief description of your needs"><?php echo htmlspecialchars($_POST['message']);?></textarea>
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

    		</div>
    	</div>
    </form>
  </div>
  <div class="col-md-6">
    <img src="pics/free.png" width="100%" alt="">

  </div>

</div>

<br />

<div class="row">
  <h2 class="stitle2">Testimonials</h2>
    <div class="col-md-4">
      <h3 class="stitle">Customer 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div><!--endCol------------------------------>

    <div class="col-md-4 serv">
      <h3 class="stitle">Customer 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div><!--endCol------------------------------>

    <div class="col-md-4 serv">
      <h3 class="stitle">Customer 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div><!--endCol------------------------------>
  </div><!--endRow-------------------------------->

</div>


</div><!--endRow---------------------------->





<?php require 'php/boot.php'; ?>

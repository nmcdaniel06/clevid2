<?php require 'php/hat.php'; ?>


<div class="row">
  <h2 class="stitle2">Contact Us</h2>
  <div class="col-md-8">
    <h3 class="stitle">Fill out the form below</h3><br />


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
          <label for="number" class="col-sm-2 control-label">Number</label>
          <div class="col-sm-10">
            <input type="num" class="form-control" id="email" name="number" placeholder="555-555-5555" value="<?php echo htmlspecialchars($_POST['number']); ?>">
            <!--<?php //echo "<p class='text-danger'>$errEmail</p>";?>-->
          </div>
        </div>
        <div class="form-group">
          <label for="message" class="col-sm-2 control-label">Comment</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message" placeholder="Your comments"><?php echo htmlspecialchars($_POST['message']);?></textarea>
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

      </form>
    </div><!--endCol------------------------------>
    <div class="col-md-2 col-md-offset-1">

      <h3>Phone:</h3>
      <a class="con" href="tel:8325343611">832-534-3611</a>
      <h3>Email:</h3>
      <a class="con" href="mailto:info@clevid.com">info@clevid.com</a>
    </div>
  </div><!--endRow-------------------------------->











<?php require 'php/boot.php'; ?>

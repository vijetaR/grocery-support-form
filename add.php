<?php

include('includes/header.php');
include('includes/functions.php');
include('includes/form-validation.php');

?>
<div class="container">
<div class="title">Support Us</div>
<div class="content">
  <form action="" method="post">
    <div class="user-details">
      <!---Errors--->
      <div class="error-div"><?php  
          echo $nameEmptyErr; echo $nameErr; 
          echo $emailEmptyErr; echo $emailErr;
          echo $phoneEmptyErr;echo $phoneErr;
          echo $messageEmptyErr;
          echo $DeptEmptyErr;
          echo $subjectEmptyErr;
        ?>
      </div>
      <div class="input-box">
        <div class="details"> Full Name. </div>
        <input type="text" name="name" placeholder="Namee"
        value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" required>
      </div>
      <div class="input-box">
        <div class="details">Email Id</div>
        <input type="text" name="email" placeholder="example@example.com" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
      </div>
      <div class="input-box">
        <div class="details">Phone No. </div>
        <input type="text" name="phone" placeholder="Number only" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>" required>
      </div>
      <div class="input-box">
        <div class="details">Messages. </div>
        <input type="text" name="message" placeholder="Enter you're problem descrption or any coments" value="<?php echo isset($_POST['message']) ? $_POST['message'] : '' ?>" required>
      </div>
      <div class="input-box">
        <div class="details">Dipartment
          <ul class="ul-list">
            <li>Billing.</li>
            <li>Shiping</li>
            <li>Qualiity</li>
          </ul>
        </div>
        <input type="text" name="dept" placeholder="Enter Option" value="<?php echo isset($_POST['dept']) ? $_POST['dept'] : '' ?>"  required>
      </div>
      <div class="input-box">
        <div class="details">Subjects </div>
        <input type="text" name="subject" value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : '' ?>" placeholder="You're Subject" required>
      </div>
    </div>
    <div class="button">
      <input type="submit" name ="submit" value="Submeit">
    </div>
  </form>
</div>
</div>
<?php include('includes/footer.php');?>

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
      <div class="input-box">
        <div class="details">Name <span class="req-error">* </span></div>
        <input type="text" name="name" placeholder="John Doe"  required>
            <!-- Error -->
            <?php
                    echo $nameEmptyErr;
                    echo $nameErr;
            ?>
      </div>
      <div class="input-box">
        <div class="details">Email <span class="req-error">* </span></div>
        <input type="text" name="email" placeholder="example@example.com" required>
        <!-- Error -->
        <?php
                 echo $emailEmptyErr;
                 echo $emailErr;
        ?>
      </div>
      <div class="input-box">
        <div class="details">Phone Number <span class="req-error">* </span></div>
        <input type="text" name="phone" placeholder="95XXXXXXXX" required>
        <!-- Error -->
        <?php
             echo $phoneEmptyErr;
             echo $phoneErr;
        ?>
      </div>
      <div class="input-box">
        <div class="details">Subject <span class="req-error">* </span></div>
        <input type="text" name="subject" placeholder="Your Subject" required>
        <!-- Error -->
        <?php
             echo $subjectEmptyErr;
        ?>
      </div>
    </div>
     <div class="input-box">
        <div class="department-details">
          <div class="details">Department <span class="req-error">* </span></div>
            <input type="radio" name="dept" value="billing">
              <span class="department">Billing</span>
            <input type="radio" name="dept" value="shipping">
              <span class="department">Shipping</span>
            <input type="radio" name="dept" value="quality">
              <span class="department">Quality</span>
          <!-- Error -->
          <?php
                 echo $DeptEmptyErr;
            ?>
      </div>
    </div>
     <div class="input-box">
        <div class="details">Message <span class="req-error">* </span></div>
        <textarea  class="text-area" name="message" rows="5" cols="100" placeholder="Share your Complaints, Queries & Concerns with us" required ></textarea>
        <!-- Error -->
        <?php
             echo $messageEmptyErr;
        ?>
      </div>
    <div class="button">
      <input type="submit" name ="submit" value="Register">
    </div>
  </form>
</div>
</div>
<?php include('includes/footer.php');?>

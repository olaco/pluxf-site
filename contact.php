<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./js/bootstrap.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Plumax</title>
  </head>

  <body>

<!--  customer detail-->


<form action="milaer.php" method="POST">

  <div class="container form-group">

<?php 
session_start();
if(isset($_SESSION['message'])) {
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}
?>
<p>To: <input type="text" name="to" placeholder="solitasra@gmail.com" /></p>
<p>Cc: <input type="text" name="cc" placeholder="username@example.com" /></p>
<label for="Subject">Subject</label> <br>
 <input class="form-control-lg" type="text" name="subject" placeholder="Subject" /><br>
 <label for="body">Body</label> <br>
<textarea  name="body" cols=70 rows=5 placeholder="Write something here..."></textarea> <br>

<br>
<input class="btn btn-primary" type="submit" name="sendmail" value="Send Mail" />


</div>



</form>




    

    <!-- footer -->


    <section class="container">
        <footer class="footer">
            <div class="row">
                <div class="wrap-footer col-lg-4">
                    
                        <h5>Contacts</h5>
                        <dl class="contact-list">
                          <dt>Address:</dt>
                          <dd>798 South Park Avenue, Jaipur, Raj</dd>
                        </dl>
                        <dl class="contact-list">
                          <dt>email:</dt>
                          <dd><a class="tel" href="mailto:#">dkstudioin@gmail.com</a></dd>
                        </dl>
                        <dl class="contact-list">
                          <dt>phones:</dt>
                          <dd><a class="tel" href="tel:#">+91 7568543012</a> <span>or</span> <a class="tel" href="tel:#">+91 9571195353</a>
                          </dd>
                        </dl>



                </div>

                <div class="wrap-footer col-lg-4">
                  

                        <h5>Links</h5>
                        <ul class="nav-list">
                          <li><a class="tel" href="index.html">Home</a></li>
                          <li><a class="tel" href="#">About</a></li>
                          <li><a class="tel" href="#">Blog</a></li>
                          
                        </ul>
                       

                    
                    </div>

                    <div class="wrap-footer col-lg-4">

                           <h5>Keep In Touch</h5>
                           <span><i class="fab fa-facebook-square fa-3x"></i> &nbsp; <i class="fab fa-instagram fa-3x"></i> &nbsp;<i class="fab fa-pinterest-p fa-3x"></i></span>

                    
                        </div>

                          <div class="col-lg-12">

                                <div class="copy">
                                        <p>&copy;Plumax 2018. All Right Reserved</p>
                                      </div>


                          </div>
                        



            </div>


        </footer>


    </section>


    
    
    


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
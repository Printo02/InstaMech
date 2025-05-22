<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
  <!DOCTYPE html>
<html lang="en">
  <head>
    <title> InstaMech Online Register Form </title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta  charset="utf-8" />
    <meta name="keywords" content=" Tennis Online Register Form Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script>
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- Meta tags -->
    <!--stylesheets-->
    <link href="register_templates/css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <link href="//fonts.googleapis.com/css?family=Saira+Condensed:400,500,600,700" rel="stylesheet">
  </head>
  <body>
    <h1 class="header-w3ls">
      Instamech Online Register
    </h1>
    <div class="online-w3l-form">
    
      <div class="appointment-w3">
        <form action="codes\register_exe.php" method="post" enctype="multipart/form-data">
          <div class="main">
            <div class="form-left-w3l">
              <input type="text" class="top-up" name="name" placeholder="Name" required="" pattern="[a-zA-Z\s]+" title="Alphabets and Space ">
            </div>
            <div class="form-right-w3ls ">
               <input class="buttom" type="text" name="phone_number" placeholder="Phone Number" required="" pattern="[9876][0-9]{9}" title="Enter a valid mobile number" maxlength="10" minlength="10">
              <div class="clearfix"></div>
            </div>
          </div>
           <div class="form-add-w3ls">  
            <input type="text" name="address" placeholder="Address" required="" >
          </div>
          <div class="main">
            <div class="form-left-w3l">
              <!--<input type="email" name="email" placeholder="Email" required="">-->
               <input type="text" name="state" placeholder="State" required="" pattern="[a-zA-Z\s]+" title="Characters only">
            </div>
            <div class="form-right-w3ls ">
              <input type="text" name="district" placeholder="District" required="" pattern="[a-zA-Z]+" title="Characters only">
              <div class="clearfix"></div>
            </div>
          </div>
         
          <div class="main">
            <div class="form-left-w3l">
              <input type="text" name="city" placeholder="City" required="" pattern="[a-zA-Z]+" title="Characters only">
            </div>
             <div class="form-left-w3l">
             <input type="email" name="email" placeholder="Email" required="" pattern="[^\s@]+@[^\s@]+\.[^\s@]+" title="Invalid Email Format">
               
           
            <!--  <select class="form-control buttom">
                <option value="">
                  Select District
                </option>
                <option value="category2">Kottayam</option>
                <option value="category1">Eranakulam</option>
                <option value="category3">Kollam</option>
                <option value="category3">Alappuzha</option>
                <option value="category3">Idukki</option>
                <option value="category3">pathanamthitta</option>
                <option value="Kannur">Kannur</option>
              </select>-->
              <div class="clearfix"></div>
            </div>
          </div>
           <!-- <div class="form-right-w3ls ">
              <input type="text" name="state" placeholder="State" required="">	
              <div class="clearfix"></div>
            </div>-->
          </div>
          <div class="main">
            <div class="form-left-w3l">	
              <label style="color: white;">Profile photo</label>
              <br>
              <input type="file" name="photo" placeholder="Photo">
            </div>
            <div class="form-right-w3ls">
              <select class="form-control buttom" name="register_type">
                <option value="">
                  Register Type
                </option>
                <option value="mechanic">Mechanic</option>
                <option value="crane">Crane</option>
                <option value="carriage">Carriage</option>
                <option value="customer">Customer</option>
                <!--<option value="category3">Goa</option>
                <option value="category3">Canada</option>
                <option value="category3">Srilanka</option>-->
              </select>
              <div class="clearfix"></div>
            </div>
          </div>
            <div class="main">
            <div class="form-left-w3l">
              <input type="password" name="password" placeholder="Password" required="">
            </div>
          </div>    
         <!-- <div class="form-control-w3l">
            <textarea name="Message" placeholder="Any Message..."></textarea>
          </div>-->
          <div class="btnn">
            <input type="submit" value="Register">
          </div>
        </form>
      </div>
    </div>
    <div class="copy">
      <p>&copy;2024 Instamech Online Register. All Rights Reserved </p>
    </div>
  </body>
</html>
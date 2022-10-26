<!----Header ---->
<?php include_once('includes/header.php')?>
<div class="container_">
<div class="card">
    <div class="inner-box" id="card">
        <div class="card-front">
        <h2>TO ACCESS PAGE</h2>
            <h2> LOGIN</h2>
            <form method="post">
                <input type="email" name="email" class="input-box" placeholder="Your Email Id" required>
                <input type="password" name="password" class="input-box" placeholder="Password" required>
                <button type="submit" name="login-btn" class="login-btn">Submit</button>
            </form>
            <button type="button" class="btn" onclick="openRegister()">I'm New Here</button>
        </div>

        <div class="card-back">
                <h2> REGISTER</h2>
            <form method="post">

                <input type="text" name="fullname" class="input-box" placeholder="Your Name" required>
                <input type="email" name="email" class="input-box" placeholder="Your Email Id" required>
                <input type="password" name="password" class="input-box" placeholder="Password" required>
                <button type="submit" name="submit-btn" class="submit-btn">Submit</button>
            </form>
            <button type="button" class="btn" onclick="openLogin()">I have an account</button>
        </div>
    </div>
</div>
</div>

<script>
    var card = document.getElementById("card");

    function openRegister(){
        card.style.transform="rotateY(-180deg)";
    }
    function openLogin(){
        card.style.transform="rotateY(0deg)";
    }

 </script>

 <!------JavaScript for Toggle Menu----->
 <script>
        var navlinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";

        }

    </script>
    </section>
    

   


    

<?php include_once("includes/header.php") ?>
<?php include_once("controllers/validate_captcha.php") ?>
<div class="boxx">


<div class="container__">
<h1>CAPTChA</h1>
        <form method="POST" class="form">
            <div class="form-group">
                <label for="mainCaptcha" class="form-label">Generated Text</label>
                <input type="text" class="form-control" id="mainCaptcha" name="mainCaptcha" placeholder="Generated text comes here" tabindex="1" readonly="readonly" required>
            </div>
            <div>
                <input type="button" name="validate-btn" value="refresh" class="btn" onclick="generateCaptcha();" />
            </div>
            <div class="form-group">
                <label for="txtInput" class="form-label">Your Input</label>
                <input type="text" class="form-control" id="txtInput" name="txtInput" required>
            </div>
            <div>
                <button type="submit" name="validate-btn" class="btn">validate!</button>
            </div>
        </form>
    </div>
    </div>
    
<script>
    function generateCaptcha() {
        var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
        var i;
        for (i = 0; i < 4; i++) {
            var a = alpha[Math.floor(Math.random() * alpha.length)];
            var b = alpha[Math.floor(Math.random() * alpha.length)];
            var c = alpha[Math.floor(Math.random() * alpha.length)];
            var d = alpha[Math.floor(Math.random() * alpha.length)];
        }
        var code = a + '' + b + '' + '' + c + '' + d;
        document.getElementById("mainCaptcha").value = code
    }
</script>


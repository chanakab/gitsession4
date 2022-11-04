

<!DOCTYPE html>
<html lang="en" >

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
    <script href="js.js"></script>
    <script>
        $('#emotion input:radio').addClass('input_hidden');
        $('#emotion label').click(function(){
            $(this).addClass('selected').siblings().removeClass('selected');
        });
    </script>


</head>

<body>
<div style="margin: auto; text-align: center; margin-bottom: 25px;">
    <img src="https://badulla.ps.gov.lk/wp-content/uploads/2022/10/badulla-logo.png" style="width: 20%;">
</div>

<div style="margin: auto; text-align: center;">
    <div class="form-group">
        <label class="col-md-4 control-label">ඉටුකරන ලද සේවය පිළිබඳ ඔබගේ තෘප්තිමත් බව</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group emotion" id="emotion">

                <input id="excellent" type="radio" name="emotion" value="excellent" />
                <label class="drinkcard-cc excellent" for="excellent"></label>

                <input id="good" type="radio" name="emotion" value="good" />
                <label class="drinkcard-cc good" for="good"></label>

                <input id="fair" type="radio" name="emotion" value="fair" />
                <label class="drinkcard-cc fair" for="fair"></label>

                <input id="bad" type="radio" name="emotion" value="bad" />
                <label class="drinkcard-cc bad" for="bad"></label>

                <input id="verybad" type="radio" name="emotion" value="verybad" />
                <label class="drinkcard-cc verybad" for="verybad"></label>


            </div>
        </div>

    </div>

    <div>
        <div style="width: 30%; text-align: center;margin: auto; margin-top: 20px; margin-bottom: 20px;" >
            <textarea class="form-control md-5" placeholder="Your feedback ..." ></textarea>
        </div>
        <div>
            <button class="btn btn-success"> Please send us your feedback ... </button>
        </div>
    </div>
</div>



<!-- dribbble - twitter -->

</body>

</html>


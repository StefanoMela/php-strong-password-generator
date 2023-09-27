<?php





$psw_length = $_GET;

function createPassword($psw_length)
{

    if (is_numeric($psw_length)) {

        $possible_chars = array_merge(range('A', 'Z'), range('a', 'z'));
        $secure_password[] = shuffle($possible_chars);

        var_dump($possible_chars);
        var_dump($secure_password);
    };
};
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container d-flex flex-column align-items-center text-center">
        <div class="title my-5">
            <h1>Almost Secure PSW Generator</h1>
            <h5>Dicci quanto lunga dovrà esser la password e la creeremo per te</h5>
        </div>
        <form method="GET" class="w-50">
            <div class="mb-3">
                <label for="psw-lenght" class="form-label">Quanto dovrà essere lunga la tua password ?</label>
                <input type="number" autofocus max="30" name="psw_length$psw_length" class="form-control" id="psw-lenght">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
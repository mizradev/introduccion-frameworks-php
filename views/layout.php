<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi sitio web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <section class="hero is-link">
            <div class="hero-body">
                <p class="title">
                Link hero
                </p>
                <p class="subtitle">
                Link subtitle
                </p>
            </div>
        </section>
        <div class="row">
            <?php echo $content ?>
        </div>
    </div>
</body>
</html>
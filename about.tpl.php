<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? 'TITLE' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="accets/main.css">
</head>
<body>

<div class="wrapper">
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>
    <main class="main py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 py-3">
                    <?= $posts?>
                </div>
                <div class="col-md-4">
                    <h3>Recent Posts</h3>
                    <ul class="list-group">
                        <?php foreach($resents_posts as $resents_post) :?>
                            <li class="list-group-item"><a href="<?= $resents_post['slug']?>"><?= $resents_post['title']?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer ">
        <div class="p-3 text-bg-dark text-center">
            <p>&copy; Copyrigt <?= date('Y')?> FOOTER</p>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


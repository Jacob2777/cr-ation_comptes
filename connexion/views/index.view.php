<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours 21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <!-- ENTÊTE: BARRE DE NAVIGATION -->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="creer-compte.php">Créer un compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nous-joindre.php">Nous joindre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php if (isset($_GET["erreur"])) : ?>
        <p class="alert alert-danger position-absolute top-0 end-0">Erreur!</p>
    <?php endif; ?>
    <!-- CONTENU PRINCIPAL -->
    <main class="w-75 m-auto mt-5 text-bg-light p-5">


        <h1 class="fs-1">Bienvenue!</h1>

        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam esse tenetur quidem veniam sapiente, minima molestias, exercitationem soluta at repudiandae sed. Nobis, iure laborum ut voluptatum dolores repellendus eum pariatur?
            Nobis, praesentium eos repellat velit nihil quas placeat consequuntur aut adipisci dolores sed eaque autem illum vero, quod ipsam earum molestiae omnis. Quos hic laudantium magnam ut fuga aspernatur sequi?
            Temporibus natus, eligendi cumque qui culpa dolor veniam tempore nostrum consequuntur et quaerat dolorum impedit odit adipisci minima sit eaque optio pariatur debitis tempora modi. Ut id fugiat tenetur cumque?
            Officia, repellendus animi. Unde voluptas velit, rerum hic facilis in dicta neque laborum perferendis alias ad. Consequatur laborum, animi quia, reprehenderit eligendi saepe ipsum nesciunt nihil, vitae reiciendis perferendis ut!
            Cum qui dicta enim animi eius? Nesciunt harum eaque dolor explicabo earum ipsa inventore nihil eos facilis! Corrupti veritatis aspernatur nesciunt fuga nostrum ipsa ullam, pariatur voluptatem quas iste illo.</p>

        <section class="mt-5">
            <h2 class="fs-3">Créer un compte</h2>
            <p><a href="creer-compte.php" class="link-info text-decoration-none">Cliquez ici</a> pour créer votre compte!</p>
        </section>



        <section class="mt-5">
            <h2 class="fs-3">Tous nos membres</h2>
            <!-- À DYNAMISER pour utiliser les membres de la BDD -->
            <div class="w-25">
                <ul class="list-group">
                    <?php while ($utilisateur = mysqli_fetch_assoc($utilisateurs)) : ?>
                        <li class="list-group-item">
                            <?= $utilisateur["prenom"] ?> <?= $utilisateur["nom"] ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
    </main>
    <!-- Javascript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
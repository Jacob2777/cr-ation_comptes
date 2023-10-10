<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet MVC de base</title>
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

    <!-- CONTENU PRINCIPAL -->
    <main class="w-75 m-auto mt-5 text-bg-light p-5">
        
        <div class="w-50 m-auto">
            <!-- Titre -->
            <h1 class="fs-1">Créer votre compte</h1>

            <!-- Formulaire -->
            <form action="creer-compte.submit.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Prénom
                        <input type="text" class="form-control" id="prenom" name="prenom">
                    </label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nom
                        <input type="text" class="form-control" id="nom" name="nom">
                    </label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date de naissance
                        <input type="date" class="form-control" id="naissance" name="naissance">
                    </label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pseudonyme
                        <input type="text" class="form-control" id="pseudonyme" name="pseudonyme">
                    </label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mot de passe
                        <input type="password" class="form-control" id="mdp" name="mdp">
                    </label>
                </div>
                <div class="mb-3">
                    <!-- À DYNAMISER pour utiliser les catégories de la BDD -->
         
                    <label class="form-label">Forfait
                        <select class="form-select" name="compte_type_id">

                            <?php while($type_compte = mysqli_fetch_assoc($type_comptes)) : ?>
                                <option value="<?= $type_compte["id"] ?>">
                                    <?= ucfirst($type_compte["nom"]) ?>
                                </option>
                            <?php endwhile; ?>

                        </select>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Soumettre</button>
            </form>
        </div>
    </main>
    <!-- Javascript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TI2 | Livre d'or</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/validation.css">
</head>

<body>
    <h1 class="title">Livre d'or</h1>

    <div class="content-wrapper">
        <div class="main-container">
            <img src="img/email.png" class="image-mail" alt="image">


            <div class="form-container">
                

                <h2 id="top-form-message">Laissez-nous un message</h2>

                <form action="" id="form" method="POST">

                    <div class="input-group">
                        <label for="name">Prenom *</label>
                        <input type="text" name="firstname" id="form-prenom" placeholder="Prenom">
                    </div>

                    <div class="input-group">
                        <label for="name">Nom</label>
                        <input type="text" name="lastname" id="form-nom" placeholder="Nom">
                    </div>

                    <div class="input-group">
                        <label for="name">E-mail *</label>
                        <input type="text" name="usermail" id="form-mail" placeholder="Mail">
                    </div>

                    <div class="input-group">
                        <label for="message">Message *</label>
                        <textarea name="message" id="form-message" required placeholder="Ici ton message"></textarea>
                    </div>

                    
                    <h2 id='helper'>(*) Ce champ est obligatoire</h2>

                    <div class="submit-container">
                        <input type="submit" id="submit-form" value="Envoyer">
                    </div>


            </div>
            </form>

        </div>




        <div class="message-container" style="display: flex; flex-direction: column;">

            <h1 class="comment-title">Message precedent</h1>

            <?php
            foreach ($informations as $commentaire) {
                echo '<div class="content-message">';
                echo '<div class="message-header">';
                echo '' . $commentaire['firstname'] . ' ' . $commentaire['lastname'] . ' a envoyé ce message le ' .
                    date('d-m-Y \à H\hi', strtotime($commentaire['datemessage']));
                echo '</div>';
                echo '<div class="message-body">';
                echo $commentaire['message'];
                echo '</div>';
                echo '</div>';
            }
            ?>


        </div>
    </div>


    <script src=" js/validation.js">
    </script>
</body>

</html>
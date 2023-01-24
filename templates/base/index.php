<?php

if(!empty($_POST)){
    extract($_POST);


    $valid = (boolean) true;

    if (isset($_POST['inscription'])){
        $pseudo = trim($pseudo);
        $mail = trim($mail);
        $password = trim($password);

    }
}

  

  
    

?>


<!DOCTYE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{% block title %}Connexion | Inscription [ERREUR 502] {% endblock %}</title>
    <meta name="description" content="Erreur 502 est un site web permettant à chacun de tester et d'améliorer ses connaissances dans le domaine de l'informatique."
    <meta name="keywords" content="hackcess,roanne,rt,iut rt roanne,reseau,info,formation info, hacking, challenge, solution, exercice, hacking challenge, hack challenge, exercice hack, exercice hacking, capture the flag, CTF, security, sécurité, Documentation,Applicatif,Cryptologie,Challenges,Réseaux,Cracking,Web - Client,Programmation,Cryptanalyse,Communauté,Chat Box,Application,Présentation,Session,Transport ,Réseau,Liaison,Physique,Stéganographie,Web - Serveur,Cracking,Réaliste,Informations,L'association,Faiblesses Découvertes,Forum,Le projet,Challenges, Hacking et Sécurité Informatique,Général,Contribuer,IRC,Serveur Discord,Réseau,Capture The Flag,App - Script,Calendrier,CTF all the day,Capture The Flag,Sponsors &amp; Partenaires,App - Système,Forensic,Web,Discuter,">
    
    <link href="css/loader.css" rel='stylesheet' type='text/css'>
    <link href="css/loginregister.css" rel='stylesheet' type='text/css'>

    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-SRYSKX09J7', { 'anonymize_ip': true });
     </script>
     <link rel="icon" type="img/icon.png" href="img/icon.png" sizes="32x32">
</head>
<body>
<style>
body {
    position: relative;
    background: url('../../img/fondchallenges.jpeg') right no-repeat;
    background-size: cover;

}
</style>



<main>
<div id="loader"></div>
<div id="log-reg-screen">
        <div class="loginster">
            <div id="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div id="picture">
                <img src="img/bg.png" alt="login/register-picture">
            </div>
            <div id="login" class="input-group">
                <h1>Connexion</h1>
                <hr class="special-hr">
                <div class="content">
                    <form method="post">
                        <input type="email" class="input-field" name="email" placeholder="Adresse mail" requared>
                        <input type="password" class="input-field" class="input-field" name="password"
                            placeholder="Entrer le mot de passe" requared>
                        <input type="checkbox" class="check-box" name="checkbox">
                        <label for="checkbox">Se souvenir du mot de passe</label>
                        <button type="submit" name="connexion" class="submit-btn">Connexion</button>
                    </form>
                </div>
            </div>
            <div id="register" class="input-group">
                <h1>S'inscrire</h1>
                <hr class="special-hr">
                <div class="content">
                    <form method="post">
                        <input type="text" class="input-field" name="pseudo" placeholder="Pseudonyme"
                            requared>
                        <input type="email" class="input-field" name="mail" placeholder="Adresse mail" requared>
                        <input type="password" class="input-field" name="password" placeholder="Entrer un mot de passe"
                            requared>
                        <input type="checkbox" class="check-box" name="checkbox" required>
                        <label for="checkbox">Je suis d'accord avec les termes et conditions.</label>
                        <button type="submit" name="inscription" class="submit-btn">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<script src="js/login.js"> </script>


</body>
<!DOCTYE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{% block title %}Connexion | Inscription [ERREUR 502] {% endblock %}</title>
    <meta name="description" content="Erreur 502 est un site web permettant à chacun de tester et d'améliorer ses connaissances dans le domaine de l'informatique."
    <meta name="keywords" content="hackcess,roanne,rt,iut rt roanne,reseau,info,formation info, hacking, challenge, solution, exercice, hacking challenge, hack challenge, exercice hack, exercice hacking, capture the flag, CTF, security, sécurité, Documentation,Applicatif,Cryptologie,Challenges,Réseaux,Cracking,Web - Client,Programmation,Cryptanalyse,Communauté,Chat Box,Application,Présentation,Session,Transport ,Réseau,Liaison,Physique,Stéganographie,Web - Serveur,Cracking,Réaliste,Informations,L'association,Faiblesses Découvertes,Forum,Le projet,Challenges, Hacking et Sécurité Informatique,Général,Contribuer,IRC,Serveur Discord,Réseau,Capture The Flag,App - Script,Calendrier,CTF all the day,Capture The Flag,Sponsors &amp; Partenaires,App - Système,Forensic,Web,Discuter,">
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
                <h1>Login</h1>
                <hr class="special-hr">
                <div class="content">
                    <form action="">
                        <input type="email" class="input-field" name="email" placeholder="Mail Address" requared>
                        <input type="password" class="input-field" class="input-field" name="password"
                            placeholder="Enter Password" requared>
                        <input type="checkbox" class="check-box" name="checkbox">
                        <label for="checkbox">Remember Password</label>
                        <button type="submit" class="submit-btn">Login</button>
                    </form>
                </div>
            </div>
            <div id="register" class="input-group">
                <h1>Register</h1>
                <hr class="special-hr">
                <div class="content">
                    <form action="">
                        <input type="text" class="input-field" name="name and surname" placeholder="Name and Surname"
                            requared>
                        <input type="email" class="input-field" name="email" placeholder="Mail Address" requared>
                        <input type="password" class="input-field" name="password" placeholder="Enter Password"
                            requared>
                        <input type="checkbox" class="check-box" name="checkbox" required>
                        <label for="checkbox">I agree with the terms and conditions.</label>
                        <button type="submit" class="submit-btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<script src="js/login.js"> </script>


</body>
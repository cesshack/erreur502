
{% extends 'base.html.twig' %}
{% block title %} Telenet {% endblock %}
{% block stylesheets %}
		<link rel="stylesheet" media="screen" type="text/css" title="Exemple" href="/css/maintenance.css"/>
{% endblock %}

{% block body %}
<div class="container">

<h1><div Align=center style="padding:3px; border:5px double #3400f6; background-color:#ab30e0;"><span style="text-decoration: underline;"><i>Analyse De Trame</i></span></div></h1>   

<p> <font size="6">  <h1></h1>

Ce n'est pas la bonne réponse réessayez (cherchez de l'aide sur internet) :<br> 
<li><a href="/Download/telnet.pcap"
		download="telnet.pcap">Téléchargez ce fichier</a></li>
<br> 
</font> </p></p>

<br/>
<form action="authentification_telnet" method="post">
Votre reponse : <input type="text" name="telnet">
<br/>
<input type="submit" value="Envoyer">
<br/>

<Div Align=right>
<a href="#"  class=" btn btn-primary" style="text-shadow:2px 2px 4px #000000;"> Retour en haut ↑</a></div>
<div/>
<br/>
{% endblock %}
{% extends 'base.html.twig' %}
{% block title %} Stéganographie 1 {% endblock %}
{% block stylesheets %}
		<link rel="stylesheet" media="screen" type="text/css" title="Exemple" href="/css/maintenance.css"/>
{% endblock %}

{% block body %}
<div class="container">

<h1><div Align=center style="padding:3px; border:5px double #3400f6; background-color:#ab30e0;"><span style="text-decoration: underline;"><i>Stéganographie 1</i></span></div></h1>   

<p> <font size="6">  <h1> </h1>

Pour ce challenge vous allez devoir trouver le message cacher dans cette photo   <br> 
Téléchargez la photo et observez la bien.<br>
<li><a href="/Download/dessin.jpg"
		download="dessin.jpg">Télécharger ce fichier</a></li>
<br> 
</font> </p></p>

<br/>
<form action="auth_photo" method="post">
Votre réponse (en minuscule) : <input type="text" name="photo">
<br/>
<input type="submit" value="Envoyer">
<br/>


<Div Align=right>
<a href="#"  class=" btn btn-primary" style="text-shadow:2px 2px 4px #000000;"> Retour en haut ↑</a></div>
<div/>
<br/>
{% endblock %}
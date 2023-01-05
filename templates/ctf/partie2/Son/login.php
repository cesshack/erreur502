
{% extends 'base.html.twig' %}
{% block title %} Stéganographie 3 {% endblock %}

{% block stylesheets %}
		<link rel="stylesheet" media="screen" type="text/css" title="Exemple" href="/css/maintenance.css"/>
{% endblock %}

{% block body %}
<div class="container">

<h1><div Align=center style="padding:3px; border:5px double #3400f6; background-color:#ab30e0;"><span style="text-decoration: underline;"><i>Stéganographie 3</i></span></div></h1>   

<p> <font size="6">  <h1> </h1>

Pour ce challenge vous allez devoir installer audacity ci-dessous et le fichier mp3   <br> 
Décryptez ce fichier audio en le modifiant via audacity 
<br></br>
<li><a href="/Download/audacity.exe"
		download="audacity.exe">Télécharger Audacity</a></li>
<li><a href="/Download/son.mp3"
		download="son.mp3">son.mp3</a></li>


<br> 
</font> </p></p>

<br/>
<form action="authentification_son" method="post">
Votre réponse : <input type="text" name="son">
<br/>
<input type="submit" value="Envoyer">
<br/>


<Div Align=right>
<a href="#"  class=" btn btn-primary" style="text-shadow:2px 2px 4px #000000;"> Retour en haut ↑</a></div>
<div/>
<br/>
{% endblock %}
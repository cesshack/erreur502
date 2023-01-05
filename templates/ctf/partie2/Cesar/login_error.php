{% extends 'base.html.twig' %}
{% block title %} Cryptographie 1 {% endblock %}
{% block stylesheets %}
		<link rel="stylesheet" media="screen" type="text/css" title="Exemple" href="/css/maintenance.css"/>
{% endblock %}

{% block body %}
<div class="container">

<h1><div Align=center style="padding:3px; border:5px double #3400f6; background-color:#ab30e0;"><span style="text-decoration: underline;"><i>Cryptographie 1</i></span></div></h1>   

<p> <font size="6">  <h1> </h1>

Ce n'est pas la bonne réponse réessayez <br> 
Retrouvez le message caché de ce message :<br>
Fvezs zsyw ezid viywwmx : G3wev<br> 
</font> </p></p>

<br/>
<form action="authentification_cesar" method="post">
Votre reponse : <input type="text" name="cesar">
<br/>
<input type="submit" value="Envoyer">
<br/>

<Div Align=right>
<a href="#"  class=" btn btn-primary" style="text-shadow:2px 2px 4px #000000;"> Retour en haut ↑</a></div>
<div/>
<br/>
{% endblock %}
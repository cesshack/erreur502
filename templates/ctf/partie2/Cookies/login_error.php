
{% extends 'base.html.twig' %}
{% block title %} Cookie {% endblock %}
{% block stylesheets %}
		<link rel="stylesheet" media="screen" type="text/css" title="Exemple" href="/css/maintenance.css"/>
{% endblock %}

{% block body %}
<div class="container">

<h1><div Align=center style="padding:3px; border:5px double #3400f6; background-color:#ab30e0;"><span style="text-decoration: underline;"><i>Cookie</i></span></div></h1>   

<p> <font size="6">  <h1> </h1>

Vous êtes toujours connecté en "guest" 
Je vous conseille de regarder du coté des outils de développement de votre navigateur <br> 
 <br> 
</font> </p></p>

<br/>

    <form action="authentification_cookies" method="post">
   	 <input type="submit" name="someAction" value="portail admin" />
    </form>



<Div Align=right>
<a href="#"  class=" btn btn-primary" style="text-shadow:2px 2px 4px #000000;"> Retour en haut ↑</a></div>
<div/>
<br/>


<?php
setcookie ("login", "guest");
?>
{% endblock %}
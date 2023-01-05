
{% extends 'base.html.twig' %}
{% block title %} Cookie {% endblock %}
{% block stylesheets %}
		<link rel="stylesheet" media="screen" type="text/css" title="Exemple" href="/css/maintenance.css"/>
{% endblock %}

{% block body %}
<div class="container">

<h1><div Align=center style="padding:3px; border:5px double #3400f6; background-color:#ab30e0;"><span style="text-decoration: underline;"><i>Cookie</i></span></div></h1>   

<p> <font size="6">  <h1>Pour commencer l'exercice : </h1></p>
<p>
<font size="5"> Cliquez sur ce lien qui vous redirigent sur une autre page : <br>
    <li><a href="/Cookies/login.php">Suite de l'exercice</a></li></p></br>

</font>

</Div>



<Div Align=right>
<a href="#"  class=" btn btn-primary" style="text-shadow:2px 2px 4px #000000;"> Retour en haut ↑</a></div>
<div/>
<br/>
{% endblock %}
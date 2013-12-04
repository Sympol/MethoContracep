<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MethoContracep</title>
  <link rel="stylesheet" href="css/jquery.mobile-1.3.2.min.css">
  <link rel="stylesheet" href="css/jquery.mobile.theme-1.3.2.min.css">
  <link rel="stylesheet" href="css/jquery.mobile.structure-1.3.2.min.css">
  
  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/jquery.mobile-1.3.2.min.js"></script>
</head>
<body>
<!--point-->
<div data-role="page" id="page2">
  <div data-role="header">
    <h1>Resultat du test</h1>
	<a data-rel="back" data-icon="back">Retour</a>
  </div>
  <div data-role="content">
  <?php 
	if(isset($_POST['submit'])){
	$point='point';
	if($point>4){
	echo('Vous presentez de forte chance de porter une grossesse.<br>
	<b>Conseil:</b>	Cependant, nous vous proposons: Le test urinaire même si ce n’est pas du 100 % il est très fiable et
	vous permet en quelques minutes de savoir si vous êtes enceinte et ce,
	dès les premiers jours de retard des règles. Acheté en pharmacie sans ordonnance, 
	il suffit d’uriner sur la bandelette (idéalement avec la première urine du matin, mais les nouveaux tests 
	sont de moins en moins exigeants) et d\'attendre. <a href="">voir comment faure un test d\'urine</a>.<br>
	Ces test détectent le taux de béta HCG dans les urines (produites par l’embryon)
	Même si vous êtes impatiente ne le faites pas trop tôt, vous risqueriez d’obtenir un faux négatif.<br>
	<b>Le test sanguin</b>	fiable a 100% ce test vous donnera la quantité exacte d\'hormone Béta Hcg présente dans votre sang au moment ou vous le faite.
	Il est prescrit par votre médecin et vous obtiendrez les résultats en quelques heures.<br>
	La quantité de béta HCG permet de dater plus ou moins la grossesse en court et de détecter d’éventuelles anomalies.
	<b>L’échographie</b> Encore un examen particulièrement fiable. La première échographie officielle a lieu autour de la 13ème semaine d’aménorrhée mais
	il n’est pas rare que le gynécologue fasse une échographie par voie vaginale afin de confirmer le début de grossesse. <br>
	Un moment fabuleux et le début d\'une belle aventure.');
	} else echo('Les chances d\'etre enceintes sont vraiment minimales<br> Le mieux est de le confirmer par <a href="">un test d\'urine</a> ou de consulter un medecin.<br>
	<b>Conseil:</b> Le test urinaire même si ce n’est pas du 100 % il est très fiable et
	vous permet en quelques minutes de savoir si vous êtes enceinte et ce,
	dès les premiers jours de retard des règles. Acheté en pharmacie sans ordonnance, 
	il suffit d’uriner sur la bandelette (idéalement avec la première urine du matin, mais les nouveaux tests 
	sont de moins en moins exigeants) et d\'attendre. <a href="">voir comment faure un test d\'urine</a>.<br>
	Ces test détectent le taux de béta HCG dans les urines (produites par l’embryon)
	Même si vous êtes impatiente ne le faites pas trop tôt, vous risqueriez d’obtenir un faux négatif.<br>
	<b>Le test sanguin</b>	fiable a 100% ce test vous donnera la quantité exacte d\'hormone Béta Hcg présente dans votre sang au moment ou vous le faite.
	Il est prescrit par votre médecin et vous obtiendrez les résultats en quelques heures.<br>
	La quantité de béta HCG permet de dater plus ou moins la grossesse en court et de détecter d’éventuelles anomalies.
	<b>L’échographie</b> Encore un examen particulièrement fiable. La première échographie officielle a lieu autour de la 13ème semaine d’aménorrhée mais
	il n’est pas rare que le gynécologue fasse une échographie par voie vaginale afin de confirmer le début de grossesse. <br>
	Un moment fabuleux et le début d\'une belle aventure.');
	}
?>
  </div>
  </body>
  </html>
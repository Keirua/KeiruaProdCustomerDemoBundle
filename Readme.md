#Introduction

Le code de ce petit bundle est celui li� � l'article sur la g�n�ration dynamique de formulaires sur le blog [KeiruaProd](http://www.keiruaprod.fr)

# Telechargement

R�cup�rez le code du pr�sent bundle, et copiez le dans src/KeiruaProd/ApplicationBundle/ (cr�ez le r�pertoire si n�cessaire).

# Installation

Dans app/AppKernel.php, ajouter dans la fonction registerBundles() :

	$bundles = array(
		// ...
		new KeiruaProd\ApplicationBundle\KeiruaProdApplicationBundle(),
	);

# Ajoutez les routes
	
Dans app/config/routing.yml, rajouter :

	KeiruaProdApplicationBundle:
		resource: "@KeiruaProdApplicationBundle/Resources/config/routing.yml"
		prefix:   /customer/

# Configurez votre base de donn�es
Cr�ez la base de donn�es si ce n'est pas d�j� fait. Dans une console, ex�cutez la commande :

	php app/console doctrine:database:create

Mettre � jour le schema de donn�es

	php app/console doctrine:schema:update --force

# Ajoutez jQuery
Pour pas mal all�ger ce d�pot, je n'ai pas mis tout le reste du code de l'application. Du coup, mettez � jour le code du fichier app/Resource/views/base.html.twig, et ajoutez le code suivant n'importe o� entre <head> et </head> :

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>

# Utilisez

C'est bon, plus qu'� se rendre sur /customer et on peut regarder acc�der aux pages du bundle.

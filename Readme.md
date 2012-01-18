#Introduction

Le code de ce petit bundle est celui lié à l'article sur la génération dynamique de formulaires sur le blog [KeiruaProd](http://www.keiruaprod.fr)

# Telechargement

Récupérez le code du présent bundle, et copiez le dans src/KeiruaProd/ApplicationBundle/ (créez le répertoire si nécessaire).

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

# Configurez votre base de données
Créez la base de données si ce n'est pas déjà fait. Dans une console, exécutez la commande :

	php app/console doctrine:database:create

Mettre à jour le schema de données

	php app/console doctrine:schema:update --force

# Ajoutez jQuery
Pour pas mal alléger ce dépot, je n'ai pas mis tout le reste du code de l'application. Du coup, mettez à jour le code du fichier app/Resource/views/base.html.twig, et ajoutez le code suivant n'importe où entre <head> et </head> :

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>

# Utilisez

C'est bon, plus qu'à se rendre sur /customer et on peut regarder accéder aux pages du bundle.

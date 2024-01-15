# Dictionnaire de données en amont de la modélisation

Podcasts

Nom|Type|Taille|Description|
|-|-|-|-|
|num_pod|Entier|-|Identifiant du podcast|
|name|Chaîne de caractères|50|Nom du podcast|
|descri|Chaîne de caractères|-|Description du podcast|
|excerpt|Chaîne de caractères|300|Extrait de la description|
|link|Chaîne de caractères|150|Lien fichier audio|
|created_at|Date|-|Date de création|
|updated_at|Date|-|Date de MaJ|

Comments

Nom|Type|Taille|Description|
|-|-|-|-|
|num_comment|Entier|-|Numéro du commentaire|
|content|Chaîne de caractères|-|Contenu du commentaire|
|created_at|Date|-|Date de création|
|updated_at|Date|-|Date de MaJ|


Categories

Nom|Type|Taille|Description|
|-|-|-|-|
|num_category|Entier|-|Numéro de la catégorie|
|name|Chaîne de caractères|100|Nom de la catégorie|
|created_at|Date|-|Date de création|
|updated_at|Date|-|Date de MaJ|

# Dictionnaire de données après MPD

Podcasts

Nom|Type|Taille|Description|
|-|-|-|-|
|id|BIGINT|-|Identifiant du podcast|
|name|VARCHAR|50|Nom du podcast|
|descri|TEXT|-|Description du podcast|
|excerpt|VARCHAR|300|Extrait de la description|
|link|VARCHAR|150|Lien fichier audio|
|created_at|TIMESTAMP|-|Date de création|
|updated_at|TIMESTAMP|-|Date de MaJ|

Comments

Nom|Type|Taille|Description|
|-|-|-|-|
|id|BIGINT|-|Numéro du commentaire|
|content|TEXT|-|Contenu du commentaire|
|created_at|TIMESTAMP|-|Date de création|
|updated_at|TIMESTAMP|-|Date de MaJ|


Categories

Nom|Type|Taille|Description|
|-|-|-|-|
|id|BIGINT|-|Numéro de la catégorie|
|name|VARCHAR|100|Nom de la catégorie|
|created_at|TIMESTAMP|-|Date de création|
|updated_at|TIMESTAMP|-|Date de MaJ|


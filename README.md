# Banque


## Pour associer le depot local a un depot en ligne j'ai suivi les étapes suivqntes:

1. création de compte github
2. création d'un nouveau repositori
3. ouvrir le dossier qu'on veux deposer dans git
4. ouvrir le terminal gitbash
5. création  du depot  local par le code suivant:
   - git init: ça crée un dossier .git dans le meme dossier qu'on a ouvert
   - git add . (pour dire qu'on veut tout ajouter)
   - git commit -m "commentaire" (pour ajouter un commentaire)
6. Association
   - sur ma barre de tache en haut en droite là ou on a un signe + on fait un click puis on click sur nouveau referentiel
   - un click sur l'icon code
   - u click sur l'icon de copy
   - revenir dans le terminal
   - taper la commande: git remote add origin  https://github.com/sarutichristian/banque.git
   - uploder le code en ligne avec la commande: git push -u origin master

   

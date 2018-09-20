
-- Exercice 2 (3pt) : SQL (BDD Bibliotheque) (30 min)
	-- Dans un fichier ecrire une requete (jointure) permettant d'afficher toutes personnes ayant emprunté le livre une vie de Guy de Maupassant: 
		-- - prenom - auteur - titre du livre - date d'emprunt - date de rendu
		
		
		

-- Jointure INTERNE		
SELECT a.prenom, l.livre, l.titre, e.date_sortie, e.date_rendu
FROM abonnes a, emprunt e, livre l
WHERE a.id_abonne = e.id_abonne
AND l.id_livre = e.id_livre
AND l.titre = 'Une vie'		
		
-- Jointure INTERNE (avec JOIN)				
SELECT a.prenom, l.livre, l.titre, e.date_sortie, e.date_rendu
FROM emprunt e
INNER JOIN abonnes a ON a.id_abonne = e.id_abonne
INNER JOIN livre l ON l.id_livre = e.id_livre
WHERE l.titre = 'Une vie'

-- Jointure INTERNE (avec JOIN)	
SELECT abonnes.prenom, livre.livre, livre.titre, emprunt.date_sortie, emprunt.date_rendu
FROM emprunt
INNER JOIN abonnes ON abonne.id_abonne = emprunt.id_abonne
INNER JOIN livre ON livre.id_livre = emprunt.id_livre
WHERE livre.titre = 'Une vie'






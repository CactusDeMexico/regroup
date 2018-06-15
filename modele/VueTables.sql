CREATE VIEW vueProduit
  AS SELECT Produit.Nom,Produit.Prix,
            Produit.Description,Produit.Quantite,Produit.Type,
            Temps.DateDebut,Temps.DateFin,
            Media.URL
     FROM media,produit,temps where Media.idProduit=Produit.idProduit AND Temps.IdTemps=Produit.IdTemps;

##VERSION PHP MY ADMIN
select `regroup`.`produit`.`Nom` AS `Nom`,`regroup`.`produit`.`Prix` AS `Prix`,
  `regroup`.`produit`.`Description` AS `Description`,`regroup`.`produit`.`Quantite` AS `Quantite`,
  `regroup`.`produit`.`Type` AS `Type`,`regroup`.`temps`.`DateDebut` AS `DateDebut`,
  `regroup`.`temps`.`DateFin` AS `DateFin`,`regroup`.`media`.`URL` AS `URL` from `regroup`.`media` join `regroup`.`produit` join `regroup`.`temps`
where ((`regroup`.`media`.`IdProduit` = `regroup`.`produit`.`IdProduit`) and (`regroup`.`temps`.`IdTemps` = `regroup`.`produit`.`IdTemps`));

CREATE VIEW TestProduit
    AS SELECT `regroup`.`produit`.`Nom` AS `Nom`,`regroup`.`produit`.`Prix` AS `Prix`,
              `regroup`.`produit`.`Description` AS `Description`,`regroup`.`produit`.`Quantite` AS `Quantite`,
              `regroup`.`produit`.`Type` AS `Type`,`regroup`.`temps`.`DateDebut` AS `DateDebut`,
              `regroup`.`temps`.`DateFin` AS `DateFin`,`regroup`.`media`.`URL` AS `Lien` from `regroup`.`media` join `regroup`.`produit` join `regroup`.`temps`
       where ((`regroup`.`media`.`IdProduit` = `regroup`.`produit`.`IdProduit`) and (`regroup`.`temps`.`IdTemps` = `regroup`.`produit`.`IdTemps`));

DROP VIEW vueProduit;
CREATE VIEW vueProduit
  AS SELECT `regroup`.`produit`.`Nom` AS `Nom`,`regroup`.`produit`.`Prix` AS `Prix`,
            `regroup`.`produit`.`Description` AS `Description`,`regroup`.`produit`.`Quantite` AS `Quantite`,
            `regroup`.`produit`.`Type` AS `Type`,`regroup`.`temps`.`DateDebut` AS `DateDebut`,
            `regroup`.`temps`.`DateFin` AS `DateFin`,`regroup`.`media`.`URL` AS `Lien` from `regroup`.`media` join `regroup`.`produit` join `regroup`.`temps`
     where ((`regroup`.`media`.`IdProduit` = `regroup`.`produit`.`IdProduit`) and (`regroup`.`temps`.`IdTemps` = `regroup`.`produit`.`IdTemps`));




DROP VIEW vueCorPro;
CREATE VIEW  vueCorPro

  AS SELECT
       `regroup`.`produit`.`IdProduit` AS `IdProduit`,
       `regroup`.`produit`.`Nom` AS `Nom`,`regroup`.`produit`.`Prix` AS `Prix`,
       `regroup`.`produit`.`Description` AS `Description`,`regroup`.`produit`.`Quantite` AS `Quantite`,
       `regroup`.`produit`.`Type` AS `Type`,`regroup`.`temps`.`DateDebut` AS `DateDebut`,
       `regroup`.`temps`.`DateFin` AS `DateFin`,`regroup`.`media`.`URL` AS `Lien` from `regroup`.`media` join `regroup`.`produit` join `regroup`.`temps`
     where ((`regroup`.`media`.`IdProduit` = `regroup`.`produit`.`IdProduit`) and (`regroup`.`temps`.`IdTemps` = `regroup`.`produit`.`IdTemps`));

CREATE VIEW vueComercial

  As SELECT


     `regroup`.`produit`.`IdProduit` AS `IdProduit`,
     `regroup`.`administrateur`.`Nom` AS `ValiderPar`,
     `regroup`.`produit`.`Nom` AS `Nom`,
     `regroup`.`produit`.`Quantite` AS `Quantite`,
     `regroup`.`produit`.`Prix` AS `Prix`,
     COUNT(`regroup`.`achatseff`.`Quantite`) AS Total,
     `regroup`.`temps`.`DateFin` AS `DateFin`,`regroup`.`media`.`URL` AS `Lien` from
     `regroup`.`media` join `regroup`.`produit` join `regroup`.`temps` join `regroup`.`achatseff`
      JOIN `regroup`.`valider` JOIN administrateur
where ((`regroup`.`media`.`IdProduit` = `regroup`.`produit`.`IdProduit`) and (`regroup`.`temps`.`IdTemps` = `regroup`.`produit`.`IdTemps`)
AND (`regroup`.`valider`.`IdProduit` = `regroup`.`achatseff`.`IdProduit`)
AND ( exists(  select `regroup`.`administrateur`.`Nom` FROM Administrateur where valider.IdAdmin=administrateur.IdAdmin) )

);


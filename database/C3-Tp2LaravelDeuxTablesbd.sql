
INSERT INTO `categorie` (`idCat`, `libelleCat`) VALUES
(1, 'Encas'),
(2, 'Céréales');


INSERT INTO `produit` (`idPdt`, `libellePdt`, `prixPdt`, `stockPdt`, `idCat`) VALUES
(1, 'Mars', 2, 20, 1),
(2, 'Nuts', 3, 30, 1),
(3, 'Bounty', 4, 40, 1),
(4, 'Kellogs', 5, 50, 2),
(5, 'Muesly', 6, 60, 2),
(6, 'Country Crips', 7, 70, 2);

--
ALTER TABLE `categorie`
  MODIFY `idCat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idPdt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


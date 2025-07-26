-- INSERT INTO profil (libelle) VALUES ('client'), ('commercial');
-- INSERT INTO utilisateur (nom, prenom, pieceidentite, numerotelephone, photorecto, profil_id, photoverso, adresse)
-- VALUES
-- ('Diop', 'Aminata', 'CNI123456', '771234567', 'recto1.jpg', 7, 'verso1.jpg', 'Dakar'),
-- ('Fall', 'Moussa', 'CNI654321', '780112233', 'recto2.jpg', 7, 'verso2.jpg', 'Thiès'),
-- ('Ndiaye', 'Fatou', 'CNI987654', '765432198', 'recto3.jpg', 7, 'verso3.jpg', 'Saint-Louis');

-- INSERT INTO compte (solde, type, numero, utilisateur_id, numerotelephone)
-- VALUES
-- (100000, 'principal', 'CPT001', 11, '771234567'),
-- (50000, 'secondaire', 'CPT002', 10, '780112233'),
-- (75000, 'principal', 'CPT003', 10, '765432198');


INSERT INTO transaction (date, compte_id, type, montant) VALUES
('2025-07-01', 1, 'depot', 20000),
('2025-07-02', 1, 'retrait', 10000),
('2025-07-03', 1, 'paiement', 15000),
('2025-07-04', 1, 'depot', 5000);
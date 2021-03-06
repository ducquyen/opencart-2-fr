<?php
/*
*  Copyright (C) 2015-2018 P. Mergey
*  This program is free software: you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*  This program is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*  You should have received a copy of the GNU General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// Text
$_['text_title'] = 'Payer avec une carte de crédit (eWAY)';
$_['text_credit_card'] = 'Détails de la carte de crédit';
$_['text_testing'] = 'Cette passerelle de paiement est actuellement en phase de test. Votre carte de crédit ne sera pas débitée.<br/>Si vous souhaitez effectuer une commande réelle, veuillez utiliser un autre mode de paiement pour l’instant.';
$_['text_basket'] = 'Panier d’achat';
$_['text_checkout'] = 'Valider la commande';
$_['text_success'] = 'Succès';
$_['text_shipping'] = 'Livraison';
// Entry
$_['entry_cc_number'] = 'Numéro de la carte';
$_['entry_cc_name'] = 'Nom du titulaire de la carte';
$_['entry_cc_expire_date'] = 'Date d’expiration de la carte';
$_['entry_cc_cvv2'] = 'Cryptogramme visuel';
$_['button_pay'] = 'Payez maintenant';
$_['text_card_accepted'] = 'Cartes acceptées : ';
$_['text_card_type_m'] = 'MasterCard';
$_['text_card_type_v'] = 'Visa (Crédit/Débit/Electron/Delta)';
$_['text_card_type_c'] = 'Diners Club International';
$_['text_card_type_a'] = 'American Express';
$_['text_card_type_j'] = 'JCB';
$_['text_card_type_pp'] = 'PayPal';
$_['text_card_type_mp'] = 'Masterpass';
$_['text_card_type_vm'] = 'Visa Checkout';
$_['text_type_help'] = 'Après avoir cliqué sur Valider la commande, vous serez redirigé vers ';
$_['text_transaction_failed'] = 'Désolé, votre paiement a été refusé.';
// Help
$_['help_cvv'] = 'Pour Mastercard ou Visa, il s’agit des trois derniers chiffres dans la zone de signature, au dos de votre carte.';
$_['help_cvv_amex'] = 'Pour American Express, il s’agit des quatre chiffres indiqués sur l’avant de votre carte';
// Validation Error codes
$_['text_card_message_V6000'] = 'Erreur de validation indéfinie';
$_['text_card_message_V6001'] = 'IP du client invalide';
$_['text_card_message_V6002'] = 'Identifiant d’appareil (DeviceID) invalide';
$_['text_card_message_V6011'] = 'Montant invalide';
$_['text_card_message_V6012'] = 'Description de facture invalide';
$_['text_card_message_V6013'] = 'Numéro de facture invalide';
$_['text_card_message_V6014'] = 'Référence de facture invalide';
$_['text_card_message_V6015'] = 'Code de devise invalide';
$_['text_card_message_V6016'] = 'Paiement requis';
$_['text_card_message_V6017'] = 'Code de devise de paiement requis';
$_['text_card_message_V6018'] = 'Code de devise de paiement inconnu';
$_['text_card_message_V6021'] = 'Nom du titulaire de la carte requis';
$_['text_card_message_V6022'] = 'Numéro de la carte requis';
$_['text_card_message_V6023'] = 'CVN requis';
$_['text_card_message_V6031'] = 'Numéro de la carte invalide';
$_['text_card_message_V6032'] = 'CVN invalide';
$_['text_card_message_V6033'] = 'Date d’expiration invalide';
$_['text_card_message_V6034'] = 'Numéro de série invalide';
$_['text_card_message_V6035'] = 'Date de début invalide';
$_['text_card_message_V6036'] = 'Mois invalide';
$_['text_card_message_V6037'] = 'Année invalide';
$_['text_card_message_V6040'] = 'Identifiant de jeton client invalide';
$_['text_card_message_V6041'] = 'Client requis';
$_['text_card_message_V6042'] = 'Prénom du client requis';
$_['text_card_message_V6043'] = 'Nom du client requis';
$_['text_card_message_V6044'] = 'Code du pays du client requis';
$_['text_card_message_V6045'] = 'Titre du client requis';
$_['text_card_message_V6046'] = 'Identifiant de jeton client requis';
$_['text_card_message_V6047'] = 'URL de redirection requise';
$_['text_card_message_V6051'] = 'Prénom invalide';
$_['text_card_message_V6052'] = 'Nom invalide';
$_['text_card_message_V6053'] = 'Code du pays invalide';
$_['text_card_message_V6054'] = 'Adresse électronique invalide';
$_['text_card_message_V6055'] = 'Numéro de téléphone invalide';
$_['text_card_message_V6056'] = 'Numéro de téléphone portable invalide';
$_['text_card_message_V6057'] = 'Numéro de fax invalide';
$_['text_card_message_V6058'] = 'Titre invalide';
$_['text_card_message_V6059'] = 'URL de redirection invalide';
$_['text_card_message_V6060'] = 'URL de redirection invalide';
$_['text_card_message_V6061'] = 'Référence invalide';
$_['text_card_message_V6062'] = 'Nom de compagnie invalide';
$_['text_card_message_V6063'] = 'Description d’occupation invalide';
$_['text_card_message_V6064'] = 'Rue invalide';
$_['text_card_message_V6065'] = 'Complément d’adresse invalide';
$_['text_card_message_V6066'] = 'Localité invalide';
$_['text_card_message_V6067'] = 'Pays invalide';
$_['text_card_message_V6068'] = 'Code postal invalide';
$_['text_card_message_V6069'] = 'Adresse électronique invalide';
$_['text_card_message_V6070'] = 'Numéro de téléphone invalide';
$_['text_card_message_V6071'] = 'Numéro de téléphone portable invalide';
$_['text_card_message_V6072'] = 'Commentaires invalides';
$_['text_card_message_V6073'] = 'Numéro de fax invalide';
$_['text_card_message_V6074'] = 'URL invalide';
$_['text_card_message_V6075'] = 'Prénom de l’adresse de livraison invalide';
$_['text_card_message_V6076'] = 'Nom de l’adresse de livraison invalide';
$_['text_card_message_V6077'] = 'Rue de l’adresse de livraison invalide';
$_['text_card_message_V6078'] = 'Complément de l’adresse de livraison invalide';
$_['text_card_message_V6079'] = 'Localité de l’adresse de livraison invalide';
$_['text_card_message_V6080'] = 'État de l’adresse de livraison invalide';
$_['text_card_message_V6081'] = 'Code postal de l’adresse de livraison invalide';
$_['text_card_message_V6082'] = 'Adresse électronique de l’adresse de livraison invalide';
$_['text_card_message_V6083'] = 'Numéro de téléphone de l’adresse de livraison invalide';
$_['text_card_message_V6084'] = 'Pays de l’adresse de livraison invalide';
$_['text_card_message_V6091'] = 'Code de pays inconnu';
$_['text_card_message_V6100'] = 'Nom de carte invalide';
$_['text_card_message_V6101'] = 'Mois d’expiration de la carte invalide';
$_['text_card_message_V6102'] = 'Année d’expiration de la carte invalide';
$_['text_card_message_V6103'] = 'Mois de début de la carte invalide';
$_['text_card_message_V6104'] = 'Année de début de la carte invalide';
$_['text_card_message_V6105'] = 'Numéro de série de la carte invalide';
$_['text_card_message_V6106'] = 'CVN de la carte invalide';
$_['text_card_message_V6107'] = 'Code d’accès de la carte invalide';
$_['text_card_message_V6108'] = 'Adresse de l’hôte du client invalide';
$_['text_card_message_V6109'] = 'Agent utilisateur invalide';
$_['text_card_message_V6110'] = 'Numéro de la carte invalide';
$_['text_card_message_V6111'] = 'Accès à l’API non autorisé, le compte n’est pas certifié PCI';
$_['text_card_message_V6112'] = 'Détails de la carte, autres que l’année et le mois d’expiration, redondants';
$_['text_card_message_V6113'] = 'Transaction invalide pour un remboursement';
$_['text_card_message_V6114'] = 'Erreur de validation de la passerelle';
$_['text_card_message_V6115'] = 'Demande de remboursement direct invalide, identifiant de transaction';
$_['text_card_message_V6116'] = 'Données de la carte invalides sur l’identifiant de transaction original';
$_['text_card_message_V6124'] = 'Articles de la ligne invalides. Les éléments de la ligne ont été fournis, mais les totaux ne correspondent pas au champ du montant total';
$_['text_card_message_V6125'] = 'Type de paiement sélectionné inactivé';
$_['text_card_message_V6126'] = 'Numéro de carte cryptée invalide, le décryptage a échoué';
$_['text_card_message_V6127'] = 'CVN crypté invalide, le décryptage a échoué';
$_['text_card_message_V6128'] = 'Méthode invalide pour ce type de paiement';
$_['text_card_message_V6129'] = 'La transaction n’a pas été autorisée pour une réception ou une annulation';
$_['text_card_message_V6130'] = 'Erreur d’informations client générique';
$_['text_card_message_V6131'] = 'Erreur d’informations de livraison générique';
$_['text_card_message_V6132'] = 'La transaction a déjà été complétée ou annulée, l’opération n’est pas permise';
$_['text_card_message_V6133'] = 'Validation indisponible pour ce type de paiement';
$_['text_card_message_V6134'] = 'Authentification invalide de l’identifiant de transaction pour une réception ou une annulation';
$_['text_card_message_V6135'] = 'Erreur de PayPal lors du processus de remboursement';
$_['text_card_message_V6140'] = 'Compte du marchand suspendu';
$_['text_card_message_V6141'] = 'Détails du compte PayPal ou de la signature de l’API invalides';
$_['text_card_message_V6142'] = 'Autorisation non disponible pour la banque ou la succursale';
$_['text_card_message_V6150'] = 'Montant de remboursement invalide';
$_['text_card_message_V6151'] = 'Montant du remboursement supérieur à la transaction initiale';
// Payment failure messages
$_['text_card_message_D4401'] = 'Se référer à l’émetteur';
$_['text_card_message_D4402'] = 'Se référer à l’émetteur, spécial';
$_['text_card_message_D4403'] = 'Aucun marchand';
$_['text_card_message_D4404'] = 'Ramasser une carte';
$_['text_card_message_D4405'] = 'Ne pas honorer';
$_['text_card_message_D4406'] = 'Erreur';
$_['text_card_message_D4407'] = 'Ramasser une carte, spécial';
$_['text_card_message_D4409'] = 'Requête en cours';
$_['text_card_message_D4412'] = 'Transaction invalide';
$_['text_card_message_D4413'] = 'Montant invalide';
$_['text_card_message_D4414'] = 'Numéro de la carte invalide';
$_['text_card_message_D4415'] = 'Aucun émetteur';
$_['text_card_message_D4419'] = 'Saisir à nouveau la dernière transaction';
$_['text_card_message_D4421'] = 'Aucune méthode sélectionnée';
$_['text_card_message_D4422'] = 'Dysfonctionnement soupçonné';
$_['text_card_message_D4423'] = 'Frais de transaction inacceptables';
$_['text_card_message_D4425'] = 'Impossible de localiser l’enregistrement sur le fichier';
$_['text_card_message_D4430'] = 'Erreur de format';
$_['text_card_message_D4431'] = 'Banque non prise en charge par commutateur';
$_['text_card_message_D4433'] = 'Carte expirée, réception';
$_['text_card_message_D4434'] = 'Fraude présumée, conserver la carte';
$_['text_card_message_D4435'] = 'Accepteur de la carte, contacter l’acquéreur, conserver la carte';
$_['text_card_message_D4436'] = 'Carte restreinte, conserver la carte';
$_['text_card_message_D4437'] = 'Contacter le service de sécurité de l’aquéreur, conserver la carte';
$_['text_card_message_D4438'] = 'Nombre de tentatives PIN dépassées, réception';
$_['text_card_message_D4439'] = 'Aucun compte de crédit';
$_['text_card_message_D4440'] = 'Fonction non supportée';
$_['text_card_message_D4441'] = 'Carte perdue';
$_['text_card_message_D4442'] = 'Aucun compte universel';
$_['text_card_message_D4443'] = 'Carte volée';
$_['text_card_message_D4444'] = 'Aucun compte d’investissement';
$_['text_card_message_D4451'] = 'Fonds insuffisants';
$_['text_card_message_D4452'] = 'Aucun compte chèque';
$_['text_card_message_D4453'] = 'Aucun compte épargne';
$_['text_card_message_D4454'] = 'Carte expirée';
$_['text_card_message_D4455'] = 'Code PIN incorrect';
$_['text_card_message_D4456'] = 'Aucun enregistrement de carte';
$_['text_card_message_D4457'] = 'Fonction non permise au titulaire de la carte';
$_['text_card_message_D4458'] = 'Fonction non permise au terminal';
$_['text_card_message_D4460'] = 'Accepteur contacter l’acquéreur';
$_['text_card_message_D4461'] = 'Dépasse la limite de retrait';
$_['text_card_message_D4462'] = 'Carte restreinte';
$_['text_card_message_D4463'] = 'Violation de sécurité';
$_['text_card_message_D4464'] = 'Montant original incorrect';
$_['text_card_message_D4466'] = 'Accepteur contacter l’acquéreur, sécurité';
$_['text_card_message_D4467'] = 'Réception de la carte';
$_['text_card_message_D4475'] = 'Nombre de tentatives PIN dépassées';
$_['text_card_message_D4482'] = 'Erreur de validation CVV';
$_['text_card_message_D4490'] = 'Coupure en cours';
$_['text_card_message_D4491'] = 'Emetteur de la carte indisponible';
$_['text_card_message_D4492'] = 'Impossible de tracer la transaction';
$_['text_card_message_D4493'] = 'Impossible de terminer, violation de la loi';
$_['text_card_message_D4494'] = 'Transaction en double';
$_['text_card_message_D4496'] = 'Erreur système';
$_['text_card_message_D4497'] = 'Échec pour erreur MasterPass';
$_['text_card_message_D4498'] = 'Échec pour erreur de création de transaction PayPal';
$_['text_card_message_D4499'] = 'Transaction invalide pour authentifier ou annuler';
$_['text_card_message_F7000'] = 'Erreur de fraude indéfinie';
$_['text_card_message_F7001'] = 'Fraude supposée';
$_['text_card_message_F7002'] = 'Fraude de correspondance de pays';
$_['text_card_message_F7003'] = 'Fraude de pays à haut risque';
$_['text_card_message_F7004'] = 'Fraude par proxy anonyme';
$_['text_card_message_F7005'] = 'Fraude par proxy transparent';
$_['text_card_message_F7006'] = 'Fraude d’adresse électronique gratuite';
$_['text_card_message_F7007'] = 'Fraude de transaction internationale';
$_['text_card_message_F7008'] = 'Fraude de niveau de risque';
$_['text_card_message_F7009'] = 'Fraude refusée';
$_['text_card_message_F7010'] = 'Refusé par les règles de fraude PayPal';
$_['text_card_message_F9010'] = 'Adresse de facturation à haut risque';
$_['text_card_message_F9011'] = 'Pays de la carte de crédit à haut risque';
$_['text_card_message_F9012'] = 'Adresse IP du client à haut risque';
$_['text_card_message_F9013'] = 'Adresse électronique à haut risque';
$_['text_card_message_F9014'] = 'Adresse de livraison à haut risque';
$_['text_card_message_F9015'] = 'Numéros de carte multiples pour une même adresse électronique';
$_['text_card_message_F9016'] = 'Numéros de carte multiples pour un même emplacement';
$_['text_card_message_F9017'] = 'Adresses électroniques multiples pour un même numéro de carte';
$_['text_card_message_F9018'] = 'Adresses électroniques multiples pour un même emplacement';
$_['text_card_message_F9019'] = 'Emplacements multiples pour un même numéro de carte';
$_['text_card_message_F9020'] = 'Emplacements multiples pour une même adresse électronique';
$_['text_card_message_F9021'] = 'Prénom de client suspect';
$_['text_card_message_F9022'] = 'Nom de client suspect';
$_['text_card_message_F9023'] = 'Transaction refusée';
$_['text_card_message_F9024'] = 'Transactions multiples pour la même adresse postale pour une carte de crédit connue';
$_['text_card_message_F9025'] = 'Transactions multiples pour la même adresse postale pour une nouvelle carte de crédit';
$_['text_card_message_F9026'] = 'Transactions multiples pour la même adresse électronique pour une nouvelle carte de crédit';
$_['text_card_message_F9027'] = 'Transactions multiples pour la même adresse électronique pour une carte de crédit connue';
$_['text_card_message_F9028'] = 'Transactions multiples pour une nouvelle carte de crédit';
$_['text_card_message_F9029'] = 'Transactions multiples pour une carte de crédit connue';
$_['text_card_message_F9030'] = 'Transactions multiples pour la même adresse électronique';
$_['text_card_message_F9031'] = 'Transactions multiples pour la même carte de crédit';
$_['text_card_message_F9032'] = 'Nom de client invalide';
$_['text_card_message_F9033'] = 'Adresse de facturation invalide';
$_['text_card_message_F9034'] = 'Adresse de livraison invalide';
$_['text_card_message_F9037'] = 'Adresse électronique du client suspecte';

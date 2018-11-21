<?php
global $users, $torrents, $seeds, $leechers, $percent;
// $language["rtl"]="rtl"; // if your language is  right to left then uncomment this line
// $language["charset"]="ISO-8859-1"; // uncomment this line with specific language charset if different than tracker's one
$language["ACCOUNT_CONFIRM"]="Confirmation de $SITENAME.";
$language["ACCOUNT_CONGRATULATIONS"]="Félicitation votre compte a bien été créé !<br />Maintenant vous pouvez vous <a href=index.php?page=login>connecter</a> avec vos identifiants.";
$language["ACCOUNT_CREATE"]="Créer un compte";
$language["ACCOUNT_DELETE"]="Supprimer un compte";
$language["ACCOUNT_DETAILS"]="Détails";
$language["ACCOUNT_EDIT"]="Èditer un compte";
$language["ACCOUNT_MGMT"]="Gérer son compte";
$language["ACCOUNT_MSG"]="Bonjour,\n\nCe courriel a été envoyé parce que quelqu'un a demandé un compte sur notre site avec cette adresse courriel.\nSi vous n'êtes pas l'auteur de la demande ignorez ce courriel, sinon merci de confirmer l'inscription. \n\nSalutation de la part de l'équipe.";
$language["ACTION"]="Action";
$language["ACTIVATED"]="Actif";
$language["ACTIVE"]="Statut";
$language["ACTIVE_ONLY"]="Actifs seulement";
$language["ADD"]="Ajouter";
$language["ADDED"]="Ajouté";
$language["ADMIN_CPANEL"]="Panneau d'admin.";
$language["ADMINCP_NOTES"]="Ici, vous pouvez contrôler tout les paramêtres de votre tracker...";
$language["ALL"]="Tout";
$language["ALL_SHOUT"]="Tout Shouts";
$language["ANNOUNCE_URL"]="L'URL d'annonce du tracker :";
$language["ANONYMOUS"]="Anonyme";
$language["ANSWER"]="Réponse";
$language["AUTHOR"]="Auteur";
$language["AVATAR_URL"]="Avatar (url) : ";
$language["AVERAGE"]="Moyenne";
$language["BACK"]="Retour";
$language["BAD_ID"]="Mauvaise ID !";
$language["BCK_USERCP"]="Retour au panneau d'utilisateur";
$language["BLOCK"]="Bloc";
$language["BODY"]="Corps";
$language["BOTTOM"]="Bas";
$language["BY"]="Par";
$language["CANT_DELETE_ADMIN"]="Il est impossible de supprimer un autre administrateur !";
$language["CANT_DELETE_NEWS"]="Vous n'êtes pas autorisé à supprimer des nouvelles !";
$language["CANT_DELETE_TORRENT"]="Vous n'êtes pas autorisé à supprimer ce torrent !";
$language["CANT_DELETE_USER"]="ous n'êtes pas autorisé à supprimer des utilisateurs !";
$language["CANT_DO_QUERY"]="Ne peut effectuer la requête SQL - ";
$language["CANT_EDIT_TORR"]="Vous n'êtes pas autorisé à modifier ce torrent !";
$language["CANT_FIND_TORRENT"]="Impossible de trouver le fichier torrent !";
$language["CANT_READ_LANGUAGE"]="Impossible de lire les fichiers de langues !";
$language["CANT_SAVE_CONFIG"]="Impossible d'écrire dans le fichier config.php";
$language["CANT_SAVE_LANGUAGE"]="Impossible de sauver le fichier de langue";
$language["CANT_WRITE_CONFIG"]="Attention : impossible d'écrire dans config.php!";
$language["CATCHUP"]="Tout marquer comme lu";
$language["CATEGORY"]="Cat.";
$language["CATEGORY_FULL"]="Catégorie";
$language["CENTER"]="centrer";
$language["CHANGE_PID"]="Changer le PID";
$language["CHARACTERS"]="caratères";
$language["CHOOSE"]="Choisir";
$language["CHOOSE_ONE"]="Choisir un";
$language["CLICK_HERE"]="Cliquer ici";
$language["CLOSE"]="Fermer";
$language["COMMENT"]="Com.";
$language["COMMENT_1"]="Commentaire";
$language["COMMENT_PREVIEW"]="Prévisualiser le com.";
$language["COMMENTS"]="Comentaires";
$language["CONFIG_SAVED"]="Félicitation, la configuration a bien été prise en compte !";
$language["COUNTRY"]="Pays";
$language["CURRENT_DETAILS"]="Détails actuels";
$language["DATABASE_ERROR"]="Erreur de la bdd.";
$language["DATE"]="Date";
$language["DB_ERROR_REQUEST"]="Erreur de la bdd. Impossible de poursuivre.";
$language["DB_SETTINGS"]="Configuration de la bdd";
$language["DEAD_ONLY"]="Morts seulement";
$language["DELETE"]="Supprimer";
$language["DELETE_ALL_READED"]="Supprimer tout les lus";
$language["DELETE_CONFIRM"]="Êtes-vous sur de vouloir supprimer ceci ?";
$language["DELETE_TORRENT"]="Supprimer le torrent";
$language["DELFAILED"]="La suppression a échouée";
$language["DESCRIPTION"]="Description";
$language["DONT_NEED_CHANGE"]="Vous ne devez pas changer ces paramêtres !";
$language["DOWN"]="Dl";
$language["DOWNLOAD"]="Téléchargement";
$language["DOWNLOAD_TORRENT"]="Télécharger le torrent";
$language["DOWNLOADED"]="Téléchargé";
$language["EDIT"]="Èditer";
$language["EDIT_LANGUAGE"]="Èditer la langue";
$language["EDIT_POST"]="Èditer le poste";
$language["EDIT_TORRENT"]="Èditer le torrent";
$language["EMAIL"]="Courriel";
$language["EMAIL_SENT"]="Un courriel a été envoyé à l'adresse indiquée<br />Cliquez sur le lien inclus pour confirmer votre compte.";
$language["EMAIL_VERIFY"]="mise à jour du compte de messagerie de $SITENAME";
$language["EMAIL_VERIFY_BLOCK"]="Courriel de vérification envoyé";
$language["EMAIL_VERIFY_MSG"]="Bonjour,\n\nCe message électronique a été envoyé parce que vous avez demandé un changement de courriel, merci de cliquer sur le lien ci-dessous pour valider la modification.\n\nSalutations de la part de l'équipe.";
$language["EMAIL_VERIFY_SENT1"]="<br /><center>Un message de vérification a été envoyé à :<br /><br /><strong><font color=\"red\">";
$language["EMAIL_VERIFY_SENT2"]="</font></strong><br /><br />Vous devrez cliquer sur le lien contenu dans le courriel afin<br />de mettre à jour votre adresse de courriel. Le courriel doit arriver dans les 10 minutes<br /> si ce n'est pas le cas, vérifiez vos SPAM.<br /><br />";
$language["ERR_500"]="HTTP/1.0 500 accès refusé !";
$language["ERR_AVATAR_EXT"]="Désolé, seul les fichiers gif, jpg, png et bmp sont permis";
$language["ERR_BAD_LAST_POST"]="Erreur du dernier post !";
$language["ERR_BAD_NEWS_ID"]="Mauvaise ID de la nouvelle !";
$language["ERR_BODY_EMPTY"]="Le coprs ne peut être vide !";
$language["ERR_CANT_CONNECT"]="Impossible de se connecter au serveur MySQL";
$language["ERR_CANT_OPEN_DB"]="Impossible d'ouvrir la bdd";
$language["ERR_DB_ERR"]="Erreur dans la bdd. Merci de contacter un administrateur à ce sujet.";
$language["ERR_DELETE_POST"]="Suppression du post. Contrôle sanitaire : Vous supprimer un poste. Cliquez";
$language["ERR_DELETE_TOPIC"]="Suppression d'un topic. Contrôle sanitaire : Vous supprimer un sujet. Cliquez";
$language["ERR_EMAIL_ALREADY_EXISTS"]="Ce courriel est déja utilisé !";
$language["ERR_EMAIL_NOT_FOUND_1"]="L'adresse courriel";
$language["ERR_EMAIL_NOT_FOUND_2"]="n'a pas été trouvée dans la bdd.";
$language["ERR_ENTER_NEW_TITLE"]="Vous devez entrer un nouveau titre !";
$language["ERR_FORUM_NOT_FOUND"]="Le forum n'a pas été trouvé";
$language["ERR_FORUM_UNKW_ACT"]="Erreur du forum : Action non reconnue";
$language["ERR_GUEST_EXISTS"]="'Impossible d'utiliser le nom d'utilisateur 'Invité' !";
$language["ERR_IMAGE_CODE"]="Le code de securité ne correspond pas.";
$language["ERR_INS_TITLE_NEWS"]="Vous devez mettre un titre et une nouvelle";
$language["ERR_INV_NUM_FIELD"]="Champ numérique invalide provenant du client";
$language["ERR_INVALID_CLIENT_EVENT"]="Èvênement inattendu venant du client.";
$language["ERR_INVALID_INFO_BT_CLIENT"]="Informations invalides du client";
$language["ERR_INVALID_IP_NUMB"]="L'adresse IP est invalide.";
$language["ERR_LEVEL"]="Désolé, votre niveau ";
$language["ERR_LEVEL_CANT_POST"]="Vous n'êtes pas autorisé à poster dans ce forum.";
$language["ERR_LEVEL_CANT_VIEW"]="Vous n'êtes pas autorisé à afficher ce sujet.";
$language["ERR_MISSING_DATA"]="Données manquantes !";
$language["ERR_MUST_BE_LOGGED_SHOUT"]="Vous devez être connecté pour ecrire...";
$language["ERR_NO_BODY"]="Aucun texte dans le corps";
$language["ERR_NO_NEWS_ID"]="L'ID de la nouvelle n'a pas été trouvé !";
$language["ERR_NO_POST_WITH_ID"]="Aucun post avec cet ID";
$language["ERR_NO_SPACE"]="Votre nom d'utilisateur ne doit pas contenir d'espace, merci de le remplacer par un trait de soulignement (underscore) :<br /><br />";
$language["ERR_NO_TOPIC_ID"]="Le sujet n'a pas renvoyé d'ID";
$language["ERR_NO_TOPIC_POST_ID"]="Aucun sujet avec cet ID";
$language["ERR_NOT_AUTH"]="Vous n'êtes pas autorisé !";
$language["ERR_NOT_FOUND"]="Non trouvé...";
$language["ERR_NOT_PERMITED"]="Non permis";
$language["ERR_PASS_LENGTH"]="<font color=\"black\">Votre mot de passe doit contenir au moins 4 caractères.</font>";
$language["ERR_PASSWORD_INCORRECT"]="Mot de passe incorrect";
$language["ERR_PERM_DENIED"]="Autorisation refusée";
$language["ERR_PID_NOT_FOUND"]="Merci de retélécharger le torrent. Le systeme PID est actif et le PID de ce torrent n'a pas été trouvé";
$language["ERR_RETR_DATA"]="Erreur de données !";
$language["ERR_SEND_EMAIL"]="Impossible d'envoyer des courriels. Merci de contactez un administrateur pour reporter cette erreur.";
$language["ERR_SERVER_LOAD"]="Le serveur est actuellement surchagé. Merci de retenter dans quelques minutes...";
$language["ERR_SPECIAL_CHAR"]="<font color=\"black\">Votre nom d'utilisateur ne doit pas contenir de caratères spéciaux :<br /><br /><font color=\"red\"><strong>* ? < > @ $ & % etc...</strong></font></font><br />";
$language["ERR_SQL_ERR"]="Erreur SQL";
$language["ERR_SUBJECT"]="Vous devez entrer un nom de sujet.";
$language["ERR_TOPIC_ID_NA"]="L'ID du topic est N/A";
$language["ERR_TOPIC_LOCKED"]="Le sujet est bloqué";
$language["ERR_TORRENT_IN_BROWSER"]="Ce fichier est pour un client.";
$language["ERR_UPDATE_USER"]="Impossible de mettre à jour les données de l'utilisateur. Merci de contacter un administrateur pour rapporter cette erreur.";
$language["ERR_USER_ALREADY_EXISTS"]="Il y'a déja un utilisateur avec ce pseudonyme !";
$language["ERR_USER_NOT_FOUND"]="Désolé, l'utilisateur n'a pas été trouvé";
$language["ERR_USER_NOT_USER"]="Vous n'êtes pas autorisé à accéder au panneau des utilisateurs !";
$language["ERR_USERNAME_INCORRECT"]="Nom d'utilisateur incorrect";
$language["ERROR"]="Erreur";
$language["ERROR_ID"]="Erreur d'ID";
$language["FACOLTATIVE"]="optionnel";
$language["FILE"]="Fichier";
$language["FILE_CONTENTS"]="Contenu du fichier";
$language["FILE_NAME"]="Nom de fichier";
$language["FIND_USER"]="Trouver un utilisateur";
$language["FINISHED"]="Fini";
$language["FORUM"]="Forum";
$language["FORUM_ERROR"]="Erreur du forum";
$language["FORUM_INFO"]="Info du forum";
$language["FORUM_MIN_CREATE"]="Droit minimum de création";
$language["FORUM_MIN_READ"]="Droit minimum de lecture";
$language["FORUM_SEARCH"]="Rechercher dans les forums";
$language["FORUM_N_TOPICS"]="N. Sujets";
$language["FORUM_N_POSTS"]="N. Posts";
$language["FRM_DELETE"]="Supprimer";
$language["FRM_LOGIN"]="Connexion";
$language["FRM_PREVIEW"]="Prévisualiser";
$language["FRM_REFRESH"]="Rafraîchir";
$language["FRM_RESET"]="Remise a zéro";
$language["FRM_SEND"]="Envoyer";
$language["FRM_CONFIRM"]="Confirmer";
$language["FRM_CANCEL"]="Annuler";
$language["FRM_CLEAN"]="Nettoyer";
$language["GLOBAL_SERVER_LOAD"]="Taux de charge du serveur ";
$language["GO"]="Aller";
$language["GROUP"]="Groupe";
$language["GUEST"]="Invité";
$language["GUESTS"]="Invités";
$language["HERE"]="ici";
$language["HISTORY"]="Historique";
$language["HOME"]="Acceuil";
$language["IF_YOU_ARE_SURE"]="si vous êtes sur.";
$language["IM_SURE"]="Je suis sur";
$language["IN"]="dans";
$language["INF_CHANGED"]="Informations changées !";
$language["INFINITE"]="Inf.";
$language["INFO_HASH"]="Info Hash";
$language["INS_NEW_PWD"]="Insérer un nouveau mot de passe !";
$language["INS_OLD_PWD"]="Insérer l'ancien mot de passe !";
$language["INSERT_DATA"]="Insérer les données nécessaires pour uploader !";
$language["INSERT_NEW_FORUM"]="Insérer un nouveau forum";
$language["INVALID_ID"]="Cet ID n'est pas valide, désolé.";
$language["INVALID_INFO_HASH"]="Valeurs invalide de hash.";
$language["INVALID_PID"]="Le PID est invalide";
$language["INVALID_TORRENT"]="Erreur sur le tracker : torrent invalide";
$language["KEYWORDS"]="Mot clef";
$language["LAST_EXTERNAL"]="Les derniers torrents externes ont été mis à jour ";
$language["LAST_NEWS"]="Dernières nouvelle";
$language["LAST_POST_BY"]="Dernier post par";
$language["LAST_SANITY"]="La dernière veille sanitaire date du ";
$language["LAST_TORRENTS"]="Derniers torrents";
$language["LAST_UPDATE"]="Dernière mise à jour";
$language["LASTPOST"]="Dernier post";
$language["LEECHERS"]="leechers";
$language["LEFT"]="gauche";
$language["LOGIN"]="Connexion";
$language["LOGOUT"]="Déconnexion";
$language["MAILBOX"]="Boîte de message";
$language["MANAGE_NEWS"]="Gérer les nouvelles";
$language["MEMBER"]="Utilisateur";
$language["MEMBERS"]="Utilisateurs";
$language["MEMBERS_LIST"]="Liste des utilisateurs";
$language["MINIMUM_100_DOWN"]="(avec 100Mb min. téléchargé)";
$language["MINIMUM_5_LEECH"]="avec 5 leechers minimum, les torrents morts ne sont pas inclus";
$language["MINIMUM_5_SEED"]="avec 5 seeders minimum";
$language["MKTOR_INVALID_HASH"]="Céation du torrent : Hash invalide";
$language["MNU_ADMINCP"]="Panneau d'admin.";
$language["MNU_FORUM"]="Forum";
$language["MNU_INDEX"]="Acceuil";
$language["MNU_MEMBERS"]="Membres";
$language["MNU_NEWS"]="Nouvelles";
$language["MNU_STATS"]="Statistiques";
$language["MNU_TORRENT"]="Torrents";
$language["MNU_UCP_CHANGEPWD"]="Changé le mot de passe";
$language["MNU_UCP_HOME"]="Acceuil du panneau d'utilisateur";
$language["MNU_UCP_IN"]="Votre boîte de MP";
$language["MNU_UCP_INFO"]="Èditer le profil";
$language["MNU_UCP_NEWPM"]="Nouveau MP";
$language["MNU_UCP_OUT"]="Votre boîte d'envoi de MP";
$language["MNU_UCP_PM"]="Votre boîte de MP";
$language["MNU_UPLOAD"]="Envoi";
$language["MORE_SMILES"]="Plus d'informations";
$language["MORE_THAN"]=">Plus de ";
$language["MORE_THAN_2"]="Objet trouvé, supprimer le d'abord";
$language["NA"]="N/A";
$language["NAME"]="Nom";
$language["NEED_COOKIES"]="Note : Votre navigateur doit accepter les cookies.";
$language["NEW_COMMENT"]="Insérer votre commentaire...";
$language["NEW_COMMENT_T"]="Nouveau commentaire";
$language["NEWS"]="les nouvelless";
$language["NEWS_DESCRIPTION"]="Nouvelles :";
$language["NEWS_INSERT"]="Insérer votre nouvelles";
$language["NEWS_PANEL"]="Panneau des nouvelles";
$language["NEWS_TITLE"]="Titre :";
$language["NEXT"]="Suivant";
$language["NO"]="Non";
$language["NO_BANNED_IPS"]="Ce sont les IP bannies";
$language["NO_COMMENTS"]="Pas de commentaire...";
$language["NO_FORUMS"]="Pas de forum trouvé !";
$language["NO_MAIL"]="vous n'avez pas de nouveau courriel.";
$language["NO_MESSAGES"]="Pas de message privé trouvé...";
$language["NO_NEWS"]="Pas de nouvelle";
$language["NO_PEERS"]="Pas de partages";
$language["NO_RECORDS"]="Désolé, la liste est vide...";
$language["NO_TOPIC"]="Pas de sujet trouvé";
$language["NO_TORR_UP_USER"]="Cet utilisateur n'a pas envoyé de torrents";
$language["NO_TORRENTS"]="Aucuns torrents ici...";
$language["NO_USERS_FOUND"]="Pas d'utilisateur trouvé !";
$language["NOBODY_ONLINE"]="Personne n'est en ligne";
$language["NONE"]="Aucun";
$language["NOT_ADMIN_CP_ACCESS"]="Vous n'êtes pas autorisé à accéder au panneau d'administration !";
$language["NOT_ALLOW_DOWN"]="Il n'est pas permis de les téléchargés à partir du";
$language["NOT_AUTH_DOWNLOAD"]="Vous n'êtes pas autorisé à télécharger, désolé...";
$language["NOT_AUTH_VIEW_NEWS"]="Vous n'êtes pas autorisé à voir les nouvelles !";
$language["NOT_AUTHORIZED"]="Vous n'êtes pas autorisé à voir le";
$language["NOT_AUTHORIZED_UPLOAD"]="Vous n'êtes pas autorisé à uploader, désolé...";
$language["NOT_AVAILABLE"]="Non disponible";
$language["NOT_MAIL_IN_URL"]="Ce n'est pas l'adresse courriel qui était dans le lien !";
$language["NOT_POSS_RESET_PID"]="Impossible de remettre à zéro le PID.<br />Merci de signaler cette erreur à l'administrateur...";
$language["NOW_LOGIN"]="Maintenant, vous êtes invité à vous connectez";
$language["NUMBER_SHORT"]="#";
$language["OLD_PWD"]="Ancien mot de passe";
$language["ONLY_REG_COMMENT"]="Seul les utilisateurs enregistré peuvent écrire des commentaires !";
$language["OPT_DB_RES"]="Résultat de l'optimisation de la bdd";
$language["OPTION"]="Option";
$language["PASS_RESET_CONF"]="confirmation de la mise à zéro du mot de passe";
$language["PEER_CLIENT"]="Client";
$language["PEER_COUNTRY"]="Pays";
$language["PEER_ID"]="ID des Peer";
$language["PEER_LIST"]="Liste des peers";
$language["PEER_PORT"]="Port";
$language["PEER_PROGRESS"]="Progression";
$language["PEER_STATUS"]="Statut";
$language["PEERS"]="peers";
$language["PEERS_DETAILS"]="Cliquer ici pour voir le détail des peers";
$language["PICTURE"]="Image";
$language["PID"]="PID";
$language["PLEASE_WAIT"]="Patientez...";
$language["PM"]="MP";
$language["POSITION"]="Position";
$language["POST_REPLY"]="Répondre";
$language["POSTED_BY"]="Posté par";
$language["POSTED_DATE"]="Posté le";
$language["POSTS"]="Postes";
$language["POSTS_PER_DAY"]="%s postes par jour";
$language["POSTS_PER_PAGE"]="Postes par page";
$language["PREVIOUS"]="Préc.";
$language["PRIVATE_MSG"]="Message privé";
$language["PWD_CHANGED"]="Mot de passe changé !";
$language["QUESTION"]="Question";
$language["QUICK_JUMP"]="Saut rapide";
$language["QUOTE"]="Citer";
$language["RANK"]="Rang";
$language["RATIO"]="Ratio";
$language["REACHED_MAX_USERS"]="Nombre max. d'utilisateurs atteint";
$language["READED"]="Lu";
$language["RECEIVER"]="Destinataire";
$language["RECOVER_DESC"]="Utilisez le formulaire ci-dessous pour réinitialiser votre mot de passe de votre compte. <br /> (Vous recevrez un courriel de confirmation.)";
$language["RECOVER_PWD"]="Retrouver un mot de passe";
$language["RECOVER_TITLE"]="Récupérer le nom d'utilisateur ou un mot de passe perdu";
$language["REDIRECT"]="si votre navigateur n'accepte pas le javascript, cliquez";
$language["REDOWNLOAD_TORR_FROM"]="Re-télécharger le torrent depuis";
$language["REGISTERED"]="Enregistré";
$language["REGISTERED_EMAIL"]="Courriel enregistré";
$language["REMOVE"]="Supprimer";
$language["REPLIES"]="Réponses";
$language["REPLY"]="Répondre";
$language["RESULT"]="Resultat";
$language["RETRY"]="Recommencer";
$language["RETURN_TORRENTS"]="Retour à la liste des torrents";
$language["REVERIFY_CONGRATS1"]="<center><br />Félicitation, votre courriel a bien été verifié et a été correctement changé<br /><br /><strong>Depuis : <font color=\"red\">";
$language["REVERIFY_CONGRATS2"]="</strong></font><br /><strong>Pour : <font color=\"red\">";
$language["REVERIFY_CONGRATS3"]="</strong></font><br /><br />";
$language["REVERIFY_FAILURE"]="<center><br /><strong><font color=\"red\"><u>Désolé, mais ce  lien n'est pas valide.</ u></ strong></ font><br /><br />Un nouveau nombre est généré lorsque que vous changez votre adresse de courriel.<br />Si vous voyez ce message alors, vous avez très probablement essayé de changer votre courriel<br />plus d'une fois et que vous utilisez un ancien lien.<br /><br /><strong>Merci d'attendre jusqu'à ce que vous soyez absolument sûr que vous n'avez pas reçu le<br />courriel de confirmation avant d'essayer de changer à nouveau votre adresse de courriel.</ Strong><br /><br />";
$language["REVERIFY_MSG"]="Si vous changez votre adresse courriel, vous devrez valider le changement grâce au courriel de confirmation envoyé à l'adresse que vous souhaitez modifier.<br /><br /><font Color=\"red\"><strong>L'adresse courriel ne sera pas mise à jour tant que vous n'aurez pas verifié la nouvelle adresse en cliquant sur le lien.</ Strong></ font>";
$language["RIGHT"]="Droite";
$language["SEARCH"]="Chercher";
$language["SEEDERS"]="seeds";
$language["SEEN"]="Voir";
$language["SELECT"]="Sélectionner...";
$language["SENDER"]="Expéditeur";
$language["SENT_ERROR"]="Erreur lors de l'envoi";
$language["SHORT_C"]="C"; //Shortname for Completed
$language["SHORT_L"]="L"; //Shortname for Leechers
$language["SHORT_S"]="S"; //Shortname for Seeders
$language["SHOUTBOX"]="Clavardage";
$language["SIZE"]="Taille";
$language["SORRY"]="Désolé";
$language["SORTID"]="Classer par ID";
$language["SPEED"]="Vitesse";
$language["STICKY"]="Post-it";
$language["SUB_CATEGORY"]="Sous-catégorie";
$language["SUBJECT"]="Sujet";
$language["SUBJECT_MAX_CHAR"]="Le sujet est limité à ";
$language["SUC_POST_SUC_EDIT"]="L'édition du poste et une réussite.";
$language["SUC_SEND_EMAIL"]="Un courriel de confirmation a été envoyé à";
$language["SUC_SEND_EMAIL_2"]="Merci de patienter le temps que le courrier arrive.";
$language["SUCCESS"]="Réussite";
$language["SUMADD_BUG"]="Le débogueur du tracker demande summaryAdd";
$language["TABLE_NAME"]="Nom du tableau";
$language["TIMEZONE"]="Zone de temps";
$language["TITLE"]="Titre";
$language["TOP"]="haut";
$language["TOP_10_ACTIVE"]="Les 10 torrents les plus actifs";
$language["TOP_10_BEST_SEED"]="Les 10 torrents les plus seeder";
$language["TOP_10_BSPEED"]="Les 10 torrents les plus rapides";
$language["TOP_10_DOWNLOAD"]="Top 10 des leechers";
$language["TOP_10_SHARE"]="Top 10 des meilleurs participants";
$language["TOP_10_UPLOAD"]="Top 10 des uploaders";
$language["TOP_10_WORST"]="Top 10 des pires participants";
$language["TOP_10_WORST_SEED"]="Les 10 torrents les moins seeder";
$language["TOP_10_WSPEED"]="Les 10 torrents les moins rapides";
$language["TOP_TORRENTS"]="Les torrents les plus populaires";
$language["TOPIC"]="Sujet";
$language["TOPICS"]="Sujets";
$language["TOPICS_PER_PAGE"]="Sujets par page";
$language["TORR_PEER_DETAILS"]="Détails des peers";
$language["TORRENT"]="Torrent";
$language["TORRENT_ANONYMOUS"]="Envoi anonyme";
$language["TORRENT_CHECK"]="Laisser le tracker récupérer et utiliser les renseignements du fichier torrent.";
$language["TORRENT_DETAIL"]="Détail des torrents";
$language["TORRENT_FILE"]="Fichier torrent";
$language["TORRENT_SEARCH"]="Chercher des torrents";
$language["TORRENT_STATUS"]="Statut";
$language["TORRENT_UPDATE"]="Mise à jour en cours, patientez...";
$language["TORRENTS"]="torrents";
$language["TORRENTS_PER_PAGE"]="Torrents par page";
$language["TRACK_DB_ERR"]="Erreur sur le site ou la bdd. Les détails sont dans le journal.";
$language["TRACKER_INFO"]="$users utilisateurs, tracking $torrents torrents ($seeds seeds e $leechers leechers, $percent%)";
$language["TRACKER_LOAD"]="Taux de charge du site";
$language["TRACKER_SETTINGS"]="Configuration du site";
$language["TRACKER_STATS"]="Stats du site";
$language["TRACKING"]="poursuite";
$language["TRAFFIC"]="Trafique";
$language["UCP_NOTE_1"]="Ici, vous pouvez contrôler votre boîte de réception et écrire à d'autres utilisateurs,";
$language["UCP_NOTE_2"]="Contrôler et modifier vos paramêtres, etc..";
$language["UNAUTH_IP"]="Adresse IP bannie";
$language["UNKNOWN"]="inconnu";
$language["UPDATE"]="Mise à jour";
$language["UPFAILED"]="L'upload à echoué";
$language["UPLOAD_IMAGE"]="Envoi d'une image";
$language["UPLOAD_LANGUAGE_FILE"]="Envoi du fichier de langue";
$language["UPLOADED"]="Envoyé";
$language["UPLOADER"]="Uploader";
$language["UPLOADS"]="Envois";
$language["URL"]="Lien";
$language["USER_CP"]="Mon panneau";
$language["USER_CP_1"]="Panneau d'utilisateurs";
$language["USER_DETAILS"]="Détails de l'utilisateur";
$language["USER_EMAIL"]="L'adresse courriel est valide";
$language["USER_ID"]="ID de l'utilisateur";
$language["USER_JOINED"]="Incrit depuis";
$language["USER_LASTACCESS"]="Dernière connexion";
$language["USER_LEVEL"]="Rang";
$language["USER_LOCAL_TIME"]="Heure local de l'utilisateur";
$language["USER_NAME"]="Utilisateur";
$language["USER_PASS_RECOVER"]="Retrouver un mot de passe/nom d'utilisateur";
$language["USER_PWD"]="Mot de passe";
$language["USERS_SEARCH"]="Rechercher un utilisateur";
$language["VIEW_DETAILS"]="Voir les détails";
$language["VIEW_TOPIC"]="Voir le sujet";
$language["VIEW_UNREAD"]="Voir les non-lus";
$language["VIEWS"]="Voir";
$language["VISITOR"]="Visiteur";
$language["VISITORS"]="Visiteurs";
$language["WAIT_ADMIN_VALID"]="Vous devez attendre que l'administrateur valide votre compte...";
$language["WARNING"]="Attention !";
$language["WELCOME"]="Bienvenue";
$language["WELCOME_ADMINCP"]="Bienvenue dans le panneau d'admin.";
$language["WELCOME_BACK"]="Bon retour";
$language["WELCOME_UCP"]="Bienvenue dans le panneau d'utilisateur.";
$language["WORD_AND"]="et";
$language["WORD_NEW"]="Nouveau";
$language["WROTE"]="écrit :";
$language["WT"]="Attente";
$language["X_TIMES"]="temps";
$language["YES"]="Oui";
$language["LAST_IP"]="Derniére IP";
$language["FIRST_UNREAD"]="Aller au premier sujet non-lu";
$language["MODULE_UNACTIVE"]="Le module nécessaire n'est pas activé !";
$language["MODULE_NOT_PRESENT"]="Le module nécessaire n'existe pas !";
$language["MODULE_LOAD_ERROR"]="Le module nécessaire semble être incorrecte !";
$language['BACK_TO_TOP']='Retour en haut';

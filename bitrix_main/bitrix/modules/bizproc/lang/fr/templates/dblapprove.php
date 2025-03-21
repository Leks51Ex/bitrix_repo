<?php
$MESS["BP_DBLA_APP"] = "Approuvé";
$MESS["BP_DBLA_APPROVE"] = "Votez pour le document, s'il vous plaît !";
$MESS["BP_DBLA_APPROVE2"] = "Votez pour le document, s'il vous plaît !";
$MESS["BP_DBLA_APPROVE2_MSGVER_1"] = "Veuillez approuver ou rejeter l'élément de processus d'entreprise.";
$MESS["BP_DBLA_APPROVE2_TEXT"] = "Vous devez voter pour le document' '{=Document:NAME}'.

Auteur: {=Document:CREATED_BY_PRINTABLE}'";
$MESS["BP_DBLA_APPROVE2_TEXT_MSGVER_1"] = "Vous devez approuver ou rejeter l'élément de processus d'entreprise \"{=Document:NAME}\".

Auteur : {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_APPROVE2_TITLE"] = "Approbation du document: 2-ème étape";
$MESS["BP_DBLA_APPROVE2_TITLE_MSGVER_1"] = "Approbation d'élément de processus d'entreprise : étape 2";
$MESS["BP_DBLA_APPROVE_MSGVER_1"] = "Veuillez approuver ou rejeter l'élément de processus d'entreprise.";
$MESS["BP_DBLA_APPROVE_TEXT"] = "Il vous faut voter pour le document '{=Document:NAME}'.

?uteur: {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_APPROVE_TEXT_MSGVER_1"] = "Vous devez approuver ou rejeter l'élément de processus d'entreprise \"{=Document:NAME}\".
		
Auteur : {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_APPROVE_TITLR"] = "Validation du document: 1ère étape";
$MESS["BP_DBLA_APPROVE_TITLR_MSGVER_1"] = "Approbation d'élément de processus d'entreprise : étape 1";
$MESS["BP_DBLA_APP_S"] = "Statut : approuvé";
$MESS["BP_DBLA_DESC"] = "C'est recommandé pour les situations de validation du document avec un jugement prévisionnel. En cadre du processus, à la première étape le document est validé par un expert. Si le document n'est pas validé par lui, il est rendu pour la mise au point. Si il est validé, le document est transféré pour la prise de décision dans un groupe d'employés par une simple majorité des voix. Si le document n'est pas accepté à la deuxième étape, du vote, il est rendu à son auteur pour la mise au point et le processus de validation recommence.";
$MESS["BP_DBLA_DESC_MSGVER_1"] = "Recommandé lorsqu'un élément de processus d'entreprise nécessite une évaluation par un expert avant d'être approuvé ou rejeté. Au cours de la première étape, l'élément du processus d'entreprise est évalué par un expert désigné. Si l'expert rejette l'élément du processus d'entreprise, ce dernier est renvoyé pour révision. Dans le cas contraire, il est transmis pour approbation finale par un groupe d'employés, à la majorité simple. Si le vote final échoue, l'élément de processus d'entreprise est renvoyé pour révision et la procédure d'approbation recommence depuis le début.";
$MESS["BP_DBLA_M"] = "Message électronique";
$MESS["BP_DBLA_MAIL2_SUBJ"] = "Il faut voter pour '{=Document:NAME}'";
$MESS["BP_DBLA_MAIL2_SUBJ_MSGVER_1"] = "Veuillez approuver ou rejeter \"{=Document:NAME}\"";
$MESS["BP_DBLA_MAIL2_TEXT"] = "Vous devez approuver ou rejeter le document '{=Document:NAME}'.

Pour l'approbation du document cliquez http://#HTTP_HOST##TASK_URL#

Auteur: {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_MAIL2_TEXT_MSGVER_1"] = "Vous devez approuver ou rejeter l'élément de processus d'entreprise \"{=Document:NAME}\".

Procédez en suivant le lien : #BASE_HREF##TASK_URL#

Auteur : {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_MAIL3_SUBJ"] = "Vote par '{=Document:NAME}: Le document est accepté.";
$MESS["BP_DBLA_MAIL3_SUBJ_MSGVER_1"] = "Vote sur le document \"{=Document:NAME}\" : l'élément de processus d'entreprise a été approuvé.";
$MESS["BP_DBLA_MAIL3_TEXT"] = "La vote sur le document '{=Document:NAME}' est terminée.

Le document est approuvé {=ApproveActivity2:ApprovedPercent}% de votes.

Pour le document: {=ApproveActivity2:ApprovedCount}
Contre le document: {=ApproveActivity2:NotApprovedCount}

{=ApproveActivity2:Comments}";
$MESS["BP_DBLA_MAIL3_TEXT_MSGVER_1"] = "Le vote sur le document \"{=Document:NAME}\" est terminé.

L'élément de processus d'entreprise a été approuvé par {=ApproveActivity2:ApprovedPercent} % des votes.

Approbation : {=ApproveActivity2:ApprovedCount}																									
Rejet : {=ApproveActivity2:NotApprovedCount}

{=ApproveActivity2:Comments}";
$MESS["BP_DBLA_MAIL4_SUBJ"] = "Validation {=Document:NAME}: Le document est rejeté.";
$MESS["BP_DBLA_MAIL4_SUBJ_MSGVER_1"] = "Vote sur le document {=Document:NAME} : l'élément de processus d'entreprise a été rejeté";
$MESS["BP_DBLA_MAIL4_TEXT"] = "La première étape de la validation du document '{=Document:NAME}' est terminée.

Document est rejeté.

{=ApproveActivity1:Comments}";
$MESS["BP_DBLA_MAIL4_TEXT_MSGVER_1"] = "La première étape du vote sur le document \"{=Document:NAME}\" est terminée.

L'élément de processus d'entreprise a été rejeté.

{=ApproveActivity1:Comments}";
$MESS["BP_DBLA_MAIL_SUBJ"] = "Le document est accepté à la 1-ère étape";
$MESS["BP_DBLA_MAIL_SUBJ_MSGVER_1"] = "L'élément de processus d'entreprise a passé l'étape 1";
$MESS["BP_DBLA_MAIL_TEXT"] = "Première étape de confirmation du document '{=Document:NAME}' est terminée.

Document reçu.

{=ApproveActivity1:Comments}";
$MESS["BP_DBLA_MAIL_TEXT_MSGVER_1"] = "L'élément de processus d'entreprise \"{=Document:NAME}\' a passé la première étape d'approbation.

L'élément de processus d'entreprise a été approuvé.

{=ApproveActivity1:Comments}";
$MESS["BP_DBLA_NAME"] = "Approbation en deux étapes";
$MESS["BP_DBLA_NAPP"] = "Vote pour '{= Document: NAME}: Document refusé.";
$MESS["BP_DBLA_NAPP_DRAFT"] = "Envoyé pour révision";
$MESS["BP_DBLA_NAPP_DRAFT_S"] = "Statut : envoyé pour révision";
$MESS["BP_DBLA_NAPP_MSGVER_1"] = "Vote sur le document \"{=Document:NAME}\" : l'élément de processus d'entreprise a été rejeté";
$MESS["BP_DBLA_NAPP_TEXT"] = "La vote pour le document '{=Document:NAME}' est terminée.

Document refusé.

Pour le document: {=ApproveActivity2:ApprovedCount}
Contre le document: {=ApproveActivity2:NotApprovedCount}

{=ApproveActivity2:Comments}";
$MESS["BP_DBLA_NAPP_TEXT_MSGVER_1"] = "Le vote sur le document \"{=Document:NAME}\" est terminé.

L'élément de processus d'entreprise a été rejeté.

Approbation : {=ApproveActivity2:ApprovedCount}																									
Rejet : {=ApproveActivity2:NotApprovedCount}

{=ApproveActivity2:Comments}";
$MESS["BP_DBLA_PARAM1"] = "Votes de l'étape 1";
$MESS["BP_DBLA_PARAM2"] = "Votes de l'étape 2";
$MESS["BP_DBLA_PUB_TITLE"] = "Publication du document";
$MESS["BP_DBLA_PUB_TITLE_MSGVER_1"] = "Publier l'élément de processus d'entreprise";
$MESS["BP_DBLA_S_1"] = "Séquence d'activités";
$MESS["BP_DBLA_T"] = "Processus d'entreprise séquentiel";
$MESS["BP_DBLA_TASK"] = "Approuver le document: '{= Document: NAME}'";
$MESS["BP_DBLA_TASK_DESC"] = "Vous devez approuver ou rejeter le document '{=Document:NAME}'.

Pour l'approbation du document cliquez http://#HTTP_HOST##TASK_URL#

Auteur: {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_TASK_DESC_MSGVER_1"] = "Vous devez approuver ou rejeter l'élément de processus d'entreprise \"{=Document:NAME}\".

Procédez en suivant le lien : #BASE_HREF##TASK_URL#

Auteur : {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_TASK_MSGVER_1"] = "Approuver l'élément de processus d'entreprise \"{=Document:NAME}\"";

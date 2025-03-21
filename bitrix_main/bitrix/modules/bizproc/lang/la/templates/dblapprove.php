<?php
$MESS["BP_DBLA_APP"] = "Aprobado";
$MESS["BP_DBLA_APPROVE"] = "Por favor aprobar o rechazar el documento.";
$MESS["BP_DBLA_APPROVE2"] = "Por favor aprobar o rechazar el documento.";
$MESS["BP_DBLA_APPROVE2_MSGVER_1"] = "Apruebe o rechace el elemento del flujo de trabajo.";
$MESS["BP_DBLA_APPROVE2_TEXT"] = "
Usted tiene que aprobar o rechazar el documento \"{=Document:NAME}\".

Autor: {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_APPROVE2_TEXT_MSGVER_1"] = "Debe aprobar o rechazar el elemento del flujo de trabajo \"{=Document:NAME}\".

Autor: {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_APPROVE2_TITLE"] = "Aprobación del documento: Etapa 2";
$MESS["BP_DBLA_APPROVE2_TITLE_MSGVER_1"] = "Aprobación del elemento del flujo de trabajo: etapa 2";
$MESS["BP_DBLA_APPROVE_MSGVER_1"] = "Apruebe o rechace el elemento del flujo de trabajo.";
$MESS["BP_DBLA_APPROVE_TEXT"] = "Usted tiene que aprobar o rechazar el documento \"{=Document:NAME}\".

Autor: {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_APPROVE_TEXT_MSGVER_1"] = "Debe aprobar o rechazar el elemento del flujo de trabajo \"{=Document:NAME}\".
		
Autor: {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_APPROVE_TITLR"] = "Aprobación del documento: Etapa 1";
$MESS["BP_DBLA_APPROVE_TITLR_MSGVER_1"] = "Aprobación del elemento del flujo de trabajo: etapa 1";
$MESS["BP_DBLA_APP_S"] = "Estado: Aprobado";
$MESS["BP_DBLA_DESC"] = "Recomendado cuando un documento requiere de una evaluación preliminar de expertos antes de su aprobación. Durante el proceso de primera etapa de un documento sea refrendada por un experto. Si un experto rechaza el documento este último se devuelve a un autor para su revisión. Si el documento es aprobado, se transmite para su aprobación final por un selecto grupo de empleados de manera simple mayoría. Si la votación final no, se devuelve el documento para su revisión y el procedimiento de aprobación se inicia desde el principio.";
$MESS["BP_DBLA_DESC_MSGVER_1"] = "Se recomienda cuando un elemento del flujo de trabajo requiere una evaluación experta antes de ser aprobado o rechazado. Durante la primera etapa, el elemento del flujo de trabajo es evaluado por un experto designado. Si el experto rechaza el elemento del flujo de trabajo, este último se devuelve para su revisión. De lo contrario, se transfiere para la aprobación final de un grupo de empleados por mayoría simple. Si se produce un error en la votación final, el elemento del flujo de trabajo se devolverá para su revisión y el procedimiento de aprobación comenzará desde el principio.";
$MESS["BP_DBLA_M"] = "Mensaje de correo electrónico";
$MESS["BP_DBLA_MAIL2_SUBJ"] = "por favor responder con respecto a \"{=Document:NAME}\"";
$MESS["BP_DBLA_MAIL2_SUBJ_MSGVER_1"] = "Apruebe o rechace \"{=Document:NAME}\"";
$MESS["BP_DBLA_MAIL2_TEXT"] = "Usted tiene que aprobar o rechazar el documento \"{=Document:NAME}\".

Proceda abriendo el enlace: http://#HTTP_HOST##TASK_URL#

Autor: {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_MAIL2_TEXT_MSGVER_1"] = "Debe aprobar o rechazar el elemento del flujo de trabajo \"{=Document:NAME}\".

Continúe siguiendo el enlace: #BASE_HREF##TASK_URL#

Autor: {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_MAIL3_SUBJ"] = "Votación sobre {=Document:NAME}: el documento ha sido aceptado.";
$MESS["BP_DBLA_MAIL3_SUBJ_MSGVER_1"] = "Votación sobre \"{=Document:NAME}\": El elemento del flujo de trabajo fue aprobado.";
$MESS["BP_DBLA_MAIL3_TEXT"] = "Votación sobre \"{=Document:NAME}\" ha sido completada.

El documento fue aceptado por {=ApproveActivity2:ApprovedPercent}% de los votos.

Aprobado:  {=ApproveActivity2:ApprovedCount}
Rechazado: {=ApproveActivity2:NotApprovedCount}

{=ApproveActivity2:Comments}";
$MESS["BP_DBLA_MAIL3_TEXT_MSGVER_1"] = "La votación sobre \"{=Document:NAME}\" finalizó.

El elemento del flujo de trabajo fue aprobado por {=ApproveActivity2:ApprovedPercent}% de votos.

Aprobado: {=ApproveActivity2:ApprovedCount}																									
Rechazado: {=ApproveActivity2:NotApprovedCount}

{=ApproveActivity2:Comments}";
$MESS["BP_DBLA_MAIL4_SUBJ"] = "Votación sobre {=Document:NAME}: el documento ha sido rechazado.";
$MESS["BP_DBLA_MAIL4_SUBJ_MSGVER_1"] = "Votación sobre {=Document:NAME}: El elemento del flujo de trabajo fue rechazado";
$MESS["BP_DBLA_MAIL4_TEXT"] = "La primera etapa de aprobación \"{=Document:NAME}\" ha concluido.

El documento fue rechazado.

{=ApproveActivity1:Comments}";
$MESS["BP_DBLA_MAIL4_TEXT_MSGVER_1"] = "La primera etapa de la votación sobre \"{=Document:NAME}\" finalizó.

Se rechazó el elemento del flujo de trabajo.

{=ApproveActivity1:Comments}";
$MESS["BP_DBLA_MAIL_SUBJ"] = "El documento ha pasado Etapa 1";
$MESS["BP_DBLA_MAIL_SUBJ_MSGVER_1"] = "El elemento del flujo de trabajo superó la etapa 1";
$MESS["BP_DBLA_MAIL_TEXT"] = "El documento \"{=Document:NAME}\" ha pasado a la primera etapa de aprobación

El documento ha sido aprobado.

{=ApproveActivity1:Comments}";
$MESS["BP_DBLA_MAIL_TEXT_MSGVER_1"] = "El elemento del flujo de trabajo \"{=Document:NAME}\" superó la primera etapa de aprobación.											

El elemento del flujo de trabajo fue aprobado.																										

{=ApproveActivity1:Comments}";
$MESS["BP_DBLA_NAME"] = "Aprobación en dos etapas";
$MESS["BP_DBLA_NAPP"] = "Votación sobre {=Document:NAME}: el documento ha sido rechazado";
$MESS["BP_DBLA_NAPP_DRAFT"] = "Enviado para revisión";
$MESS["BP_DBLA_NAPP_DRAFT_S"] = "Estado: Enviado para revisión";
$MESS["BP_DBLA_NAPP_MSGVER_1"] = "Votación sobre \"{=Document:NAME}\": El elemento del flujo de trabajo fue rechazado";
$MESS["BP_DBLA_NAPP_TEXT"] = "Votación sobre \"{=Document:NAME}\" ha sido completada.

El documento fue rechazado.

Aprobado:  {=ApproveActivity2:ApprovedCount}
Rechazado: {=ApproveActivity2:NotApprovedCount}

{=ApproveActivity2:Comments}";
$MESS["BP_DBLA_NAPP_TEXT_MSGVER_1"] = "La votación sobre \"{=Document:NAME}\" finalizó.

El elemento del flujo de trabajo fue rechazado.

Aprobado: {=ApproveActivity2:ApprovedCount}																									
Rechazado: {=ApproveActivity2:NotApprovedCount}

{=ApproveActivity2:Comments}";
$MESS["BP_DBLA_PARAM1"] = "Votantes de la etapa 1";
$MESS["BP_DBLA_PARAM2"] = "Votantes de la etapa 2";
$MESS["BP_DBLA_PUB_TITLE"] = "Publicar documento";
$MESS["BP_DBLA_PUB_TITLE_MSGVER_1"] = "Publicar elemento del flujo de trabajo";
$MESS["BP_DBLA_S_1"] = "Secuencia de actividades";
$MESS["BP_DBLA_T"] = "Flujo de trabajo secuencial";
$MESS["BP_DBLA_TASK"] = "Aprobar documento: \"{=Document:NAME}\"";
$MESS["BP_DBLA_TASK_DESC"] = "Usted tiene que aprobar o rechazar el documento \"{=Document:NAME}\".

Proceda abriendo el enlace: http://#HTTP_HOST##TASK_URL#

Autor: {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_TASK_DESC_MSGVER_1"] = "Debe aprobar o rechazar el elemento del flujo de trabajo \"{=Document:NAME}\".

Continúe siguiendo el enlace: #BASE_HREF##TASK_URL#

Autor: {=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_TASK_MSGVER_1"] = "Aprobar el elemento del flujo de trabajo \"{=Document:NAME}\"";

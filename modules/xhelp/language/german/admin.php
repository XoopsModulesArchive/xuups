<?php
//$Id: admin.php,v 1.12 2005/12/15 19:40:25 eric_juden Exp $

//Menu choices
define('_AM_XHELP_ADMIN_TITLE', '%s Administrator Men�');
define('_AM_XHELP_BLOCK_TEXT', 'Bl�cke verwalten');
define('_AM_XHELP_MENU_MANAGE_DEPARTMENTS', 'Abteilungen verwalten');
define('_AM_XHELP_MENU_MANAGE_STAFF', 'Mitarbeiter verwalten');
define('_AM_XHELP_MENU_MODIFY_EMLTPL', 'Email Vorlagen �ndern');
define('_AM_XHELP_MENU_MODIFY_TICKET_FIELDS', 'Ticket Felder �ndern');
define('_AM_XHELP_MENU_GROUP_PERM', 'Gruppenrechte');
define('_AM_XHELP_MENU_MIMETYPES', 'Mimetypen Verwaltung');
define('_AM_XHELP_MENU_PREFERENCES', 'Voreinstellungen');
define('_AM_XHELP_MENU_ADD_STAFF', 'Mitarbeiter hinzuf�gen');
define('_AM_XHELP_UPDATE_MODULE', 'Modul aktualisieren');
define('_AM_XHELP_MENU_MANAGE_ROLES', 'Funktionen verwalten');
define('_AM_XHELP_TEXT_MANAGE_NOTIFICATIONS', 'Benachrichtigungen verwalten');
define('_AM_XHELP_MENU_MANAGE_FAQ', 'FAQ verwalten');

define('_AM_XHELP_SEC_TEXT_TICKET_ADD', 'Ticket hinzuf�gen');
define('_AM_XHELP_SEC_TEXT_TICKET_EDIT', 'Tickets �ndern');
define('_AM_XHELP_SEC_TEXT_TICKET_DELETE', 'Tickets l�schen');
define('_AM_XHELP_SEC_TEXT_TICKET_OWNERSHIP', 'Ticket Besitzer �ndern');
define('_AM_XHELP_SEC_TEXT_TICKET_STATUS', 'Ticket Status �ndern');
define('_AM_XHELP_SEC_TEXT_TICKET_PRIORITY', 'Ticket Priorit�t �ndern');
define('_AM_XHELP_SEC_TEXT_TICKET_LOGUSER', 'Ticket f�r Benutzer melden');
define('_AM_XHELP_SEC_TEXT_RESPONSE_ADD', 'Stellungnahme hinzuf�gen');
define('_AM_XHELP_SEC_TEXT_RESPONSE_EDIT', 'Stellungnahme �ndern');
define('_AM_XHELP_SEC_TEXT_TICKET_MERGE', 'Tickets zusammenf�hren');
define('_AM_XHELP_SEC_TEXT_FILE_DELETE', 'Dateianh�nge l�schen');
define('_AM_XHELP_SEC_TEXT_FAQ_ADD', 'FAQs hinzuf�gen');
define('_AM_XHELP_SEC_TEXT_TICKET_TAKE_OWNERSHIP', 'Ticket Eigentum �bernehmen');

// Admin Menu
define('_AM_XHELP_ADMIN_ABOUT', '�ber');
define('_AM_XHELP_ADMIN_GOTOMODULE', 'Modul starten');

//Permissions
define('_AM_XHELP_GROUP_PERM', 'Gruppenrechte');
define('_AM_XHELP_GROUP_PERM_TITLE', 'Gruppenrechte �ndern');
define('_AM_XHELP_GROUP_PERM_NAME', 'Rechte');
define('_AM_XHELP_GROUP_PERM_DESC', 'Dienst(e) ausw�hlen, den jede Gruppe �ndern darf');

// Messages
define('_AM_XHELP_MESSAGE_STAFF_UPDATE_ERROR', 'Fehler: Mitarbeiter nicht aktualisiert');
define('_AM_XHELP_MESSAGE_FILE_READONLY', 'Diese Datei ist schreibgesch�tzt. Bitte Schreibrechte f�r den Ordner modules/xhelp/language/german/mail_templates setzen');
define('_AM_XHELP_MESSAGE_FILE_UPDATED', 'Datei aktualisiert');
define('_AM_XHELP_MESSAGE_FILE_UPDATED_ERROR', 'Fehler: Datei nicht aktualisiert');
define('_AM_XHELP_MESSAGE_ROLE_INSERT', 'Funktion erfolgreich eingef�gt.');
define('_AM_XHELP_MESSAGE_ROLE_INSERT_ERROR', 'Fehler: Funktion wurde nicht eingef�gt.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE', 'Funktion erfolgreich gel�scht.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE_ERROR', 'Fehler: Funktion wurde nicht gel�scht.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE', 'Funktion erfolgreich aktualisiert.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE_ERROR', 'Fehler: Funktion wurde nicht aktualisiert.');
define('_AM_XHELP_MESSAGE_DEPT_STORE', 'Rechte der Abteilung erfolgreich gespeichert.');
define('_AM_XHELP_MESSAGE_DEPT_STORE_ERROR', 'Fehler: Rechte der Abteilung wurden nicht gespeichert.');
define('_AM_XHELP_MESSAGE_DEF_ROLES', 'Standard Rechte der Funktion wurden erfolgreich hinzugef�gt.');
define('_AM_XHELP_MESSAGE_DEF_ROLES_ERROR', 'Standard Rechte der Funktion wurden nicht hinzugef�gt.');
define('_AM_XHELP_MESSAGE_NO_DEPT', 'Fehler: Keine Abteilung angegeben.');
define('_AM_XHELP_MESSAGE_NO_DESC', 'Fehler: Keine Beschreibung angegeben.');
define('_AM_MESSAGE_ADD_STATUS_ERR', 'Fehler: Status wurde nicht hinzugef�gt.');
define('_AM_MESSAGE_EDIT_STATUS_ERR', 'Fehler: Status wurde nicht aktualisiert.');
define('_AM_XHELP_DEL_STATUS_ERR', 'Fehler: Status wurde nicht gel�scht.');
define('_AM_XHELP_STATUS_HASTICKETS_ERR', 'Fehler: Es existieren Tickets, die diesen Status benutzen. Bitte �ndern Sie alle Tickets die diesen Status benutzen.');
define('_AM_XHELP_MESSAGE_NO_ID', 'Fehler: ID wurde nicht angegeben.');
define('_AM_XHELP_MESSAGE_NO_VALUE', 'Fehler: Mimetyp Wert wurde nicht angegeben.');
define('_AM_XHELP_MESSAGE_EDIT_MIME_ERROR', 'Fehler: Der Mimetyp wurde nicht aktualisiert.');
define('_AM_XHELP_MESSAGE_DELETE_MIME_ERROR', 'Fehler: Der Mimetyp wurde nicht gel�scht.');
define('_AM_XHELP_MESSAGE_ADD_MIME_ERROR', 'Fehler: Der Mimetyp wurde nicht hinzugef�gt.');

// Buttons
define('_AM_XHELP_BUTTON_DELETE', 'L�schen');
define('_AM_XHELP_BUTTON_EDIT', '�ndern');
define('_AM_XHELP_BUTTON_SUBMIT', 'Absenden');
define('_AM_XHELP_BUTTON_RESET', 'Zur�cksetzen');
define('_AM_XHELP_BUTTON_ADDSTAFF', 'Mitarbeiter hinzuf�gen');
define('_AM_XHELP_BUTTON_UPDATESTAFF', 'Mitarbeiter aktualisieren');
define('_AM_XHELP_BUTTON_CANCEL', 'Abbrechen');
define('_AM_XHELP_BUTTON_UPDATE', 'Aktualisieren');
define('_AM_XHELP_BUTTON_CREATE_ROLE', 'Erzeuge neue Funktion');
define('_AM_XHELP_BUTTON_CLEAR_PERMS', 'L�sche Rechte');
//define('_AM_XHELP_BUTTON_ADD_DEPT', 'Add Department');

define('_AM_XHELP_EDIT_DEPARTMENT', 'Abteilung �ndern');
define('_AM_XHELP_EXISTING_DEPARTMENTS', 'Bestehende Abteilungen');
define('_AM_XHELP_MANAGE_DEPARTMENTS', 'Abteilungen verwalten');
define('_AM_XHELP_MANAGE_STAFF', 'Mitarbeiter verwalten');
define('_AM_XHELP_EXISTING_STAFF', 'Bestehende Mitarbeiter:');
define('_AM_XHELP_ADD_STAFF', 'Mitarbeiter hinzuf�gen');
define('_AM_XHELP_EDIT_STAFF', 'Mitarbeiter �ndern');
define('_AM_XHELP_INDEX', 'Index');
define('_AM_XHELP_DEPARTMENT_SERVERS', 'Abteilungs Postfach');
define('_AM_XHELP_DEPARTMENT_SERVERS_EMAIL', 'Email Adresse');
define('_AM_XHELP_DEPARTMENT_SERVERS_TYPE', 'Postfach Typ');
define('_AM_XHELP_DEPARTMENT_SERVERS_PRIORITY', 'Standard Ticket Priorit�t');
define('_AM_XHELP_DEPARTMENT_SERVERS_SERVERNAME', 'Server');
define('_AM_XHELP_DEPARTMENT_SERVERS_PORT', 'Port');
define('_AM_XHELP_DEPARTMENT_SERVERS_ACTION', 'Aktionen');
define('_AM_XHELP_DEPARTMENT_ADD_SERVER', 'Postfach zum �berwachen ausw�hlen');
define('_AM_XHELP_DEPARTMENT_SERVER_USERNAME', 'Benutzername');
define('_AM_XHELP_DEPARTMENT_SERVER_PASSWORD', 'Passwort');
define('_AM_XHELP_DEPARTMENT_SERVER_EMAILADDRESS', '"Antwort an" Email Adresse');
define('_AM_XHELP_DEPARTMENT_NO_ID', 'Konnte die Abteilungs-ID nicht finden. Abbruch.');
define('_AM_XHELP_DEPARTMENT_SERVER_SAVED', 'Postfach zur Abteilung hinzugef�gt.');
define('_AM_XHELP_DEPARTMENT_SERVER_ERROR', 'Fehler beim speichern des Postfaches der Abteilung.');
define('_AM_XHELP_DEPARTMENT_SERVER_NO_ID', 'Postfach der Abteilung wurde nicht festgelegt.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETED', 'Postfach der Abteilung gel�scht.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETE_ERROR', 'Fehler beim entfernen des Postfaches von der Abteilung.');
define('_AM_XHELP_STAFF_ERROR_DEPTARTMENTS', 'Sie m�ssen einen Benutzer zu einer oder mehreren Abteilungen vor dem speichern zuordnen');
define('_AM_XHELP_STAFF_ERROR_ROLES', 'Sie m�ssen einen Benutzer zu einer oder mehreren Funktionen vor dem speichern zuordnen');
define('_AM_XHELP_STAFF_ERROR_USERS', 'Sie m�ssen einen Benutzer w�hlen und ihn zum Mitarbeiter zu machen.');
define('_AM_XHELP_STAFF_EXISTS', 'Fehler: Dieser Benutzer ist schon ein Mitarbeiter.');

define('_AM_XHELP_MBOX_POP3', 'POP3');
define('_AM_XHELP_MBOX_IMAP', 'IMAP');

define('_AM_XHELP_TEXT_ADD_DEPT', 'Abteilung hinzuf�gen:');
define('_AM_XHELP_TEXT_EDIT_DEPT', 'Name der der Abteilung �ndern:');
define('_AM_XHELP_TEXT_EDIT', '�ndern');
define('_AM_XHELP_TEXT_DELETE', 'L�schen');
define('_AM_XHELP_TEXT_SELECTUSER', 'Benutzer ausw�hlen:');
define('_AM_XHELP_TEXT_DEPARTMENTS', 'Abteilung:');
define('_AM_XHELP_TEXT_USER', 'Benutzername:');
define('_AM_XHELP_TEXT_ALL_DEPTS', 'Alle');
define('_AM_XHELP_TEXT_NO_DEPTS', 'Keine');
define('_AM_XHELP_TEXT_MAKE_DEPTS', 'Erst Abteilung(en) anlegen, dann Mitarbeiter');
define('_AM_XHELP_LINK_ADD_DEPT', 'Abteilung hinzuf�gen');
define('_AM_XHELP_TEXT_TOP_CLOSERS', 'Beste Mitarbeiter');
define('_AM_XHELP_TEXT_WORST_CLOSERS', 'Schlechteste Mitarbeiter');
define('_AM_XHELP_TEXT_HIGH_PRIORITY', 'Offene Anfragen mit hoher Priorit�t');
define('_AM_XHELP_TEXT_NO_OWNER', 'Keine Eigent�mer');
define('_AM_XHELP_TEXT_NO_DEPT', 'Keine Abteilung');
define('_AM_XHELP_TEXT_RESPONSE_TIME', 'Schnellste Reaktionszeit');
define('_AM_XHELP_TEXT_RESPONSE_TIME_SLOW', 'Langsamste Reatkionszeit');
define('_AM_XHELP_TEXT_PRIORITY', 'Priorit�t:');
define('_AM_XHELP_TEXT_ELAPSED', 'abgelaufene Zeit:');
define('_AM_XHELP_TEXT_STATUS', 'Status:');
define('_AM_XHELP_TEXT_SUBJECT', 'Betreff:');
define('_AM_XHELP_TEXT_DEPARTMENT', 'Abteilung:');
define('_AM_XHELP_TEXT_OWNER', 'Eigent�mer:');
define('_AM_XHELP_TEXT_LAST_UPDATED', 'Letzte Aktualisierung:');
define('_AM_XHELP_TEXT_LOGGED_BY', 'Gemeldet von:');
define('_AM_XHELP_TEXT_EXISTING_ROLES', 'Existierende Funktionen');
define('_AM_XHELP_TEXT_NO_ROLES', 'Keine Funktionen gefunden');
define('_AM_XHELP_TEXT_ROLES', 'Funktionen:');
define('_AM_XHELP_TEXT_CREATE_ROLE', 'Erzeuge neue Funktion');
define('_AM_XHELP_TEXT_EDIT_ROLE', '�ndere Funktion');
define('_AM_XHELP_TEXT_NAME', 'Name');
define('_AM_XHELP_TEXT_PERMISSIONS', 'Rechte:');
define('_AM_XHELP_TEXT_SELECT_ALL', 'Alle w�hlen');
define('_AM_XHELP_TEXT_DEPT_PERMS', 'Abteilungs Rechte anpassen');
define('_AM_XHELP_TEXT_CUSTOMIZE', 'Anpassen');
define('_AM_XHELP_TEXT_ACTIONS', 'Aktionen:');
define('_AM_XHELP_TEXT_ID', 'ID:');
define('_AM_XHELP_TEXT_LOOKUP_USER', 'Benutzer nachschlagen');
define('_AM_XHELP_TEXT_BY', 'Von');
define('_AM_XHELP_TEXT_ASCENDING', 'Aufsteigend');
define('_AM_XHELP_TEXT_DESCENDING', 'Absteigend');
define('_AM_XHELP_TEXT_SORT_BY', 'Ordne nach:');
define('_AM_XHELP_TEXT_ORDER_BY', 'Sortiere:');
define('_AM_XHELP_TEXT_NUMBER_PER_PAGE', 'Anzahl je Seite:');
define('_AM_XHELP_TEXT_SEARCH_MIME', 'Suche Mimetypen:');
define('_AM_XHELP_TEXT_SEARCH_BY', 'Suche nach:');
define('_AM_XHELP_TEXT_SEARCH_TEXT', 'Suche Text:');
define('_AM_XHELP_TEXT_GO_BACK_SEARCH', 'Zur�ck zur Suche');
define('_AM_XHELP_TEXT_FIND_USERS', 'Finde Benutzer');

define('_AM_XHELP_SEARCH_BEGINEGINDATE', 'Anfangsdatum:');  
define('_AM_XHELP_SEARCH_ENDDATE', 'Enddatum:');

define('_AM_XHELP_TEXT_ADD_STATUS', 'Status hinzuf�gen');
define('_AM_XHELP_TEXT_STATE', 'Zustand:');
define('_AM_XHELP_TEXT_MANAGE_STATUSES', 'Status verwalten');
define('_AM_XHELP_TEXT_EDIT_STATUS', 'Status bearbeiten');

define('_AM_XHELP_TEXT_NO_RECORDS', 'Keine Datens�tze gefunden');
define('_AM_XHELP_TEXT_MAIL_EVENTS', 'Mail Ereignisse');
define('_AM_XHELP_TEXT_MAILBOX', 'Postfach:');
define('_AM_XHELP_TEXT_EVENT_CLASS', 'Ereigniss Klasse:');
define('_AM_XHELP_TEXT_TIME', 'Zeit:');
define('_AM_XHELP_NO_EVENTS', 'Keine Ereignisse gefunden');
define('_AM_XHELP_SEARCH_EVENTS', 'Suche Mail Ereignisse');
define('_AM_XHELP_BUTTON_SEARCH', 'Suche');
define('_AM_XHELP_BUTTON_TEST', 'Test');
define('_AM_XHELP_POSITION', 'Position');
define('_AM_XHELP_TEXT_MANAGE_FILES', 'Dateien verwalten');
define('_AM_XHELP_TEXT_TICKETID', 'Ticket ID');
define('_AM_XHELP_TEXT_FILENAME', 'Dateiname');
define('_AM_XHELP_TEXT_MIMETYPE', 'Mimetyp');
define('_AM_XHELP_TEXT_TOTAL_USED_SPACE', 'Gesamt verbrauchtger Speicher');
define('_AM_XHELP_TEXT_SIZE', 'Gr��e');
define('_AM_XHELP_TEXT_DELETE_RESOLVED', 'L�che Anh�nge von erledigten Tickets?');
define('_AM_XHELP_TEXT_NO_FILES', 'Keine Dateien gefunden');
define('_AM_XHELP_TEXT_RESOLVED_ATTACH', 'Erledigte Anh�nge');
define('_AM_XHELP_TEXT_ALL_ATTACH', 'Alle Anh�nge');
define('_AM_XHELP_TEXT_MAINTENANCE', 'Wartungs Aufgaben');
define('_AM_XHELP_TEXT_ORPHANED', 'Verwaiste Mitarbeiter Datens�tze aus Tabelle xhelp_staff entfernen?');
define('_AM_XHELP_TEXT_DELETE_STAFF_DEPT', 'Entferne Mitarbeiter aus Abteilung');
define('_AM_XHELP_MSG_NO_DEPTID', 'Fehler: keine Abteilung ID festgelegt.');
define('_AM_XHELP_MSG_NO_UID', 'Fehler: Kein Benutzer festgelegt.');
define('_AM_XHELP_MSG_REMOVE_STAFF_DEPT_ERR', 'Fehler: Mitarbeiter nicht aus Abteilung entfernt.');
define('_AM_XHELP_TEXT_DEFAULT', 'Standard');
define('_AM_XHELP_TEXT_MAKE_DEFAULT_DEPT', 'Als Standard Abteilung setzen');
define('_AM_XHELP_TEXT_DEFAULT_DEPT', 'Standard Abteilung');
define('_AM_XHELP_MSG_CHANGED_DEFAULT_DEPT', 'Standard Abteilung aktualisiert.');

// Mimetypes
define('_AM_XHELP_MIME_ID', 'ID');
define('_AM_XHELP_MIME_EXT', 'EXT');
define('_AM_XHELP_MIME_NAME', 'Anwendungs Typ');
define('_AM_XHELP_MIME_ADMIN', 'Admin');
define('_AM_XHELP_MIME_USER', 'Benutzer');
// Mimetype Form
define('_AM_XHELP_MIME_CREATEF', 'Mimetyp erzeugen');
define('_AM_XHELP_MIME_MODIFYF', 'Mimetyp �ndern');
define('_AM_XHELP_MIME_EXTF', 'Dateierweiterung:');
define('_AM_XHELP_MIME_NAMEF', "Anwendung Typ/Name:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Geben Sie die Anwendung an, die mit dieser Erweiterung verbunden ist.</span></div>");
define('_AM_XHELP_MIME_TYPEF', "Mimetyp:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Eingabe Mimetyp, der mit der Erweiterung verbunden ist. Jeder Mimetyp muss mit einem Leerzeichen getrennt sein.</span></div>");
define('_AM_XHELP_MIME_ADMINF', 'Erlaubter Admin Mimetyp');
define('_AM_XHELP_MIME_ADMINFINFO', '<b>Mimetypen, die Admins hochladen d�rfen:</b>');
define('_AM_XHELP_MIME_USERF', 'Erlaubter Benutzer Mimetyp');
define('_AM_XHELP_MIME_USERFINFO', '<b>Mimetypen, die Benutzer hochladen d�rfen:</b>');
define('_AM_XHELP_MIME_NOMIMEINFO', 'Keine Mimetypen ausgew�hlt.');
define('_AM_XHELP_MIME_FINDMIMETYPE', 'Neuen Mimetyp finden:');
define('_AM_XHELP_MIME_EXTFIND', "Suche Dateierweiterung:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Gesuchte Dateierweiterung eingeben.</span></div>'");
define('_AM_XHELP_MIME_INFOTEXT', "<ul><li>Neue Mimetypen k�nnen mit diesem Form erzeugt, ge�ndert oder gel�schtwerden.</li> 
	<li>Nach neuem Mimetyp �ber eine externe Website suchen.</li> 
	<li>Zeige Mimetypen f�r Admin und Benutzer Uploads.</li> 
	<li>�ndere Mimetyp upload Status.</li></ul> 
	");

// Mimetype Buttons
define('_AM_XHELP_MIME_CREATE', 'Erzeugen');
define('_AM_XHELP_MIME_CLEAR', 'Zur�cksetzen');
define('_AM_XHELP_MIME_CANCEL', 'Abbrechen');
define('_AM_XHELP_MIME_MODIFY', '�ndern');
define('_AM_XHELP_MIME_DELETE', 'L�schen');
define('_AM_XHELP_MIME_FINDIT', 'Finde Erweiterung!');
// Mimetype Database
define('_AM_XHELP_MIME_DELETETHIS', 'Ausgew�hlten Mimetyp l�schen?');
define('_AM_XHELP_MIME_MIMEDELETED', 'Mimetyp %s wurde gel�scht');
define('_AM_XHELP_MIME_CREATED', 'Mimetyp Information erzeugt');
define('_AM_XHELP_MIME_MODIFIED', 'Mimetyp Information ge�ndert');

define('_AM_XHELP_MINDEX_ACTION', 'Aktion');
define('_AM_XHELP_MINDEX_PAGE', '<b>Seite:</b> ');

//image admin icon 
define('_AM_XHELP_ICO_EDIT', '�ndere dieses Objekt');
define('_AM_XHELP_ICO_DELETE', 'L�sche dieses Objekt');
define('_AM_XHELP_ICO_ONLINE', 'Online');
define('_AM_XHELP_ICO_OFFLINE', 'Offline');
define('_AM_XHELP_ICO_APPROVED', 'Freigegeben');
define('_AM_XHELP_ICO_NOTAPPROVED', 'Nicht freigegeben');

define('_AM_XHELP_ICO_LINK', 'Verwandter Link');
define('_AM_XHELP_ICO_URL', 'Verwandte URL hinzuf�gen');
define('_AM_XHELP_ICO_ADD', 'Hinzuf�gen');
define('_AM_XHELP_ICO_APPROVE', 'Freigeben');
define('_AM_XHELP_ICO_STATS', 'Stats');

define('_AM_XHELP_ICO_IGNORE', 'Ignorieren');
define('_AM_XHELP_ICO_ACK', 'Broken Report anerkannt');
define('_AM_XHELP_ICO_REPORT', 'Broken Report anerkennen?');
define('_AM_XHELP_ICO_CONFIRM', 'Broken Report best�tigt');
define('_AM_XHELP_ICO_CONBROKEN', 'Best�tige Broken Report?');

define('_AM_XHELP_UPLOADFILE', 'Datei hochgeladen');
define('_AM_XHELP_TEXT_TICKET_INFO', 'Ticket Information');
define('_AM_XHELP_TEXT_OPEN_TICKETS', 'Tickets offen');
define('_AM_XHELP_TEXT_HOLD_TICKETS', 'Tickets aktiv');
define('_AM_XHELP_TEXT_CLOSED_TICKETS', 'Tickets geschlossen');
define('_AM_XHELP_TEXT_TOTAL_TICKETS', 'Gesamt Tickets');

define('_AM_XHELP_TEXT_TEMPLATE_NAME', 'Vorlagenname:');
define('_AM_XHELP_TEXT_DESCRIPTION', 'Beschreibung:');
define('_AM_XHELP_TEXT_PATH', 'Pfad:');
define('_AM_XHELP_TEXT_GENERAL_TAGS', 'Generelle Tags:');
define('_AM_XHELP_TEXT_GENERAL_TAGS1', 'X_SITEURL - URL der Seite');
define('_AM_XHELP_TEXT_GENERAL_TAGS2', 'X_SITENAME - Name der Seite');
define('_AM_XHELP_TEXT_GENERAL_TAGS3', 'X_ADMINMAIL - Administrator Email Adresse');
define('_AM_XHELP_TEXT_GENERAL_TAGS4', 'X_MODULE - Name des Modules');
define('_AM_XHELP_TEXT_GENERAL_TAGS5', 'X_MODULE_URL - Link zur Indexseite des Modules');
define('_AM_XHELP_TEXT_TAGS_NO_MODIFY', 'Modifizieren Sie keine anderen als die hier gelisteten Tags!');

define('_AM_XHELP_CURRENTVER', 'Aktuelle Version: <span class="currentVer">%s</span>');
define('_AM_XHELP_DBVER', 'Datenbank Version: <span class="dbVer">%s</span>');
define('_AM_XHELP_DB_NOUPDATE', 'Ihre Datenbank ist aktuell. Keine Aktualisierung notwendig.');
define('_AM_XHELP_DB_NEEDUPDATE', 'Ihre Datenbank ist veraltet. Bitte aktualisieren Sie die Datenbank Tabellen!');
define('_AM_XHELP_UPDATE_NOW', 'Jetzt aktualisieren!');
define('_AM_XHELP_DB_NEEDINSTALL', 'Ihre Datenbank ist nicht synchron mit der der installierten Version. Bitte installieren Sie dieselbe Version wie in der Datenbank');
define('_AM_XHELP_VERSION_ERR', 'Kann die vorige Version nicht feststellen.');
define('_AM_XHELP_MSG_MODIFYTABLE', 'Modifizierte Tabelle %s');
define('_AM_XHELP_MSG_MODIFYTABLE_ERR', 'Fehler beim modifizieren von Tabelle %s');
define('_AM_XHELP_MSG_ADDTABLE', 'Tabelle hinzugef�gt %s');
define('_AM_XHELP_MSG_ADDTABLE_ERR', 'Fehler beim hinzuf�gen von Tabelle %s');
define('_AM_XHELP_MSG_UPDATESTAFF', 'Bearbeiter aktualisiert #%s');
define('_AM_XHELP_MSG_UPDATESTAFF_ERR', 'Fehler beim aktualisieren von Bearbeiter #%s');
define('_AM_XHELP_UPDATE_DB', 'Aktualisiere Datenbank:');
define('_AM_XHELP_UPDATE_TO', 'Aktualisiere zu Version %s:');
define('_AM_XHELP_UPDATE_OK', 'Erfolgreich aktualisiert zu Version %s');
define('_AM_XHELP_UPDATE_ERR', 'Fehler beim aktualisieren zu Version %s');
define('_AM_XHELP_MSG_UPD_PERMS', 'Mitarbeiter #%s Rechte zur Abteilung %s hinzugef�gt.');
define('_AM_XHELP_MSG_REMOVE_TABLE', 'Tabelle %s wurde aus der Datenbank entfernt.');
define('_AM_XHELP_MSG_GLOBAL_PERMS', 'Mitarbeiter #%s hat globale Rechte.');
define('_AM_XHELP_MSG_NOT_REMOVE_TABLE', 'Fehler: Tabelle %s wurde nicht aus der Datenbank entfernt.');
define('_AM_XHELP_MSG_RENAME_TABLE', 'Tabelle %s wurde umbenannt nach %s.');
define('_AM_XHELP_MSG_RENAME_TABLE_ERR', 'Fehler: Tabelle %s wurde nicht umbenannt.');
define('_AM_XHELP_MSG_UPDATE_ROLE', '%s Funktion Rechte wurden aktualisiert.');
define('_AM_XHELP_MSG_UPDATE_ROLE_ERR', 'Fehler: %s Funktion Rechte wurden nicht aktualisiert.');
define('_AM_XHELP_MSG_DEPT_DEL_CFRM', 'Sind Sie sicher, das Sie die Abteilung #%u l�schen wollen?');
define('_AM_XHELP_MSG_STAFF_DEL_CFRM', 'Sind Sie sicher, das sie die Mitarbeiter #%u entfernen wollen?');
define('_AM_XHELP_MSG_DEPT_MBOX_DEL_CFRM', 'Sind Sie sicher, das sie das Postfach %s l�schen wollen?');
define('_AM_XHELP_MSG_ADD_STATUS_ERR', 'Fehler: Status \'%s\' wurde nicht hinzugef�gt.');
define('_AM_XHELP_MSG_ADD_STATUS', 'Status %s wurde hinzugef�gt.');
define('_AM_XHELP_MSG_CHANGED_STATUS', 'Tickets mit neuem Status aktualisiert.');
define('_AM_XHELP_MSG_CHANGED_STATUS_ERR', 'Fehler: Status der Tickets wurde nicht aktualisiert.');
define('_AM_XHELP_MSG_DELETE_RESOLVED', 'Sind Sie sicher, das Sie die Anh�nge erledigter Tickets entfernen wollen?');
define('_AM_XHELP_MSG_DELETE_FILE', 'Sind Sie sicher, das Sie diesen Anhang entfernen wollen?');
define('_AM_XHELP_MSG_ADD_CONFIG_ERR', 'Fehler: Konfigurations Wert f�r Abteilung wurde nicht gespeichert');
define('_AM_XHELP_MSG_UPDATE_CONFIG_ERR', 'Fehler: Konfigurations Wert f�r Abteilung wurde nicht aktualisiert');
define('_AM_XHELP_MSG_CLEAR_ORPHANED_ERR', 'Ihre Mitarbeiter Datens�tze sind aktuell.');
define('_AM_XHELP_MSG_UPDATE_SEARCH', 'Gespeicherte Suche #%u wurde aktualisiert.');
define('_AM_XHELP_MSG_UPDATE_SEARCH_ERR', 'Fehler: gespeicherte Suche #%u wurde nicht aktualisiert.');

define('_AM_XHELP_TEXT_CONTRIB_INFO', 'Information �ber Mitwirkende');
define('_AM_XHELP_TEXT_DEVELOPERS', 'Entwickler');
define('_AM_XHELP_TEXT_TRANSLATORS', '�bersetzer');
define('_AM_XHELP_TEXT_TESTERS', 'Tester');
define('_AM_XHELP_TEXT_DOCUMENTER', 'Dokumentierer');
define('_AM_XHELP_TEXT_CODE', 'Patches');
define('_AM_XHELP_TEXT_MODULE_DEVELOPMENT', 'Modul Entwicklungs Information');
define('_AM_XHELP_TEXT_DEMO_SITE', 'Demo Seite');
define('_AM_XHELP_DEMO_SITE', '3Dev Demo Seite');
define('_AM_XHELP_TEXT_OFFICIAL_SITE', 'Offizielle Support Seite');
define('_AM_XHELP_OFFICIAL_SITE', '3Dev.org');
define('_AM_XHELP_TEXT_REPORT_BUG', 'Sie haben einen Fehler?');
define('_AM_XHELP_REPORT_BUG', 'Fehler melden');
define('_AM_XHELP_TEXT_NEW_FEATURE', 'Sie wollen eine neue Sonderfunktion?');
define('_AM_XHELP_NEW_FEATURE', 'Neue Sonderfunktion');
define('_AM_XHELP_TEXT_QUESTIONS', 'Fragen?');
define('_AM_XHELP_QUESTIONS', 'Fragen Sie die Modul Entwickler');
define('_AM_XHELP_TEXT_RELEASE_DATE', 'Ver�ffentlichungs Datum');
define('_AM_XHELP_TEXT_DISCLAIMER', 'Haftungsausschlu�');
define('_AM_XHELP_DISCLAIMER', 'Warnung: Dieses Modul befindet sich noch im Beta Statdium. Es sollte nicht in produktiven Umgebungen eingesetzt werden. Die Entwickler sind nicht verantwortlich f�r Fehlfunktionen dieses Moduls.');
define('_AM_XHELP_TEXT_CHANGELOG', '�nderungsprotokoll');
define('_AM_XHELP_TEXT_EDIT_DEPT_PERMS', 'Abteilungs Sichtbarkeit');

define('_AM_XHELP_PATH_CONFIG', 'Modul Verzeichnis Konfiguration');
define('_AM_XHELP_PATH_TICKETATTACH', 'Ticket Anh�nge');
define('_AM_XHELP_PATH_EMAILTPL', 'Email Vorlagen');
define('_AM_XHELP_TEXT_CREATETHEDIR', 'Ordner erzeugen');
define('_AM_XHELP_TEXT_SETPERM', 'Rechte setzen');

define('_AM_XHELP_PATH_AVAILABLE', "<span style='font-weight: bold; color: green;'>Verf�gbar</span>");
define('_AM_XHELP_PATH_NOTAVAILABLE', "<span style='font-weight: bold; color: red;'>Nicht verf�gbar</span>");
define('_AM_XHELP_PATH_NOTWRITABLE', "<span style='font-weight: bold; color: red;'>Nicht beschreibbar</span>");
define('_AM_XHELP_PATH_CREATED', "Ordner erfolgreich erzeugt");
define('_AM_XHELP_PATH_NOTCREATED', "Der Ordner konnte nicht erzeugt werden");
define('_AM_XHELP_PATH_PERMSET', 'Ordner Zugriffsrechte wurden erfolgreich gesetzt.');
define('_AM_XHELP_PATH_NOTPERMSET', 'Ordner Zugriffsrechte konnten nicht gesetzt werden.');
define('_AM_XHELP_MESSAGE_ACTIVATE', 'Umschalten zu Aktiv');
define('_AM_XHELP_MESSAGE_DEACTIVATE', 'Umschalten zu Inaktiv');
define('_AM_XHELP_TEXT_ACTIVE', 'Aktiv');
define('_AM_XHELP_TEXT_INACTIVE', 'Inaktiv');
define('_AM_XHELP_TEXT_ACTIVITY', 'Aktivit�t');
define('_AM_XHELP_DEPARTMENT_EDIT_SERVER', 'Aktualisiere Abteilungs Postfach');

define('_AM_XHELP_TEXT_MANAGE_FIELDS', 'Eigene Felder verwalten');
define('_AM_XHELP_ADD_FIELD', 'Eigenes Feld hinzuf�gen');
define('_AM_XHELP_EDIT_FIELD', 'Eigenes Feld �ndern');
define('_AM_XHELP_TEXT_NAME_DESC', 'Name der beim ausf�llen des Ticket angezeigt wird.');
define('_AM_XHELP_TEXT_FIELDNAME', 'Feldname');
define('_AM_XHELP_TEXT_FIELDNAME_DESC', 'Wird im Code verwendet als Name des Elements.');
define('_AM_XHELP_TEXT_DESCRIPTION_DESC', 'Beschreibung, wozu dieses Feld verwendet wird (So wie dieser Text auf der Seite.)');
define('_AM_XHELP_TEXT_CONTROLTYPE', 'Kontroll Typ');
define('_AM_XHELP_TEXT_CONTROLTYPE_DESC', 'Gibt an, wie das Feld dargestellt werden soll.');
define('_AM_XHELP_TEXT_DEPT_DESC', 'Welche Abteilungen sollen dieses Feld sehen?');
define('_AM_XHELP_TEXT_REQUIRED', 'Erforderlich');
define('_AM_XHELP_TEXT_REQUIRED_DESC', 'Soll dieses Feld beim hinzuf�gen eines Tickets erforderlich sein?');
define('_AM_XHELP_TEXT_DATATYPE', 'Datentyp');
define('_AM_XHELP_TEXT_DATATYPE_DESC', 'Legt den Datentyp des Feldes fest?');
define('_AM_XHELP_TEXT_VALIDATION', 'Best�tigung');
define('_AM_XHELP_TEXT_VALIDATION_DESC', 'Regul�rer Ausdruck (regular expression) zur G�ltigkeitspr�fung der Benutzereingabe.');
define('_AM_XHELP_TEXT_WEIGHT', 'Gewichtung');
define('_AM_XHELP_TEXT_WEIGHT_DESC', 'Zur Sortierung der Benutzerfelder.');
define('_AM_XHELP_TEXT_FIELDVALUES', 'Feld Wert Liste');
define('_AM_XHELP_TEXT_FIELDVALUES_DESC', 'Beispiel:<br />U=Unspezifiziert<br />M=m�nnlich<br />w=weiblich<br /><br />Wird benutzt f�r Auswahl-Boxen oder anderes mit mehreren Werten. Die Angabe vor dem = ist der Schl�ssel, die Angabe danach der Wert.');
define('_AM_XHELP_TEXT_DEFAULTVALUE', 'Standard Wert');
define('_AM_XHELP_TEXT_DEFAULTVALUE_DESC', 'Der Standard Wert wird im Benutzerfeld vorgeschlagen.<br />F�r ein Benutzerfeld mit mehreren Werten geben Sie hier bitte einen Schl�sselwert des Elements an.');
define('_AM_XHELP_TEXT_LENGTH', 'L�nge');
define('_AM_XHELP_TEXT_LENGTH_DESC', 'L�nge des Benutzerfeldes.');

define('_AM_XHELP_TEXT_REGEX_CUSTOM', 'Individuell');
define('_AM_XHELP_TEXT_REGEX_USPHONE', 'Telefonnummer');
define('_AM_XHELP_TEXT_REGEX_USZIP', 'US Zip + 4');
define('_AM_XHELP_TEXT_REGEX_EMAIL', 'Email Adresse');

define('_XHELP_CONTROL_DESC_TXTBOX', 'Text Box');
define('_XHELP_CONTROL_DESC_TXTAREA', 'Mehrzeilige Text Box');
define('_XHELP_CONTROL_DESC_SELECT', 'Auswahl Box');
define('_XHELP_CONTROL_DESC_MULTISELECT', 'Mehrfach Auswahl Box');
define('_XHELP_CONTROL_DESC_YESNO', 'Ja / Nein');
define('_XHELP_CONTROL_DESC_CHECKBOX', 'Check Box');
define('_XHELP_CONTROL_DESC_RADIOBOX', 'Radio Box');
define('_XHELP_CONTROL_DESC_DATETIME', 'Datum + Zeit');
define('_XHELP_CONTROL_DESC_FILE', 'Datei');

define('_XHELP_DATATYPE_TEXT', 'Text');
define('_XHELP_DATATYPE_NUMBER_INT', 'Zahl (Integer)');
define('_XHELP_DATATYPE_NUMBER_DEC', 'Zahl (Dezimal)');

define('_AM_XHELP_MSG_FIELD_DEL_CFRM', 'Sind Sie sicher, das sie das Feld #%u entfernen wollen?');
define('_AM_XHELP_VALID_ERR_CONTROLTYPE', 'Ung�ltiger Kontroll Typ ausgew�hlt');
define('_AM_XHELP_TEXT_SESSION_RESET', 'L�sche Fehler');
define('_AM_XHELP_VALID_ERR_NAME', 'Name nicht gesetzt');
define('_AM_XHELP_VALID_ERR_FIELDNAME', 'Feldname nicht gesetzt');
define('_AM_XHELP_VALID_ERR_FIELDNAME_UNIQUE', 'Feldname muss eindeutig sein');
define('_AM_XHELP_VALID_ERR_LENGTH', 'L�nge sollte eine Zahl zwischen %u und %u sein');
define('_AM_XHELP_VALID_ERR_DEFAULTVALUE', 'Standard Wert muss in Options Liste sein');
define('_AM_XHELP_VALID_ERR_VALUE_LENGTH', 'Wert "%s" ist gr��er als die Feldl�nge, %u Zeichen.');
define('_AM_XHELP_VALID_ERR_VALUE', 'Sie m�ssen ein Werte-Set f�r dieses Feld zur Verf�gung stellen');
define('_AM_XHELP_MSG_FIELD_ADD_OK', 'Feld erfolgreich hinzugef�gt');
define('_AM_XHELP_MSG_FIELD_ADD_ERR', 'Fehler aufgetreten beim hinzuf�gen des Feldes');
define('_AM_XHELP_MSG_FIELD_UPD_OK', 'Feld erfolgreich aktualisiert');
define('_AM_XHELP_MSG_FIELD_UPD_ERR', 'Fehler aufgetreten beim aktualisieren des Feldes');
define('_AM_XHELP_MSG_SUBMISSION_ERR', 'Ihre Einsendung hat Fehler. Bitte beheben und neu einsenden');
define('_AM_XHELP_MSG_NEED_UID', 'Fehler: Sie m�ssen ersten einen Benutzer w�hlen.');

define('_AM_XHELP_TEXT_DEFAULT_STATUS', 'Standard Status');

define('_AM_XHELP_VALID_ERR_MIME_EXT', 'Dateierweiterung nicht gesetzt');
define('_AM_XHELP_VALID_ERR_MIME_NAME', 'Andwendungs Typ/Name nicht gesetzt');
define('_AM_XHELP_VALID_ERR_MIME_TYPES', 'Mimetypen nicht gesetzt');

define('_AM_XHELP_TEXT_NOTIF_NAME', 'Benachrichtigungs Name');
define('_AM_XHELP_TEXT_SUBSCRIBED_MEMBERS', 'Eingetragene Mitglieder');

define('_AM_XHELP_NOTIF_NEW_TICKET', 'Neues Ticket');
define('_AM_XHELP_NOTIF_DEL_TICKET', 'L�sche Ticket');
define('_AM_XHELP_NOTIF_MOD_TICKET', '�ndere Ticket');
define('_AM_XHELP_NOTIF_NEW_RESPONSE', 'Neue Stellungnahme');
define('_AM_XHELP_NOTIF_MOD_RESPONSE', '�ndere Stellungnahme');
define('_AM_XHELP_NOTIF_MOD_STATUS', 'Ge�nderter Ticket Status');
define('_AM_XHELP_NOTIF_MOD_PRIORITY', 'Ge�nderte Ticket Priorit�t');
define('_AM_XHELP_NOTIF_MOD_OWNER', 'Ge�nderter Ticket Eigent�mer');
define('_AM_XHELP_NOTIF_CLOSE_TICKET', 'Geschlossenes Ticket');
define('_AM_XHELP_NOTIF_MERGE_TICKET', 'Ticket zusammenf�hren');

//Used for Manage Notifications page
define('_AM_XHELP_STAFF_SETTING1', 'Alle Mitarbeiter');
define('_AM_XHELP_STAFF_SETTING2', 'Abteilungs Mitarbeiter');
define('_AM_XHELP_STAFF_SETTING3', 'Ticket Eigent�mer');
define('_AM_XHELP_STAFF_SETTING4', 'Benachrichtigung Aus');
define('_AM_XHELP_USER_SETTING1', 'Benachrichtigung An');
define('_AM_XHELP_USER_SETTING2', 'Benachrichtigung Aus');
define('_AM_XHELP_TEXT_SUBMITTER', 'Einsender');
define('_AM_XHELP_TEXT_NOTIF_STAFF', 'Mitarbeiter Benachrichtigung');
define('_AM_XHELP_TEXT_NOTIF_USER', 'Benutzer Benachrichtigung');
define('_AM_XHELP_TEXT_ASSOC_TPL', 'Verkn�pfte Vorlagen');
define('_AM_XHELP_TEXT_AND', 'und');

define('_AM_XHELP_TEXT_VERSION', 'Version');
define('_AM_XHELP_TEXT_PLUGIN_VERSION', 'Plugin Version');
define('_AM_XHELP_TEXT_TESTED_VERSIONS', 'Getestete Versionen');
define('_AM_XHELP_TEXT_AUTHOR', 'Autor');
define('_AM_XHELP_MESSAGE_NO_NAME', 'Fehler: Modulname wurde nicht angegeben.');
define('_AM_XHELP_MSG_INSTALL_MODULE', 'Fehler: Vergewissern Sie sich, ob das Modul installiert ist.');
define('_AM_XHELP_TEXT_STAFF', 'Mitarbeiter');
?>
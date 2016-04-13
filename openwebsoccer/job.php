<?php
/******************************************************************
*
* This file is part of OpenWebSoccer-Sim.
*
* OpenWebSoccer-Sim is free software: you can redistribute it
* and/or modify it under the terms of the
* GNU Lesser General Public License
* as published by the Free Software Foundation, either version 3 of
* the License, or any later version.
*
* OpenWebSoccer-Sim is distributed in the hope that it will be
* useful, but WITHOUT ANY WARRANTY; without even the implied
* warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the GNU Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with OpenWebSoccer-Sim.
* If not, see <http://www.gnu.org/licenses/>.
*
* Author: Ingo Hofmann
* Base Version: OpenWebSoccer-Sim 5.2.3 - 2015
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
include('./libs/iosec/iosec.php');
include('jobsxmlrepair.php');
/*
* Ersetzt die alte job.php
*
* In der config.inc.php sind die Eintr�ge f�r die Jobausf�hrungen eingetragen.
*
* Ausf�hrung: http:/meineDomain.de/websoccer/job.php?jobid=sim&sectoken=xyz
*
* Voraussetzung: Systemeinstellung -> Allgemien -> Haken geseetzt bei
*                Spielesimulation durch externe Webseiten ausf�hren, statt durch Jobs.
*                Sowie einen ausgedachten Sicherheitsschl�ssel wie oben beschreiben z.B. xyz
*
* Rolf Joseph / ErdemCan
*/
// Sofort Abbruch, wenn kein Sicherheitssl�ssel in der URL �bergeben wird
if (!isset($_REQUEST["sectoken"])) { die("kein Key"); }
// Basis-Verzeichnis setzen
define("BASE_FOLDER", __DIR__);
// global.inc.php einbinden
include(BASE_FOLDER . "/admin/config/global.inc.php");
// die globale Variable wird hier nicht ben�tigt, sondern um die Pfade in der AbstractJob.class.php zu h�ndeln
define("JOBS_CONFIG_FILE", BASE_FOLDER . "/admin/config/jobs.xml");
// Sicherheitsschl�ssel aus der global.inc.php und aus dem URL-Parameter werden vergllichen und ggf. abgebrochen
if ($website->getConfig("webjobexecution_key") !== $_REQUEST["sectoken"]) { die(); }
// Sprachunterst�tzung wird in eine Object-Variable geladen
$i18n     = I18n::getInstance($website->getConfig("supported_languages"));
// mittels der Job-ID wird aus der config.inc.php die Job-Class ausgelesen und verwendet
$jobClass = $website->getConfig($_REQUEST["jobid"]);
// Aus allen Objekten und Variablen wird eine neue PHP-Klasse erstellt
$job      = new $jobClass($website, $db, $i18n, $_REQUEST["jobid"]);
// die Anweisungen in der Klasse werden ausgef�hrt
$job->execute();

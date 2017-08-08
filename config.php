<?php
# Copyright (C) 2013 Remy van Elst
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program. If not, see <http://www.gnu.org/licenses/>.
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$title = "Nagios Status Dashboard";
$organization = "Mayer Malbin Co. Inc";
$support_url = "https://support.mycompany.org";
$json_url = "http://192.168.1.252/nagios.json";
$nagios_url = "http://192.168.1.252/nagios3/";
$extinfo_url = "http://192.168.1.252/cgi-bin/nagios3/extinfo.cgi";

# for a list of available themes: http://www.bootstrapcdn.com/bootswatch/
$dashboard_theme = "united";

?>

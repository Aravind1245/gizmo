<?php
/*********************************************************************
    directory.php

    Staff directory

    pavan kumar
    Copyright (c)  2006-2013 mindgraph
    http://www.mindgraph.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('staff.inc.php');
$page='directory.inc.php';
$nav->setTabActive('dashboard');
$ost->addExtraHeader('<meta name="tip-namespace" content="dashboard.staff_directory" />',
    "$('#content').data('tipNamespace', 'dashboard.staff_directory');");
require(STAFFINC_DIR.'header.inc.php');
require(STAFFINC_DIR.$page);
include(STAFFINC_DIR.'footer.inc.php');
?>

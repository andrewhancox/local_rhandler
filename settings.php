<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    local_rhandler
 * @copyright 2020 Andrew Hancox at Open Source Learning <andrewdchancox@googlemail.com>
 * @copyright 2020 Ian Jones at Loughborough University <I.Jones@lboro.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
//systempathslocal_reportbuilder.php
    $systempathpage = $ADMIN->locate('systempaths');
    $systempathpage->add(new admin_setting_configexecutable('local_rhandler/pathtorscript',
            new lang_string('pathtorscript', 'local_rhandler'), '',
            '/usr/bin/Rscript'));
    $systempathpage->add(new admin_setting_configexecutable('local_rhandler/sshproxy',
            new lang_string('sshproxy', 'local_rhandler'), new lang_string('sshproxy_help', 'local_rhandler'),
            ''));
    $systempathpage->add(new admin_setting_configexecutable('local_rhandler/remotepathtoscripts',
            new lang_string('remotepathtoscripts', 'local_rhandler'), new lang_string('remotepathtoscripts_help', 'local_rhandler'),
            '/opt/rscripts'));
}

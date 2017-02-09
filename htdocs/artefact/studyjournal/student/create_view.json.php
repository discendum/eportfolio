<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2008 Catalyst IT Ltd (http://www.catalyst.net.nz)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage artefact-blog
 * @author     Discendum Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2014 Discendum Ltd http://discendum.com
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */
define('INTERNAL', 1);
define('JSON', 1);

require(dirname(dirname(dirname(dirname(__FILE__)))) . '/init.php');
safe_require('artefact', 'blog');
safe_require('artefact', 'multiresume');
safe_require('artefact', 'studyjournal');

$viewtype = param_variable('type');
$id = param_integer('id');

try {
    if ($viewtype == 'blog'){
        $view = ArtefactTypeBlog::create_blog_view($id);
    }
    elseif ($viewtype == 'multiresume'){
        $view = ArtefactTypeMultiresume::create_cv_view($id);
    }
    elseif ($viewtype == 'studyjournal'){
        $view = PluginArtefactStudyJournal::create_journal_view($id);
    }
    json_reply(false, array('view' => $view->get('id')));
} catch (Exception $ex) {
    json_reply(true, $ex->getMessage());
}
<?php
/**
 *
 * @package    mahara
 * @subpackage blocktype-mygroups
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

class PluginBlocktypeMyGroups extends SystemBlocktype {

    public static function get_title() {
        return get_string('title', 'blocktype.mygroups');
    }

    public static function get_description() {
        return get_string('description', 'blocktype.mygroups');
    }

    public static function single_only() {
        return true;
    }

    public static function get_categories() {
        return array('internal');
    }

    public static function get_viewtypes() {
        return array('profile', 'dashboard');
    }

    public static function render_instance(BlockInstance $instance, $editing=false) {
        $userid = $instance->get_view()->get('owner');
        if (!$userid) {
            return '';
        }

        $smarty = smarty_core();
        require_once('group.php');
        // Group stuff
        // <EKAMPUS
        $usergroups = group_get_user_groups($userid, null, false);
        // EKAMPUS>

        foreach ($usergroups as $group) {
            $group->roledisplay = get_string($group->role, 'grouptype.'.$group->grouptype);
        }
        $smarty->assign('USERGROUPS', $usergroups);
        return $smarty->fetch('blocktype:mygroups:mygroups.tpl');
    }

    public static function has_instance_config() {
    //< EKAMPUS
        return true;
    }
    public static function instance_config_form($instance) {
     $configdata = $instance->get('configdata');
     $elements = array(
        'count' => array(
                'type' => 'text',
                'title' => get_string('itemstoshow', 'blocktype.blog/othersrecentposts'),
                'description'   => get_string('betweenxandy', 'mahara', 1, 100),
                'defaultvalue' => isset($configdata['count']) ? $configdata['count'] : 10,
                'size' => 3,
                'rules' => array('integer' => true, 'minvalue' => 1, 'maxvalue' => 100),
            ),
        'titlelinkurl' => array(
                'type' => 'hidden',
                'value'   => 'interaction/pages/mygroups.php',
            ),
        );
   
    return $elements;
    }
    // EKAMPUS >
    public static function default_copy_type() {
        return 'shallow';
    }

    /**
     * Mygroups only makes sense for personal views
     */
    public static function allowed_in_view(View $view) {
        return $view->get('owner') != null;
    }

    public static function override_instance_title(BlockInstance $instance) {
        global $USER;
        $ownerid = $instance->get_view()->get('owner');
        if ($ownerid === null || $ownerid == $USER->get('id')) {
            return get_string('title', 'blocktype.mygroups');
        }
        return get_string('otherusertitle', 'blocktype.mygroups', display_name($ownerid, null, true));
    }

}

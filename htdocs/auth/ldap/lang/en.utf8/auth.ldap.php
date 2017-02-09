<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2009 Catalyst IT Ltd and others; see:
 *                         http://wiki.mahara.org/Contributors
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
 * @subpackage lang
 * @author     Discendum Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2014 Discendum Ltd http://discendum.com
 * @copyright  (C) 2006-2014 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();


$string['attributename'] = 'Name of the LDAP attribute used to sync groups based on its values (required and must respect case)';

$string['cannotconnect'] = 'Cannot connect to any LDAP hosts';

$string['cannotdeleteandsuspend'] = 'Cannot specify -d and -s at the same time.';

$string['cli_info_sync_groups'] = 'This command line PHP script will attempt to synchronize an institution list of groups with an LDAP directory.
Missing groups will be created and named as \'institution name : LDAP group name\'.';

$string['cli_info_sync_groups_attribute'] = 'This command line PHP script will attempt to synchronize an institution list of groups with an LDAP directory
based on the different values of an LDAP attribute.
Missing groups will be created and named as \'institution name : LDAP attribute value\'';

$string['cli_info_sync_users'] = 'This command line PHP script will attempt to synchronize an institution list of Mahara accounts with an LDAP directory.';

$string['contexts'] = 'Contexts';

$string['description'] = 'Authenticate against an LDAP server';

$string['distinguishedname'] = 'Distinguished name';

$string['dodelete'] = 'Delete accounts not anymore in LDAP';

$string['dosuspend'] = 'Suspend accounts not anymore in LDAP';

$string['doupdate'] = 'Update existing accounts with LDAP data (long)';

$string['dryrun'] = 'Dummy execution. Do not perform any database operations';

$string['excludelist'] = 'Exclude LDAP groups matching these regular expressions in their names';

$string['extrafilterattribute'] = 'Additional LDAP filter to restrict user searching';

$string['grouptype'] = 'Type of Mahara group to create; default is "standard"';

$string['hosturl'] = 'Host URL';

$string['includelist'] = 'Process only LDAP groups matching these regular expressions in their names';

$string['institutionname'] = 'Name of the institution to process (required)';

$string['ldapfieldforemail'] = 'LDAP field for email';

$string['ldapfieldforfirstname'] = 'LDAP field for first name';

$string['ldapfieldforpreferredname'] = 'LDAP field for display name';

$string['ldapfieldforstudentid'] = 'LDAP field for student ID';

$string['ldapfieldforsurname'] = 'LDAP field for surname';

$string['ldapversion'] = 'LDAP version';

$string['nocreate'] = 'Do not create new accounts';

$string['nocreatemissinggroups'] = 'Do not create LDAP groups if they are not already set up in the institution.';

$string['nomatchingauths'] = 'No LDAP authentication plugin found for this institution';

$string['notusable'] = 'Please install the PHP LDAP extension';

$string['password'] = 'Password';

$string['searchcontexts'] = 'Restrict searching in these contexts (override values set in authentication plugin)';

$string['searchsubcontexts'] = 'Search subcontexts';

$string['searchsubcontextscliparam'] = 'Search (1) or not (0) in sub contexts (override values set in authentication plugin)';

$string['starttls'] = 'TLS encryption';

$string['syncgroupsautocreate'] = 'Auto-create missing groups';

$string['syncgroupsbyclass'] = 'Sync groups stored as LDAP objects';

$string['syncgroupsbyuserfield'] = 'Sync groups stored as user attributes';

$string['syncgroupscontexts'] = 'Sync groups in these contexts only';

$string['syncgroupscontextsdesc'] = 'Leave blank to default to user authentication contexts';

$string['syncgroupscron'] = 'Sync groups automatically via cron job';

$string['syncgroupsexcludelist'] = 'Exclude LDAP groups with these names';

$string['syncgroupsgroupattribute'] = 'Group attribute';

$string['syncgroupsgroupclass'] = 'Group class';

$string['syncgroupsgrouptype'] = 'Role types in auto-created groups';

$string['syncgroupsincludelist'] = 'Include only LDAP groups with these names';

$string['syncgroupsmemberattribute'] = 'Group member attribute';

$string['syncgroupsmemberattributeisdn'] = 'Member attribute is a dn?';

$string['syncgroupsnestedgroups'] = 'Process nested group';

$string['syncgroupssettings'] = 'Group sync';

$string['syncgroupsuserattribute'] = 'User attribute group name is stored in';

$string['syncgroupsusergroupnames'] = 'Only these group names';

$string['syncgroupsusergroupnamesdesc'] = 'Leave empty to accept any value. Separate group names by comma.';

$string['syncuserscreate'] = 'Auto-create users in cron';

$string['syncuserscron'] = 'Sync users automatically via cron job';

$string['syncusersextrafilterattribute'] = 'Additional LDAP filter for sync';

$string['syncusersgonefromldap'] = 'If a user is no longer present in LDAP';

$string['syncusersgonefromldapdelete'] = 'Delete user\'s account and all content';

$string['syncusersgonefromldapdonothing'] = 'Do nothing';

$string['syncusersgonefromldapsuspend'] = 'Suspend user\'s account';

$string['syncuserssettings'] = 'User sync';

$string['syncusersupdate'] = 'Update user info in cron';

$string['title'] = 'LDAP';

$string['updateuserinfoonlogin'] = 'Update user info on login';

$string['updateuserinfoonloginadnote'] = 'Note: Enabling this may prevent some MS ActiveDirectory sites/users from subsequent logins';

$string['userattribute'] = 'User attribute';

$string['usertype'] = 'User type';

$string['weautocreateusers'] = 'We auto-create users';


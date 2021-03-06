
{if $MAINNAV}
        <div id="main-nav" class="{if $ADMIN || $INSTITUTIONALADMIN || $STAFF || $INSTITUTIONALSTAFF}{if $DROPDOWNMENU}dropdown-adminnav {else}adminnav {/if}{/if}main-nav">
            <h3 class="rd-nav-title">{if $ADMIN || $INSTITUTIONALADMIN || $STAFF || $INSTITUTIONALSTAFF}ADMIN {/if}MENU<span class="rd-arrow"></span></h3>
            <ul id="{if $DROPDOWNMENU}dropdown-nav{else}nav{/if}">
{strip}
{foreach from=$MAINNAV item=item}
                <li class="{if $item.path}{$item.path}{else}dashboard{/if}{if $item.selected} selected{/if}{if $DROPDOWNMENU} dropdown-nav-home{/if}"><span><a href="{$WWWROOT}{$item.url}"{if $item.accesskey} accesskey="{$item.accesskey}"{/if} class="{if $item.path}{$item.path}{else}dashboard{/if}">{$item.title}</a></span>
{if $item.submenu}
                    <ul class="{if $DROPDOWNMENU}dropdown-sub {/if}rd-subnav">
{strip}
{foreach from=$item.submenu item=subitem}
                        <li{if $subitem.selected} class="selected"{/if}><span>
                            <a href="{$WWWROOT}{$subitem.url}"{if $subitem.accesskey} accesskey="{$subitem.accesskey}"{/if}>{$subitem.title}</a>
                        </span></li>
{/foreach}
{/strip}
                                        <div class="cl"></div>
                    </ul>
{/if}
                </li>
{/foreach}
{if $ADMIN || $INSTITUTIONALADMIN || $STAFF || $INSTITUTIONALSTAFF}
                <li class="returntosite"><span><a href="{$WWWROOT}" accesskey="h" class="return-site">{str tag="returntosite"}</a></span></li>
{elseif $USER->get('admin')}
                <li class="siteadmin"><span><a href="{$WWWROOT}admin/" accesskey="a" class="admin-site">{str tag="administration"}</a></span></li>
{elseif $USER->is_institutional_admin()}
                <li class="instituteadmin"><span><a href="{$WWWROOT}admin/users/search.php" accesskey="a" class="admin-user">{str tag="administration"}</a></span></li>
{elseif $USER->get('staff')}
                <li class="siteinfo"><span><a href="{$WWWROOT}admin/users/search.php" accesskey="a" class="admin-user">{str tag="siteinformation"}</a></span></li>
{elseif $USER->is_institutional_staff()}
                {* <EKAMPUS (Hide institution info from teachers *}
{*                <li class="instituteinfo"><span><a href="{$WWWROOT}admin/users/search.php" accesskey="a" class="admin-user">{str tag="institutioninformation"}</a></span></li>*}
                {* EKAMPUS> *}
{/if}
            {/strip}</ul>
        </div>
{if $DROPDOWNMENU}
{else}
        <div id="sub-nav">
{if $SELECTEDSUBNAV}
            <ul>{strip}
{foreach from=$SELECTEDSUBNAV item=item}
               <li{if $item.selected} class="selected"{/if}><span><a href="{$WWWROOT}{$item.url}"{if $item.accesskey} accesskey="{$item.accesskey}"{/if}>{$item.title}</a></span></li>
{/foreach}
            {/strip}</ul>
{/if}
            <div class="cb"></div>
        </div>
{/if}
{/if}

{if $profileiconpath}<div class="fr"><img src="{$profileiconpath}" alt="{$profileiconalt}"></div>{/if}
<p>{$profileinfo.introduction|clean_html|safe}</p>
{if $profileinfo && (count($profileinfo) != 1 || !$profileinfo.introduction)}<ul>
{foreach from=$profileinfo key=key item=item}
{if !in_array($key, array('introduction'))}    <li><strong>{str tag=$key section=artefact.internal}:</strong> {$item|clean_html|safe}</li>
{/if}
{/foreach}
</ul>{/if}
{if $profileiconpath}<div class="cb"></div>{/if}

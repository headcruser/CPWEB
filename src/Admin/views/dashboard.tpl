{extends file='file:layout/adminTemplate.html'}
{block name=title}<title> PANEL DE ADMINISTRACION </title>{/block}
{block name=content}
  {if isset({$widgets})}
    {foreach from=$widgets item=widget}
        {$widget->render()}
    {/foreach}
  {/if}
{/block}

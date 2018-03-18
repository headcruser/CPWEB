{extends file='file:layout/adminTemplate.html'}
{block name=title}<title> PANEL DE ADMINISTRACION </title>{/block}
{block name=content}
  {if isset({$widgets})}
    {$widgets}
  {/if}
{/block}

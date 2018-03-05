{extends file='file:layout/adminTemplate.html'}
{block name=title}<title> PANEL DE ADMINISTRACION </title>{/block}
{block name=content}
  {if isset({$widgetCliente})} {$widgetCliente}{/if}
{/block}
  {* {include file='file:layout/footer.html'} *}




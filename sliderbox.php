{if $boxNs->$box_id->force_show || count($boxNs->$box_id->images)}
    <div class="box {*}box-slider{*}" id="box_slider{if $boxNs->$box_id->is_custom}_{$box_id|escape}{/if}">
        <div data-max-img-width="{$boxNs->$box_id->width}" data-slider-duration="{$boxNs->$box_id->duration|escape}" data-slider-delay="{$boxNs->$box_id->delay|escape}" data-slider-animation-type="{$boxNs->$box_id->animation|escape}" data-slider-auto="{if $boxNs->$box_id->auto}true{else}false{/if}" data-slider-nav-type="{$boxNs->$box_id->bullets}" class="pageslider row">
         {*}{*}
         <h2><span>{translate key="Nasze inspiracje"}</span></h2>
          {*}  <ul class="slides"{if $boxNs->$box_id->height > 0} style="height: {$boxNs->$box_id->height}px;"{/if}>{*}
          <div class="f-row">
          
                {assign var="images" value=$boxNs->$box_id->images}
                {foreach from=$images item=slide name=foo}
                    {*if $slide->active == '1'*}
                    {if $smarty.foreach.foo.index == 3}
                    {break}
                    {/if}
                        <div {*}li{*} id="sh-slide-{$slide->id}" class="f-grid-4" data-bg-size-s="{$slide->bg->size1|escape}" data-bg-size-e="{$slide->bg->size2|escape}" data-image="{$slide->bg->src|escape}" data-color-start="{$slide->bg->color1}" data-color-end="{$slide->bg->color2}" data-href="{$slide->href|escape}" data-orientation="{$slide->bg->orientation|escape}">
                            {if $slide->img->src}
                                <a class="slider-img" href="{$slide->href|escape}" title="{$slide->name}">
                                    <img data-align="{$slide->img->pos}" data-animation="{$slide->img->anim}" width="100%" height="auto" data-duration="{$slide->img->time}" src="{imageUrl type='boxesGfx' image=$slide->img->src}" alt="{$slide->name}" />
                                    <p>{$slide->name}</p>
                                </a>
                            {/if}
                            
                            {if $slide->text->html}
                                <div data-align="{$slide->text->pos}" data-animation="{$slide->text->anim}" data-duration="{$slide->text->time}" class="slider-text">
                                    {$slide->text->html|base64_decode}
                                </div>
                            {/if}
                        </div  {*}li{*}>
                    {*/if*}
                {/foreach}
                </div>
           {*} </ul>{*}
        </div>
    </div>
{/if}
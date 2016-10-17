
    <section id="conferences" class="row">
        <article class="col-sm-6 col-md-6 col-lg-6">
          <h1 id="westTitle" class="text-center">Conferencia Oeste</h1>
          <ul class="text-center">
            {foreach from=$equipos['ConfOeste'] key=index item=equipo}
            <li>
              <img id="{$equipo['id']}" src="images/{$equipo['url']}"></img>
            </li>
            {/foreach}
          </ul>
        </article>

        <article class="col-sm-6 col-md-6 col-lg-6">
          <h1 id="eastTitle" class="text-center">Conferencia Este</h1>
          <ul class="text-center">
            {foreach from=$equipos['ConfEste'] key=index item=equipo}
            <li>
              <img id="{$equipo['id']}" src="images/{$equipo['url']}"></img>
            </li>
            {/foreach}
          </ul>
        </article>
      </section>

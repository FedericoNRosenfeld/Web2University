
    <section id="conferences" class="row">
        <article class="col-sm-6 col-md-6 col-lg-6">
          <h1 id="westTitle" class="text-center">Conferencia Oeste</h1>
          <ul class="text-center">
            {foreach from=$equipos1 key=index item=equipo}
            <li><img id="playersGoldenState" src="images/logosoeste/warriors.png"></img></li>
            {/foreach}
          </ul>
        </article>

        <article class="col-sm-6 col-md-6 col-lg-6">
          <h1 id="eastTitle" class="text-center">Conferencia Este</h1>
          <ul class="text-center">
            {foreach from=$equipos2 key=index item=equipo}
              <li> <img src="{from=$equipos2['imagen'] key=index item=imagen}" onclick="MostrarJugadores(equipos2[id]);">{from=$equipos2['imagen'] key=index item=imagen} </li>
            {/foreach}
          </ul>
        </article>
      </section>

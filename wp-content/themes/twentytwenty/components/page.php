
<div class="landing" id="landing">
	<div class="container">
		<div class="columns box has-text-centered">
			<div class="column option1 is-size-4 box has-text-centered">
				<div class="icon"></div>
				<h2>Opcion 1</h2>
				<p class="is-size-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos dolore eveniet molestiae maxime ipsum, aut neque deserunt provident incidunt aspernatur</p>
				<button class="button is-info is-light " onclick="
				elegirOpcion('1')">Elegir</button>
			</div>
			<div class="column option2 is-size-4 box has-text-centered">
				<div class="icon"></div>
				<h2>Opcion 2</h2>
				<p class="is-size-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi in dolorum dolores impedit nostrum dignissimos odit soluta doloribus perspiciatis sint</p>
				<button class="button is-info is-light" onclick="
				elegirOpcion('2')">Elegir</button>
			</div>
			<div class="column option3 is-size-4 box has-text-centered">
				<div class="icon"></div>
				<h2>Opcion 3</h2>
				<p class="is-size-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis eligendi aut neque deserunt provident incidunt aspernatur impedit ladsd s dscsdc</p>
				<button class="button is-info is-light " onclick="
				elegirOpcion('3')">Elegir</button>
			</div>
		</div>
	</div>
</div>

<!-- Otra pantalla -->

<div class="mailing" style="display: none;" id="mailing">
	<div class="">
		<div class="card-k box has-text-centered">
      <div class="head">
    <svg onclick="back()" width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left-short box" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="padding: 0px;border-radius: 50%;">
      <path fill-rule="evenodd" d="M7.854 4.646a.5.5 0 0 1 0 .708L5.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
      <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h6.5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
    </svg>
    <h1 class="is-size-4" style="line-height: 2;margin-left: 10px;">Title</h1>
      </div>
    <form width="50" action="mail.php" method="POST">
      <div class="file has-name is-fullwidth">
        <label class="file-label">
    <input class="file-input" type="file" required name="file1">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Documento 1
      </span>
    </span>
    <span class="file-name">
      link_file
    </span>
  </label>
      </div>
        
      <div class="file has-name is-fullwidth">
        <label class="file-label">
    <input class="file-input" type="file" required name="file2">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Documento 2
      </span>
    </span>
    <span class="file-name">
      link_file
    </span>
  </label>
      </div>
      
      <div class="file has-name is-fullwidth">
  <label class="file-label">
    <input class="file-input" type="file" required name="file3">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Documento 3
      </span>
    </span>
    <span class="file-name">
      link_file
    </span>
  </label>
</div>
<button type="submit" class="button is-success is-light" id="button">!Enviar</button>
<button class="button is-success is-loading" style="display: none;" id="loading">Loading</button>
    </form>  
    </div>
	</div>
</div>

<!-- validacion -->


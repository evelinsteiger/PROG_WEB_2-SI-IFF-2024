<div class="wrap" style="min-height: 100vh; background-color: #f5f5f5">
  <div class="container">
    <section id="view-content">
      <div class="row d-flex justify-content-between mt-3 gx-3">
        <div class="col-md-12 col-lg-9">
          <div class="card">
            <div class="card-body">
              <div class="row d-flex justify-content-start align-items-center gx-1 mb-2">
                <div class="icon-badge">
                  <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h2 class="title mb-0 px-2">
                  Formulário
                </h2>
              </div>
              <div class="divider"></div>

              <div class="info">
                <input id="desc" name="desc" class="mb-3 input" type="text" required>
                <div id="todo-container">
                    <p class="subtitle mb-0"><b>TODO:</b></p>
                    <ul id="todo"></ul>
                </div>
                <div id="done-container">
                    <p class="subtitle mb-0"><b>DONE:</b></p>
                    <ul id="done"></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-3">
          <div class="card invoice-actions">
            <div class="card-body">
              <div class="row d-flex justify-content-start align-items-center gx-1 mb-2">
                <div class="icon-badge">
                  <i class="fas fa-cogs"></i>
                </div>
                <h2 class="title px-2 mb-0">
                  Ações
                </h2>
              </div>
              <div class="divider"></div>
              <div class="row d-flex justify-content-center gy-2 gx-1">
                <button id="btn-add" type="button" class="btn btn-primary btn-sm flex-1" style="letter-spacing: 0.03em;">
                  Adicionar
                </button>
                <button type="button" class="btn btn-success btn-sm bs-popover" data-bs-toggle="popover" title="Atenção" data-bs-content="Ao enviar essa ação não poderá ser revertida." data-bs-placement="bottom">
                  Limpar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
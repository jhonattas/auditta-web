<footer class="footer bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <router-link
                :to="{ name: 'contact' }">
                Contato
              </router-link>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <router-link
                class="btn"
                :to="{ name: 'services' }">
              Serviços
              </router-link>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="https://facebook.com/audittaconsultoria" target="_new">Facebook</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Auditta 2018. Todos direitos reservados.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              Desenvolvido por <a href="https://soucriador.com/" target="_soucriador">Sou Criador</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
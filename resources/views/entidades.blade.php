<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">-->
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <body>
        <nav class="navbar-lateral-fixo">
          <ul>
              <li>
                  <a href="#">
                      <ion-icon name="home-outline" class="fas"></ion-icon>
                      <span class="nav-item">Home</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <ion-icon name="person-outline" class="fas"></ion-icon>
                      <span class="nav-item">Perfil</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <ion-icon name="construct-outline" class="fas"></ion-icon>
                      <span class="nav-item">Equipamentos</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <ion-icon name="business-outline" class="fas"></ion-icon>
                      <span class="nav-item">Setores</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <ion-icon name="documents-outline" class="fas"></ion-icon>
                      <span class="nav-item">Documentos</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <ion-icon name="stats-chart-outline" class="fas"></ion-icon>
                      <span class="nav-item">Relatórios</span>
                  </a>
              </li>
              <li>
                  <a href="" class="logout">
                      <ion-icon name="log-out-outline" class="fas"></ion-icon>
                      <span class="nav-item">Sair</span>
                  </a>
              </li>
          </ul>
        </nav>
    
        <main class="main-cadastro">
            <div class="container">
                    <div class="conteudo-cadastro">
                      <div class="header-cadastro">
                        <div class="title-cadastro">
                            <h1 class="h1-cadastro">ENTIDADES CONTRATADAS</h1>
                        </div>
                      </div> <!-- FIM HEADER CADASTRO -->
                    <form method="" action="#">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="inputEmail4" class="label-cadastro">Nivel de Atividade</label>
                          <input type="text" class="form-control" id="inputEmail4" placeholder="Nível de Entidade" name="nivelEntidade">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputPassword4" class="label-cadastro">Atividade Profissional</label>
                          <input type="text" class="form-control" id="inputPassword4" placeholder="Atividade Profissional" name="atividadeProfissional">
                        </div>
                      </div>

                      
                      <div class="form-group col-md-12">
                        <label for="inputAddress" class="label-cadastro">Atividade</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="atividade" name="atividade">
                      </div>
                      
                      <div class="">
                          <div class="form-group col-md-8">
                            <label for="inputAddress2" class="label-cadastro">Unidade de Medida</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="0," name="unidadeMedida">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputAddress2" class="label-cadastro">Quantidade</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="quantidade" name="quantidade">
                          </div>
                      </div>

                      
                  
                      
                    </form>
                    <div class="btn-cadastro">
                      <button type="submit" class="btn btn-secondary cadastro-btn"><a href="{{ route('contrato') }}">Avançar</a></button>
                    </div>
                  </div>
            </div>

          </main>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
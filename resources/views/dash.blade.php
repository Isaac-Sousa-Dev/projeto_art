<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">-->
<link rel="stylesheet" href="/css/style.css">
<body>

    <!--</div>
    <nav class="navbar navbar-expand-lg bg-primary" id="navbar-container">
      <div class="container-fluid">  
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <img src="/img/Outlook_cid_image0.png" alt="" id="img-logo">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0"  style="margin-left: 800px">                  
                  <li class="nav-item">
                      <a class="nav-link" href="#">Fale Conosco</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">A empresa</a>
                </li>
                  <li class="nav-item">
                    
                </li>
                  
              </ul>
              <form class="d-flex" role="search" action="/home" method="GET" name="search">
                  <input id="input-search" class="form-control me-2" type="search" placeholder="Procurar" aria-label="Procurar">
                  <button id="button-search" class="btn btn-outline-light" type="submit"><ion-icon name="search-outline"><ion-icon>Procurar</button>
              </form>
          </div>
      </div>
  </nav>  Fim Navbar -->

  <nav class="navbar-lateral">
    <ul>
        <li>
            <a href="">
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
            <a href="">
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

  <div class="container-fluid" id="dash">
      @if(session('msg'))
          <p class="msg">{{ session('msg') }}</p>
      @endif
      @if(session('msg-error'))
          <p class="msg-error">{{ session('msg-error') }}</p>
      @endif
      @yield('content')
  </div>

  <!-- MAIN -->

    <main class="conteudo-dashboard" style="border: 1px solid #107AA3; background: #BFE1EF">
        <!-- Conteúdo Dashboard -->
        <div class="header-dashboard">
            <div class="titulo-dashboard">
                <h1 id="h1-dash" style="color: #313c3f">Dashboard</h1>
            </div>
            <div class="busca-dashboard">
                
            </div>
            <div class="logo-dashboard">
                <img src="/img/Outlook_cid_image0.png" alt="Logo">
            </div>
        </div>

        <div class="body-dashboard">
                <div class="card">
                    <div class="descricao-card">
                        <h2>Obras e Serviço</h2>
                    </div>
                    <div class="link-card">
                        <a href="{{ route('dados') }}">
                            <button>Iniciar</button>
                        </a>     
                        <a href="">
                            <button>Complementar</button>
                        </a>              
                    </div>
                </div>

                <div class="card">
                    <div class="descricao-card">
                        <h2>Obras e Serviço</h2>
                    </div>
                    <div class="link-card">
                        <a href="">
                            <button>Iniciar</button>
                        </a>     
                        <a href="">
                            <button>Complementar</button>
                        </a>              
                    </div>
                </div>

                <div class="card">
                    <div class="descricao-card">
                        <h2>Obras e Serviço</h2>
                    </div>
                    <div class="link-card">
                        <a href="">
                            <button>Iniciar</button>
                        </a>     
                        <a href="">
                            <button>Complementar</button>
                        </a>              
                    </div>
                </div>

                <div class="card">
                    <div class="descricao-card">
                        <h2>Obras e Serviço</h2>
                    </div>
                    <div class="link-card">
                        <a href="">
                            <button>Iniciar</button>
                        </a>     
                        <a href="">
                            <button>Complementar</button>
                        </a>              
                    </div>
                </div>

                <div class="card">
                    <div class="descricao-card">
                        <h2>Obras e Serviço</h2>
                    </div>
                    <div class="link-card">
                        <a href="">
                            <button>Iniciar</button>
                        </a>     
                        <a href="">
                            <button>Complementar</button>
                        </a>              
                    </div>
                </div>

                <div class="card">
                    <div class="descricao-card">
                        <h2>Obras e Serviço</h2>
                    </div>
                    <div class="link-card">
                        <a href="">
                            <button>Iniciar</button>
                        </a>     
                        <a href="">
                            <button>Complementar</button>
                        </a>              
                    </div>
                </div>

        </div>
    </main>
    
    <!--<table class="table table-dark table-striped" style="width: 50%; margin-left: 330px; margin-top: 30px; height: 200px; border: 5px solid rgb(7, 89, 231)">
        <thead>
            <tr>
            <th scope="col" style="color: white">#</th>
            <th scope="col" style="color: white">Equipamentos</th>
            <th scope="col" style="color: white; padding-left: 170px">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Computador</td>
            <td style="padding-left: 170px">
                <a href="#" class="btn btn-success" style="border-radius: 7px">Cadastrar</a>
                <a href="#" class="btn btn-info" style="border-radius: 7px">Todos</a>
            </td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Notebook</td>
            <td style="padding-left: 170px">
                <a href"#" class="btn btn-success" style="border-radius: 7px">Cadastrar</a>
                <a href="#" class="btn btn-info" style="border-radius: 7px">Todos</a>
            </td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td style="">Monitor</td>
            <td style="padding-left: 170px">
                <a href="#" class="btn btn-success" style="border-radius: 7px">Cadastrar</a>
                <a href="#" class="btn btn-info" style="border-radius: 7px">Todos</a>
            </td>
            </tr>
        </tbody>
    </table> -->
    <!--<div class="card-group" style="margin-top: 50px">
        <div class="card" style="background-color: #ccc" >
          <img id="img-dash-notebook" src="../img/notebook.png" class="card-img-top" alt="...">
          <div class="card-body" style="margin-top: -80px">
            <h5 class="card-title" style="text-align: center; font-weight: bold">NOTEBOOK</h5>
            <p class="card-text" style="color: black; padding-left: 15px">Clique em Cadastrar caso queira adicionar um novo. Caso queira ver os que já existem clique em Todos.</p>
            <div class="btn-dash">
                <a href="/app/system/notebook/index" class="btn btn-info" style="border-radius: 7px; border: 1px solid black">Todos</a>
            </div>
          </div>
        </div>
      
        <div class="card" style="background-color: #ccc">
          <img id="img-dash-computador" src="../img/computador.png" class="card-img-top" alt="...">
          <div class="card-body" style="margin-top: -80px;">
            <h5 class="card-title" style="text-align: center; font-weight: bold">COMPUTADOR</h5>
            <p class="card-text" style="color: black; padding-left: 15px">Clique em Cadastrar caso queira adicionar um novo. Caso queira ver os que já existem clique em Todos.</p>
            <div class="btn-dash">
                
            </div>
          </div>
        </div>
        <div class="card" style="background-color: #ccc">
          <img id="img-dash-monitor" src="../img/monitor.png" class="card-img-top" alt="...">
          <div class="card-body" style="margin-top: -80px">
            <h5 class="card-title" style="text-align: center; font-weight: bold">MONITOR</h5>
            <p class="card-text" style="color: black; padding-left: 15px">Clique em Cadastrar caso queira adicionar um novo. Caso queira ver os que já existem clique em Todos.</p>
            <div class="btn-dash">
                
            </div>
          </div>
        </div>
      </div>
    -->

      <!-- Scripts JS -->
      <script>
          const FlashMessages = document.querySelector('#dash')
        
            setTimeout(() => {
              FlashMessages.remove()
            }, 3000);
        
      </script>

      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
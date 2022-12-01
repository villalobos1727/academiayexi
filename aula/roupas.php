<?php
  require_once 'head.php';
  require_once 'menu.php';

?>  



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
               <h1>Coleção 2023</h1>
            </div>

        </div>
    </div>
    

    <div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="imagens/roupa1.jpg" alt="Imagem de capa do card">
                     <div class="card-body">
                        <h3 class="card-text">Conjunto Lucia</h3>
                        <p class="card-text">R$ 50,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lucia">
                            Comprar
                            </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="imagens/roupa2.jpg" alt="Imagem de capa do card">
                     <div class="card-body">
                        <h3 class="card-text">Conjunto Mayra</h3>
                        <p class="card-text">R$ 50,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mayra">
                            Comprar
                            </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="imagens/roupa3.jpg" alt="Imagem de capa do card">
                     <div class="card-body">
                     <h3 class="card-text">Conjunto ana</h3>
                        <p class="card-text">R$ 50,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ana">
                            Comprar
                            </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="imagens/roupa4.webp" alt="Imagem de capa do card">
                     <div class="card-body">
                        <h3 class="card-text">Conjunto Alex</h3>
                        <p class="card-text">R$ 50,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alex">
                            Comprar
                            </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="lucia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto Lucia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
            <img class="img-fluid" src="imagens/roupa1.jpg">
            <p>conjunto confeccionado em tecido elástico, confortável para se exercitar na cor roxa.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="mayra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto maira</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
            <img class="img-fluid" src="imagens/roupa2.jpg">
            <p>conjunto confeccionado em tecido elástico, confortável para se exercitar na cor cinza e amarelo.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="ana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto Ana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
            <img class="img-fluid" src="imagens/roupa3.jpg">
            <p>conjunto confeccionado em tecido elástico, confortável para se exercitar na cor Preto e bronzeado.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="alex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto Alex</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
            <img class="img-fluid" src="imagens/roupa4.webp">
            <p>conjunto confeccionado em tecido elástico, confortável para se exercitar na cor Vermelho.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>




    

    <?php
        require_once 'footer.php';

    ?>
 





   
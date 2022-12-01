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
                     <img class="card-img-top" src="imagens/acesso1.webp" alt="Imagem de capa do card">
                     <div class="card-body">
                        <h3 class="card-text">Luva Feminina</h3>
                        <p class="card-text">R$ 50,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#luva">
                            Comprar
                            </button>
                    </div>
                </div>
            </div>
<!-- Modal -->
<div class="modal fade" id="luva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Luva Feminina</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
            <img class="img-fluid" src="imagens/acesso1.webp">
            <p>
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
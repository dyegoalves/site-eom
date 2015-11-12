<div class="bs-example">
    <form action="admin/valida-login.php" method="post">
    <div id="myModal" class="modal fade" data-backdrop="static">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Login no sistema somente para Administradores e Moderadores</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user">Usuario:</label>
                        <input type="text" class="form-control" name="log_usuario" id="log_usuario">
                    </div>
                    <div class="form-group">
                        <label for="user">Senha:</label>
                        <input type="text" class="form-control" name="log_senha" id="log_senha">
                    </div>
                </div>
                <div class="modal-footer">
                   <!-- <button type="submit" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Entrar</button>-->
                    <input type="button" name="Fechar" value="Fechar" class="btn btn-default" data-dismiss="modal">
                    <input type="submit" name="Entrar" value="Entrar" class="btn btn-success">
                </div>
            </div>
        </div>
    </div>
  </form>
</div>
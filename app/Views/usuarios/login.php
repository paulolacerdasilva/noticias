<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Faça Login</small></p>

            <form name="cadastrar" method="POST" action="<?= URL ?>/usuarios/login" class="mt-4">
           
                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type='email' name='email' id='email' class='form-control <?=$dados['email_erro'] ? 'is-invalid' : '' ?>' value='<?=$dados['email']?>' >
                    <div class='invalid-feedback'>
                        <?=$dados['email_erro']?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type='password' name='senha' id='senha' class='form-control <?=$dados['senha_erro'] ? 'is-invalid' : '' ?>' value='<?=$dados['senha']?>'>
                    <div class="invalid-feedback">
                        <?=$dados['senha_erro']?>
                    </div>
                </div>
               

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Entrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col">
                        <a href="#">Você tem uma conta? Faça cadastro</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
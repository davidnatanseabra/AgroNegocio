<div class="main-page">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-md-12">
                <h2 class="title">Cadastro de Produtos</h2>
                <p class="sub-title"></p>
            </div>
        </div>
        <div class="row breadcrumb-div">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="<?= LINK ?>produtos"><i class="fa fa-home"></i> Início</a></li>
                    <li><a>Produtos</a></li>
                    <li class="active">Cadastro</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <form action="<?= LINK ?>produtos/inserir" method="post" class="p-20" enctype="multipart/form-data">
                                <h5 class="underline mt-n">Informações</h5>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="imagem">Imagem <sup class="color-danger">*</sup></label>
                                            <input type="file" class="form-control" id="imagem" name="imagem" required="">
                                            <span>Imagem no tamanho de 370px largura 484px de altura</span>
                                        </div>
                                    </div>  
                          
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="titulo">Título <sup class="color-danger">*</sup></label>
                                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" maxlength="100" value="<?= $Sessao::retornaFormulario("titulo") ?>" required>
                                        </div>
                                    </div>  
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="descricao">Descrição <sup class="color-danger">*</sup></label>
                                            <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição" required><?= $Sessao::retornaFormulario("descricao") ?></textarea>
                                        </div>
                                    </div>                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="btn-group pull-right mt-10" role="group">
                                            <a href="<?= LINK ?>produtos/listar" class="btn bg-gray btn-wide"><i class="fa fa-mail-reply"></i>Voltar</a>
                                            <button type="reset" class="btn btn-gray btn-wide"><i class="fa fa-times"></i>Cancelar</button>
                                            <button type="submit" class="btn bg-black btn-wide"><i class="fa fa-arrow-right"></i>Inserir</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="right-sidebar bg-white fixed-sidebar">
    <div class="sidebar-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4>Ajuda da página<i class="fa fa-times close-icon"></i></h4>
                    <p>
                        A tela de cadastro é usada para inserir uma nova profissão.<br><br>
                        <b>Os campos disponíveis são:</b><br>
                        <i class="fa fa-check"></i> Nome - Nome da profissão;<br>
                        <i class="fa fa-check"></i> Status - Status ativo ou inativo de profissão.
                        <br><br>
                        <b>Os campos obrigatórios são:</b><br>
                        <i class="fa fa-check"></i> Nome - Com um limite de 200 caracteres;<br>
                        <i class="fa fa-check"></i> Status - Selecionado(Ativo) ou não selecionado(Inativo).
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

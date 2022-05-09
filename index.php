<?php
//Iniciar a sessao
session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-pt">
<!-- chamada de arquivos--> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>cadastrar cliente</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar-1.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Ultimate-Sidebar-Menu-BS5.css">
</head>
<!-- Abre body--> 
<body style="border-radius: 14px;background: rgb(89,89,89);">
    <div><a class="btn btn-primary btn-customized open-menu" role="button" style="background: rgb(243, 91, 63);"><i class="fa fa-navicon"></i>&nbsp;Menu</a>
        <div class="sidebar" style="background: rgb(243,91,63);">
                        <div class="dismiss"><i class="fa fa-caret-left"></i></div>
                            <div class="brand"><a class="navbar-brand" href="index.html">Brand</a></div>
                 <!-- Abre nav suspensa--> 
                                <nav class="navbar navbar-dark navbar-expand">
                                        <div class="container-fluid">
                                            <ul class="navbar-nav flex-column me-auto">
                                                <li class="nav-item"><a class="nav-link" href="#hit">Home</a></li>
                                                <li class="nav-item"><a class="nav-link" href="page1.html">Page 1</a></li>
                                                <li class="nav-item"><a class="nav-link" href="page2.html">Page 2</a></li>
                                                <li class="nav-item"><a class="nav-link" href="page2.html">Page 2</a></li>
                                                <li class="nav-item"><a class="nav-link" href="page2.html">Page 2</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                            </div>
                            <div class="overlay"></div>
                        </div>
                <!-- Abre nav  fixa--> 
                    <nav>
                        <section class="features-clean" style="height: 67px;background: #f35b3f;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <hr style="width: 149px;min-width: 2px;margin-bottom: 3px;margin-top: 12px;"><span>Sistema de&nbsp;<strong>Cadastro</strong></span>
                                        <hr style="width: 149px;min-width: 2px;margin-bottom: 3px;margin-top: 12px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </nav>
                <hr style="color: rgba(255,255,255,0);">
                <div class="container" style="background: #e7e7e7;border-radius: 20px 20px 20px 20px;">
                <hr> 
        <!-- Abre  container-->
            <div class="col">
                <div> <div class="text-center">
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1" style="color: #000000;font-weight: bold;border-radius: 14px;">Cadastro</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2" style="color: #000000;font-weight: bold;border-radius: 14px;">Editar</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3" style="color: #000000;font-weight: bold;border-radius: 14px;">Excluir</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-4" style="color: #000000;font-weight: bold;border-radius: 14px;">Pesquisar</a></li>
                        </ul>
                    <div class="tab-content">
                        <!-- Inicio do tabela 1-->  
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                            <div class="row">
                                <div class="col">
                        
                                    <div>
                                        <!-- Abre  formulario-->
                                        <form method="post" action="banco_de_dados/insert_pessoal.php">
                                            <h2 class="text-center">Cadastro Cliente</h2>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><strong>Dados Pessoais</strong></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="nome" placeholder="Nome" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="nome_meio" placeholder="Nome do meio" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="sobre_nome" placeholder="SobreNome" required="" ></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="rg" placeholder="RG"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="cpf" placeholder="CPF" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="fone_pessoal" placeholder="Fone 00 xxxxx-xxxx"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="fone_contato" placeholder="Fone contato"></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="E-mail"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="int" name="whatsapp" placeholder="Whatsapp" required=""></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><strong>Endereço</strong></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="rua" placeholder="Rua" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="int" name="numero" placeholder="Numero" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="bairro" placeholder="Bairro" required="" ></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="cidade" placeholder="Cidade" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                            <div class="mb-3">
                                                            <!-- Abre  seleção estado UF--> 
                                                                <select class="form-select">
                                                                    <optgroup label="UF">
                                                                        <option value="" selected="">Selecione</option>
                                                                        <option value="AC">Acre</option>
                                                                        <option value="AL">Alagoas</option>
                                                                        <option value="AP">Amapá</option>
                                                                        <option value="AM">Amazonas</option>
                                                                        <option value="BA">Bahia</option>
                                                                        <option value="CE">Ceará</option>
                                                                        <option value="DF">Distrito Federal</option>
                                                                        <option value="ES">Espírito Santo</option>
                                                                        <option value="GO">Goiás</option>
                                                                        <option value="MA">Maranhão</option>
                                                                        <option value="MT">Mato Grosso</option>
                                                                        <option value="MS">Mato Grosso do Sul</option>
                                                                        <option value="MG">Minas Gerais</option>
                                                                        <option value="PA">Pará</option>
                                                                        <option value="PB">Paraíba</option>
                                                                        <option value="PR">Paraná</option>
                                                                        <option value="PE">Pernambuco</option>
                                                                        <option value="PI">Piauí</option>
                                                                        <option value="RJ">Rio de Janeiro</option>
                                                                        <option value="RN">Rio Grande do Norte</option>
                                                                        <option value="RS">Rio Grande do Sul</option>
                                                                        <option value="RO">Rondônia</option>
                                                                        <option value="RR">Roraima</option>
                                                                        <option value="SC">Santa Catarina</option>
                                                                        <option value="SP">São Paulo</option>
                                                                        <option value="SE">Sergipe</option>
                                                                        <option value="TO">Tocantins</option>
                                                                        <option value="EX">Estrangeiro</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="int" name="cep" placeholder="CEP" required=""></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3"><input class="btn btn-primary" type="submit" name="CadUsuario"  value="Cadastrar"style="background: var(--bs-gray-800);"></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3"><button class="btn btn-primary" type="reset" style="background: var(--bs-gray-800);">Limpar</button></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3"></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3"></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3"></div>
                                                        </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Inicio do tabela 2-->  
                        <div class="tab-pane" role="tabpane2" id="tab-2">
                            <div class="row">
                                <div class="col" style="background: #d1d1e0; border-radius: 00px 00px 20px 20px;">
                                    <div>
                                    <form method="post" action="editar" ><br>
                                                <div class="row">
                                                     <div class="col">
                                                     <div class="mb-3 text-center"><h2>Pesquisar por CPF</h2></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="int" name="cpf" placeholder="CPF"></div> 
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><button class="btn btn-primary" type="submit" style="background: var(--bs-gray-800);">Pesquisar</button></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"></div>
                                                    </div>
                                                </div>
                                            </form><br>
                                        <form method="post"action=" editar">
                                            <h2 class="text-center">Editar Cliente</h2>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><strong>Dados Pessoais</strong></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="nome" placeholder="Nome" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="nome_meio" placeholder="Nome do meio" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="sobre_nome" placeholder="SobreNome" required="" inputmode="latin-name"></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="rg" placeholder="RG"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="cpf" placeholder="CPF" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="fone_pessoal" placeholder="Fone 00 xxxxx-xxxx"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="fone_contato" placeholder="Fone contato"></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="E-mail"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="tel" name="whatsapp" placeholder="Whatsapp" required=""></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><strong>Endereço</strong></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text" name="rua" placeholder="Rua" required=""></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text" name="numer" placeholder="Numero" required=""></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text" name="bairro" placeholder="Bairro" required="" inputmode="latin-name"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text" name="cidade" placeholder="Cidade" required=""></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text" name="uf" placeholder="UF" value=""></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text" name="cep" placeholder="CEP" required=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><button class="btn btn-primary" type="submit" style="background: var(--bs-gray-800);">Editar</button></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><button class="btn btn-primary" type="reset" style="background: var(--bs-gray-800);">Limpar</button></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Inicio do tabela 3-->    
                        <div class="tab-pane" role="tabpane3" id="tab-3">
                            <div class="row">
                                <div class="col" style="background: #b3b3cc; border-radius: 00px 00px 20px 20px;">
                                    <div>
                                    
                                        <!-- Entrada de dados para Pesquisa por cpf--> 
                                            <form method="post" action="excluir"><br>
                                                <div class="row">
                                                     <div class="col">
                                                        <div class="mb-3 text-center"><h2 class="text-center">Pesquisar por CPF</h2></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="int" name="cpf" placeholder="CPF"></div> 
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><button class="btn btn-primary" type="submit" style="background: var(--bs-gray-800);">Pesquisar</button></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"></div>
                                                    </div>
                                                </div>
                                            </form><br>
                                        <form method="post" action="excluir">
                                            <h2 class="text-center">Exclusão do Cliente</h2>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><strong>Dados Pessoais</strong></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="nome" value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="nome_meio" value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="sobre_nome" value=""></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="rg"  value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="cpf" value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="fone_pessoal" value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="fone_contato" value=""></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="email" name="email" value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="tel" name="whatsapp"  value=""></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><button class="btn btn-primary" type="submit" style="background: var(--bs-gray-800);">Excluir</button></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><button class="btn btn-primary" type="reset" style="background: var(--bs-gray-800);">Limpar</button></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Inicio do tabela 4--> 
                        <div class="tab-pane" role="tabpane4" id="tab-4">
                            <div class="row">
                                <div class="col" style="background: #8585ad; border-radius: 00px 00px 20px 20px;">
                                    <div>
                                        
                                        <!-- Entrada de dados para Pesquisa por cpf--> 
                                            <form method="post" action="pesquisar"><br>
                                            <div class="row">
                                                     <div class="col">
                                                        <div class="mb-3 text-center"><h2 class="text-center">Pesquisar por CPF</h2></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="int" name="cpf" placeholder="CPF"></div> 
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><button class="btn btn-primary" type="submit" style="background: var(--bs-gray-800);">Pesquisar</button></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"></div>
                                                    </div>
                                                </div>
                                            </form><br>

                                    <!-- Apresentando dados do Cliente no formulario--> 
                                        <form method="post" action="pesquisar">
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><strong>Dados Pessoais</strong></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="nome" value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="nome_meio" value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="sobre_nome" value=""></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="rg" value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="cpf" value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="fone_pessoal" value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="text" name="fone_contato" value=""></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="email" name="email" value=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control" type="tel" name="whatsapp" value=""></div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><strong>Endereço</strong></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text" name="rua" value=""></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="int" name="numer" value=""></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text" name="bairro" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text" name="cidade" value=""></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><div class="mb-3"><input class="form-control" type="text" name="uf" value=""></div></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text" name="cep" value=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                <div class="mb-3"><button class="btn btn-primary" type="reset" style="background: var(--bs-gray-800);">Limpar</button></div>
                                                </div>
                                                <div class="col">
                                                <div class="mb-3"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"></div>
                                                </div>
                                                <div class="col"><!-- Enviando para pagina de Exclusão--> 
                                                    <div class="mb-3"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="color: rgba(255,255,255,0);">
    <!-- Abre  roda pé-->
        <footer class="footer-basic" style="background: rgb(243,91,63);height: 140.5px;padding-top: 18px;color: #ffffff;">
            <div class="container">
                <div class="social" style="color: #ffffff;"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
                <p class="copyright" style="color: #ffffff;margin: 0px 0px 0px;">Company Cleber Moraes© 2022</p>
            </div>
        </footer>
        <!-- Chama ja script-->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Ultimate-Sidebar-Menu-BS5.js"></script>
</body>

</html>
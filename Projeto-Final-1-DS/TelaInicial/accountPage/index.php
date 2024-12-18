<?php
session_start();
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$telefone = $_SESSION['telefone'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Configurações</title>
</head>
<body>
    <main class="site-container">
        <nav class="lateral-navigation">
            <div class="top-nav">
            
                <p class="back-button">X</p>

              
                <div class="account-card">
                    
                    
                    <img class="account-img" src="https://www.pellarin.com.br/wp-content/uploads/2022/08/artigoBannerMobile767x716_homem-com-papada-como-eliminar.jpg" >
                    
                    <div>
                        <?php
                        echo '<p class="other-subtitle">'. $nome .'</p>'
                        ?>
                        <?php
                        echo '<p class="paragraph-text">'. $email .'</p>'
                        ?>
                        
                        
                    </div>
                
                   
                   
                </div>
    
                <div class="buttons-container">
                    <a href="#" class="nav-button">
                        <img src="./images/accountIcon.png" >
                        <p>Editar Perfil</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="./images/card.png" >
                        <p>Saldo</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="./images/icons8-plus-50.png" >
                        <p>Depósitos</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="./images/icons8-minus-32.png" >
                        <p>Saques</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="../Imagens/setting.png" >
                        <p>Configurações</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="../Imagens/saldoIcon.png" >
                        <p>Aparência</p>
                    </a>
            
                    <a href="#" class="nav-button">
                        <img src="../Imagens/saldoIcon.png" >
                        <p>Idiomas</p>
                    </a>
            
                </div>
            </div>
          
    
           
            <div class="bottom-nav">
                <a href="#" class="nav-button">
                    <img src="../Imagens/iconeConta.png" >
                    <p>Ajuda e Suporte</p>
                </a>
        
                <a href="#" class="nav-button">
                    <img src="../Imagens/logout.png" >
                    <p>Sair</p>
                </a>
            </div>
    
    
        </nav>
    
        <div class="right-frame">

            <div class="right-container">
                <header class="header">
                    <div class="open-menu">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <div class="input-box">
                  
                        <img src="../Imagens/searchIcon.png">
                        <input type="text" placeholder="Pesquisar nas configurações ">
                    </div>
            
   
            </header>

            <div class="settings-container">
                <div class="text-box">
                    <h1 class="title">Editar Perfil</h1>
                    <p>Gerencie seus dados e preferências pessoais aqui.</p>
                </div>

                <h1 class="subtitle">Meu Perfil</h1>

                <div class="profile-manage">
                   
                    <div class="manage-content">
                        <h1 class="other-subtitle" >Nome de usuário:</h1>
                        <div class="flex">
                            <?php
                            echo '<p class="grey-txt" id="username-text">'. $nome . '</p>'
                            ?>
                            <p id="username-edit" class="purple-text">Editar</p>
                        </div>
                    
                    </div>

                  

                    <div class="manage-content">
                        <div>
                            <p class="other-subtitle">Foto de perfil</p>
                            <p id="text" class="grey-txt">Personalize seu perfil com uma foto!</p>
                        </div>
                   
                        
                        <div class="flex">
                            <img class="account-img" id="photo" src="https://www.pellarin.com.br/wp-content/uploads/2022/08/artigoBannerMobile767x716_homem-com-papada-como-eliminar.jpg">
                            <div class="group">
                                <p class="delete-button">Deletar</p>
                                <label id="upload-btn" class="purple-text" for="file">Mudar foto</label>
                                <input  type="file" id="file">
                           
                            </div>
                          
                        </div>
                 
                    </div>

                    <div class="manage-content">
                        <p class="other-subtitle">Telefone:</p>
                        <div class="flex">
                            <?php
                            echo '<p class="grey-txt" id="tel-text">'.$telefone.'</p>'
                            ?>
                            <p class="purple-text" id="tel-edit">Editar</p>
                        </div>
                    
                    </div>

                    <div class="manage-content">
                        <p class="other-subtitle">Senha:</p>
                        <div class="flex">
                            <p class="grey-txt">********</p>
                            <div  class="group">
                              
                                <p id="pass-edit" class="purple-text">Editar</p>
                            </div>                     
                        </div>         
                    </div>
                </div>
            </div>

         

        </div>

            </div>

          

        
        

        

    </main>

    <div class="popup-container">
        <div class="change-popup" id="pass-popup">
            <p class="close-button">X</p>
            <p class="title">Editar Senha</p>
    
            <div class="inputs-container">
                
            <div class="input-bo">
                <input type="text" placeholder="Senha Atual">
                <img src="https://jonbet.com/static/media/eye.fdf3ae46.svg">
            </div>
    
            
            <div class="input-bo">
                <input type="text" placeholder="Nova Senha">
                <img src="https://jonbet.com/static/media/eye.fdf3ae46.svg">
            </div>
    
            <div class="input-bo">
                <input type="text" placeholder="Repita a Nova Senha">
                <img src="https://jonbet.com/static/media/eye.fdf3ae46.svg">
            </div>
    
            <button class="button">Salvar</button>
    
    
        </div>
    
        </div>
    
        <div class="change-popup" id="username-popup">
            <p class="close-button">X</p>
            <p class="title">Editar Nome de exibição</p>
    
            <div class="inputs-container">
                
            <div class="input-bo">
                <input type="text" id="user-input" placeholder="Digite seu novo nome">
            </div>
    
         
            <button class="button" id="username-enviar">Salvar</button>
    
    
        </div>
    
        </div>

        <div class="change-popup" id="tel-popup">
            <p class="close-button">X</p>
            <p class="title">Editar número de telefone</p>
    
            <div class="inputs-container">
                
            <div class="input-bo">
                <input type="text" id="tel-input" placeholder="Digite seu número junto com o código DDD">
            </div>
    
         
            <button class="button" id="tel-enviar">Salvar</button>
    
    
        </div>
    
        </div>
    </div>



   

    <script src="./javascriptFolder/passwordPopup.js"></script>
    <script src="./javascriptFolder/usernamePopup.js"></script>
    <script src="./javascriptFolder/telPopup.js"></script>
    <script src="./javascriptFolder/importPhoto.js"></script>
    <script src="./javascriptFolder/lateralMenu.js"></script>
</body>
</html>
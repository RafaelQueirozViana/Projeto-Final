        // Função para formatar o CPF automaticamente
        function formatarCPF(cpf) {
            cpf = cpf.replace(/\D/g, ""); // Remove tudo que não for número
            cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // Adiciona o primeiro ponto
            cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // Adiciona o segundo ponto
            cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); // Adiciona o traço
            return cpf;
        }

        // Aplica a formatação enquanto o usuário digita no campo CPF
        document.getElementById("cpf-input").addEventListener("input", function () {
            this.value = formatarCPF(this.value);
        });

        document.getElementById('form').addEventListener('submit', function(event) {
            event.preventDefault();

            // Pegando valores
            const nome = document.getElementById('name-input').value.trim();
            const email = document.getElementById('email-input').value.trim();
            const dataNascimento = document.getElementById('date-input').value.trim();
            const cpf = document.getElementById('cpf-input').value.replace(/\D/g, ""); // Remove formatação do CPF
            const telefone = document.getElementById('tel-input').value.trim();
            const senha = document.getElementById('pass-input').value.trim();
            const confirmarSenha = document.getElementById('confirm-pass').value.trim();

            // Parágrafos de erro
            const erroNome = document.getElementById('name-error');
            const erroEmail = document.getElementById('email-error');
            const erroDataNascimento = document.getElementById('date-error');
            const erroCPF = document.getElementById('cpf-error');
            const erroTelefone = document.getElementById('tel-error');
            const erroSenha = document.getElementById('pass-error');
            const erroConfirmarSenha = document.getElementById('confirm-error');

            // Limpando mensagens anteriores
            erroNome.textContent = "";
            erroEmail.textContent = "";
            erroDataNascimento.textContent = "";
            erroCPF.textContent = "";
            erroTelefone.textContent = "";
            erroSenha.textContent = "";
            erroConfirmarSenha.textContent = "";

            let formularioValido = true;

            // Validação de Campos Vazios
            if (!nome) {
                erroNome.textContent = "O campo nome não pode estar vazio.";
                formularioValido = false;
            }
            if (!email) {
                erroEmail.textContent = "O campo email não pode estar vazio.";
                formularioValido = false;
            }
            if (!dataNascimento) {
                erroDataNascimento.textContent = "O campo data de nascimento não pode estar vazio.";
                formularioValido = false;
            }
            if (!cpf) {
                erroCPF.textContent = "O campo CPF não pode estar vazio.";
                formularioValido = false;
            }
            if (!telefone) {
                erroTelefone.textContent = "O campo telefone não pode estar vazio.";
                formularioValido = false;
            }
            if (!senha) {
                erroSenha.textContent = "O campo senha não pode estar vazio.";
                formularioValido = false;
            }
            if (!confirmarSenha) {
                erroConfirmarSenha.textContent = "O campo confirmar senha não pode estar vazio.";
                formularioValido = false;
            }

            // Validações Específicas
            if (nome && (nome.length < 5 || nome.length > 50)) {
                erroNome.textContent = "O nome deve ter entre 5 e 50 caracteres.";
                formularioValido = false;
            }

            if (email && (!email.includes('@') || email.split('@')[1].trim() === '')) {
                erroEmail.textContent = "O email deve conter um '@' seguido de texto.";
                formularioValido = false;
            }

            if (cpf && !/^\d{11}$/.test(cpf)) {
                erroCPF.textContent = "O CPF deve conter exatamente 11 dígitos.";
                formularioValido = false;
            }

            if (telefone && !/^\d{11}$/.test(telefone)) {
                erroTelefone.textContent = "O telefone deve conter exatamente 11 dígitos.";
                formularioValido = false;
            }

            // Validação da Data de Nascimento
            if (dataNascimento) {
                const dataNascimentoObj = new Date(dataNascimento);
                const hoje = new Date();
                const anoDigitado = dataNascimento.split("-")[0];
                const idade = hoje.getFullYear() - dataNascimentoObj.getFullYear();
                const mesCorrecao = hoje.getMonth() - dataNascimentoObj.getMonth();

                if (isNaN(dataNascimentoObj.getTime()) || anoDigitado.length > 4) {
                    erroDataNascimento.textContent = "Insira uma data válida.";
                    formularioValido = false;
                } else if (anoDigitado < 1924) {
                    erroDataNascimento.textContent = "Insira uma data válida.";
                    formularioValido = false;
                } else if (
                    idade < 18 || 
                    (idade === 18 && mesCorrecao < 0) || 
                    (idade === 18 && mesCorrecao === 0 && hoje.getDate() < dataNascimentoObj.getDate())
                ) {
                    erroDataNascimento.textContent = "Você precisa ter mais de 18 anos.";
                    formularioValido = false;
                }
            }

            if (senha && !/[A-Z]/.test(senha)) {
                erroSenha.textContent = "A senha deve conter pelo menos uma letra maiúscula.";
                formularioValido = false;
            }

            if (senha && confirmarSenha && senha !== confirmarSenha) {
                erroConfirmarSenha.textContent = "As senhas não coincidem.";
                formularioValido = false;
            }

            if (formularioValido) {
              
                document.getElementById('form').submit();
              
            }
        });
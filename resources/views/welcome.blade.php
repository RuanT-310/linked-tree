<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Usuários - Bem-vindo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        .floating:nth-child(2) { animation-delay: 2s; }
        .floating:nth-child(3) { animation-delay: 4s; }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .pulse-dot {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="gradient-bg shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-users text-purple-600 text-xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-white">Sistema de Usuários</h1>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="pulse-dot w-3 h-3 bg-green-400 rounded-full"></div>
                    <span class="text-white text-sm">Online</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative overflow-hidden gradient-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center text-white">
                <div class="mb-8">
                    <div class="floating inline-block w-24 h-24 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-rocket text-4xl text-white"></i>
                    </div>
                </div>
                
                <h2 class="text-4xl md:text-6xl font-bold mb-6">
                    Bem-vindo ao
                    <span class="bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent">
                        Sistema
                    </span>
                </h2>
                
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Gerencie usuários de forma simples, rápida e eficiente com nossa plataforma moderna.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('users.index') }}" 
                       class="px-8 py-4 bg-white text-purple-600 font-bold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200">
                        <i class="fas fa-users mr-2"></i>
                        Gerenciar Usuários
                    </a>
                    <a href="{{ route('users.create') }}" 
                       class="px-8 py-4 bg-white/20 backdrop-blur-sm text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transform hover:scale-105 transition-all duration-200">
                        <i class="fas fa-plus mr-2"></i>
                        Criar Usuário
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Background Elements -->
        <div class="absolute top-20 left-10 floating">
            <div class="w-20 h-20 bg-white/10 rounded-full"></div>
        </div>
        <div class="absolute top-40 right-20 floating">
            <div class="w-16 h-16 bg-white/10 rounded-full"></div>
        </div>
        <div class="absolute bottom-20 left-1/4 floating">
            <div class="w-12 h-12 bg-white/10 rounded-full"></div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Recursos Principais
                </h3>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Tudo que você precisa para gerenciar usuários de forma eficiente
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="card-hover bg-white rounded-xl p-6 border border-gray-200 shadow-lg text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-list text-blue-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Listar Usuários</h4>
                    <p class="text-gray-600">Visualize todos os usuários cadastrados em uma interface limpa e organizada</p>
                </div>

                <div class="card-hover bg-white rounded-xl p-6 border border-gray-200 shadow-lg text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-plus-circle text-green-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Criar Usuários</h4>
                    <p class="text-gray-600">Adicione novos usuários com validação de email e campos obrigatórios</p>
                </div>

                <div class="card-hover bg-white rounded-xl p-6 border border-gray-200 shadow-lg text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-edit text-yellow-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Editar Dados</h4>
                    <p class="text-gray-600">Atualize informações dos usuários de forma rápida e segura</p>
                </div>

                <div class="card-hover bg-white rounded-xl p-6 border border-gray-200 shadow-lg text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-red-600 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Segurança</h4>
                    <p class="text-gray-600">Sistema protegido com validação de dados e criptografia de senhas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="text-4xl font-bold text-purple-600 mb-2" id="totalUsers">
                        {{ App\Models\User::count() }}
                    </div>
                    <div class="text-lg text-gray-600">Usuários Cadastrados</div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="text-4xl font-bold text-green-600 mb-2">
                        100%
                    </div>
                    <div class="text-lg text-gray-600">Segurança</div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="text-4xl font-bold text-blue-600 mb-2">
                        24/7
                    </div>
                    <div class="text-lg text-gray-600">Disponibilidade</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Actions -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Ações Rápidas</h3>
                <p class="text-xl text-gray-600">Acesse as principais funcionalidades</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <a href="{{ route('users.index') }}" 
                   class="card-hover bg-gradient-to-r from-purple-500 to-blue-500 rounded-xl p-8 text-white text-center shadow-lg">
                    <i class="fas fa-users text-4xl mb-4"></i>
                    <h4 class="text-2xl font-bold mb-2">Ver Todos os Usuários</h4>
                    <p class="text-purple-100">Lista completa com opções de visualização, edição e exclusão</p>
                    <div class="mt-4 inline-flex items-center text-white">
                        <span class="mr-2">Acessar</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </a>

                <a href="{{ route('users.create') }}" 
                   class="card-hover bg-gradient-to-r from-green-500 to-teal-500 rounded-xl p-8 text-white text-center shadow-lg">
                    <i class="fas fa-plus-circle text-4xl mb-4"></i>
                    <h4 class="text-2xl font-bold mb-2">Criar Novo Usuário</h4>
                    <p class="text-green-100">Formulário completo com validação e campos obrigatórios</p>
                    <div class="mt-4 inline-flex items-center text-white">
                        <span class="mr-2">Criar</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="gradient-bg text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-users text-purple-600"></i>
                    </div>
                    <span class="text-xl font-semibold">Sistema de Usuários</span>
                </div>
                
                <div class="text-center md:text-right">
                    <p class="text-white/80">© {{ date('Y') }} Sistema de Usuários</p>
                    <p class="text-white/60 text-sm">Desenvolvido com Laravel {{ app()->version() }}</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Animação de contador
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 20);
        }

        // Iniciar animações quando a página carrega
        document.addEventListener('DOMContentLoaded', function() {
            const totalUsersElement = document.getElementById('totalUsers');
            const totalUsers = parseInt(totalUsersElement.textContent);
            totalUsersElement.textContent = '0';
            animateCounter(totalUsersElement, totalUsers);
        });
    </script>
</body>
</html>
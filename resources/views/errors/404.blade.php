<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Não Encontrada - 404</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translate(0, 0px); }
            50% { transform: translate(0, -15px); }
            100% { transform: translate(0, 0px); }
        }
        .gradient-text {
            background: linear-gradient(45deg, #3B82F6, #8B5CF6, #EC4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 min-h-screen flex items-center justify-center">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <!-- Número 404 Animado -->
        <div class="mb-8">
            <div class="floating inline-block">
                <h1 class="text-9xl md:text-[12rem] font-bold gradient-text leading-none">
                    404
                </h1>
            </div>
        </div>

        <!-- Ícone e Mensagem Principal -->
        <div class="mb-8">
            <div class="flex justify-center mb-6">
                <div class="relative">
                    <div class="w-32 h-32 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center shadow-2xl">
                        <i class="fas fa-search text-white text-5xl"></i>
                    </div>
                    <!-- Efeito de onda -->
                    <div class="absolute inset-0 w-32 h-32 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full animate-ping opacity-20"></div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Oops! Página Não Encontrada
            </h2>
            <p class="text-lg text-gray-600 mb-2">
                A página que você está procurando não existe ou foi movida.
            </p>
            <p class="text-base text-gray-500">
                Verifique o URL digitado ou use os links abaixo para navegar.
            </p>
        </div>

        <!-- Cartões de Sugestões -->
        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white/70 backdrop-blur-sm border border-white/20 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-home text-blue-600 text-2xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Página Inicial</h3>
                <p class="text-sm text-gray-600 mb-4">Volte para a página principal do sistema</p>
                <a href="{{ url('/') }}" 
                   class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm transition-colors duration-200">
                    Ir para Início <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="bg-white/70 backdrop-blur-sm border border-white/20 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-purple-600 text-2xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Gerenciar Usuários</h3>
                <p class="text-sm text-gray-600 mb-4">Acesse o sistema de gerenciamento</p>
                <a href="{{ route('users.index') }}" 
                   class="inline-flex items-center text-purple-600 hover:text-purple-700 font-medium text-sm transition-colors duration-200">
                    Ver Usuários <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="bg-white/70 backdrop-blur-sm border border-white/20 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-history text-pink-600 text-2xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Voltar</h3>
                <p class="text-sm text-gray-600 mb-4">Retorne para a página anterior</p>
                <button onclick="history.back()" 
                        class="inline-flex items-center text-pink-600 hover:text-pink-700 font-medium text-sm transition-colors duration-200">
                    Página Anterior <i class="fas fa-arrow-left ml-1"></i>
                </button>
            </div>
        </div>

        <!-- Botões de Ação -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ url('/') }}" 
               class="px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200 min-w-[200px]">
                <i class="fas fa-home mr-2"></i>
                Voltar ao Início
            </a>
            <a href="{{ route('users.index') }}" 
               class="px-8 py-3 bg-white text-gray-700 font-semibold rounded-full border border-gray-200 shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200 min-w-[200px]">
                <i class="fas fa-users mr-2"></i>
                Sistema de Usuários
            </a>
        </div>

        <!-- Informações Técnicas (opcional, pode ser removido em produção) -->
        <div class="mt-12 text-center">
            <details class="inline-block text-left">
                <summary class="cursor-pointer text-sm text-gray-500 hover:text-gray-700 transition-colors duration-200">
                    <i class="fas fa-info-circle mr-1"></i>
                    Informações Técnicas
                </summary>
                <div class="mt-3 p-4 bg-white/50 backdrop-blur-sm rounded-lg border border-white/20 text-sm text-gray-600">
                    <p><strong>URL Solicitada:</strong> {{ request()->fullUrl() }}</p>
                    <p><strong>Método:</strong> {{ request()->method() }}</p>
                    <p><strong>Horário:</strong> {{ now()->format('d/m/Y H:i:s') }}</p>
                </div>
            </details>
        </div>

        <!-- Footer -->
        <footer class="mt-16 text-center text-gray-500 text-sm">
            <p>© {{ date('Y') }} Sistema de Usuários. Desenvolvido com Laravel.</p>
        </footer>
    </div>

    <!-- Script para efeitos adicionais -->
    <script>
        // Efeito de partículas flutuantes (opcional)
        document.addEventListener('DOMContentLoaded', function() {
            const body = document.body;
            
            // Criar partículas flutuantes
            for (let i = 0; i < 5; i++) {
                setTimeout(() => {
                    createFloatingElement();
                }, i * 1000);
            }
        });

        function createFloatingElement() {
            const element = document.createElement('div');
            element.innerHTML = '<i class="fas fa-circle"></i>';
            element.style.position = 'fixed';
            element.style.left = Math.random() * 100 + '%';
            element.style.top = '100%';
            element.style.fontSize = Math.random() * 20 + 10 + 'px';
            element.style.color = `hsl(${Math.random() * 60 + 200}, 70%, 70%)`;
            element.style.opacity = '0.3';
            element.style.pointerEvents = 'none';
            element.style.zIndex = '-1';
            element.style.transition = 'all 8s linear';
            
            document.body.appendChild(element);
            
            setTimeout(() => {
                element.style.top = '-10%';
                element.style.transform = `rotate(360deg)`;
            }, 100);
            
            setTimeout(() => {
                element.remove();
            }, 8000);
        }

        // Recriar partículas continuamente
        setInterval(createFloatingElement, 2000);
    </script>
</body>
</html>
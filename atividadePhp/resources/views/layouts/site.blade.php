<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Jurassic Registry')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #1a2332;
            --secondary: #2a3d52;
            --accent: #2d9cca;
            --accent-alt: #c77b00;
            --light: #f5f7fa;
            --border: #3a5068;
            --success: #27ae60;
            --danger: #e74c3c;
            --text: #2c3e50;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #f8fafb 0%, #ecf0f5 100%);
            background-attachment: fixed;
            color: var(--text);
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

<div class="wrapper">
    @include('partials._cabecalho')
    
    <main>
        <div class="container">
            @if(session('success'))
                <div style="background: linear-gradient(135deg, rgba(39, 174, 96, 0.1) 0%, rgba(39, 174, 96, 0.05) 100%); border-left: 4px solid var(--success); color: var(--success); padding: 14px 18px; margin-bottom: 25px; border-radius: 4px; font-size: 0.93rem; letter-spacing: 0.3px;">
                    ✓ {{ session('success') }}
                </div>
            @endif
            
            @yield('content')
        </div>
    </main>
    
    @include('partials._rodape')
</div>

</body>
</html>

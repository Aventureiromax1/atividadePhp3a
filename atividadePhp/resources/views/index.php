<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JURASSIC REGISTRY</title>
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
            color: var(--text);
            overflow-x: hidden;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            padding: 80px 20px 50px;
            background: linear-gradient(135deg, #fff9e6 0%, #f0e6d2 100%);
            border-bottom: 4px solid #8b7355;
            margin-bottom: 60px;
            position: relative;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        }

        header::before {
            content: '🦕 🦖 🦕';
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            opacity: 0.7;
            letter-spacing: 20px;
        }

        h1 {
            font-family: Georgia, 'Times New Roman', serif;
            font-size: 3.2rem;
            letter-spacing: 2px;
            color: #8b7355;
            text-transform: uppercase;
            margin-bottom: 8px;
            font-weight: 700;
            margin-top: 30px;
        }

        .subtitle {
            font-size: 0.95rem;
            color: #7a6a5a;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .alert-success {
            background: linear-gradient(135deg, rgba(39, 174, 96, 0.1) 0%, rgba(39, 174, 96, 0.05) 100%);
            border-left: 4px solid var(--success);
            color: var(--success);
            padding: 14px 18px;
            margin-bottom: 25px;
            border-radius: 4px;
            font-size: 0.93rem;
            letter-spacing: 0.3px;
        }

        .form-section {
            background: white;
            padding: 50px 40px;
            margin-bottom: 60px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .form-section::before {
            content: '📋';
            display: block;
            font-size: 2rem;
            margin-bottom: 20px;
            opacity: 0.6;
        }

        .form-header {
            margin-bottom: 35px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 18px;
        }

        .form-header h2 {
            font-family: Georgia, 'Times New Roman', serif;
            font-size: 1.6rem;
            color: #3a5068;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 6px;
            font-weight: 600;
        }

        .form-desc {
            color: #7a7a7a;
            font-size: 0.9rem;
            line-height: 1.5;
            font-weight: 400;
        }

        .form-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 25px;
            margin-top: 30px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            font-size: 0.78rem;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: #3a5068;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-input,
        .form-select {
            padding: 11px 14px;
            border: 1px solid #ccc;
            background: white;
            color: var(--text);
            font-family: inherit;
            font-size: 0.9rem;
            border-radius: 4px;
            transition: all 0.25s ease;
        }

        .form-input:focus,
        .form-select:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(45, 156, 202, 0.08);
            background: #fafbfc;
        }

        .form-input::placeholder {
            color: #aaa;
        }

        .form-select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%233a5068' stroke-width='2'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 18px;
            padding-right: 38px;
        }

        .form-select option {
            background: white;
            color: var(--text);
        }

        .btn-submit {
            grid-column: 1 / -1;
            padding: 13px 28px;
            background: linear-gradient(135deg, #2b8ba3 0%, #1f5f7a 100%);
            color: white;
            border: none;
            font-size: 0.88rem;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            cursor: pointer;
            border-radius: 4px;
            transition: all 0.25s ease;
            font-weight: 600;
            margin-top: 12px;
            box-shadow: 0 2px 6px rgba(43, 139, 163, 0.15);
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #1f5f7a 0%, #164155 100%);
            box-shadow: 0 4px 12px rgba(43, 139, 163, 0.25);
            transform: translateY(-1px);
        }

        .records-section {
            margin-top: 70px;
        }

        .records-header {
            text-align: center;
            margin-bottom: 45px;
            padding-bottom: 25px;
            border-bottom: 2px solid #ddd;
            position: relative;
        }

        .records-header::before {
            content: '🔍';
            display: block;
            font-size: 2.5rem;
            margin-bottom: 15px;
            opacity: 0.7;
        }

        .records-header h2 {
            font-family: Georgia, 'Times New Roman', serif;
            font-size: 1.6rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #3a5068;
            margin-bottom: 6px;
            font-weight: 600;
        }

        .records-desc {
            color: #7a7a7a;
            font-size: 0.9rem;
            letter-spacing: 0.3px;
            font-weight: 400;
        }

        .records-count {
            text-align: center;
            color: #3a5068;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            margin-bottom: 30px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .empty-state {
            text-align: center;
            padding: 90px 20px;
            color: #999;
        }

        .empty-icon {
            font-size: 5rem;
            margin-bottom: 25px;
            opacity: 0.6;
        }

        .empty-state p {
            margin: 10px 0;
            letter-spacing: 0.3px;
            font-size: 0.95rem;
            color: #7a7a7a;
        }

        .records-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
        }

        .record-card {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .record-card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(-4px);
            border-color: var(--accent);
        }

        .card-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.65rem;
            font-weight: 600;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            z-index: 10;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.12);
        }

        .badge-paleontologa { background: #e3f2fd; color: #1565c0; }
        .badge-geneticista { background: #fce4ec; color: #c2185b; }
        .badge-cientista { background: #e0f2f1; color: #00695c; }
        .badge-seguranca { background: #ffebee; color: #c62828; }
        .badge-visitante { background: #fff3e0; color: #e65100; }
        .badge-administrador { background: #f3e5f5; color: #6a1b9a; }
        .badge-tecnico { background: #e0f2f1; color: #00796b; }
        .badge-gerente { background: #fbe9e7; color: #bf360c; }
        .badge-sem-classificacao { background: #eeeeee; color: #424242; }

        .card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .person-name {
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 15px;
            font-weight: 600;
            letter-spacing: 0.2px;
            line-height: 1.3;
        }

        .person-phone,
        .person-date {
            font-size: 0.88rem;
            color: #666;
            margin-bottom: 10px;
            letter-spacing: 0.1px;
            font-weight: 400;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .person-phone strong,
        .person-date strong {
            color: var(--accent);
            font-weight: 600;
            font-size: 1rem;
        }

        .record-card:hover .person-name {
            color: var(--accent);
        }

        .card-footer {
            padding: 14px 25px;
            border-top: 1px solid #e8e8e8;
            background: #fafbfc;
            display: flex;
            justify-content: flex-end;
        }

        .btn-delete {
            display: inline-block;
            padding: 8px 16px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            font-size: 0.75rem;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            border-radius: 4px;
            transition: all 0.25s ease;
            border: none;
            cursor: pointer;
            font-weight: 600;
            box-shadow: 0 2px 6px rgba(231, 76, 60, 0.15);
        }

        .btn-delete:hover {
            background: #c0392b;
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.25);
            transform: translateY(-1px);
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

        @media (max-width: 1024px) {
            h1 {
                font-size: 2.4rem;
            }

            .form-container {
                grid-template-columns: 1fr 1fr;
            }

            .btn-submit {
                grid-column: 1 / -1;
            }

            .records-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 60px 20px 40px;
                margin-bottom: 50px;
            }

            header::before {
                font-size: 1.2rem;
                letter-spacing: 12px;
                top: 10px;
            }

            h1 {
                font-size: 2rem;
                margin-top: 25px;
            }

            .form-section {
                padding: 35px 25px;
                margin-bottom: 50px;
            }

            .form-container {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .form-header h2,
            .records-header h2 {
                font-size: 1.3rem;
            }

            .records-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .card-body {
                padding: 20px;
            }

            .card-footer {
                padding: 12px 20px;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 40px 15px 30px;
                margin-bottom: 35px;
            }

            header::before {
                font-size: 1rem;
                letter-spacing: 8px;
            }

            h1 {
                font-size: 1.6rem;
                margin-top: 20px;
            }

            .subtitle {
                font-size: 0.8rem;
            }

            .form-section {
                padding: 25px 18px;
                margin-bottom: 35px;
            }

            .form-header h2 {
                font-size: 1.1rem;
            }

            .person-name {
                font-size: 1.05rem;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>JURASSIC REGISTRY</h1>
    <p class="subtitle">Sistema de Catalogação de Equipe</p>
</header>

<div class="container">
    <?php require __DIR__ . '/form.php'; ?>
    <?php require __DIR__ . '/contatos.php'; ?>
</div>

</body>
</html>

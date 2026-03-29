<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jurassic Registry - Equipe</title>
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
            from { opacity: 0; transform: translateY(-15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* HEADER */
        header {
            text-align: center;
            padding: 80px 20px 50px;
            background: linear-gradient(135deg, #fff9e6 0%, #f0e6d2 100%);
            border-bottom: 4px solid #8b7355;
            margin-bottom: 60px;
            position: relative;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
            animation: slideDown 1s ease-out;
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
            font-family: 'Playfair Display', serif;
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

        nav {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        nav a {
            color: #8b7355;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
            padding-bottom: 5px;
        }

        nav a:hover {
            border-bottom: 2px solid #8b7355;
        }

        /* SUCCESS MESSAGE */
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

        /* FORM */
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

        .form-input {
            padding: 11px 14px;
            border: 1px solid #ccc;
            background: white;
            color: var(--text);
            font-family: inherit;
            font-size: 0.9rem;
            border-radius: 4px;
            transition: all 0.25s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(45, 156, 202, 0.08);
            background: #fafbfc;
        }

        .form-input::placeholder {
            color: #aaa;
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

        /* RECORDS */
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

        .card-body {
            padding: 25px;
            flex-grow: 1;
        }

        .person-name {
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 15px;
            font-weight: 600;
            letter-spacing: 0.2px;
        }

        .person-phone {
            font-size: 0.88rem;
            color: #666;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .person-phone strong {
            color: var(--accent);
            font-weight: 600;
            font-size: 1rem;
        }

        .person-date {
            font-size: 0.8rem;
            color: #999;
        }

        .record-card:hover .person-name {
            color: var(--accent);
        }

        .card-footer {
            padding: 14px 25px;
            background: #fafbfc;
            border-top: 1px solid #e8e8e8;
            display: flex;
            justify-content: flex-end;
        }

        .btn-delete {
            padding: 8px 16px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            text-align: center;
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

        .alert-danger {
            background: linear-gradient(135deg, rgba(231, 76, 60, 0.1) 0%, rgba(231, 76, 60, 0.05) 100%);
            border-left: 4px solid var(--danger);
            color: var(--danger);
            padding: 14px 18px;
            margin-bottom: 25px;
            border-radius: 4px;
            font-size: 0.93rem;
            letter-spacing: 0.3px;
        }

        .alert-danger ul {
            margin: 0;
            padding-left: 20px;
        }

        /* FOOTER */
        footer {
            background: linear-gradient(135deg, #fff9e6 0%, #f0e6d2 100%);
            border-top: 4px solid #8b7355;
            padding: 60px 20px 30px;
            margin-top: 80px;
            text-align: center;
            box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.06);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-col {
            text-align: left;
        }

        .footer-col h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: #8b7355;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .footer-col p, .footer-col li {
            color: #7a6a5a;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col li {
            margin-bottom: 8px;
        }

        .footer-divider {
            border: none;
            border-top: 2px solid #8b7355;
            opacity: 0.3;
            margin: 40px 0;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-bottom p {
            color: #8b7355;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            color: #8b7355;
            text-decoration: none;
            font-size: 0.85rem;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .footer-emoji {
            font-size: 1.5rem;
            opacity: 0.5;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            .form-container {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .records-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-links {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<div class="wrapper">
    <!-- HEADER (Includes _cabecalho.blade.php structure) -->
    <header>
        <h1>JURASSIC REGISTRY</h1>
        <p class="subtitle">Sistema de Catalogação de Equipe</p>
        <nav>
            <a href="/">📋 Equipe</a>
            <a href="/#register">➕ Registrar</a>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        <div class="container">
            <?php if ($success): ?>
                <div class="alert-success">
                    ✓ Membro registrado com sucesso na equipe!
                </div>
            <?php endif; ?>

            <!-- REGISTER FORM -->
            <div class="form-section" id="register">
                <div class="form-header">
                    <h2>REGISTRAR NOVO MEMBRO</h2>
                    <p class="form-desc">Complete o formulário para registrar um novo membro da equipe</p>
                </div>

                <form method="POST" action="/users" class="form-container">
                    <div class="form-group">
                        <label class="form-label">NOME COMPLETO</label>
                        <input 
                            type="text" 
                            name="name" 
                            class="form-input" 
                            placeholder="Ex: Dr. Alan Grant"
                            value="<?php echo htmlspecialchars($old['name'] ?? ''); ?>"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label class="form-label">TELEFONE</label>
                        <input 
                            type="text" 
                            id="phone"
                            name="phone" 
                            class="form-input" 
                            placeholder="Ex: (11) 98765-4321"
                            value="<?php echo htmlspecialchars($old['phone'] ?? ''); ?>"
                            required
                        >
                    </div>

                    <button type="submit" class="btn-submit">REGISTRAR MEMBRO</button>
                </form>

                <?php if (!empty($errors)): ?>
                    <div class="alert-danger" style="margin-top: 20px;">
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo htmlspecialchars($error); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <!-- RECORDS SECTION -->
            <div class="records-section">
                <div class="records-header">
                    <h2>EQUIPE REGISTRADA</h2>
                    <p class="records-desc">Membros catalogados no sistema</p>
                </div>

                <?php if (!empty($users)): ?>
                    <div class="records-count">
                        🦖 <?php echo count($users); ?> membro(s) registrado(s)
                    </div>

                    <div class="records-grid">
                        <?php foreach ($users as $user): ?>
                            <div class="record-card">
                                <div class="card-body">
                                    <div class="person-name"><?php echo htmlspecialchars($user['name']); ?></div>
                                    <div class="person-phone">
                                        <strong>📞</strong> <?php echo htmlspecialchars($user['phone']); ?>
                                    </div>
                                    <div class="person-date">
                                        <strong>📅 Registrado:</strong> <?php echo date('d/m/Y H:i', strtotime($user['created_at'])); ?>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <form method="POST" action="/users/<?php echo $user['id']; ?>" style="display: inline;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn-delete" onclick="return confirm('Deseja remover este membro do sistema?')">
                                            🗑️ REMOVER
                                        </button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <div class="empty-state">
                        <div class="empty-icon">🦕</div>
                        <p>Nenhum membro registrado no sistema.</p>
                        <p style="font-size: 0.8rem; color: #999; margin-top: 8px;">Use o formulário acima para adicionar membros da equipe</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <!-- FOOTER (Includes _rodape.blade.php structure) -->
    <footer>
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>🦖 Sobre</h3>
                    <p>Sistema avançado de catalogação e gerenciamento de equipes. Desenvolvido com tecnologia moderna para controlar e organizar seus registros com eficiência.</p>
                </div>

                <div class="footer-col">
                    <h3>⚙️ Recursos</h3>
                    <ul>
                        <li>✓ Cadastro rápido de membros</li>
                        <li>✓ Database seguro</li>
                        <li>✓ Interface intuitiva</li>
                        <li>✓ Relatórios em tempo real</li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>📞 Contato</h3>
                    <p>Email: <strong>contato@jurassicregistry.com</strong><br>
                    Telefone: <strong>(11) 4000-8822</strong><br>
                    Horário: 08h às 18h</p>
                </div>
            </div>

            <hr class="footer-divider">

            <div class="footer-bottom">
                <p>© 2026 Jurassic Registry. Todos os direitos reservados.</p>
                <div class="footer-links">
                    <a href="#">Privacidade</a>
                    <a href="#">Termos</a>
                    <a href="#">Suporte</a>
                </div>
                <div class="footer-emoji">🦕 🦖</div>
            </div>
        </div>
    </footer>
</div>

<script>
    // Auto-formatar número de telefone enquanto digita
    const phoneInput = document.getElementById('phone');
    
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 0) {
                // Formatar para (XX) 9XXXX-XXXX ou (XX) XXXX-XXXX
                if (value.length <= 2) {
                    value = '(' + value;
                } else if (value.length <= 6) {
                    value = '(' + value.substring(0, 2) + ') ' + value.substring(2);
                } else {
                    value = '(' + value.substring(0, 2) + ') ' + value.substring(2, 7) + '-' + value.substring(7, 11);
                }
            }
            
            e.target.value = value;
        });
        
        // Ao sair do campo, limpar se incompleto
        phoneInput.addEventListener('blur', function(e) {
            const value = e.target.value.replace(/\D/g, '');
            if (value.length < 10) {
                e.target.value = '';
            }
        });
    }
</script>

</body>
</html>

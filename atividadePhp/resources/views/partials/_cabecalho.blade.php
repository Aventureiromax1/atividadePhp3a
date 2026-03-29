<header style="
    text-align: center;
    padding: 80px 20px 50px;
    background: linear-gradient(135deg, #fff9e6 0%, #f0e6d2 100%);
    border-bottom: 4px solid #8b7355;
    margin-bottom: 60px;
    position: relative;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    animation: slideDown 1s ease-out;
">
    <div style="
        position: absolute;
        top: 15px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 1.5rem;
        opacity: 0.7;
        letter-spacing: 20px;
    ">
        🦕 🦖 🦕
    </div>

    <h1 style="
        font-family: 'Playfair Display', serif;
        font-size: 3.2rem;
        letter-spacing: 2px;
        color: #8b7355;
        text-transform: uppercase;
        margin-bottom: 8px;
        font-weight: 700;
        margin-top: 30px;
    ">
        JURASSIC REGISTRY
    </h1>

    <p style="
        font-size: 0.95rem;
        color: #7a6a5a;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 500;
    ">
        Sistema de Catalogação de Equipe
    </p>

    <nav style="
        margin-top: 30px;
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    ">
        <a href="{{ route('users.index') }}" style="
            color: #8b7355;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
            padding-bottom: 5px;
        " onmouseover="this.style.borderBottom='2px solid #8b7355'" onmouseout="this.style.borderBottom='2px solid transparent'">
            📋 Equipe
        </a>
        <a href="{{ route('users.index') }}#register" style="
            color: #8b7355;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
            padding-bottom: 5px;
        " onmouseover="this.style.borderBottom='2px solid #8b7355'" onmouseout="this.style.borderBottom='2px solid transparent'">
            ➕ Registrar
        </a>
    </nav>
</header>

<style>
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
</style>

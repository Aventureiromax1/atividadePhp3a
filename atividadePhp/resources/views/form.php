<h1>JURASSIC REGISTRY</h1>
<p class="subtitle">Sistema de Catalogação de Equipe</p>

<?php if (isset($_GET['msg'])): ?>
    <div class="alert-success">
        ✓ <?php echo $_GET['msg']; ?>
    </div>
<?php endif; ?>

<div class="form-section">
    <div class="form-header">
        <h2>REGISTRAR PESSOA</h2>
        <p class="form-desc">Complete o formulário para registrar um novo membro da equipe</p>
    </div>

    <form method="POST" action="/store" class="form-container">
        <div class="form-group">
            <label for="name" class="form-label">NOME COMPLETO</label>
            <input 
                type="text" 
                id="name"
                name="name" 
                class="form-input" 
                placeholder="Ex: Dr. Alan Grant"
                required
            >
            <span class="form-hint">Nome da pessoa a registrar</span>
        </div>

        <div class="form-group">
            <label for="phone" class="form-label">TELEFONE</label>
            <input 
                type="text" 
                id="phone"
                name="phone" 
                class="form-input" 
                placeholder="Ex: (11) 98765-4321"
                required
            >
            <span class="form-hint">Número para contato</span>
        </div>

        <div class="form-group">
            <label for="classification" class="form-label">CLASSIFICAÇÃO</label>
            <select 
                id="classification"
                name="classification" 
                class="form-input form-select"
                required
            >
                <option value="">Selecione uma classificação...</option>
                <option value="Paleontólogo">Paleontólogo</option>
                <option value="Geneticista">Geneticista</option>
                <option value="Cientista">Cientista</option>
                <option value="Segurança">Segurança</option>
                <option value="Visitante">Visitante</option>
                <option value="Administrador">Administrador</option>
                <option value="Técnico">Técnico</option>
                <option value="Gerente">Gerente</option>
            </select>
            <span class="form-hint">Cargo ou classificação profissional</span>
        </div>

        <button type="submit" class="btn-submit">REGISTRAR PESSOA</button>
    </form>
</div>


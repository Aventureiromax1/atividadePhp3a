<div class="records-section">
    <div class="records-header">
        <h2>EQUIPE REGISTRADA</h2>
        <p class="records-desc">Pessoas catalogadas no sistema</p>
    </div>

    <?php if (empty($users)): ?>
        <div class="empty-state">
            <div class="empty-icon">🦖</div>
            <p>Nenhuma pessoa registrada no sistema.</p>
            <p style="font-size: 0.8rem; color: #999; margin-top: 8px;">Use o formulário acima para adicionar membros da equipe</p>
        </div>
    <?php else: ?>
        <div class="records-count">
            <?php echo count($users); ?> pessoa(s) registrada(s)
        </div>
        
        <div class="records-grid">
            <?php foreach ($users as $index => $user): 
                $classification = $user['classification'] ?? 'Sem classificação';
                $classSlug = strtolower(str_replace(array('á','í','ã','ç',' '), array('a','i','a','c','-'), $classification));
            ?>
                <div class="record-card">
                    <div class="card-badge badge-<?php echo $classSlug; ?>">
                        <?php echo htmlspecialchars($classification); ?>
                    </div>

                    <div class="card-body">
                        <div class="person-name"><?php echo htmlspecialchars($user['name']); ?></div>
                        <div class="person-phone">
                            <strong>📞</strong> <?php echo htmlspecialchars($user['phone']); ?>
                        </div>
                        <div class="person-date">
                            <strong>📅</strong> <?php echo date('d/m/Y', strtotime($user['created_at'])); ?>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="/delete/<?php echo $user['id']; ?>" 
                           class="btn-delete" 
                           onclick="return confirm('Deseja remover esta pessoa do sistema?')">
                            REMOVER
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

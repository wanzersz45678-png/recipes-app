<?php
require __DIR__ . '/db.php';
$recipes = $pdo->query('SELECT * FROM recipes ORDER BY id')->fetchAll();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Книга рецептов</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 30px auto; padding: 0 15px; background: #faf7f2; }
        h1 { color: #b5522b; }
        .card { background: #fff; border-radius: 8px; padding: 15px 20px; margin-bottom: 15px; box-shadow: 0 1px 4px rgba(0,0,0,.1); }
        .card h2 { margin: 0 0 8px; }
        .meta { color: #777; font-size: 14px; }
    </style>
</head>
<body>
    <h1>🍲 Книга рецептов</h1>
    <p>Всего рецептов: <?= count($recipes) ?></p>

    <?php foreach ($recipes as $r): ?>
        <div class="card">
            <h2><?= htmlspecialchars($r['title']) ?></h2>
            <p><?= htmlspecialchars($r['description']) ?></p>
            <p><strong>Ингредиенты:</strong> <?= htmlspecialchars($r['ingredients']) ?></p>
            <p class="meta">⏱ <?= (int)$r['cook_time_min'] ?> мин</p>
        </div>
    <?php endforeach; ?>
</body>
</html>
SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    ingredients TEXT NOT NULL,
    cook_time_min INT NOT NULL DEFAULT 30,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO recipes (title, description, ingredients, cook_time_min) VALUES
('Борщ', 'Классический красный борщ со сметаной', 'свекла, капуста, картофель, морковь, мясо, томатная паста', 90),
('Омлет', 'Быстрый завтрак на сковороде', 'яйца, молоко, соль, сливочное масло', 10),
('Паста карбонара', 'Итальянская паста с беконом и сыром', 'спагетти, бекон, яйца, пармезан, чёрный перец', 25);
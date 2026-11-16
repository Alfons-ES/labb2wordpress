-- Skapa databasen (kör detta i phpMyAdmin eller MySQL-klient)
CREATE DATABASE IF NOT EXISTS bucketlist_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE bucketlist_db;

-- Tabell för bucketlist-items
CREATE TABLE IF NOT EXISTS bucket_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    priority INT NOT NULL DEFAULT 3,  -- 1 = högst prioritet, 5 = lägst
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exempeldata (valfritt)
INSERT INTO bucket_items (name, description, priority) VALUES
('Besöka Japan', 'Uppleva Tokyo, Kyoto och se körsbärsblommorna.', 1),
('Lära mig spela gitarr', 'Kunna spela några favoritlåtar flytande.', 2),
('Springa ett halvmaraton', 'Träna upp uthålligheten och klara 21 km.', 3);
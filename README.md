README ÄR GJORD AV GROK.
https://labb2wordpress.infinityfreeapp.com/index.php

# Min Bucketlist – PHP-uppgift

En enkel webbplats byggd med **HTML, CSS, objektorienterad PHP** och **MySQL**.

## Funktioner

- Startsida med information om uppgiften och reflektioner kring PHP
- Bucketlist-sida där man kan:
  - Se alla sparade saker
  - Lägga till nya saker via formulär (med validering)
  - Radera saker
- Sida om AI-verktyg och hur de använts under arbetet
- Responsiv design
- Objektorienterad struktur med klasser för databas och bucket-items

## Teknisk stack

- PHP 8+ (PDO)
- MySQL / MariaDB
- Ren HTML & CSS (ingen framework)

## Filstruktur

```
bucketlist-php/
├── classes/
│   ├── Database.php      # Klass för databasanslutning
│   └── BucketItem.php    # Klass för CRUD-operationer
├── css/
│   └── style.css
├── includes/
│   ├── header.php
│   └── footer.php
├── sql/
│   └── create_database.sql
├── index.php             # Startsida
├── bucketlist.php        # Bucketlist + formulär
├── ai.php                # AI-reflektion
├── .gitignore
└── README.md
```

## Installation (lokalt)

1. Klona repot eller kopiera mappen till din webbserver (t.ex. `htdocs` i XAMPP).
2. Skapa databasen genom att köra SQL-filen:
   - Öppna phpMyAdmin
   - Kör innehållet i `sql/create_database.sql`
3. Uppdatera databasuppgifter i `classes/Database.php` om det behövs (användarnamn/lösenord).
4. Starta Apache + MySQL och gå till `http://localhost/bucketlist-php/`

## ER-diagram (förenklat)

```
bucket_items
------------
id            INT (PK, AI)
name          VARCHAR(255) NOT NULL
description   TEXT NOT NULL
priority      INT NOT NULL (1-5)
created_at    TIMESTAMP
```

## UML – Klasser (förenklat)

```
┌─────────────────┐       ┌──────────────────┐
│    Database     │       │   BucketItem     │
├─────────────────┤       ├──────────────────┤
│ - instance      │       │ - db : PDO       │
│ - pdo           │       ├──────────────────┤
│ - host          │       │ + getAll()       │
│ - dbname        │       │ + getById()      │
│ - username      │       │ + create()       │
│ - password      │       │ + delete()       │
├─────────────────┤       │ + update()       │
│ + getInstance() │◄──────│                  │
│ + getConnection()│      └──────────────────┘
└─────────────────┘
```

## Publicerad lösning

Länk till live-version: *[lägg till din länk här när du publicerat]*

## Författare

[Ditt namn]
Skoluppgift – [Kursnamn]

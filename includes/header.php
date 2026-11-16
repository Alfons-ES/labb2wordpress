<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Min Bucketlist'; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">🌟 Min Bucketlist</h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="<?php echo ($activePage ?? '') === 'home' ? 'active' : ''; ?>">Startsida</a></li>
                    <li><a href="bucketlist.php" class="<?php echo ($activePage ?? '') === 'bucketlist' ? 'active' : ''; ?>">Bucketlist</a></li>
                    <li><a href="ai.php" class="<?php echo ($activePage ?? '') === 'ai' ? 'active' : ''; ?>">AI & Reflektion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">
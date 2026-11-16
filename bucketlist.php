<?php
require_once 'classes/Database.php';
require_once 'classes/BucketItem.php';

$pageTitle = "Bucketlist – Min Bucketlist";
$activePage = "bucketlist";

$bucket = new BucketItem();
$message = '';
$error = '';

// Hantera borttagning
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    if ($bucket->delete($id)) {
        $message = "Saken har tagits bort från listan.";
    } else {
        $error = "Kunde inte ta bort saken.";
    }
}

// Hantera tillägg via formulär
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $priority = (int) ($_POST['priority'] ?? 3);

    // Enkel validering – inga tomma värden
    if ($name === '' || $description === '') {
        $error = "Namn och beskrivning får inte vara tomma.";
    } elseif ($priority < 1 || $priority > 5) {
        $error = "Prioritet måste vara mellan 1 och 5.";
    } else {
        if ($bucket->create($name, $description, $priority)) {
            $message = "Ny sak har lagts till i din bucketlist!";
            // Rensa formuläret efter lyckad sparning (genom att inte fylla i värden)
            $name = $description = '';
            $priority = 3;
        } else {
            $error = "Något gick fel när saken skulle sparas.";
        }
    }
}

$items = $bucket->getAll();

require_once 'includes/header.php';
?>

<section class="card">
    <h1>Bucketlist</h1>
</section>

<?php if ($message): ?>
    <div class="alert alert-success"><?php echo htmlspecialchars($message); ?></div>
<?php endif; ?>

<?php if ($error): ?>
    <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
<?php endif; ?>

<section class="card">
    <h2>Lägg till ny sak</h2>
    <form method="POST" action="bucketlist.php">
        <div class="form-group">
            <label for="name">Namn på saken *</label>
            <input type="text" id="name" name="name" 
                   value="<?php echo htmlspecialchars($name ?? ''); ?>" 
                   required maxlength="255"
                   placeholder="T.ex. Besöka Japan">
        </div>

        <div class="form-group">
            <label for="description">Beskrivning *</label>
            <textarea id="description" name="description" required
                      placeholder="Berätta mer om vad du vill göra..."><?php echo htmlspecialchars($description ?? ''); ?></textarea>
        </div>

        <div class="form-group">
            <label for="priority">Prioritet (1 = högst, 5 = lägst)</label>
            <select id="priority" name="priority">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <option value="<?php echo $i; ?>" 
                        <?php echo (isset($priority) && $priority == $i) ? 'selected' : ($i === 3 ? 'selected' : ''); ?>>
                        <?php echo $i; ?>
                    </option>
                <?php endfor; ?>
            </select>
        </div>

        <button type="submit" class="btn">Lägg till</button>
    </form>
</section>

<section class="card">
    <h2>Mina saker (<?php echo count($items); ?> st)</h2>

    <?php if (empty($items)): ?>
        <p>Listan är tom just nu. Lägg till din första sak ovan!</p>
    <?php else: ?>
        <?php foreach ($items as $item): ?>
            <div class="item">
                <div class="item-content">
                    <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                    <p><?php echo nl2br(htmlspecialchars($item['description'])); ?></p>
                    <div class="item-meta">
                        <span class="priority priority-<?php echo (int)$item['priority']; ?>">
                            Prio <?php echo (int)$item['priority']; ?>
                        </span>
                        &nbsp;·&nbsp;
                        Tillagd: <?php echo date('Y-m-d', strtotime($item['created_at'])); ?>
                    </div>
                </div>
                <div>
                    <a href="bucketlist.php?delete=<?php echo (int)$item['id']; ?>" 
                       class="btn btn-danger btn-small"
                       onclick="return confirm('Är du säker på att du vill ta bort denna sak?');">
                        Radera
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>

<?php require_once 'includes/footer.php'; ?>
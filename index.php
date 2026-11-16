<?php
$pageTitle = "Startsida – Min Bucketlist";
$activePage = "home";
require_once 'includes/header.php';
?>

<section class="card">
    <h1>Välkommen till min Bucketlist-webbplats</h1>
    <p>
        Detta är en skoluppgift där jag skapat en enkel webbplats med 
        <strong>HTML, CSS, objektorienterad PHP</strong> och <strong>MySQL</strong>.
    </p>
    <p>
        Syftet är att lära sig hur man strukturerar en webbapplikation, 
        ansluter till en databas och hanterar data med klasser i PHP.
    </p>
</section>

<section class="card">
    <h2>Om uppgiften</h2>
    <p>
        Webbplatsen har tre sidor:
    </p>
    <ul style="margin-left: 1.5rem; margin-bottom: 1rem;">
        <li><strong>Startsida</strong> – information om uppgiften och reflektioner kring PHP</li>
        <li><strong>Bucketlist</strong> – visa, lägga till och radera saker du vill göra i livet</li>
        <li><strong>AI &amp; Reflektion</strong> – hur AI-verktyg använts under arbetet</li>
    </ul>
    <p>
        Data lagras i en MySQL-databas och hanteras via en enkel objektorienterad struktur.
    </p>
</section>

<section class="card">
    <h2>Mina reflektioner om PHP</h2>
    <p>
        <!-- Här fyller vi i dina egna tankar senare -->
        <em>[Här skriver du vad du tycker om PHP, fördelar och nackdelar jämfört med andra språk du testat.]</em>
    </p>
    <p>
        <strong>Fördelar jag ser med PHP:</strong>
    </p>
    <ul style="margin-left: 1.5rem; margin-bottom: 1rem;">
        <li>Enkelt att komma igång med – fungerar direkt på de flesta webbhotell</li>
        <li>Bra för webbutveckling (server-side)</li>
        <li>Stor community och mycket dokumentation</li>
    </ul>
    <p>
        <strong>Nackdelar / saker som känns svåra som nybörjare:</strong>
    </p>
    <ul style="margin-left: 1.5rem;">
        <li>Syntaxen kan kännas lite "gammal" jämfört med modernare språk</li>
        <li>Felhantering och säkerhet kräver att man tänker efter (SQL-injection etc.)</li>
        <li>Objektorientering känns först lite abstrakt</li>
    </ul>
</section>

<?php require_once 'includes/footer.php'; ?>
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
        <em>Jag är fortfarande inte tillräckligt insatt i php för att ge en slutgiltlig åsikt, men efter förra uppgiften och denna så har jag kommit fram till några saker. Dels så är php väldigt lätt att komma igång med och det känns mer som ett tillägg till html än en egen grej. Det finns också jättemycket dokumentation som självklart hjälper. Tyvärr är det dock väldigt jobbigt att tänka om för att få in objektorientering i tänket och det hjälper inte att felmeddelanden är så jäkla svåra att förstå ibland. Men allt som allt tror jag att jag kommer uppskatta php.</em>
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
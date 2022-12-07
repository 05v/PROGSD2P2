# Week 3. Opdracht 1. CMS

$_SERVER['REQUEST_METHOD'] is een variable in PHP die het HTTP-verzoekmethode bevat dat werd gebruikt toen het formulier werd ingediend. Dit kan GET of POST zijn.

$_POST['submit'] is een variable in PHP die de waarde van de submit-knop bevat op het formulier. Als het formulier wordt ingediend, wordt de waarde van de submit-knop opgeslagen in deze variabele.

Het verschil tussen $_SERVER['REQUEST_METHOD'] en $_POST['submit'] is dat de REQUEST_METHOD variable wordt gebruikt als het forumulier wordt ingedient, twerwijl de SUBMIT variable alleen op de button wordt gebruikt.

stripslashes is een PHP-functie die achterliggende backslashes ('') verwijdert uit een string.

addslashes is een PHP-functie die achterliggende backslashes ('') toevoegt aan een string.

htmlspecialchars is een PHP-functie die speciale HTML-tekens, zoals < en >, vervangt door HTML-entities.
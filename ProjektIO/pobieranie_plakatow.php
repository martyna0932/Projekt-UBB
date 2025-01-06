<?php
include 'connect.php';

// Pobierz plakaty
$query = $pdo->query("SELECT tytul, sciezka_pliku, opis FROM plakaty");
$plakaty = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="row">
    <?php foreach ($plakaty as $plakat): ?>
        <div class="col-md-3">
            <div class="card">
                <img src="<?php echo htmlspecialchars($plakat['sciezka_pliku']); ?>" alt="<?php echo htmlspecialchars($plakat['tytul']); ?>">
                <div class="card-body bg-black text-light text-center">
                    <p class="card-title"><?php echo htmlspecialchars($plakat['tytul']); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
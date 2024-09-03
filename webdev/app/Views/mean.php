
<!-- soal no 1 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rata-rata</title>
</head>
<body>
    <h1>Rata-rata</h1>
    <p><strong>Angka Numeric:</strong> <?= implode(', ', $numeric_values); ?></p>
    <p><strong>Non-Numeric:</strong> <?= implode(', ', $non_numeric_values); ?></p>
    <p><strong>Rata-rata:</strong> <?= $average; ?></p>
</body>
</html>

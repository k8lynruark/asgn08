<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>asgn08</title>
  <link href="../css/styles.css" rel="stylesheet">
</head>

<body>
  <header>
    <h1>
      <ul>
        <?php foreach ($task as $detail => $val) : ?>
        <li><strong><?= $detail; ?>: </strong><?= $val; ?></li>
        <?php endforeach; ?>
      </ul>
    </h1>
  </header>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>asgn08</title>
  <link href="../css/styles.css" rel="stylesheet">
</head>

<body>
  <header>
    <h1>Task for the Month</h1>
    <ul>
        <li>
          <strong>Name: </strong> <?= $task['title']; ?>
        </li>
        <li>
          <strong>Due Date: </strong> <?= $task['due']; ?>
        </li>
        <li>
          <strong>Person Responsible: </strong><?= $task['assigned-to']; ?>
        </li>
        <li>
          <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
        </li>
      
    </ul>
  </header>
</body>

</html>

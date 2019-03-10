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
          <strong>Status: </strong> 
          <?php if ($task['completed']) : ?> 
          <span class="icon">&#9989;</span>
          
          <?php else : ?>
          <span class="icon">Incomplete</span>
          <?php endif; ?>
        </li>
        <li>
          <strong>Extension Needed?</strong>
          <?php if ($task['extension-needed']) : ?>
          Yes
          <?php else : ?>
          Not necessary
          <?php endif; ?>
        </li>
      
    </ul>
  </header>
</body>

</html>

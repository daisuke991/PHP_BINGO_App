<?php
/*
コードをご確認いただきまして、誠にありがとうございます。
独学のため、至らない点等あるかと存じますが、
今後改善に努めて参ります。
*/
require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Bingo.php');

$bingo = new \MyApp\Bingo();
$nums = $bingo->create();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>BINGO</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="container">
     <table>
      <tr>
       <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
      </tr>
      <?php for ($i = 0 ; $i < 5; $i++) : ?>
      <tr>
       <?php for ($j = 0 ; $j < 5; $j++) : ?>
       <td><?= h($nums[$i][$j]); ?></td>
       <?php endfor; ?>
      </tr>
      <?php endfor; ?>
     </table>
    </div>
</body>
</html>
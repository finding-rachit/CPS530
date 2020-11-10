<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>

<?php
  $n1 = $_POST['number1'];
  $n2 = $_POST['number2'];
  
  $result = '';

  session_start();
  if (isset($_SESSION['views']))
	  $_SESSION['views'] = $_SESSION['views'] + 1;
  else
	  $_SESSION['views'] = 1;

  $result .= '<h5>TOTAL HITS: '.$_SESSION['views'].'<br></h5>';
  $result .= '<h5>TOTAL ROWS = '.$n1.'</h5>';
  $result .= '<h5>TOTAL COLUMNS = '.$n2.'</h5>';

  $result .= '<table>';

  $rows = $n1;
  $cols = $n2;
  $counter = 1;

  for ($i = 1; $i <= $rows; $i++)
  {
    $result .='<tr>';

    for ($j = 1; $j <= $cols; $j++)
    {
      $result .= '<td>' .$counter.'</td>';
      $counter += 1;
    }

    $result .= '</tr>';
  }

  $result .= '</table>';

  echo $result;

  ?>

</body>
</html>

<?php

while ($data = $requeteTest->fetch(PDO::FETCH_ASSOC)) {
 echo " <tr>
        <td>$data[id]</td>
        <td>$data[titre]</td>
        <td>$data[date]</td>
        <td>$data[description]</td>

        </tr>";
      }
?>
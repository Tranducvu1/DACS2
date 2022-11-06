<?php
$query = "SELECT * FROM DMSach";
$result = $conn->query($query);
 foreach($result as $r): ?>

 <tr>
        <td><?=$r['MaSach']?></td>
        <td><?=$r['TenSach']?></td>
        <td><?=$r['MoTa']?></td>
        <td><?=number_format($r['Gia'],0,',','.')?>
    </td>
        <td><?=$r['MaNXB']?></td>
        <td><?=$r['MaLoai']?></td>
      </tr>
      <?php
endforeach; 
?> 
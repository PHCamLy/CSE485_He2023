<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
   
    <table border="2">
        <thead>
            <tr>
               
                <th>Ngôn ngữ</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrs as $index => $language): ?>
                <tr>
                   
                    <td><?php echo $language; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

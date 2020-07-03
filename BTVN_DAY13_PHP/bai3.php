<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>Tên khóa học</th>
    </tr>
    <?php foreach($arrs AS $value): ?>
        <tr>
            <td><?php echo $value; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

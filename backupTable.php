<table>
        <tr>
            <th>Email</th>
            <th>Nome</th>
            <th>Senha</th>
        </tr>
        <?php $fp = fopen(USERS_DB, 'r'); ?>
        <?php while ($row = fgetcsv($fp)) : ?>
            <tr>
                <td> <?= $row[0] ?> </td>
                <td> <?= $row[1] ?> </td>
                <td> <?= $row[2] ?> </td>
            </tr>
        <?php endwhile ?>
    </table>
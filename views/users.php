<?php


require_once("api/User.php");



function printUsers () {
    global $db;
    // create the registration object
    $user = new User();
    $users = $user->getAllUsers();
    if ($db->count == 0) {
        echo "<td align=center colspan=4>No users found</td>";
        return;
    }
    printf("sfsad");

    foreach ($users as $u) {
        echo "<tr>
            <td>{$u['user_id']}</td>
            <td>{$u['user_name']}</td>
            <td>{$u['user_email']} {$u['lastName']}</td>
            <td>
                <a href='index.php?action=rm&id={$u['id']}'>rm</a> ::
                <a href='index.php?action=mod&id={$u['id']}'>ed</a>
            </td>
        </tr>";
    }
}
?>

<table width='50%'>
    <tr bgcolor='#cccccc'>
        <th>User Id</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Display Name</th>
    </tr>
    <?php printUsers();?>

</table>
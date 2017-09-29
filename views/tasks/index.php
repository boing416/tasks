<input type="hidden" id="log" value="<?=$authAdmin?>">

<table id="tasks" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Title</th>
        <th>User</th>
        <th>Email</th>
        <th>Status</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>Title</th>
        <th>User</th>
        <th>Email</th>
        <th>Status</th>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach($tasks as $task) { ?>
        <?php
        $task_status = "Не выполнен";
        if($task->status == 1) $task_status = "Выполнен";
        ?>
        <tr>
            <td><a href='?controller=tasks&action=show&id=<?php echo $task->id; ?>'><?=$task->title?></a></td>
            <td><?=$task->username?></td>
            <td><?=$task->email?></td>
            <td><?=$authAdmin == false ? $task_status : '<a href=?controller=tasks&action=edit&id='.  $task->id .'>' . $task_status . '</a>'?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
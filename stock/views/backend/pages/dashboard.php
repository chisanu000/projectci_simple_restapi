<h1>User Table</h1>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($users_data as $row){
        ?>
        <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->fullname; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->mobile; ?></td>
            <td><?php echo $row->status; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
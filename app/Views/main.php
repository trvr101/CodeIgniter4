<?= $this->include('inc/top') ?>

<body>

    <a href="<?= base_url('add')?>">add</a>
    <div class="container">
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>STUDENT ID</th>
                <th>FULL NAME</th>
                <th>YEAR LEVEL</th>
                <th>SECTION</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $k) : ?>
            <tr>

                <td><?= $k['student_id'] ?></td>
                <td><?= $k['fullname'] ?></td>
                <td><?= $k['yr_level'] ?></td>
                <td><?= $k['section'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>
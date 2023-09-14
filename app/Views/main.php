<?=$this->include('inc/top')?>

<body>

    <div class="container">

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
                <?php foreach ($user as $k):?>
                <tr>

                    <td><?= $k['student_id']?></td>
                    <td><?= $k['fullname']?></td>
                    <td><?= $k['yr_level']?></td>
                    <td><?= $k['section']?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

</body>

</html>
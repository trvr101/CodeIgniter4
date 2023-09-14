<?= $this->include('inc/top') ?>
<div class="container mt-3"></div>
<h2>Striped Rows</h2>
<a href="<?=base_url('add')?>">add</a>
<form action="/save" method="post">
    <label>STUDENT ID</label>
    <input type="text" name="student_id" class="form-control" placeholder="student id">
    <label>FULL NAME</label>
    <input type="text" name="fullname" class="form-control" placeholder="fullname">
    <label>YEAR LEVEL</label>
    <input type="text" name="yr_level" class="form-control" placeholder="year level">
    <label>SECTION</label>
    <input type="text" name="section" class="form-control" placeholder="section">
    <button type="submit" class="btn btn-submit">save</button>
</form>
<input type="text" class="form-control input-sm m-b-xs" id="filter"
       placeholder="Search in table">
<table class="footable table table-bordered" data-page-size="15" data-filter=#filter>
    <thead>
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>NO RM</th>
        <th>Nama Pasien</th>
        <th>Tindakan</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i=0;
    foreach ($dataoperasi as $row) {
        $i++;
        ?>
        <tr class="gradeX">
            <td><?php echo $i; ?></td>
            <td width="180px" class="text-center"><?php echo $row->TANGGAL; ?></td>
            <td width="100px" class="text-center"><?php echo $row->NORM; ?></td>
            <td><?php echo $row->NAMAPASIEN; ?></td>
            <td><?php echo $row->NAMATINDAKAN; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="5">
            <ul class="pagination pull-right"></ul>
        </td>
    </tr>
    </tfoot>
</table>
<script>
    $(document).ready(function () {
        $('.footable').footable();
    });
</script>
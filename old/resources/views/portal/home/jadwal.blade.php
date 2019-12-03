@foreach($data as $row)
<div class="col-lg-4">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h6 class="panel-title">Nama Dokter & Jadwal</h6>
            <div class="panel-body">
                <div id="sales-heatmap"></div>
            </div>
            <div class="table-responsive" style="height: 200px; max-height: 200px;">
                <table class="table text-nowrap">
                    <tbody>
                        <tr>
                            <td>
                                <div class="media-left media-middle">
                                    <a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
                                        <span class="letter-icon">S</span>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="#" class="letter-icon-title">Sigma application</a>
                                    </div>

                                    <div class="text-muted text-size-small"><i class="icon-checkmark3 text-size-mini position-left"></i> New order</div>
                                </div>
                            </td>
                            <td>
                                <span class="text-muted text-size-small">06:28 pm</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endforeach
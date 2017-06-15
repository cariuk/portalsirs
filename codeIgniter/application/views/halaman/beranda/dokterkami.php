<div class="container">
    <h2><span class="lite">Temui</span> Dokter <span class="lite">Kami</span></h2>
    <p>
        <!--Konten-->
    </p>
    <div class="row">
        <?php foreach($dokter_kami as $row) { ?>
            <!-- Doctor Bio #1 Starts -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="bio-box">
                    <div class="profile-img">
                        <img src="assets/images/doctors/<?php echo $row->foto; ?>" alt="Doctor"
                             class="img-responsive img-center-sm img-center-xs">
                        <div class="overlay">
                            <ul class="list-unstyled list-inline sm-links">
                                <li><a href="<?=base_url()?>dokterkami/profildokter/<?php echo $row->nama; ?>"><i class="fa fa-list"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner">
                        <h6><?php echo $row->gelar_depan; ?>. <?php echo $row->nama; ?>, <br /><?php echo $row->gelar_belakang; ?></h6>
                        <p class="designation"><?php echo $row->spesialis; ?></p>
                        <p class="divider"><i class="fa fa-plus-square"></i></p>
                        <p>
                        </p>
                    </div>
                    <a href="#" class="btn btn-transparent inverse text-uppercase">Book An
                        Appointment</a>
                </div>
            </div>
            <!-- Doctor Bio #1 Ends -->
            <?php
        }
        ?>
    </div>
</div>
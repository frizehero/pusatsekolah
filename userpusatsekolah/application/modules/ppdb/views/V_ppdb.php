<div class="app-main__inner">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <?php tampilnotif() ?>
            <div class="row">
                <?php $no = 1;
                foreach ($tampil as $rowP) { ?>
                <div class="col-md-12">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"> </i>
                                PPDB
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="dropdown-menu-header mt-0 mb-0">
                                <div class="dropdown-menu-header-inner bg-heavy-rain" style="height: 200px;">
                                    <div class="menu-header-image" style="background-image: url('assets/pamflet_ppdb/<?php echo $rowP->pamflet_ppdb; ?>');"></div>
                                </div>
                            </div>
                            <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                <li class="nav-item">
                                    <a role="tab" class="nav-link active" id="tab-c-0" data-toggle="tab" href="#tab-animated-0">
                                        <span>Informasi PPDB</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" class="nav-link" id="tab-c-1" data-toggle="tab" href="#tab-animated-1">
                                        <span>Tanggal Penting</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-2">
                                        <span>Pendaftar</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-animated-0" role="tabpanel">
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="p-3">
                                                <div class="notifications-box">
                                                    <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline"><?php echo $rowP->judul_ppdb; ?></h4>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Informasi PPDB</h4>
                                                                    <p style="width: 850px;"><?php echo $rowP->deskripsi_ppdb; ?>
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-animated-1" role="tabpanel">
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="p-3">
                                                <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                            </span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">All Hands Meeting</h4>
                                                                <p>Lorem ipsum dolor sic amet, today at
                                                                    <a href="javascript:void(0);">12:00 PM</a>
                                                                </p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                <i class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                            </span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <p>Another meeting today, at
                                                                    <b class="text-danger">12:00 PM</b>
                                                                </p>
                                                                <p>Yet another one, at
                                                                    <span class="text-success">15:00 PM</span>
                                                                </p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                            </span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">Build the production release</h4>
                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                                    incididunt ut labore et dolore magna elit enim at
                                                                    minim veniam quis nostrud
                                                                </p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                <i class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                            </span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title text-success">Something not important</h4>
                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at
                                                                    minim veniam quis nostrud
                                                                </p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                            </span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">All Hands Meeting</h4>
                                                                <p>Lorem ipsum dolor sic amet, today at
                                                                    <a href="javascript:void(0);">12:00 PM</a>
                                                                </p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                <i class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                            </span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <p>Another meeting today, at
                                                                    <b class="text-danger">12:00 PM</b>
                                                                </p>
                                                                <p>Yet another one, at
                                                                    <span class="text-success">15:00 PM</span>
                                                                </p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                            </span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">Build the production release</h4>
                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                                    incididunt ut labore et dolore magna elit enim at
                                                                    minim veniam quis nostrud
                                                                </p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                <i class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                            </span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title text-success">Something not important</h4>
                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at
                                                                    minim veniam quis nostrud</p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-animated-2" role="tabpanel">
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="card-body">
                                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Matematika</th>
                                                <th>IPA</th>
                                                <th>B. Indonesia</th>
                                                <th>B. Inggris</th>
                                                <th>Total Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon Architect</td>
                                                <td>92,5</td>
                                                <td>98</td>
                                                <td>100</td>
                                                <td>100</td>
                                                <td>390,5</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>92,5</td>
                                                <td>80</td>
                                                <td>100</td>
                                                <td>98</td>
                                                <td>370,5</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>75</td>
                                                <td>85</td>
                                                <td>96</td>
                                                <td>86</td>
                                                <td>342</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Matematika</th>
                                                <th>IPA</th>
                                                <th>B. Indonesia</th>
                                                <th>B. Inggris</th>
                                                <th>Total Nilai</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-btn text-center pt-4 pb-3 nav-item">
                                    <a href="<?php echo base_url('ppdb/editview/'  . encrypt_url($rowP->id_ppdb)); ?>" class="btn-shadow btn-wide btn-pill btn btn-dark">
                                        <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span>
                                        Edit PPDB
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php $no++;
                } ?>
            </div>
        </div>
    </div>
</div>
<?php if ($this->session->has_userdata('success')) { ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <i class='bx bx-check-circle'></i> <?= $this->session->flashdata('success'); ?>
    </div>
<?php } ?>
<?php if ($this->session->has_userdata('error')) { ?>
    <div class="alert alert-error alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <i class='bx bx-x'></i> <?= strip_tags(str_replace('</p>', '', $this->session->flashdata('error'))); ?>
    </div>
<?php } ?>
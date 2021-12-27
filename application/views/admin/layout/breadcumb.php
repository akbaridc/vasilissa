<div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="<?= base_url('admin') ?>">Home</a></div>
    <!-- <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
    <div class="breadcrumb-item">Alert</div> -->

    <?php if (isset($breadcumbs)) { ?>
        <?php foreach ($breadcumbs as $key => $value) { ?>
            <div class="breadcrumb-item">
                <a <?php if ($value['link'] != '') {
                        echo 'href="' . base_url($value['link']) . '"';
                    } else {
                        echo 'href="' . base_url() . '"';
                    } ?> <?php (isset($value['target']) && $value['target'] != null) ? "class=\"doTrigger\" data-target=\"" . $value['target'] . "\"" : '' ?> title="<?= $value['title'] ?>"><?= $value['title'] ?>
                </a>
            </div>
        <?php } ?>
    <?php } ?>
</div>
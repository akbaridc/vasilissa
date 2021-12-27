<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="javascript:history.back()" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Data Reward</h1>
        <?= $breadcumbnya; ?>
    </div>

    <div class="section-body">
        <!-- <h2 class="section-title">Badges</h2>
        <p class="section-lead">
            Examples for badges, our small count and labeling component.
        </p> -->

        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card">
                    <?php echo form_open(base_url() . 'admin/edit_reward', array('method' => 'post')); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="hidden" name="id" id="id" class="form-control" value="<?= base64_encode($reward->id) ?>">
                                <div class="form-group">
                                    <label>Level</label>
                                    <select name="level" id="level" class="form-control">
                                        <option value="<?= $reward->level ?>"><?= $reward->level ?></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Reward</label>
                                    <input type="text" class="form-control" name="reward" id="reward" placeholder="Reward dari level" value="<?= $reward->reward ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Point</label>
                                    <input type="number" class="form-control" name="point" id="point" placeholder="Point dari level" value="<?= $reward->point ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-icon btn-left btn-primary" name="submit"><i class="fas fa-save"> Simpan</i></button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section
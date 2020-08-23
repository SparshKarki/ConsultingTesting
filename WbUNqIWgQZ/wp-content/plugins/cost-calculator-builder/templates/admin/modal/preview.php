<div class="modal-header preview">
    <div class="modal-header__title">
        <i class="fas fa-eye"></i>
        <h4><?php echo __('Preview', 'cost-calculator-builder')?></h4>
    </div>
</div>
<div class="modal-body preview">
    <?php
    if(isset($_GET['id'])) {
        $calc_id = $_GET['id'];
        echo \cBuidler\Classes\CCBTemplate::load('frontend/render', ['calc_id' => $calc_id, 'is_preview' => true]);
    }
    ?>
</div>
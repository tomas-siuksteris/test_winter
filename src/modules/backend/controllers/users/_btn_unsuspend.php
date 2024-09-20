<?php if ($formModel->isSuspended()): ?>
    <div class="loading-indicator-container">
        <button
            type="button"
            data-request="onUnsuspendUser"
            data-load-indicator="<?= e(trans('backend::lang.account.unsuspend_working')) ?>"
            data-request-confirm="<?= e(trans('backend::lang.account.unsuspend_confirm')) ?>"
            class="btn btn-danger wn-icon-unlock-alt"
            style="width: 100%; text-align: center"
        >
            <?= e(trans('backend::lang.account.unsuspend')) ?>
        </button>
    </div>
<?php endif ?>

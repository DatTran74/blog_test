<div id="plugin-toolbar">
    <div data-control="toolbar">
    <a href="<?= Backend::url('system/updates') ?>" class="btn btn-default wn-icon-chevron-left">
        <?= e(trans('system::lang.updates.return_link')) ?>
    </a>

    <div class="btn-group dropdown dropdown-fixed">
        <button
            data-primary-button
            type="button"
            class="btn btn-default wn-icon-caret-down dropdown-toggle"
            data-toggle="dropdown"
            data-trigger-action="enable"
            data-trigger=".control-list .list-checkbox input[type=checkbox]"
            data-trigger-condition="checked"
            data-request-success="$(this).prop('disabled', true).next().prop('disabled', true)">
            <?= e(trans('system::lang.plugins.select_label')) ?>
        </button>

        <ul class="dropdown-menu" data-dropdown-title="<?= e(trans('system::lang.plugins.bulk_actions_label')) ?>">
            <li>
                <a href="javascript:;" class="wn-icon-pause"
                    data-request="onBulkAction"
                    onclick="$(this).data('request-data', {
                        action: 'freeze',
                        checked: $('.control-list').listWidget('getChecked')
                    })"
                    data-request-update="list_manage_toolbar: '#plugin-toolbar'"
                    data-request-confirm="<?= e(trans('system::lang.plugins.action_confirm', ['action' => e(trans('system::lang.plugins.freeze'))])) ?>"
                    data-stripe-load-indicator>
                    <?= e(trans('system::lang.plugins.freeze_label')) ?>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="wn-icon-play"
                    data-request="onBulkAction"
                    onclick="$(this).data('request-data', {
                        action: 'unfreeze',
                        checked: $('.control-list').listWidget('getChecked')
                    })"
                    data-request-update="list_manage_toolbar: '#plugin-toolbar'"
                    data-request-confirm="<?= e(trans('system::lang.plugins.action_confirm', ['action' => e(trans('system::lang.plugins.unfreeze'))])) ?>"
                    data-stripe-load-indicator>
                    <?= e(trans('system::lang.plugins.unfreeze_label')) ?>
                </a>
            </li>
            <li role="separator" class="divider"></li>
            <li>
                <a href="javascript:;" class="wn-icon-ban"
                    data-request="onBulkAction"
                    onclick="$(this).data('request-data', {
                        action: 'disable',
                        checked: $('.control-list').listWidget('getChecked')
                    })"
                    data-request-update="list_manage_toolbar: '#plugin-toolbar'"
                    data-request-confirm="<?= e(trans('system::lang.plugins.action_confirm', ['action' => e(trans('system::lang.plugins.disable'))])) ?>"
                   data-stripe-load-indicator>
                    <?= e(trans('system::lang.plugins.disable_label')) ?>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="wn-icon-check"
                    data-request="onBulkAction"
                    onclick="$(this).data('request-data', {
                        action: 'enable',
                        checked: $('.control-list').listWidget('getChecked')
                    })"
                    data-request-update="list_manage_toolbar: '#plugin-toolbar'"
                    data-request-confirm="<?= e(trans('system::lang.plugins.action_confirm', ['action' => e(trans('system::lang.plugins.enable'))])) ?>"
                    data-stripe-load-indicator>
                    <?= e(trans('system::lang.plugins.enable_label')) ?>
                </a>
            </li>
            <?php if (\Config::get('app.debug', false) && \BackendAuth::getUser()->is_superuser): ?>
                <li role="separator" class="divider"></li>
                <li>
                    <a href="javascript:;" class="wn-icon-bomb"
                        data-request="onBulkAction"
                        onclick="$(this).data('request-data', {
                            action: 'refresh',
                            checked: $('.control-list').listWidget('getChecked')
                        })"
                        data-request-update="list_manage_toolbar: '#plugin-toolbar'"
                        data-request-confirm="<?= e(trans('system::lang.plugins.refresh_confirm')) ?>"
                        data-stripe-load-indicator>
                        <?= e(trans('system::lang.plugins.refresh_label')) ?>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="btn-group">
        <button
            class="btn btn-danger wn-icon-trash-o"
            disabled="disabled"
            data-request="onBulkAction"
            onclick="$(this).data('request-data', {
                action: 'remove',
                checked: $('.control-list').listWidget('getChecked')
            })"
            data-request-update="list_manage_toolbar: '#plugin-toolbar'"
            data-request-confirm="<?= e(trans('system::lang.plugins.remove_confirm')) ?>"
            data-trigger-action="enable"
            data-trigger=".control-list .list-checkbox input[type=checkbox]"
            data-trigger-condition="checked"
            data-request-success="$(this).closest('.btn-group').find('button').prop('disabled', true)"
            data-stripe-load-indicator>
            <?= e(trans('system::lang.plugins.remove')) ?>
        </button>
    </div>
  </div>
</div>

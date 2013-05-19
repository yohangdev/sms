<?php
    $data['messages'] = $messages;
?>
<div id="header">
    <div class="page secondary">
        <div class="page-header">
            <div class="page-header-content">
                <h1>Interaksi<small>sms</small></h1>
                <i class="page-icon icon-enter"></i>
            </div>
        </div>
    </div>
</div>

<div class="page secondary with-sidebar">
    <?php $this->load->view('common/sidebar'); ?>
    <div class="page-region">
        <div class="page-region-content">
            <div class="span9">
                <script>
                    document.write('<a href="' + document.referrer + '" class="button"><i class="icon-plus-2"></i> Kembali</a>');
                </script>                
                <?php $this->load->view('common/conversation-list', $data) ?>
            </div>
        </div>
    </div>
</div>
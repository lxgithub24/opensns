<?php if (!defined('THINK_PATH')) exit();?>
<a data-type="ajax" data-url="<?php echo addons_url('Report://Report/eject',array('param'=>http_build_query($param)));?>" data-title="<?php echo L('_REPORT_');?>"  data-toggle="modal" ><?php echo L('_REPORT_');?></a>
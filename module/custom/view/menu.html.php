<?php
/**
 * The menu view of custom module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Hao Sun <sunhao@cnezsoft.com>
 * @package     user
 * @version     $Id: edit.html.php 4728 2013-05-03 06:14:34Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<div class='container mw-800px'>
  <div id='titlebar'>
    <div class='heading'>
      <i class='icon icon-cog'></i> <strong><?php echo $lang->customMenu ?></strong> <i class='icon icon-spin icon-spinner' id='loadingIcon'></i>
    </div>
  </div>
  <div id='menuEditor'>
    <p class='text-danger'><i class="icon icon-info-sign"></i> <?php echo $lang->custom->menuTip ?></p>
    <div class='panel'>
      <nav id='mainmenu'>
        <ul></ul>
      </nav>
      <nav id='modulemenu'>
        <ul></ul>
      </nav>
      <nav id='featurebar'>
        <ul></ul>
      </nav>
    </div>
    <div class='text-center'>
      <button id='saveMenuBtn' type='button' class='btn btn-primary'><?php echo $lang->save ?></button> &nbsp;
      <button id='closeModalBtn' type='button' class='btn'><?php echo $lang->close ?></button> &nbsp;
      <?php echo html::a(inlink('ajaxRestoreMenu'), $lang->custom->restore, 'hiddenwin', "class='btn'")?>
    </div>
  </div>
</div>
<script>
window.startMenu = {'module': '<?php echo $module ?>', 'method': '<?php echo $method ?>'};
</script>
<?php include '../../common/view/footer.html.php';?>

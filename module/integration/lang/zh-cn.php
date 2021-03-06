<?php
$lang->integration->common        = '构建任务';
$lang->integration->browse        = '浏览构建任务';
$lang->integration->create        = '创建构建任务';
$lang->integration->start         = '执行构建';
$lang->integration->edit          = '编辑构建任务';
$lang->integration->execNow       = '立即执行';
$lang->integration->delete        = '删除构建任务';
$lang->integration->confirmDelete = '确认删除该构建任务吗？';

$lang->integration->id          = 'ID';
$lang->integration->name        = '名称';
$lang->integration->repo        = '代码库';
$lang->integration->svnFolder   = 'SVN Tag监控路径';
$lang->integration->jenkins     = 'Jenkins服务';
$lang->integration->buildType   = '构建类型';
$lang->integration->jenkinsJob  = 'Jenkins任务名';
$lang->integration->triggerType = '触发方式';
$lang->integration->scheduleDay = '自定义天数';
$lang->integration->lastExec    = '最后执行';

$lang->integration->example    = '举例';
$lang->integration->commitEx   = '%build% %integration% %id%15，其中15为Jenkins任务编号';
$lang->integration->cronSample = '如 0 0 2 * * 2-6/1 表示每个工作日凌晨2点';
$lang->integration->sendExec   = '发送执行请求成功！';

$lang->integration->buildTypeList['build']          = '仅构建';
$lang->integration->buildTypeList['buildAndDeploy'] = '构建部署';
$lang->integration->buildTypeList['buildAndTest']   = '构建测试';

$lang->integration->triggerTypeList['tag']      = '打标签';
$lang->integration->triggerTypeList['commit']   = '代码提交注释';
$lang->integration->triggerTypeList['schedule'] = '定时计划';

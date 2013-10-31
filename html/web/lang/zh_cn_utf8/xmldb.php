<?PHP // $Id: xmldb.php,v 1.8 2010/04/25 04:52:34 liling Exp $ 
      // xmldb.php - created with Moodle 1.9.5 (Build: 20090520) (2007101550)


$string['aftertable'] = '放在此表后：';
$string['back'] = '后退';
$string['backtomainview'] = '返回主视图';
$string['binaryincorrectlength'] = '二进制字段的长度不正确';
$string['butis'] = '但是(?)';
$string['cannotuseidfield'] = '不能插入“id”字段。它是自动编号的列';
$string['change'] = '更改';
$string['charincorrectlength'] = '字符字段的不正确长度';
$string['check_bigints'] = '查询不正确 DB 整数';
$string['check_defaults'] = '查找不一致的默认值';
$string['check_indexes'] = '查找缺失的 DB 索引';
$string['checkbigints'] = '检查';
$string['checkdefaults'] = '检查默认值';
$string['checkindexes'] = '检查索引';
$string['completelogbelow'] = '查看下面的完整日志';
$string['confirmcheckbigints'] = '本功能将搜索 <a href=\"http://tracker.moodle.org/browse/MDL-11038\">整数字段的可能错误</a>。强烈推荐使用最新版本。';
$string['confirmcheckdefaults'] = '本功能将在本机上搜索不一致的默认值。';
$string['confirmcheckindexes'] = '该功能将查找Moodle服务器上潜在的缺失索引，由必须的SQL语句保持更新时自动产生。一旦产生后您可以拷贝这些语句到其他的SQL接口中执行。<BR/></BR>
强烈推荐使用最新版本的MOODLE。';
$string['confirmdeletefield'] = '您是否非常确信要删除此字段：';
$string['confirmdeleteindex'] = '您是否非常确信要删除此索引：';
$string['confirmdeletekey'] = '您是否非常确信要删除此键值：';
$string['confirmdeletesentence'] = '您是否非常确信要删除此子句：';
$string['confirmdeletestatement'] = '您是否非常确信要删除语句和全部相关的子句吗：';
$string['confirmdeletetable'] = '您是否非常确信要删除此表：';
$string['confirmdeletexmlfile'] = '您是否非常确信要删除此文件：';
$string['confirmrevertchanges'] = '您是否非常确信要恢复对此所做的改变：';
$string['create'] = '创建';
$string['createtable'] = '创建表：';
$string['defaultincorrect'] = '不正确的缺省值';
$string['delete'] = '删除';
$string['delete_field'] = '删除字段';
$string['delete_index'] = '删除索引';
$string['delete_key'] = '删除键值';
$string['delete_sentence'] = '删除子句';
$string['delete_statement'] = '删除语句';
$string['delete_table'] = '删除表';
$string['delete_xml_file'] = '删除 XML 文件';
$string['down'] = '向下';
$string['duplicate'] = '复制';
$string['duplicatefieldname'] = '已存在一个同名的字段';
$string['edit'] = '编辑';
$string['edit_field'] = '编辑字段';
$string['edit_index'] = '编辑索引';
$string['edit_key'] = '编辑键值';
$string['edit_sentence'] = '编辑子句';
$string['edit_statement'] = '编辑语句';
$string['edit_table'] = '编辑表';
$string['edit_xml_file'] = '编辑 XML 文件';
$string['enumvaluesincorrect'] = '枚举字段中不正确的值';
$string['field'] = '字段';
$string['fieldnameempty'] = '字段名为空';
$string['fields'] = '字段';
$string['filenotwriteable'] = '文件不可写';
$string['floatincorrectdecimals'] = '浮点字段的小数位数不正确';
$string['floatincorrectlength'] = '浮点字段的长度不正确';
$string['gotolastused'] = '定位到上次使用的文件';
$string['incorrectfieldname'] = '不正确的名字';
$string['index'] = '索引';
$string['indexes'] = '索引';
$string['integerincorrectlength'] = '整数字段的长度不正确';
$string['key'] = '键值';
$string['keys'] = '键值';
$string['listreservedwords'] = '保留字列表<br/>（用来保持 <a href=\"http://docs.moodle.org/en/XMLDB_reserved_words\" target=\"_blank\">XMLDB 保留字</a>的更新)';
$string['load'] = '载入';
$string['main_view'] = '主视图';
$string['missing'] = '缺失';
$string['missingfieldsinsentence'] = '句子中没有字段';
$string['missingindexes'] = '找到缺失字段';
$string['missingvaluesinsentence'] = '子句中没有值';
$string['mustselectonefield'] = '您必须选择一个字段来查看与字段相关的动作！';
$string['mustselectoneindex'] = '您必须选择一个索引来查看与索引相关的动作！';
$string['mustselectonekey'] = '您必须选择一个键值来查看与键值相关的动作！';
$string['mysqlextracheckbigints'] = '如使用 MySQL 数据库，它还将查找不正确的大整数标记。';
$string['new_statement'] = '新建语句';
$string['new_table_from_mysql'] = '从 MySQL 建新表';
$string['newfield'] = '新建字段';
$string['newindex'] = '新建索引';
$string['newkey'] = '新建键值';
$string['newsentence'] = '新建子句';
$string['newstatement'] = '新建语句';
$string['newtable'] = '创建新表';
$string['newtablefrommysql'] = '从 MySQL 建新表';
$string['nomissingindexesfound'] = '没有发现缺失字段，您的 DB 不需要做任何更改。';
$string['nowrongdefaultsfound'] = '没有发现不一致的默认值。';
$string['nowrongintsfound'] = '没发现整数错误。';
$string['numberincorrectdecimals'] = '数字字段的小数位数不正确';
$string['numberincorrectlength'] = '数字字段的长度不正确';
$string['reserved'] = '保留';
$string['reservedwords'] = '保留字';
$string['revert'] = '恢复';
$string['revert_changes'] = '恢复变化';
$string['save'] = '保存';
$string['searchresults'] = '查找结果';
$string['selectaction'] = '选择动作：';
$string['selectdb'] = '选择数据库：';
$string['selectfieldkeyindex'] = '选择字段／键／索引：';
$string['selectonecommand'] = '为了查看 PHP 代码，请在列表中选择一个动作';
$string['selectonefieldkeyindex'] = '为了查看 PHP 代码，请在列表中选择一个字段/键/索引';
$string['selecttable'] = '选择表：';
$string['sentences'] = '子句';
$string['shouldbe'] = '应该';
$string['statements'] = '语句';
$string['statementtable'] = '语句表：';
$string['statementtype'] = '语句类型：';
$string['table'] = '表';
$string['tables'] = '表';
$string['test'] = '测试';
$string['textincorrectlength'] = '文本字段的长度不正确';
$string['unload'] = '卸载';
$string['up'] = '向上';
$string['view'] = '查看';
$string['view_reserved_words'] = '查看保留字';
$string['view_structure_php'] = '查看结构化 PHP';
$string['view_structure_sql'] = '查看结构化 SQL';
$string['view_table_php'] = '查看表 PHP';
$string['view_table_sql'] = '查看表 SQL';
$string['viewedited'] = '查看编辑过的';
$string['vieworiginal'] = '查看原始代码';
$string['viewphpcode'] = '查看 PHP 代码';
$string['viewsqlcode'] = '查看 SQL 代码';
$string['wrong'] = '错误';
$string['wrongdefaults'] = '错误的默认值';
$string['wrongints'] = '错误的整型';
$string['wronglengthforenum'] = '枚举字段的长度不正确';
$string['wrongnumberoffieldsorvalues'] = '子句中字段或值的数量不正确';
$string['wrongreservedwords'] = '当前使用的保留字<br />（如果表名使用{\$CFG->prefix}，就不用留意这个问题）';
$string['yesmissingindexesfound'] = '在数据库中发现了缺失的索引。以下是详细，需要执行 SQL 命令来修正(注意先备份)。<br /><br />我们强烈建议您在修改完成后，重新用此工具进行检查以确认没有其它错误。';
$string['yeswrongdefaultsfound'] = '在数据库中已经发现了不一致的默认值。以下是详细资料，需要执行 SQL 命令来修正(注意先备份)。<br /><br />我们强烈建议您在修改完成后，重新用此工具进行检查以确认没有其它错误。';
$string['yeswrongintsfound'] = '在数据库中已经发现了整形错误。以下是详细资料，需要执行 SQL 命令来修正(注意先备份)。<br /><br />我们强烈建议您在修改完成后，重新用此工具进行检查以确认没有其它错误。';

?>

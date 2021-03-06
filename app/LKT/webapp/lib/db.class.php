<?php
/**
 * [Laike System] Copyright (c) 2017-2020 laiketui.com
 * Laike is not a free software, it under the license terms, visited http://www.laiketui.com/ for more details.
 * 数据库操作常用方法
 * 作者：ketter
 */
require_once(MO_LIB_DIR . '/PDOAction.class.php');

/*
 * 更新、删除、新增操作，返回影响行数
 */
function lkt_execute($sql,$params = array()){
    $db=PDOAction::getInstance();
    $r = $db -> query($sql,$params);
    return $r;
}

/*
 * 获取单行数组
 */
function lkt_row($sql,$params = array()){
    $db=PDOAction::getInstance();
    $r = $db -> getOne($sql,$params);
    return $r;
}

/*
 * 获取多行数组
 */
function lkt_rows($sql,$params = array()){
    $db=PDOAction::getInstance();
    $r = $db -> getRows($sql,$params);
    return $r;
}


/*
 * 获取单行对象
 */
function lkt_get($sql,$params = array()){
    $db=PDOAction::getInstance();
    $r = $db -> selectOne($sql,$params);
    return $r;
}

/*
 * 获取多行对象
 */
function lkt_gets($sql,$params = array()){
    $db=PDOAction::getInstance();
    $r = $db -> select($sql,$params);
    return $r;
}


//开始事务
function lkt_start()
{
    $db=PDOAction::getInstance();
    $db->beginTransaction();
}

//提交事务
function lkt_commit()
{
    $db=PDOAction::getInstance();
    $db->commit();
}

//回滚事务
function lkt_rollback()
{
    $db=PDOAction::getInstance();
    $db->rollBack();
}


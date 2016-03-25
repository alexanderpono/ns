<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

<p>
   Получение данных при помощи ActiveRecord: <?php echo CHtml::link('db/ar', array('db/ar'), array('target' => 'db/ar')) ?> 
</p>

<p>
   Получение данных при помощи конструктора запроса: <?php echo CHtml::link('db/queryBuilder', array('db/queryBuilder'), array('target' => 'db/queryBuilder')) ?> 
</p>

<p>
   Получение данных при помощи SQL через DAO: <?php echo CHtml::link('db/sql', array('db/sql'), array('target' => 'db/sql')) ?> 
</p>

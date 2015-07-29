<?php

$config = array(
    'opinion' => array( //观点检测
        array(
            'field' => 'status',
            'label' => '审核状态',
            'rules' => 'required',
        ),
        array(
            'field' => 'view',
            'label' => '观点',
            'rules' => 'required',
        ),
    ),

	'comment' => array( //评论检测
		array(
			'field' => 'content',
			'label' => '用户评论',
			'rules' => 'required',
		),
	),
	
    'user' => array( //添加国家留学检测
        array(
            'field' => 'user_name',
            'label' => '用户名',
            'rules' => 'required',
        ),
        
    	array(
    		'field' => 'integral',
    		'label' => '用户积分',
    		'rules' => 'required',
    	),
    		
        array(
            'field' => 'mobile',
            'label' => '联系电话',
            'rules' => 'required',
        ),
    	
    	array(
    		'field' => 'brief',
    		'label' => '个人描述',
    		'rules' => 'required',
    	),  
    ),
    'jobs' => array( //观点检测
        array(
            'field' => 'position',
            'label' => '招聘职位',
            'rules' => 'required',
        ),
        array(
            'field' => 'salary',
            'label' => '薪资范围',
            'rules' => 'required',
        ),
        array(
            'field' => 'age',
            'label' => '工作年限',
            'rules' => 'required',
        ),
        array(
            'field' => 'education',
            'label' => '学历程度',
            'rules' => 'required',
        ),
        array(
            'field' => 'description',
            'label' => '职位详情',
            'rules' => 'required',
        ),
    ),
    'questions' => array( //问题检测
        array(
            'field' => 'type',
            'label' => '类型状态',
            'rules' => 'required',
        ),
        array(
            'field' => 'question',
            'label' => '问题',
            'rules' => 'required',
        ),
        array(
            'field' => 'answer',
            'label' => '回答',
            'rules' => 'required',
        ),
    ),
    'ne' => array( //新闻检测
        array(
            'field' => 'title',
            'label' => '文章标题',
            'rules' => 'required',
        ),
        
        array(
            'field' => 'source',
            'label' => '文章来源',
            'rules' => 'required',
        ),
        array(
            'field' => 'links',
            'label' => '文章链接',
            'rules' => 'required',
        ),
        array(
            'field' => 'abstract',
            'label' => '文章摘要',
            'rules' => 'required',
        ),
    ),
    'dy' => array( //动态检测
        array(
            'field' => 'title',
            'label' => '文章标题',
            'rules' => 'required',
        ),
    
    ),
);
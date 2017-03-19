<?php

// function rendering templates 
function render_header($header){
	require_once 'public/inc/template/'.$header.'.php';
}

// function rendering templates 
function render_template($template){
	require_once 'public/inc/template/'.$template.'.php';
}

function render_page($page, $title='template'){
			require_once 'public/inc/pages/'. $page.'.php';
		}

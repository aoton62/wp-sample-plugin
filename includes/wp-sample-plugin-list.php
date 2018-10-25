<?php
/**
*Class List Page
*
*@author  Aoto Iwata
*@version 1.0.0
*@since   1.0.0
*/
class Sample_Plugin_List {
	/**
	*Constructor
	*
	*@version 1.0.0
	*@since   1.0.0
	*/
	public function __construct() {
		$this->page_render();
	}
	/**
	*Rendering Page
	*
	*@version 1.0.0
	*@since   1.0.0
	*/

	private function page_render() {
		$html  = '<div class="wrap">';
		$html .= '<h1 class="wp-heading-inline">サンプル一覧</h1>';
		$html .= '<a href="" class="page-title-action">新規作成</a>';

		$html .= '<table>';
		$html .= '<tr><th>画像</th><th>画像ALT属性</th><th>表示方法</th><th>絞り込み</th></tr>';
		$html .= '<tr><td colspan="4">登録するものはありません</td></tr>';
		$html .= '</table>';
		$html .= '</div>';

		echo $html;
	}
}

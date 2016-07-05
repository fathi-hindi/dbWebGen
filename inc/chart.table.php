<?
	//==========================================================================================
	class dbWebGenChart_table extends dbWebGenChart_Google {
	//==========================================================================================
		
		//--------------------------------------------------------------------------------------
		public function settings_html() { 
		//--------------------------------------------------------------------------------------
			return <<<HTML
				<p>The query result will be visualized as a table.</p>
HTML;
		}
		
		//--------------------------------------------------------------------------------------
		protected function options() {			
		//--------------------------------------------------------------------------------------
			return parent::options();
		}
		
		//--------------------------------------------------------------------------------------
		// return google charts class name to instantiate
		public function class_name() {
		//--------------------------------------------------------------------------------------
			return 'google.visualization.Table';
		}
		
		//--------------------------------------------------------------------------------------
		// return google charts packages to include
		public function packages() {
		//--------------------------------------------------------------------------------------
			return array('table');
		}
	};
?>
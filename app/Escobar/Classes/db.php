<?php 

	namespace Escobar\Classes;
	use \PDO;

	use Carbon\Carbon;


	Class Db {



		private static  $instance = null; 


		public static function get_instance() {


			if(!isset(self::$instance)) {

				self::$instance = new Db;
			}



		}


		private $pdo,
				$stmt,
				$error = false,
				$count = 0,
				$result;

		private function __construct() {



			$this->pdo = new PDO("mysql:host=localhost;dbname=test", "root", "root");

			
		}


		public function query($sql, $fields = array()) {


				var_dump($fields);

		}



	}
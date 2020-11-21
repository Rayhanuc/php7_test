<!DOCTYPE html>
<html>
<head>
	<title>Abstract Factory Pattern More</title>
</head>
<body>
	<xmp>
		
	</xmp>
	<h1>Result:</h1>

	<?php
	abstract class AbstractDatabase{
		abstract function getConnection();
	}

	abstract class AbstractDatabaseFactory{
		abstract function create();
	}

	class MySQL extends AbstractDatabase{
		 function getConnection(){
			echo "MySQL Connection";
		}
	};

	class PostgreSQL extends AbstractDatabase{
		function getConnection(){
			echo "PostgreSQL Connection";
		}
	}

	class SQLServer extends AbstractDatabase{
		function getConnection(){
			echo "MySQL Connection";
		}
	}

	class MySQLFactory extends AbstractDatabaseFactory{
		function create(){
			return new MySQL();
		}
	}

	class PostgreSQLFactory extends AbstractDatabaseFactory{
		function create(){
			return new PostgreSQL();
		}
	}

	class SQLServerFactory extends AbstractDatabaseFactory{
		function create(){
			return new SQLServer();
		}
	}

	class DataBaseFactory{
		function getMySQLEngine(){
			return new MySQLFactory();
		}

		function getPostgreSQLEngine(){
			return new PostgreSQLFactory();
		}

		function getSQLServerEngine(){
			return new SQLServerFactory();
		}
	}

	$dbFactory = new DataBaseFactory();
	$mysqlFactory = $dbFactory->getMySQLEngine();
	$mysql = $mysqlFactory->create();
	$mysql->getConnection();
	echo "\n<br>";


	$pgSQLFactory = $dbFactory->getPostgreSQLEngine();
	$pgsql = $pgSQLFactory->create();
	$pgsql->getConnection();
	

	

	 ?>


</body>
</html>



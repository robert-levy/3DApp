<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/myDatabase.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm sorry. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	/**
	 * Create a table in the database connected to above 
	 */
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE modelContent (Id INTEGER PRIMARY KEY, title TEXT, modelDescrip TEXT,objectDescrip)");
			return "modelContent table is successfully created inside myDatabase.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO modelContent (Id, title, modelDescrip,objectDescrip) 
				VALUES (1, 'Shield Model', 'This model was created by drawing a spline the shape of a shield. It was capped, extruded and bevelled. The ProBoolean compound object was used to add the Celctic Cross embelem and the balls.','The Celtic cross is a form of Christian cross featuring a nimbus or ring that emerged in Ireland and Britain in the Early Middle Ages. The four arms of the Celtic cross are thought to be representative of the four directions of the compassion, the four elements of Fire, Earth, Air and Water, and as representation of our mind, soul, body and heart.'); " .
			"INSERT INTO modelContent (Id, title, modelDescrip,objectDescrip) 
				VALUES (2, 'Helmet Model', 'This model was created by manipulating basic shapes and using an array of objects to place them along a path. This ensured they were evenly spaced and sized.','These hats, although cheap, were not admired because they were considered only suitable for infantry and did not have the high grace or extravagance of a knightly helm like the bascinet or great helm. However, those who did use it proved that it was something worthwhile. In many films, English men-at-arms and foot soldiers are often seen wearing these helms. An extra benefit was that the rim protected from direct sunlight, preventing getting dazzled.'); " .
			"INSERT INTO modelContent (Id, title, modelDescrip,objectDescrip) 
				VALUES (3, 'Mace Model', 'This model was created using various modelling tools and the MassFX Rigid Body modifier to create the chains. The Pro Optimizer modifier was also used to limit the number of polygons and triangles used. ','During the Middle Ages metal armour such as mail protected against the blows of edged weapons. Solid metal maces and war hammers proved able to inflict damage on well armoured knights, as the force of a blow from a mace is great enough to cause damage without penetrating the armour. Though iron became increasingly common, copper and bronze were also used, especially in iron-deficient areas.'); " .
			"INSERT INTO modelContent (Id, title, modelDescrip,objectDescrip) 
				VALUES (4, 'Sword Model', 'This model has spotlights around it, which better illuminate the grooves and curvature of the object. Its animation simulates the motion of a sword fight.','Medieval swords were designed for different uses, some medieval swords were used for fast movements such as cut and thrust actions and were designed to be light for the quick movements that were needed in battle. There were a wide variety of sword designs that had different uses.'); ");
			return "model data inserted successfully inside myDatabase.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbDelete()
	{

	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM modelContent';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['title'] = $data['title'];
				$result[$i]['modelDescrip'] = $data['modelDescrip'];
				$result[$i]['objectDescrip'] = $data['objectDescrip'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	//Method to simulate the model data
	public function homepageExtraInfo()
	{
		// array to be indexed within homepage
		return array(
			'title' => 'Medieval Military',
			'info1' => 'In military affairs, the use of infantry with specialised roles increased. Along with the still-dominant heavy cavalry, armies often included mounted and infantry crossbowmen, as well as sappers and engineers. Crossbows, which had been known in Late Antiquity, increased in use partly because of the increase in siege warfare in the 10th and 11th centuries. The increasing use of crossbows during the 12th and 13th centuries led to the use of closed-face helmets, heavy body armour, as well as horse armour. Gunpowder was known in Europe by the mid-13th century with a recorded use in European warfare by the English against the Scots in 1304, although it was merely used as an explosive and not as a weapon. Cannon were being used for sieges in the 1320s, and hand-held guns were in use by the 1360s.'
		);
	}
}
?>
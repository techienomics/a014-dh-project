<?php #finbile db

    # porque esto no es una interface?
	abstract class DB{
        
        public abstract function getAll($dbPath);
		public abstract function getOneById($id);
        public abstract function insertOne($data);
        public abstract function deleteOneById($id);
        public abstract function customQuery($query);

	}

/*

# ------ Answers Table ------------
    id int NOT NULL AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    data_period date NOT NULL,
    data_value float,
    category_id int,
    country_id int,
	PRIMARY KEY (id),
    FOREIGN KEY (category_id) REFERENCES categories(id),
	FOREIGN KEY (country_id) REFERENCES countries(id)

# ------ Trivias Table ------------
    id int NOT NULL AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (id)

# ------ Trivia & User Table ------------
    id int NOT NULL AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    hit int NOT NULL,
    failure int NOT NULL,
    winner int NOT NULL,
    trivia_id int,
    user_id int,
	PRIMARY KEY (id),
	FOREIGN KEY (trivia_id) REFERENCES trivias(id),
    FOREIGN KEY (user_id) REFERENCES users(id)



# ------ Responses Table ------------
    id int NOT NULL AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	user_answer_ int NOT NULL,
    trivia_user_id int,
	PRIMARY KEY (id),
    FOREIGN KEY (trivia_user_id) REFERENCES trivia_user(id)


*/

?>



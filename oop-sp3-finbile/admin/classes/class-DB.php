<?php

	abstract class DB{
		
		public abstract function emailExist($email);
		public abstract function nicknameExist($nickname);
		public abstract function getUserByEmail($email);
		public abstract function saveUser(User $user);
		
	}

/*

# -----------------------------------------
# SCRIPT for Finbile Database
# -----------------------------------------

DATABASE finbile_db;

# ------ Countries Table ------------
    id int NOT NULL AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    name varchar(255) NOT NULL,
    code varchar(255) NOT NULL UNIQUE,
    continent varchar(255),
    income varchar(255),
	PRIMARY KEY (id)

# ------ Users Table ------------
    id int NOT NULL AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    last_name varchar(255),
    first_name varchar(255),
    email varchar(255) UNIQUE NOT NULL,
	password varchar(255),
    nickname varchar(255),
    gender varchar(255),
    birth date,
	profile_image varchar(255), # DEFAULT 'user-image.jpg'
    country_id int,
    PRIMARY KEY (id), 
    FOREIGN KEY (country_id) REFERENCES countries(id)

# ------ Categories Table ------------
    id int NOT NULL AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	topic varchar(255) NOT NULL,
    soft_name varchar(255) NOT NULL,
    series_name varchar(255),
    series_code varchar(255) NOT NULL UNIQUE,
    series_unit int,
	series_hint varchar(1000),
	series_source varchar(1000),
    series_definition varchar(8000),
	PRIMARY KEY (id)

# ------ Questions Table ------------
    id int NOT NULL AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    statement varchar(255) NOT NULL,
    operator varchar(255) NOT NULL,
    needed_answers int NOT NULL,
    response_time int NOT NULL,
    category_id int,
	PRIMARY KEY (id),
    FOREIGN KEY (category_id) REFERENCES categories(id)

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

# ------ Question & Answer Table ------------
    id int NOT NULL AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	trivia_id int,
    question_id int,
    answer_id int,
	correct_answer int NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (trivia_id) REFERENCES trivias(id),
    FOREIGN KEY (question_id) REFERENCES questions(id),
	FOREIGN KEY (answer_id) REFERENCES answers(id)

# ------ Responses Table ------------
    id int NOT NULL AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	user_answer_ int NOT NULL,
    trivia_user_id int,
	PRIMARY KEY (id),
    FOREIGN KEY (trivia_user_id) REFERENCES trivia_user(id)

# ------ Rankings Table ------------
    id int NOT NULL AUTO_INCREMENT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	subgroup varchar(255) NOT NULL,
    trivias int DEFAULT 0,
    hits int DEFAULT 0,
    failures int DEFAULT 0,
    user_id int,
    PRIMARY KEY (id), 
    FOREIGN KEY (user_id) REFERENCES users(id)

*/

?>



CREATE TABLE `registration-and-authentication`.users (
	id_user INT auto_increment NOT NULL,
	email_user varchar(100) NULL,
	password_user text NULL,
	CONSTRAINT users_pk PRIMARY KEY (id_user)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;

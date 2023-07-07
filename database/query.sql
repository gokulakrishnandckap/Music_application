


create database music_application;

-- use music_application;


create table users(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    username varchar(255),
    email varchar(255),
    password varchar(255),
    is_admin int,
    created_at timestamp,
    updated_at timestamp
    
    );


    INSERT INTO users(id,username,email,password,is_admin,created_at,updated_at)
VALUES(1,'gokul','gokul6100@gmail.com',12344,1,now(),now()),
(2,'vignesh','vignesh12@gmail.com',12344,0,now(),now()),
(3,'lokesh','lokesh45@gmail.com',12344,0,now(),now()),
(4,'yuvaraj','yuvaraj32@gmail.com',12344,0,now(),now());




create table songs(
	id int not null AUTO_INCREMENT PRIMARY KEY,
    name varchar(255),
    artist_id varchar(255),
    created_at timestamp,
    updated_at timestamp
    
    

);


create table images(
	id int not null AUTO_INCREMENT PRIMARY KEY,
    image_path varchar(255),
    model_id int,
    model_name varchar(255),
    created_at timestamp,
    updated_at timestamp
    

);

create table artist(
	id int not null AUTO_INCREMENT PRIMARY KEY,
    name varchar(255),
    image_path varchar(255),
    created_at timestamp,
    updated_at timestamp
    

);


create table songs(
	id int not null AUTO_INCREMENT PRIMARY KEY,
    name varchar(255),
    artist_id int,
    created_at timestamp,
    updated_at timestamp,
    
    FOREIGN key (artist_id) REFERENCES artist(id)
    
    
);

create table playlist(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    song_id int,
    created_at timestamp,
    updated_at timesTAMP,
    FOREIGN key (song_id) REFERENCES songs(id)
    );



    create table user_premium_request(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    FOREIGN KEY (user_id) REFERENCES users(id)
    );
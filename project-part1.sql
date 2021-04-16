-- Step 1: (5 points) Create and use a database called 'project01'
-- Ensure you check first if it already exists
-- CREATE YOUR DATABASE AND SET IT TO BE USED BELOW THIS LINE --
create database if not exists project01;
use project01;

-- Step 2: (30 points) Create a table called 'supers' (3 points) with the following fields
-- Ensure you use logical data types
-- Ensure you use the NULL and NOT NULL logically
-- Ensure you check first if it already exists
--    id (must be the primary key and auto incrementing) (5 points)
--    first_name (2 points)
--    last_name (2 points)
--    date_of_birth (2 points)
--    alias (2 points)
--    active (2 points)
--    hero (2 points)
--    created_at (default is the current date and time) (4 points)
--    updated_at (default is the current date and time but when updated it should update the date and time) (6 points)

-- * HINT: Only 2 of the data types are strings...

-- CREATE YOUR TABLE BELOW THIS LINE --
CREATE TABLE IF NOT EXISTS supers (

     id INT(11) NOT NULL AUTO_INCREMENT,
     first_name VARCHAR(30) NOT NULL,
     last_name VARCHAR(30) NOT NULL,
     date_of_birth date NOT NULL,
     alias varchar(20) NOT NULL,
     active tinyint NOT NULL,
     hero tinyint NOT NULL,
     created_at timestamp not null default current_timestamp,
     updated_at timestamp not null default current_timestamp on update current_timestamp,
     PRIMARY KEY (id)
);


-- TOTAL POINTS POSSIBLE: 35
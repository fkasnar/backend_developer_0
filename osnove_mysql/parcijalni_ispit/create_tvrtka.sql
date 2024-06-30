

--> table is created having in mind that:
-- we can check employees data
-- it is possible to know what is employee primary, secondary and third department and their position name
    --> it is possible to easily on a structured way give that employee a pay raise accordingly how many workspace it has
-- one employee can be head or a manager to one or more departments
-- database has archieve of all employees payrolls including their main salary, one-time and monthly bonuses and raises.
-- database can provide easy way to make monthly adjustment on salary per employee easily.



--> adding table without foreign keys (have too many in every table interconnected)

DROP DATABASE IF EXISTS tvrtka_parcijalni;

CREATE DATABASE IF NOT EXISTS tvrtka_parcijalni DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE tvrtka_parcijalni;

CREATE TABLE IF NOT EXISTS employees (
    employee_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    oib VARCHAR(11) NOT NULL,
    email VARCHAR(100),
    telephone VARCHAR(15) NOT NULL,
    department_id INT UNSIGNED NOT NULL,
    unique_salary_id VARCHAR(14) UNIQUE,
    work_complexity_id VARCHAR(11)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS departments (
    department_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    department_name VARCHAR(50),
    head_id INT UNSIGNED,
    manager_id INT UNSIGNED
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS head (
    head_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    department_id INT UNSIGNED,
    employee_id INT UNSIGNED
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS manager (
    manager_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    department_id INT UNSIGNED,
    employee_id INT UNSIGNED
) ENGINE=InnoDB;

-- PLAĆE --------------------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS salary_grades (
    salary_id VARCHAR(14) NOT NULL PRIMARY KEY,
    position_name VARCHAR(50),
    department_id INT UNSIGNED,
    salary DECIMAL(10,2)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS position_salary_adjustment (
    work_complexity_id VARCHAR(11) NOT NULL PRIMARY KEY,
    work_adjustment_name VARCHAR(50),
    amount DECIMAL(10,2)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS reward_one_time (
    reward_id VARCHAR(14) NOT NULL PRIMARY KEY,
    adjustment_name VARCHAR(50),
    amount DECIMAL(10,2)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS adjustment_monthly (
    monthly_adjustment_id VARCHAR(14) NOT NULL PRIMARY KEY,
    adjustment_name VARCHAR(50),
    amount DECIMAL(10,2)
) ENGINE=InnoDB;

-- KROVNA TABLICA ZA PLAĆE :

CREATE TABLE IF NOT EXISTS salary_archieve (
    unique_salary_id VARCHAR(14) NOT NULL PRIMARY KEY,
    date_created DATE,
    payroll_date DATE,
    salary_id VARCHAR(14),
    work_complexity_id VARCHAR(11),
    reward_id VARCHAR(14),
    monthly_adjustment_id VARCHAR(14),
) ENGINE=InnoDB;


--------------------------------------------------------------------------------------------------------------------------------------------

--> setting up foreign keys to existing tables

ALTER TABLE employees 
ADD CONSTRAINT fk_employees_department_id FOREIGN KEY (department_id) REFERENCES departments(department_id),
ADD CONSTRAINT fk_employees_work_complexity_id FOREIGN KEY (work_complexity_id) REFERENCES position_salary_adjustment(work_complexity_id);

ALTER TABLE departments 
ADD CONSTRAINT fk_departments_head_id FOREIGN KEY (head_id) REFERENCES head(head_id),
ADD CONSTRAINT fk_departments_manager_id FOREIGN KEY (manager_id) REFERENCES manager(manager_id);

ALTER TABLE head 
ADD CONSTRAINT fk_head_department_id FOREIGN KEY (department_id) REFERENCES departments(department_id),
ADD CONSTRAINT fk_head_employee_id FOREIGN KEY (employee_id) REFERENCES employees(employee_id);

ALTER TABLE manager 
ADD CONSTRAINT fk_manager_department_id FOREIGN KEY (department_id) REFERENCES departments(department_id),
ADD CONSTRAINT fk_manager_employee_id FOREIGN KEY (employee_id) REFERENCES employees(employee_id);

ALTER TABLE salary_grades 
ADD CONSTRAINT fk_salary_grades_department_id FOREIGN KEY (department_id) REFERENCES departments(department_id);

ALTER TABLE salary_archieve 
ADD CONSTRAINT fk_salary_archieve_salary_id FOREIGN KEY (salary_id) REFERENCES salary_grades(salary_id),
ADD CONSTRAINT fk_salary_archieve_work_complexity_id FOREIGN KEY (work_complexity_id) REFERENCES position_salary_adjustment(work_complexity_id),
ADD CONSTRAINT fk_salary_archieve_reward_id FOREIGN KEY (reward_id) REFERENCES reward_one_time(reward_id),
ADD CONSTRAINT fk_salary_archieve_monthly_adjustment_id FOREIGN KEY (monthly_adjustment_id) REFERENCES adjustment_monthly(monthly_adjustment_id);
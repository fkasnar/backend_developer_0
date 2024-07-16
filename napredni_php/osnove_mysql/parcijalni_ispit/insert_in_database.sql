
--> Because we are working here with complex database with multiple foreign keys per table, we must structure a way of inserting data in table.
--> Firstly, we will insert primary keys and attribute data to every table, after that we will continue with inserting foreign keys.


--> for this tables we dont need any special approach

-->position_salary_adjustment
INSERT INTO position_salary_adjustment (work_complexity_id, work_adjustment_name, amount) VALUES
('100', 'Primary Workspace only', 0.00),
('111', 'Secondary Workspace - Marketing', 150.00),
('112', 'Secondary Workspace - Sales', 70.00),
('113', 'Secondary Workspace - Customer Support', 90.00),
('114', 'Third Workspace - Marketing', 180.00),
('115', 'Third Workspace - Sales', 90.00),
('116', 'Third Workspace - Customer Support', 110.00);


-->reward_one_time
INSERT INTO reward_one_time (reward_id, adjustment_name, amount) VALUES
('117', 'Monthly-Bonus S', 500.00),
('118', 'Monthly-Bonus M', 1000.00),
('119', 'Monthly-Bonus L', 2000.00),
('120', 'Yearly - Bonus +', 2500.00),
('121', 'Yearly - Bonus ++', 4000.00),
('122', 'Yearly - Bonus ++', 7000.00),
('100', 'No Bonus', 0.00);

-->adjustment_monthly
INSERT INTO adjustment_monthly (monthly_adjustment_id, adjustment_name, amount) VALUES
('123', 'Trafficing', 55.00),
('124', 'INFLATION', 0.05);


-----------------------------------------------------------------------------------------------------------------------------------------

-->departments - adding primary/attribute data
INSERT INTO departments (department_id, department_name) VALUES
(222, "Marketing"),
(223, "Sales"),
(224, "Customer Support");


-->head
INSERT INTO head (head_id, department_id) VALUES
(1, 222),
(2, 223),
(3, 224);

-->manager
INSERT INTO manager (manager_id, department_id) VALUES
(1, 222),
(2, 223),
(3, 224);

------------------------------------------------------
-->departments - adding foreign keys

UPDATE departments
SET head_id = 1, manager_id = 1
WHERE department_id = 222;

UPDATE departments
SET head_id = 2, manager_id = 2
WHERE department_id = 223;

UPDATE departments
SET head_id = 3, manager_id = 3
WHERE department_id = 224;


--------------------------------------------------------

-->salary_grades
INSERT INTO salary_grades (salary_id, position_name, department_id, salary) VALUES
('211', 'Junior Marketing Specialist', 222, 1000.00),
('212', 'Marketing Specialist', 222, 1250.00),
('213', 'Senior Marketing Specialist', 222, 1400.00),
('214', 'Marketing Lead Manager', 222, 1800.00),
('215', 'Head of Marketing', 222, 3000.00),
('221', 'Junior Sales Specialist', 223, 850.00),
('222', 'Sales Specialist', 223, 900.00),
('223', 'Senior Sales Specialist', 223, 950.00),
('224', 'Sales Lead Manager', 223, 1500.00),
('225', 'Head of Sales', 223, 2900.00),
('331', 'Junior Customer Specialist', 224, 900.00),
('332', 'Customer Specialist', 224, 1000.00),
('333', 'Senior Customer Specialist', 224, 1200.00),
('334', 'Customer Support Lead Manager', 224, 1600.00),
('335', 'Head of Customer Support', 224, 2200.00);

----------------------------------------------------------------

--> salary_archieve
INSERT INTO salary_archieve (
    unique_salary_id, date_created, payroll_date, salary_id, work_complexity_id, reward_id, monthly_adjustment_id, amount
) VALUES (
    '53486413151234', '2024-01-04', '2024-04-01', '214', '115', '120', '123', 123
),(
    '53486413191234', '2023-05-31', '2023-06-01', '223', '100', '100', '123', 123
);

-->employees
INSERT INTO employees (employee_id, name, surname, oib, email, telephone, department_id, unique_salary_id, work_complexity_id) VALUES
(11245, 'PERO', 'PERIC', '12345678910', 'pero.peric@tvrtka.com', '385915554444', 222, '53486413151234', '115'),
(11246, 'JURA', 'JURIC', '10987654321', 'jura.juric@tvrtka.com', '385915555555', 224, '53486413161234', 112),
(11247, 'IVANKA', 'IVANKOVIC', '10769854231', 'ivanka.ivankic@tvrtka.com', '385564516354', 222, '53486413171234', 112),
(11248, 'JOŽA', 'JOŽIĆ', '54534545354', 'joza.jozic@tvrtka.com', '385926584231', 223, '53486413181234', 114),
(11249, 'CRNOGORAC', 'CRNOGORSKI', '35485153454', 'crnogorac.crnogorski@tvrtka.com', '3859923132121', 223, '53486413191234', '100');

-->head
UPDATE head
SET employee_id = 11248
WHERE head_id = 1;

UPDATE head
SET employee_id = 11248
WHERE head_id = 2;

UPDATE head
SET employee_id = 11248
WHERE head_id = 3;

-->manager
UPDATE manager
SET employee_id = 11245
WHERE manager_id = 1;

UPDATE manager
SET employee_id = 11245
WHERE manager_id = 2;

UPDATE manager
SET employee_id = 11246
WHERE manager_id = 3;




---------------------------------------------------------------------

INSERT INTO salary_archieve (
    unique_salary_id, 
    date_created, 
    payroll_date, 
    salary_id, 
    work_complexity_id, 
    reward_id, 
    monthly_adjustment_id
) VALUES (
    '53486413161234', '2023-05-31', '2023-06-01', '334', '112', '119', '123'
), (
    '53486413171234', '2024-04-01', '2024-04-01', '222', '112', '118', '123'
), (
    '53486413181234', '2023-05-31', '2023-06-01', '225', '114', '122', '123'
);
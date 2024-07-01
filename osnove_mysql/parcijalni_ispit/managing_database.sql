
--additional
--Pregled platnih razreda i mogucih bonusa:
    SELECT salary AS Plaća FROM salary_grades;
    SELECT amount AS Dodatak1 FROM position_salary_adjustment;
    SELECT amount AS Bonus FROM reward_one_time;
    SELECT amount AS Dodatak2 FROM adjustment_monthly;


--ASSIGNMENT:
--Dohvatite sve zaposlenike i njihove plaće.
-- Dohvatite sve voditelje odjela i izračunajte prosjek njihovih plaća.
-- Kreirajte proceduru koja će računati prosjek plaća svih zaposlenika.

--------------------------------------------------------------------------------------------------------------------------------

--Dohvatite sve zaposlenike i njihove plaće.

--> primjer samo dohvat osnovne plaće:

DELIMITER //

CREATE PROCEDURE plaće_od_do(
    IN od_datuma DATE,
    IN do_datuma DATE
)
BEGIN
    SELECT 
        e.name AS Ime, 
        e.surname AS Prezime, 
        sa.unique_salary_id AS Referentni_broj,
        sg.salary AS Osnovna_Plaća
    FROM 
        employees e
    JOIN 
        salary_archieve sa ON e.unique_salary_id = sa.unique_salary_id
    JOIN 
        salary_grades sg ON e.department_id = sg.department_id
    WHERE
        sg.salary_id = sa.salary_id AND
        sa.payroll_date BETWEEN startDate AND endDate;
END //

DELIMITER ;

CALL plaće_od_do('2023-06-01', '2023-06-30');


--> primjer zbroja svih dodataka na placu:

DELIMITER //

CREATE PROCEDURE plaće_sa_dodacima()
BEGIN
    SELECT 
        e.name AS Ime, 
        e.surname AS Prezime, 
        sa.unique_salary_id AS Referentni_broj,
        sg.salary AS Osnovna_Plaća,
        psa.amount AS Dodatni_poslovi,
        r.amount AS Bonus,
        m.amount AS Dodatak,
        (sg.salary + COALESCE(psa.amount, 0) + COALESCE(r.amount, 0) + COALESCE(m.amount, 0)) AS Total_Salary
    FROM 
        employees e
    JOIN 
        salary_archieve sa ON e.unique_salary_id = sa.unique_salary_id
    JOIN 
        salary_grades sg ON sa.salary_id = sg.salary_id
    LEFT JOIN 
        position_salary_adjustment psa ON sa.work_complexity_id = psa.work_complexity_id
    LEFT JOIN 
        reward_one_time r ON sa.reward_id = r.reward_id
    LEFT JOIN 
        adjustment_monthly m ON sa.monthly_adjustment_id = m.monthly_adjustment_id
    WHERE
        sg.department_id = e.department_id;
END //

DELIMITER ;


CALL plaće_sa_dodacima();


-- Dohvatite sve voditelje odjela i izračunajte prosjek njihovih plaća.

--head
DELIMITER //

CREATE PROCEDURE placi_head()
BEGIN
    SELECT 
        h.head_id AS placa_head,
        e.name AS Ime,
        e.surname AS Prezime,
        sg.salary AS Osnovna_Placa,
        COALESCE(psa.amount, 0) AS Dodatni_poslovi,
        COALESCE(r.amount, 0) AS Bonus,
        COALESCE(m.amount, 0) AS Dodatak,
        (sg.salary + COALESCE(psa.amount, 0) + COALESCE(r.amount, 0) + COALESCE(m.amount, 0)) AS Ukupna_Placa
    FROM 
        head h
    JOIN 
        employees e ON h.employee_id = e.employee_id
    JOIN 
        salary_archieve sa ON e.unique_salary_id = sa.unique_salary_id
    JOIN 
        salary_grades sg ON sa.salary_id = sg.salary_id
    LEFT JOIN 
        position_salary_adjustment psa ON sa.work_complexity_id = psa.work_complexity_id
    LEFT JOIN 
        reward_one_time r ON sa.reward_id = r.reward_id
    LEFT JOIN 
        adjustment_monthly m ON sa.monthly_adjustment_id = m.monthly_adjustment_id;
END //

DELIMITER ;
CALL placi_head();



--manager
DELIMITER //

CREATE PROCEDURE plaće_managera()
BEGIN
    SELECT 
        h.head_id AS Voditelj,
        e.name AS Ime,
        e.surname AS Prezime,
        sg.salary AS Osnovna_Plaća,
        COALESCE(psa.amount, 0) AS Dodatni_poslovi,
        COALESCE(r.amount, 0) AS Bonus,
        COALESCE(m.amount, 0) AS Dodatak,
        (sg.salary + COALESCE(psa.amount, 0) + COALESCE(r.amount, 0) + COALESCE(m.amount, 0)) AS Ukupna_Plaća
    FROM 
        head h
    JOIN 
        employees e ON h.employee_id = e.employee_id
    JOIN 
        salary_archieve sa ON e.unique_salary_id = sa.unique_salary_id
    JOIN 
        salary_grades sg ON sa.salary_id = sg.salary_id
    LEFT JOIN 
        position_salary_adjustment psa ON sa.work_complexity_id = psa.work_complexity_id
    LEFT JOIN 
        reward_one_time r ON sa.reward_id = r.reward_id
    LEFT JOIN 
        adjustment_monthly m ON sa.monthly_adjustment_id = m.monthly_adjustment_id;
END //

DELIMITER ;

CALL plaće_managera();


-- Kreirajte proceduru koja će računati prosjek plaća svih zaposlenika.
-- izračun za lipanj 2024.


DELIMITER //

CREATE PROCEDURE prosjek_place_06_2024()
BEGIN
SELECT 
    AVG(
        sg.salary + 
        COALESCE(psa.amount, 0) + 
        COALESCE(r.amount, 0) + 
        COALESCE(m.amount, 0)
    ) AS Prosječna_Plaća
FROM 
    employees e
JOIN 
    salary_archieve sa ON e.unique_salary_id = sa.unique_salary_id
JOIN 
    salary_grades sg ON sa.salary_id = sg.salary_id
LEFT JOIN 
    position_salary_adjustment psa ON sa.work_complexity_id = psa.work_complexity_id
LEFT JOIN 
    reward_one_time r ON sa.reward_id = r.reward_id
LEFT JOIN 
    adjustment_monthly m ON sa.monthly_adjustment_id = m.monthly_adjustment_id
WHERE
    sa.payroll_date BETWEEN '2023-06-01' AND '2023-06-30';  -- Lipanj 2023. godine
END //

DELIMITER ;

CALL prosjek_place_06_2024();
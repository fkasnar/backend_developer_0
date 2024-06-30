--ASSIGNMENT:


--> primjer samo dohvat osnovne plaće:
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
    sg.salary_id = sa.salary_id; 


--> primjer zbroja svih dodataka na placu:
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


-- Kreirajte proceduru koja će računati prosjek plaća svih zaposlenika.
SELECT 
    AVG(sg.salary + COALESCE(psa.amount, 0) + COALESCE(r.amount, 0) + COALESCE(m.amount, 0)) AS Prosječna_Plaća
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




-- Dohvatite sve voditelje odjela i izračunajte prosjek njihovih plaća.
--head
SELECT 
    h.head_id AS ID_Head_Department,
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

--manager
SELECT 
    mgr.manager_id AS Menadžer_ID,
    e.name AS Ime,
    e.surname AS Prezime,
    sg.salary AS Osnovna_Plaća,
    COALESCE(psa.amount, 0) AS Radna_Complexity_Popust,
    COALESCE(r.amount, 0) AS Nagrada,
    COALESCE(m.amount, 0) AS Mjesečna_Akorda,
    (sg.salary + COALESCE(psa.amount, 0) + COALESCE(r.amount, 0) + COALESCE(m.amount, 0)) AS Ukupna_Plaća
FROM 
    manager mgr
JOIN 
    employees e ON mgr.employee_id = e.employee_id
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

--Dohvatite sve zaposlenike i njihove plaće.
SELECT 
    e.employee_id AS Zaposlenik_id,
    e.name AS Ime,
    e.surname AS Prezime,
    sg.salary AS Osnovna_Plaća,
    COALESCE(psa.amount, 0) AS Dodatni_poslovi,
    COALESCE(r.amount, 0) AS Bonus,
    COALESCE(m.amount, 0) AS Dodatak,
    (sg.salary + COALESCE(psa.amount, 0) + COALESCE(r.amount, 0) + COALESCE(m.amount, 0)) AS Ukupna_Plaća
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
    adjustment_monthly m ON sa.monthly_adjustment_id = m.monthly_adjustment_id;

--additional

--Pregled platnih razreda i mogucih bonusa:
    SELECT salary AS Plaća FROM salary_grades;
    SELECT amount AS Dodatak1 FROM position_salary_adjustment;
    SELECT amount AS Bonus FROM reward_one_time;
    SELECT amount AS Dodatak2 FROM adjustment_monthly;

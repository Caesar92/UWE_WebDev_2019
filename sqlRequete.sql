/* Récupération des modules d'un étudiant */

SELECT S.id_student, M.name_module, M.number_module,C.name_component,C.coeff_component,MC.mark
FROM student S
JOIN mark_component MC ON S.id_student=MC.id_studient
JOIN component C ON C.id_component=MC.id_component
JOIN module M ON M.id_module=C.id_module
WHERE id_student=1

/* Récupération des modules qui n'ont pas de notes
*/
SELECT M.name_module,M.number_module,C.name_component,C.coeff_component
FROM module M
JOIN component C ON C.id_module=M.id_module
WHERE M.id_module IN
(SELECT SM.id_module
FROM student_module SM
WHERE SM.id_studient=1 AND SM.id_module NOT IN (
SELECT C.id_module
 FROM component C
 JOIN mark_component MC ON MC.id_component=C.id_component
WHERE MC.id_studient=1
));

/* Récupération de tous les élèves d'un module avec leu moyenne */
SELECT P.firstname_person,P.lastname_person, AVG(MC.mark)AS "Average"
FROM component C
	JOIN mark_component MC ON MC.id_component=C.id_component
	JOIN student S ON S.id_student=MC.id_studient
	JOIN person P ON P.id_person=S.id_student
WHERE C.id_module=5
GROUP BY P.id_person

/* Récupération de tous les étudiants d'un module qui n'ont pas de notes */
SELECT P.firstname_person, P.lastname_person
                FROM person P
                    JOIN student S ON S.id_student=P.id_person
                    JOIN student_module SM ON SM.id_studient=S.id_student
                WHERE SM.id_module=2 AND S.id_student NOT IN 
                (SELECT MC.id_studient
                FROM mark_component MC
                JOIN component C ON C.id_component=MC.id_component
                WHERE C.id_module=2);



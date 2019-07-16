/* Récupération des modules d'un étudiant */

SELECT S.id_student, M.name_module, M.number_module,C.name_component,C.coeff_component,MC.mark
FROM student S
JOIN mark_component MC ON S.id_student=MC.id_studient
JOIN component C ON C.id_component=MC.id_component
JOIN module M ON M.id_module=C.id_module
WHERE id_student=1

/* Récupération des modules qui n'ont pas de notes
*/
SELECT SM.id_module
FROM student_module SM
WHERE SM.id_studient=1 AND SM.id_module NOT IN (
SELECT C.id_module
 FROM component C
 JOIN mark_component MC ON MC.id_component=C.id_component
WHERE MC.id_studient=1
);



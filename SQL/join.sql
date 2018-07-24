/**
 *	display an article (id=10) and its author using a join
 */

SELECT * FROM `articles`
JOIN `users`
WHERE articles.id = 10
AND users.id = articles.id_user;
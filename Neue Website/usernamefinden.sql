SELECT * 
FROM 
(SELECT user_from, user_to, message FROM benutzer LEFT JOIN chatverlauf ON userid WHERE userid=1 ORDER BY TIMESTAMP) a 
LEFT JOIN 
benutzer ON a.user_to = userid
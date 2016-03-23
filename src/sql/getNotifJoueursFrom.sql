SELECT jn.id_notifications, jn.seen, 
n.titre, n.message, n.date 
FROM joueurs_notifications as jn
LEFT JOIN notifications as n
ON n.id_notifications = jn.id_notifications
WHERE id_joueurs=:idj AND n.date>:fd
ORDER BY n.date DESC;
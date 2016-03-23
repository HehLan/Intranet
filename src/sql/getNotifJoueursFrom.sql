SELECT jn.id_notifications, jn.seen, 
n.titre, n.message, jn.date 
FROM joueurs_notifications as jn
LEFT JOIN notifications as n
ON n.id_notifications = jn.id_notifications
WHERE id_joueurs=:idj AND jn.date>:fd
ORDER BY jn.date DESC;
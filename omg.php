<!DOCTYPE html>
<html lang="fr">
    <head>
        <script src="lib/jQuery/jquery-2.2.1.min.js"></script>
    </head>

    <body role="document"> 
        <input type="text"/>
    </body>


<?php
echo '<script type="text/javascript">
$(document).ready(function () {
        console.log("connecting to the sockets");
        connectToSocketsServer();
});

function connectToSocketsServer() {
    var host = "ws://10.10.10.220:8686/websockets"; // SET THIS TO YOUR SERVER
    try {
        socket = new WebSocket(host);

        // quand on recoit une notif du serveur 
        socket.onmessage = function (msg) {
            console.log("Socket - message received: " + msg.data);

            switch (msg.data) {
                case "identificate" :
                    console.log("receved message");
                    break;
            }
        }
    } catch (ex) {
        console.log(ex);
    }       
}
</script>';
?>

</html>
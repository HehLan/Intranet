$("#bloc_chat_message").keyup(function (event)
{
    if (event.keyCode === 13)
    {
        $("#bloc_chat_bouton").click();
    }
});

afficher(0);
users();



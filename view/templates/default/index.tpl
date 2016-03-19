{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="default/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/index.css" />
    </head>
    <body role="document">
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}
        <div id="container" class="container-fluid">
            <div class="row">
                <div id="bloc_news" class="col-lg-6 col-xs-12">
                    <h3>News</h3>
                    {section name=sec1 loop=$newsList}
                        <div class="une_news" id="bloc_news_{$newsList[sec1].id_news}">
                            <div class="titre_news" id="titre_news_{$newsList[sec1].id_news}" onclick="news_toggle({$newsList[sec1].id_news});">
                                {$newsList[sec1].titre|nl2br}
                                <div class="date_news" id="footer_news_{$newsList[sec1].id_news}">
                                    {$newsList[sec1].quand}
                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_{$newsList[sec1].id_news}">
                                {$newsList[sec1].texte|nl2br}
                            </div>
                        </div>
                    {/section}
                </div>		
                <div id="bloc_chat" class="col-lg-6 col-xs-12">
                    {if $con}
                        <h3>HEHLan Tchat</h3>
                        {if $chat}
                            <div id="bloc_chat_box">
                                <div id="bloc_chat_texte"></div>
                                <div id="bloc_chat_users">
                                    <strong>Connectés :</strong><br>				
                                </div>
                                <div id="bloc_chat_send">
                                    <input type="text" name="message" id="bloc_chat_message" />
                                    <input type="button" value="Envoyer" id="bloc_chat_bouton" onclick="ecrire();" />
                                </div>
                            </div>
                        {else}
                            <div id="bloc_chat_texte">			
                                <strong>Sorry les gars ... le chat est désactivé :o/</strong>
                            </div>
                        {/if}
                    {/if}
                </div>
            </div>			
        </div>
        {include file="default/footer.tpl"}
        <script type="text/javascript" src="{#assets#}/js/index.js"></script>
        {if $chat}
            <script type="text/javascript" src="{#assets#}/js/chat.js"></script>
        {/if}
    </body>
</html>
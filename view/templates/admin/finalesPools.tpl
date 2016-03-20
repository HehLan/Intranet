{* Smarty *}
<!DOCTYPE HTML>
<html>
    <head>
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/finalesPools.css" >
        <script type="text/javascript" src="{#adminAssets#}/js/finales.js"></script>
        <!--<script type="text/javascript" src="{#domain#}/lib/jQuery/bracket/jquery.gracket.js"></script>  -->

        <!-- jquery-bracket -->
        <link rel="stylesheet" type="text/css" href="{#domain#}/lib/jQuery/jquery.bracket.min.css" />


    </head>
    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }

        <div id="container">
            <div id="contenu">
                <h1>Finales de {$tournoi['nomTournoi']} {$gsb[$looser]}</h1>


                
                <h2>Nouveau système de gestion des finales</h2> 
                
                <div id="bracket-pools-admin" class="bracket"></div> 
                <p id="saveOutput"></p>
                <p id="dataOutput"></p>
                <div id="resultat"></div>
                <input type="submit" id="submit" value="test" />


                <h2>Ancien système de gestion des finales</h2>
                <form method="POST" action="modules/finale_save.php">
                    <input type="hidden" name="id_tournoi" value="{$tournoi['id_tournoi']}">
                    <input type="hidden" name="looser" value="{$looser}">
                    <input type="submit" value="Enregistrer"><br><br>
                    {if {$matches|@count} > 0}
                        <table>
                            <tr>
                                {for $c=$niveau to 0 step -1}
                                    <th> Round {1+$niveau-$c} </th>
                                    {/for}
                            </tr>
                            <tr>
                                {for $c=$niveau to 0 step -1}
                                    <td>
                                        <table>
                                            {for $m=1 to $match_par_niveau[$c]-1}


                                                {if $c==0}
                                                    {if $m==1}
                                                        <tr class="tr_arbre_vide">
                                                            <td class="td_finale_vide" colspan="3">
                                                                FINALE
                                                            </td>
                                                        </tr>
                                                    {elseif $m==2}
                                                        <tr class="tr_arbre_vide">
                                                            <td class="td_finale_vide" colspan="3">
                                                                Petite Finale
                                                            </td>
                                                        </tr>
                                                    {/if}
                                                {/if}

                                                <input type="checkbox" name="cb_s_{$tablo[$c][$m]}_1" onclick="active_select({$tablo[$c][$m]})">
                                                <br> 
                                                <select name="m_{$tablo[$c][$m]}_1" id="m_{$tablo[$c][$m]}_1" onchange="select_change({$tablo[$c][$m]}, 1)" disabled="disabled">
                                                    <option value="0"></option>
                                                    <select name="m_{$tablo[$c][$m]}_2" id="m_{}$tablo[$c][$m]}_2" onchange="select_change({$tablo[$c][$m]}, 2)" disabled="disabled">
                                                        <option value="0"></option>






                                                        {foreach from=$equipes item=equipe}
                                                            <!--	
                                                               
                                                               $nom1.='<option value="'.$equipe['id'].'"';
                                                               $nom2.='<option value="'.$equipe['id'].'"';
                                                               if(isset($matches[$tablo[$c][$m]][1]['id']))
                                                               {
                                                                       if ($matches[$tablo[$c][$m]][1]['id']==$equipe['id'])
                                                                       {
                                                                               $nom1.='selected';
                                                                               $id_score1=$equipe['id'];
                                                                       }	
                                                                       $score1=$matches[$tablo[$c][$m]][1]['score'];
                                                               }
                                                               if(isset($matches[$tablo[$c][$m]][2]['id']))
                                                               {
                                                                       if ($matches[$tablo[$c][$m]][2]['id']==$equipe['id']) 
                                                                       {
                                                                               $nom2.='selected';
                                                                               $id_score2=$equipe['id'];
                                                                       }	
                                                                       $score2=$matches[$tablo[$c][$m]][2]['score'];
                                                               }								
                                                               $nom1.=' >'.$equipe['nom'].'</option>';
                                                               $nom2.=' >'.$equipe['nom'].'</option>';
                                                           
                                                            -->    
                                                        {/foreach}


                                                        <!--
                                                        $clr1='1';
                                                        if($score1>$score2) $clr1='win';
                                                        $clr2='2';
                                                        if($score2>$score1) $clr2='win';
                                                        $fleche='->';						
                                                        if($c==0)
                                                        {
                                                                if($m==1) 	echo '<tr class="tr_arbre_vide"><td class="td_finale_vide" colspan="3">FINALE</td></tr>';
                                                                if($m==2) 	echo '<tr class="tr_arbre_vide"><td class="td_finale_vide" colspan="3">Petite Finale</td></tr>';
                                                                $fleche='';
                                                        }
                                                        -->


                                                        <tr>
                                                            <td class="td_arbre_gauche"></td>
                                                            <td class="td_arbre_team2" colspan="2">
                                                                <a href="#" onclick="popup_heure({$tablo[$c][$m]})">
                                                                    get_jour_de_la_semaine({$matches[$tablo[$c][$m]]['heure']})
                                                                    get_heure({$matches[$tablo[$c][$m]]['heure']})
                                                                </a>
                                                            </td>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td_arbre_gauche" rowspan="2">#{$tablo[$c][$m]}</td>
                                                            <td class="td_arbre_team{$matches[$tablo[$c][$m]]['clr1']}">{$matches[$tablo[$c][$m]]['nom1']}</td>
                                                            <td class="td_arbre_score{$matches[$tablo[$c][$m]]['clr1']}">
                                                                <input type="checkbox" name="cb_{$tablo[$c][$m]}_1" onclick="active_score({$tablo[$c][$m]})"> 
                                                                <input type="hidden" name="s_{$tablo[$c][$m]}_1_id" id="s_{$tablo[$c][$m]}_1_id" value="{$matches[$tablo[$c][$m]]['score1']}" >
                                                                <input type="text" name="s_{$tablo[$c][$m]}_1" id="s_{$tablo[$c][$m]}_1" value="{$matches[$tablo[$c][$m]]['score1']}" size="3"  disabled="disabled">
                                                            </td>
                                                            <td class="td_arbre_droite" rowspan="2">{$matches[$tablo[$c][$m]]['fleche']} {$matches[$tablo[$c][$m]]['id_parent']}</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="td_arbre_team{$matches[$tablo[$c][$m]]['clr2']}">{$matches[$tablo[$c][$m]]['nom2']}</td>
                                                            <td class="td_arbre_score{$matches[$tablo[$c][$m]]['clr2']}">		
                                                                <input type="hidden" name="s_{$tablo[$c][$m]}_2_id" id="s_{$tablo[$c][$m]}_2_id" value="{$matches[$tablo[$c][$m]]['score2']}">								
                                                                <input type="text" name="s_{$tablo[$c][$m]}_2" id="s_{$tablo[$c][$m]}_2" value="{$matches[$tablo[$c][$m]]['score2']}" size="3" disabled="disabled">
                                                            </td>							
                                                        </tr>	
                                                        <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_vide" colspan="3"></td>
                                                        </tr>                                      
                                                    {/for}
                                                </table>
                                            </td>
                                        {/for}
                                    </tr>
                                </table>
                            {else}
                                Ce tournoi n'est pas encore encodé dans la base de données du site.
                            {/if}
                        </form>
                    </div>

                </div>
                {include file="admin/footer.tpl"}




                <!-- jquery-bracket -->
                <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.bracket.min.js"></script>

                <script> 
                    
                    
                    var id = {$tournoi.id_tournoi};
                    var saveData = '';

                    // Getting the bracket
                    $.ajax(
                    {
                        url: 'modules/bracket_get.php?id_tournoi=' + id,
                        type: 'GET',
                        dataType: 'text',
                        success: function (text, status)
                        {
                            saveData = JSON.parse(text);
                        },
                        error: function (resultat, statut, erreur)
                        {

                        },
                        complete: function (resultat, statut)
                        {

                        },
                        async: false
                    }); 
                                
                    
                    /* Called whenever bracket is modified
                     *
                     * data:     changed bracket object in format given to init
                     * userData: optional data given when bracket is created.
                     */
                    function saveFn(data, userData)
                    {
                        alert('Votre modification a été apportée');
                        //var json = jQuery.toJSON(data);
                        //$('#saveOutput').text('POST '  + json);
                        $.ajax(
                            {
                                url : 'modules/bracket_save.php',
                                type : 'POST',
                                data : "data=" + JSON.stringify(data) + "&id_tournoi=" + {$tournoi.id_tournoi},
                                dataType : 'text'
                            }                                         
                        ); 
                    };

                    $(function ()
                    {
                        var container = $('#bracket-pools-admin');
                        container.bracket(
                            {
                                init: saveData,
                                save: saveFn,
                                userData: "http://myapi"
                            }
                        );                       

                        /* You can also inquiry the current data */
                        //var data = container.bracket('data');
                        
                    });

                </script>






            </body>
        </html>
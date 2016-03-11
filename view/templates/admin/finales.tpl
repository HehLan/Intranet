{* Smarty *}
<!DOCTYPE html>
<html>
    <head>
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/finales.css" >
        <script type="text/javascript" src="{#domain#}/src/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/src/js/getXhr.js"></script>
        <script type="text/javascript">
            function select_change(idm,ide)
            {
                    document.getElementById('s_'+idm+'_'+ide+'_id').value=document.getElementById('m_'+idm+'_'+ide).value;
            }

            function active_select(idm)
            {
                    if(document.getElementById('m_'+idm+'_1').disabled)
                    {
                            document.getElementById('m_'+idm+'_1').disabled=false;
                            document.getElementById('m_'+idm+'_2').disabled=false;
                    }
                    else
                    {
                            document.getElementById('m_'+idm+'_1').disabled=true;
                            document.getElementById('m_'+idm+'_2').disabled=true;
                    }
            }	
            function active_score(idm)
            {
                    if(document.getElementById('s_'+idm+'_1').disabled)
                    {
                            if(document.getElementById('m_'+idm+'_1').value!=0 && document.getElementById('m_'+idm+'_2').value!=0)
                            {
                                    document.getElementById('s_'+idm+'_1').disabled=false;
                                    document.getElementById('s_'+idm+'_2').disabled=false;
                            }	
                    }
                    else
                    {
                            document.getElementById('s_'+idm+'_1').disabled=true;
                            document.getElementById('s_'+idm+'_2').disabled=true;
                    }
            }	
            function active_groupe(idm,nbr,mxj)
            {
                    if(document.getElementById('cb_'+idm).checked)
                    {

                            for(j=1;j<=mxj;j++)
                            {
                                    document.getElementById('m_'+idm+'_'+j).disabled=false;
                                    for(i=1;i<=nbr;i++)
                                    {
                                            document.getElementById('s_'+idm+'_'+j+'_'+i).disabled=false;
                                    }
                            }			
                    }
                    else
                    {
                            for(j=1;j<=mxj;j++)
                            {
                                    document.getElementById('m_'+idm+'_'+j).disabled=true;
                                    for(i=1;i<=nbr;i++)
                                    {
                                            document.getElementById('s_'+idm+'_'+j+'_'+i).disabled=true;
                                    }
                            }		
                    }
            }	
            function popup_heure(idm)
            {
                    document.getElementById('input_id_match').value=idm;
                    document.getElementById('shadowing').style.display='block';
                    document.getElementById('div_popup').style.visibility='visible';

            }
            function popup_close()
            {
                    document.getElementById('shadowing').style.display='none';
                    document.getElementById('div_popup').style.visibility='hidden';			
            }		
        </script>
    </head>

    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con } 

        <div id="container" class="container-fluid"> 
            <div id="contenu">
		<h1>Finales de {$tournoi['nomTournoi']} {$gsb[$looser]}</h1>
                    <form method="POST" action="modules/finale_save.php">
			<input type="hidden" name="id_tournoi" value="{$tournoi['id_tournoi']}">
			<input type="hidden" name="looser" value="{$looser}">
			<input type="submit" value="Enregistrer"><br><br>';
                            <table>
                                <tr>
                                    {for $c=$niveau to 0}
                                        <th>Round {(1+$niveau-$c)}</th>
                                    {/for}
                                </tr>
                                <tr>
                                    {for $c=$niveau to 0}
                                        <td>
                                            <table>
                                                {for $m=1 to $match_par_niveau[$c]-1}
						
                                                    <input type="checkbox" name="cb_s_{$tablo[$c][$m]}_1" onclick="active_select({$tablo[$c][$m]})">
                                                    <br> 
                                                    <select name="m_{$tablo[$c][$m]}_1" id="m_{$tablo[$c][$m]}_1" onchange="select_change({$tablo[$c][$m]},1)" disabled="disabled">
                                                    <option value="0"></option>
                                                    <select name="m_{$tablo[$c][$m]}_2" id="m_{}$tablo[$c][$m]}_2" onchange="select_change({$tablo[$c][$m]},2)" disabled="disabled">
                                                    <option value="0"></option>
                                                    {foreach form=$equipes item=equipe}
							
                                                        
                                                        /*
                                                       ICI que j'essaye de sauver le caca 
                                                       
                                                        */
                                                        
                                                        
                                                        
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
							
                                                    {/foreach}
	

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
					
							echo '<tr>
								<td class="td_arbre_gauche"></td>
								<td class="td_arbre_team2" colspan="2"><a href="#" onclick="popup_heure('.$tablo[$c][$m].')">'.get_jour_de_la_semaine($matches[$tablo[$c][$m]]['heure']).' '.get_heure($matches[$tablo[$c][$m]]['heure']).'</a></td>
								<td class="td_arbre_droite"></td>
							<tr>
								<td class="td_arbre_gauche" rowspan="2">#'.$tablo[$c][$m].'</td>
								<td class="td_arbre_team'.$clr1.'">'.$nom1.'</td>
								<td class="td_arbre_score'.$clr1.'">
									<input type="checkbox" name="cb_'.$tablo[$c][$m].'_1"  
									onclick="active_score('.$tablo[$c][$m].')"> 
									<input type="hidden" name="s_'.$tablo[$c][$m].'_1_id"
									id="s_'.$tablo[$c][$m].'_1_id" value="'.$id_score1.'" >
									<input type="text" name="s_'.$tablo[$c][$m].'_1" 
									id="s_'.$tablo[$c][$m].'_1" value="'.$score1.'" size="3"  disabled="disabled"></td>
								<td class="td_arbre_droite" rowspan="2">'.$fleche.' '.$matches[$tablo[$c][$m]]['id_parent'].'</td>
							</tr>';
							echo '<tr>
								<td class="td_arbre_team'.$clr2.'">'.$nom2.'</td>
								<td class="td_arbre_score'.$clr2.'">		
									<input type="hidden" name="s_'.$tablo[$c][$m].'_2_id"
									id="s_'.$tablo[$c][$m].'_2_id" value="'.$id_score2.'" >								
									<input type="text" name="s_'.$tablo[$c][$m].'_2" 
									id="s_'.$tablo[$c][$m].'_2" value="'.$score2.'" size="3" disabled="disabled">
								</td>							
							</tr>';		
							echo '<tr class="tr_arbre_vide"><td class="td_arbre_vide" colspan="3"></td></tr>';
						{/for}
							
						echo '</table></td>';
					}
                                        {/for}
					echo '</tr>
					</table>';	
				}
				else				
				{
					echo 'Ce tournoi n\'est pas encore encodé dans la base de données du site';
				}				
			}	
			else
			{
			//------------------------------TOURNOI TYPE TM UT--------------------------------------
			
				$sql="SELECT e.pseudo as nom, e.id_joueur as id FROM joueurs as e, joueurtournoi as et
				WHERE et.id_tournoi=:idt AND e.id_joueur=et.id_joueur ORDER BY e.pseudo";
				$query=$connexion->prepare($sql);
				$query->bindValue('idt', $id_tournoi, PDO::PARAM_INT);
				if(!$query->execute()) {echo 'ERREUR SQL TEAMS'; exit;}	
				else				
				{
					$joueurs=$query->fetchAll(PDO::FETCH_ASSOC);
				}	
			
				$sql="SELECT m.id_match,m.nom_match,m.heure,m.id_parent,m.id_enfant1, m.id_enfant2, 
				m.nbr_manche, m.teamParMatch as mtpm, t.teamParMatch as ttpm
				FROM matchs as m, tournoi as t
				WHERE m.id_tournoi=:idt AND t.id_tournoi=:idt AND m.id_groupe IS NULL AND m.looser_bracket=:looser
				ORDER BY m.id_parent";
				$query=$connexion->prepare($sql);
				$query->bindValue('idt', $id_tournoi, PDO::PARAM_INT);
				$query->bindValue('looser', $looser, PDO::PARAM_INT);
				$finale=0;
				$petite_finale=0;
				
				if($query->execute())
				{
					while($match=$query->fetch(PDO::FETCH_ASSOC))
					{
						$nbrmatch++;
						$matches[$match['id_match']]['id']=$match['id_match'];
						$matches[$match['id_match']]['heure']=$match['heure'];
						$matches[$match['id_match']]['nom']=$match['nom_match'];
						$matches[$match['id_match']]['id_parent']=$match['id_parent'];
						$matches[$match['id_match']]['id_enfant1']=$match['id_enfant1'];
						$matches[$match['id_match']]['id_enfant2']=$match['id_enfant2'];
						$matches[$match['id_match']]['nbr_manche']=$match['nbr_manche'];
						$matches[$match['id_match']]['mtpm']=$match['mtpm'];
						$matches[$match['id_match']]['ttpm']=$match['ttpm'];
						if (is_null($match['id_parent']))
						{
							if(is_null($match['id_enfant1']) and is_null($match['id_enfant2']))
								$petite_finale=$match['id_match'];
							else 	
								$finale=$match['id_match'];
						}
						
						$sql2="SELECT mtj.id_joueur,j.pseudo,
							(SELECT SUM(ma.score) FROM manches_joueurs as ma 
								WHERE ma.id_match=:idm AND ma.id_joueur=mtj.id_joueur
								GROUP BY ma.id_joueur) as score
						FROM matchs_joueurs as mtj, joueurs as j 
						WHERE mtj.id_match=:idm and j.id_joueur=mtj.id_joueur
						ORDER BY score DESC";
						$query2=$connexion->prepare($sql2);
						$query2->bindValue('idm', $match['id_match'], PDO::PARAM_INT);
						if($query2->execute())
						{
							$cpt=0;
							while($team=$query2->fetch(PDO::FETCH_ASSOC))
							{
								$cpt++;
								$matches[$match['id_match']][$cpt]['id']=$team['id_joueur'];
								$matches[$match['id_match']][$cpt]['nom']=$team['pseudo'];
								$matches[$match['id_match']][$cpt]['score']=$team['score'];
								
							}
							$matches[$match['id_match']]['nbr_joueurs']=$cpt;
						}
						else {echo 'ERREUR SQL JOUEURS'; exit;}
						
						
						$sql2="SELECT mj.id_joueur, mj.numero_manche, mj.score
						FROM manches_joueurs as mj
						WHERE mj.id_match=:idm
						ORDER BY mj.id_joueur";
						$query2=$connexion->prepare($sql2);
						$query2->bindValue('idm', $match['id_match'], PDO::PARAM_INT);
						if($query2->execute())
						{
							$nbrmax=0;
							$nbrm=0;
							$old_idj=0;
							while($ligne=$query2->fetch(PDO::FETCH_ASSOC))
							{
								if($old_idj!=$ligne['id_joueur'])
								{
									$nbrm=0;
									$old_idj=$ligne['id_joueur'];
								}
								$scores[$match['id_match']][$ligne['id_joueur']][$ligne['numero_manche']] = $ligne['score'];
								
								if($old_idj==$ligne['id_joueur'])
								{
									$nbrm++;
									if($nbrm>$nbrmax) $nbrmax=$nbrm;
								}
							}
						}
						else {echo 'ERREUR SQL MANCHES'; exit;}	
		
						if($nbrmax>$matches[$match['id_match']]['nbr_manche']) $matches[$match['id_match']]['nbr_manche']=$nbrmax;
						
						
						
					}	
				}			
				else {echo 'ERREUR SQL MATCHES'; exit;}	
				
				if($nbrmatch==1)
				{
				$finale=$petite_finale;
				$petite_finale=0;
				}
				if($nbrmatch!=0)
				{
					$esc=0;
					$niveau=0;
					$tablo='';
					$match_par_niveau='';
					$tablo[$niveau][1]=$matches[$finale]['id'];
					$match_par_niveau[0]=1;
					$niveau++;
					$match_par_niveau_max=1;

					while($esc==0)
					{
						$match_par_niveau[$niveau]=0;
						$mpn2=1;
						for($mpn=1;$mpn<=$match_par_niveau[$niveau-1];$mpn++)
						{
							$tablo[$niveau][$mpn2]=$matches[$tablo[$niveau-1][$mpn]]['id_enfant1'];
							if(!is_null($tablo[$niveau][$mpn2])) $mpn2++;
							$tablo[$niveau][$mpn2]=$matches[$tablo[$niveau-1][$mpn]]['id_enfant2'];
							if(!is_null($tablo[$niveau][$mpn2])) $mpn2++;
						}

						$match_par_niveau[$niveau]=$mpn2-1;
						if($match_par_niveau[$niveau]>$match_par_niveau[$niveau-1]) $match_par_niveau_max=$match_par_niveau[$niveau];
						$ok=true;
						for($mpn=1;$mpn<=$match_par_niveau[$niveau];$mpn++)
						{
							if(!is_null($matches[$tablo[$niveau][$mpn]]['id_enfant1']) or
							!is_null($matches[$tablo[$niveau][$mpn]]['id_enfant2'])) $ok=false;
						}
						if($ok)
						{
							$esc=1;
						}
						$niveau++;
					}
					$niveau--;
					
					if($petite_finale!=0)
					{
						$tablo[0][2]=$matches[$petite_finale]['id'];
						$match_par_niveau[0]=2;
					}
					echo '<table>
							<tr>';
					for($c=$niveau;$c>=0;$c--)		
					{
						echo '<th>Round '.(1+$niveau-$c).'</th>';
							
					}		
					echo '</tr><tr>';
					for($c=$niveau;$c>=0;$c--)
					{
						echo '<td>
								<table>';
						for($m=1;$m<=$match_par_niveau[$c];$m++)
						{
							$maxj=$matches[$tablo[$c][$m]]['nbr_joueurs'];
							if($matches[$tablo[$c][$m]]['mtpm']>$matches[$tablo[$c][$m]]['nbr_joueurs']) $maxj=$matches[$tablo[$c][$m]]['mtpm'];
							for($j=1;$j<=$maxj;$j++)
							{
								$nom[$j]='<select name="m_'.$tablo[$c][$m].'_'.$j.'"
								id="m_'.$tablo[$c][$m].'_'.$j.'" 
								onchange="select_change('.$tablo[$c][$m].','.$j.')" disabled="disabled"><option value="0"></option>';
								$score[$j]='';
								$id_score[$j]='0';

								foreach($joueurs as $joueur)
								{
									$nom[$j].='<option value="'.$joueur['id'].'"';
									if(isset($matches[$tablo[$c][$m]][$j]['id']))
									{
										if ($matches[$tablo[$c][$m]][$j]['id']==$joueur['id'])
										{
											$nom[$j].='selected';
											$id_score[$j]=$joueur['id'];
										}	
										$score[$j]=$matches[$tablo[$c][$m]][$j]['score'];
									}						
									$nom[$j].=' >'.$joueur['nom'].'</option>';
								}							
							

								
								$clr[$j]='';

								$fleche='->';	
								$heure=get_jour_de_la_semaine($matches[$tablo[$c][$m]]['heure']).' '.get_heure($matches[$tablo[$c][$m]]['heure']);
								
								if($j==1)
								{
									if($c==0)
									{
										if($m==1) 	echo '<tr class="tr_arbre_vide"><td class="td_finale_vide" colspan="'.($matches[$tablo[$c][$m]]['nbr_manche']+4).'">FINALE<br><a href="#" onclick="popup_heure('.$tablo[$c][$m].')">'.$heure.'</a></td></tr>';
										if($m==2) 	echo '<tr class="tr_arbre_vide"><td class="td_finale_vide" colspan="'.($matches[$tablo[$c][$m]]['nbr_manche']+4).'">Petite Finale<br><a href="#" onclick="popup_heure('.$tablo[$c][$m].')">'.$heure.'</a></td></tr>';
										$fleche='';
									}
									else
									{
										echo '<tr class="tr_arbre_vide"><td class="td_finale_vide" colspan="'.($matches[$tablo[$c][$m]]['nbr_manche']+4).'"><a href="#" onclick="popup_heure('.$tablo[$c][$m].')">'.$heure.'</a></td></tr>';
									}
									echo '<tr class="tr_arbre_vide">
										<td class="td_arbre_gauche"></td>
										<th class="th_arbre_joueur">Joueur <input type="checkbox"
										name="cb_'.$tablo[$c][$m].'" id="cb_'.$tablo[$c][$m].'"
										onclick="active_groupe('.$tablo[$c][$m].','.$matches[$tablo[$c][$m]]['nbr_manche'].','.$maxj.')"></th>';
									for($ma=1;$ma<=$matches[$tablo[$c][$m]]['nbr_manche'];$ma++)
										echo '<th class="th_arbre_joueur">M'.$ma.'</th>';
											
									echo '<th class="th_arbre_joueur">Total</th>
											<td class="td_arbre_droite"></td>
										</tr>';
								}
								
								
								echo '<tr>';
								if($j==1) echo '<td class="td_arbre_gauche" rowspan="'.$maxj.'">#'.$tablo[$c][$m].'</td>';
								echo '<td class="td_arbre_joueur'.$clr[$j].'">'.$nom[$j].'</td>';
								for($ma=1;$ma<=$matches[$tablo[$c][$m]]['nbr_manche'];$ma++)
								{
									$score_ma='';
									if(isset($matches[$tablo[$c][$m]][$j]['id']))
									{
										$idj=$matches[$tablo[$c][$m]][$j]['id'];
										if(isset($scores[$tablo[$c][$m]][$idj][$ma])) $score_ma=$scores[$tablo[$c][$m]][$idj][$ma];
									
									}
									echo '<td class="td_arbre_joueur_score'.$clr[$j].'">
											<input type="text" name="s_'.$tablo[$c][$m].'_'.$j.'_'.$ma.'"
											 id="s_'.$tablo[$c][$m].'_'.$j.'_'.$ma.'"
											 value="'.$score_ma.'" size="4" disabled="disabled"></td>';
								}		
								echo '<td class="td_arbre_joueur_total'.$clr[$j].'">
										<input type="hidden" name="s_'.$tablo[$c][$m].'_'.$j.'_id" 
										id="s_'.$tablo[$c][$m].'_'.$j.'_id" value="'.$id_score[$j].'">'.$score[$j].'</td>';
								
								if($j==1) echo '<td class="td_arbre_droite" rowspan="'.$maxj.'">'.$fleche.' '.$matches[$tablo[$c][$m]]['id_parent'].'</td>';
								
								echo '</tr>';
								
							}
							echo '<tr class="tr_arbre_vide"><td class="td_arbre_vide" colspan="'.($matches[$tablo[$c][$m]]['nbr_manche']+4).'"></td></tr>';
						}
							
						echo '</table></td>';
					}
					echo '</tr>
					</table>';	
				}
				else				
				{
					echo 'Ce tournoi n\'est pas encore encodé dans la base de données du site';
				}
			}
			
		?>
			</form>
		</div>
	</div>
    <!-- gap to have the footer in the bottom of the window -->
	<div style="height: 450px;">
	
	</div>
    
	<?php require_once('../includes/_footer.php'); ?>
	<div id="shadowing"></div>

	<div id="div_popup" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
		<input type="button" value="annuler" onclick="popup_close()" />
		<form method="POST" action="modifier_heure.php">
		<input type="hidden" name="id_match" id="input_id_match" value="0" />
		<input type="hidden" name="id_tournoi" value="<?php echo $id_tournoi; ?>" />
		<input type="hidden" name="looser" value="<?php echo $looser; ?>" />
		<input type="hidden" name="page" value="finales" />
		vendredi <input type="radio" name="jour" value="vendredi"> / samedi <input type="radio" name="jour" value="samedi"> / dimanche <input type="radio" name="jour" value="dimanche"><br>
		Heure : <select name="heure">
				<?php 
					for($i=0;$i<24;$i++)
					{
						echo '<option>';
						if($i<10) echo '0';
						echo $i.'</option>';
					}
				?>	
				</select>h<select name="minute">
				<?php 
					for($i=0;$i<60;$i+=5)
					{
						echo '<option>';
						if($i<10) echo '0';
						echo $i.'</option>';
					}
				?>					
				</select><br>
		<input type="submit" value="Modifier" /><br>
	</div>

        {include file="admin/footer.tpl"  con=$con } 
    </body>
</html>
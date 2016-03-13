function go_groupes(id)
{
		document.location='groupes.php?id='+id;
}
function go_finales(id,parts,lb)
{
		document.getElementById('input2_id_tournoi').value=id;
		document.getElementById('input2_looser').value=lb;
		document.getElementById('nbrpart2').innerHTML=parts;
		document.getElementById('shadowing').style.display='block';
		document.getElementById('div_popup2').style.visibility='visible';
}	
function go_finales2(id,parts,lb)
{
		document.getElementById('input3_id_tournoi').value=id;
		document.getElementById('input3_looser').value=lb;
		document.getElementById('nbrpart3').innerHTML=parts;
		document.getElementById('shadowing').style.display='block';
		document.getElementById('div_popup3').style.visibility='visible';
}		
function go_groupes(id,parts)
{
		document.getElementById('input_id_tournoi').value=id;
		document.getElementById('nbrpart').innerHTML=parts;
		document.getElementById('shadowing').style.display='block';
		document.getElementById('div_popup').style.visibility='visible';

}
function popup_close()
{
		document.getElementById('shadowing').style.display='none';
		document.getElementById('div_popup').style.visibility='hidden';		
		document.getElementById('div_popup2').style.visibility='hidden';		
		document.getElementById('div_popup3').style.visibility='hidden';		
}

function erase_tournoi(var idt)
{
		var r = confirm("Voulez-vous vraiment supprimer le tournoi ayant l'id "+idt+" ?");
		if (r==true)
		{

		}
}
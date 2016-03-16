function active_score(idm,idt)
{
	if(document.getElementById('score_m_'+idm+'_p_'+idt).disabled)
	{
		document.getElementById('score_m_'+idm+'_p_'+idt).disabled=false;
	}
	else
	{
		document.getElementById('score_m_'+idm+'_p_'+idt).disabled=true;
	}
}
function active_score2(idm,m,idt)
{
	if(document.getElementById('score_m_'+idm+'_ma_'+m+'_p_'+idt).disabled)
	{
		document.getElementById('score_m_'+idm+'_ma_'+m+'_p_'+idt).disabled=false;
	}
	else
	{
		document.getElementById('score_m_'+idm+'_ma_'+m+'_p_'+idt).disabled=true;
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
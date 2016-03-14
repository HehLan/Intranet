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



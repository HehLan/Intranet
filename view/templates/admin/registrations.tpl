<!DOCTYPE html>
<html>
    <head>
        {include file="admin/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/registrations.css" >
    </head>

    <body role="document">
 	{include file="admin/header.tpl"}
        {include file="admin/nav.tpl"} 
	
	<div id="container" class="container-fluid">
            <div id="contenu" class="row">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <caption>
                            <h4>Informations sur l'enregistrement des inscriptions</h4>
                        </caption>
                        <thead>
                            <tr>
                                <th>Payé</th>
                                <th>Pseudo</th>
                                <th>Team</th>
                                <th>HOTS</th>
                                <th>COD</th>
                                <th>TM</th>
                                <th>HS</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td>{$counter['paye']}</td>
                                <td>{$counter['player']}</td>
                                <td>{$counter['team']}</td>
                                <td>{$counter['HOTS']}</td>
                                <td>{$counter['COD']}</td>
                                <td>{$counter['TM']}</td>
                                <td>{$counter['HS']}</td>
                            </tr>
                        </tfoot>
                        
                        


                        
                        <tbody>
                            {foreach from=$datas item=data}
                                <tr>
                                    {if $data['paye'] == 0}
                                        <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                    {else}
                                        <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                    {/if}
                                    <td>{$data['pseudo']}</td>                                
                                    <td>{$data['team']}</td>
                                    {if $data['hots'] == 0}
                                        <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                    {else}
                                       <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                    {/if}
                                    {if $data['cod'] == 0}
                                        <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                    {else}
                                        <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                    {/if}
                                    {if $data['tm'] == 0}
                                        <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                    {else}
                                        <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                    {/if}
                                    {if $data['hs'] == 0}
                                        <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                    {else}
                                        <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                    {/if}
                                </tr>
                            {/foreach}
                        </tbody> 
                    </table>
                </div>
            </div>
	</div>
	{include file="admin/footer.tpl"  con=$con } 
    </body>
</html>
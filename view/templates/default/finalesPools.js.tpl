{* Smarty *}
<script>
    var teams = {$teams|@json_encode};
    var scores= {$scores|@json_encode};
    var data_teams = [];
    var data_scores = [];
    var count = 0;
    var data = { 
        teams : [],
        results : []
    };
    
    for (i=0; i<teams.length; i++)
    {
        if (i%2 === 0)
        {
            var arr = [];
            arr[0] = teams[i];
            arr[1] = teams[i+1];
            data_teams[count] = arr;
            
            var arr1=[];
            arr1[0]= scores[i];
            arr1[1]= scores[i+1];
            data_scores[count] = arr1;
            count++;
        }
    }

    for(i=0; i<8; i++)
    {
        data.teams[i] = data_teams[i];
        data.results[i] = data_scores[i];
    }
    
    
    
/*data.teams[0] =data_teams[0];
data.teams[1] =data_teams[1];
data.teams[2] =data_teams[2];
data.teams[3] =data_teams[3];
data.teams[4] =data_teams[4];*/
    //alert(data_teams);  // fonctionne

    //marche pas et pourquoi ?
    /*var data = {
        teams : [data_teams]
    };*/
    
    // marche mais il faut connaître le nombre d'index
    
    /*var data = {
        teams : [
            data_teams[0],
            data_teams[1],
            data_teams[2],
            data_teams[3],
            data_teams[4],
            data_teams[1],
            data_teams[2],
            data_teams[3],
            data_teams[4]
        ]
    };*/

    // A quoi ça doit ressembler
   /*var data = {
        teams : [
          ["Team 1", "Team 2"], // first matchup 
          ["Team 3", "Team 4"],
          ["Team 3", "Team 4"],
          ["Team 3", "Team 4"],
          ["Team 3", "Team 4"],
          ["Team 3", "Team 4"],
          ["Team 3", "Team 4"],
          ["Team 3", "Team 4"]// second matchup 
        ],
        results : [
          [[1,2], [3,4]],       // first round 
          [[4,6], [2,1]]        // second round 
        ]
    }*/

    $(function()
    {
        $("#bracket-pools").bracket
        ({
            init: data // data to initialize the bracket with
        });
    });
</script>
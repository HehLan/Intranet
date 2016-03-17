{* Smarty *}
<script>
    
    var team1_name = "{$team1_name}";
    
    
    var data = {
        teams : [
          [team1_name, "Team 2"], /* first matchup */
          ["Team 3", "Team 4"]  /* second matchup */
        ],
        results : [
          [[1,2], [3,4]],       /* first round */
          [[4,6], [2,1]]        /* second round */
        ]
    }

    $(function() {
        $("#bracket-hots").bracket({
            init: data /* data to initialize the bracket with */ })
    })
</script>
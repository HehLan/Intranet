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
            
            /*var arr1=[];
            arr1[0]= scores[i];
            arr1[1]= scores[i+1];
            data_scores[count] = arr1;*/
            
            count++;
        }
    }


    for(i=0; i<8; i++)
    {
        data.teams[i] = data_teams[i];
        //data.results[i] = data_scores[i];
    }
    
    
    // For the moment, the results are put manually
    data.results = [
          [[1,2], [3,4], [5,6], [7,8], [9,10], [11,12], [13,14], [15,16]],  // first round 
          [[1,2], [3,4], [5,6], [7,8]], // second round
          [[1,2], [3,4]], // third round
          [[1,2], [3,4]] // finales 
    ];
    


    // Minimal Example from documentation
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
    
    
    
    
    // ADMIN -------------------------------------------------------------------
    
    
    var saveData = {
    teams : [
      ["Team 1", "Team 2"], /* first matchup */
      ["Team 3", "Team 4"]  /* second matchup */
    ],
    results : [[1,0], [2,7]]
  }
 
    /* Called whenever bracket is modified
     *
     * data:     changed bracket object in format given to init
     * userData: optional data given when bracket is created.
     */
    function saveFn(data, userData) {
      var json = jQuery.toJSON(data)
      $('#saveOutput').text('POST '+userData+' '+json)
      /* You probably want to do something like this
      jQuery.ajax("rest/"+userData, contentType: 'application/json',
                                    dataType: 'json',
                                    type: 'post',
                                    data: json)
      */
    }

    $(function() {
        var container = $('#bracket-pools-admin')
        container.bracket({
          init: saveData,
          save: saveFn,
          userData: "http://myapi"})

        /* You can also inquiry the current data */
        var data = container.bracket('data')
        $('#dataOutput').text(jQuery.toJSON(data))
      })
    
    
    
    
</script>
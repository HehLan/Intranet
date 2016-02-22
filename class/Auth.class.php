<?php

class Auth
{
    /**
     * Test if the user is connected 
     */
    static function isLogged()
    {			
        if(isset($_SESSION['id_joueur']))
        {
                if(($_SESSION['id_joueur'] != 0))
                {
                    return true;
                }
        }
        return false;
    }

    /**
     * Test if the user is allowed to be on the page	 
     * 1 = superadmin
     * 2 = admin
     * 4 = team leader
     * 5 = member
     */
    static function isAllowed($levelPage)
    {
        if(isset($_SESSION['id_joueur']))
        {
            if(($_SESSION['level'] <= $levelPage))
            {
                return true;
            }
        }
        return false;
    }
    
}

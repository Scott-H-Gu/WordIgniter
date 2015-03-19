<?php

/**
 * OverviewModel
 * Handles data for overviews (pages that show user profiles / lists)
 */
class ReadingModel
{
    /**
     * Constructor, expects a Database connection
     * @param Database $db The Database object
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    /**
     * Gets an array that contains all the users in the database. The array's keys are the user ids.
     * Each array element is an object, containing a specific user's data.
     * @return array The profiles of all users
     */
    public function getAllTitles()
    {
        $sth = $this->db->prepare("SELECT title_id, name, source, classification,contents FROM readingtitles");
        $sth->execute();

        $all_users_profiles = array();

        foreach ($sth->fetchAll() as $title) {
            // a new object for every user. This is eventually not really optimal when it comes
            // to performance, but it fits the view style better
            $all_titles_profiles[$title->title_id] = new stdClass();
            $all_titles_profiles[$title->title_id]->title_id = $title->title_id;
            $all_titles_profiles[$title->title_id]->name = $title->name;
            $all_titles_profiles[$title->title_id]->source = $title->source;
            $all_titles_profiles[$title->title_id]->classification = $title->classification;
            $all_titles_profiles[$title->title_id]->contents = $title->contents;

        }
        return $all_titles_profiles;
    }

    /**
     * Gets a user's profile data, according to the given $user_id
     * @param int $user_id The user's id
     * @return object/null The selected user's profile
     */
    public function getTitleProfile($title_id)
    {
        $sql = "SELECT title_id, name, source, classification, contents
                FROM readingtitles WHERE title_id = :title_id";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':title_id' => $title_id));

        $title = $sth->fetch();


        return $title;
    }
    
    public function importantwords($title_id)
    {
        

        
        
        
        $text= file_get_contents(URL.'readingmaterial/'.$title_id.'.txt');
        $len=strlen($text);
        $text=str_split($text);
        for ($i=0;$i<=$len-1;++$i)
        {
            if ($text[$i]=='>')
            {
                if ($text[$i-1]=="i"&&$text[$i-2]=="<")
                {
                    $word="";
                    for ($j=$i+1;;++$j)
                    {if ($text[$j]=="<") break;
                    else $word=$word.$text[$j]; 
                    }
                    return $word;
                }
            }
        }
    }

    /**
     * Gets a gravatar image link from given email address
     *
     * Gravatar is the #1 (free) provider for email address based global avatar hosting.
     * The URL (or image) returns always a .jpg file !
     * For deeper info on the different parameter possibilities:
     * @see http://gravatar.com/site/implement/images/
     * @source http://gravatar.com/site/implement/images/php/
     *
     * This method will return in something like
     * http://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=80&d=mm&r=g
     * Note: the url does NOT have something like ".jpg" ! It works without.
     *
     * @param string $email The email address
     * @param int|string $s Size in pixels, defaults to 50px [ 1 - 2048 ]
     * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
     * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
     * @param array $options Optional, additional key/value attributes to include in the IMG tag
     * @return string
     */

}

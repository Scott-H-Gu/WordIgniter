<?php

/**
 * Class Reading
* The Reading controller.
*/
class Reading extends Controller
{
	/**
	 * Construct this object by extending the basic Controller class
	 */
	function __construct()
	{
		parent::__construct();

		// VERY IMPORTANT: All controllers/areas that should only be usable by logged-in users
		// need this line! Otherwise not-logged in users could do actions. If all of your pages should only
		// be usable by logged-in users: Put this line into libs/Controller->__construct
		//Auth::handleLogin();
	}

	/**
	 * This method controls what happens when you move to /note/index in your app.
	 * Gets all notes (of the user).
	 */
	public function index()
	{
        $reading_model = $this->loadModel('Reading');
        $this->view->titles = $reading_model->getAllTitles();
		$this->view->render('reading/index');
	}

    public function contents($title_id)
    {
        if (isset($title_id)) {
            $reading_model = $this->loadModel('Reading');
            $this->view->title = $reading_model->getTitleProfile($title_id);
            $this->view->render('reading/contents');
        } else {
            header('location: ' . URL);
        }
   
    }
    
    public function contentscn($title_id)
    {
        if (isset($title_id)) {
            $reading_model = $this->loadModel('Reading');
            $this->view->title = $reading_model->getTitleProfile($title_id);
            $this->view->render('reading/contents');
        } else {
            header('location: ' . URL);
        }
   
    }
    
    public function wordtranslation()
    {
        
        $word['name']=$_POST['name'];
        $word['translation']='n. 锚；抛锚停泊；靠山；新闻节目主播vt. 抛锚；使固定；主持节目vi. 抛锚adj. 末捧的；最后一棒的';
        $word['prounciation']="['æŋkə]";
        echo json_encode($word);
    }
	 
    public function importantwords()
    {
        $title_id=$_POST['title_id'];
        

        echo 'll';
    }
}

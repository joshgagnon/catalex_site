<?php
class ReadFileController extends Controller {

    public function read($fileName)
    {
    	 
    	if($fileName == 'CataLexConstitution.docx' or $fileName == 'CataLexShareSubscription.docx'){
        	return $this->getFile($fileName);
    	}
    	else
        {
            return Response::make('Unauthorized', 403); 
        }
    }

    private function getFile($fileName)
    {	

   		return Response::download(join('/', array(app_path() , 'files', $fileName)));
    }

}
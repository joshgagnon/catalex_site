<?php
class ReadFileController extends Controller {

    public function read($fileName)
    {

        return $this->getFile($fileName);
    }

    private function getFile($fileName)
    {	

        $file = join('/', array(app_path() , 'files', $fileName));
        if(File::exists($file)){
   		   return Response::download($file);
        }
        return Response::make('Unauthorized', 403); 
    }

}
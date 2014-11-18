<?php
 
class UsersController extends BaseController {
 	protected $layout = "layouts.master";

	public function __construct() {
	    $this->beforeFilter('admin');
	}


    /**
     * Display a listing of blogs
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return View::make('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new blog
     *
     * @return Response
     */
    public function create()
    {
        return View::make('users.create');
    }

    /**
     * Store a newly created blog in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make($data = Input::all(), User::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        User::create($data);

        return Redirect::route('users.index');
    }

    /**
     * Display the specified blog.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return View::make('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified blog.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        if($user->isAdmin() && $user != Auth::user()){
        	return Response::make('Unauthorized', 403);
        }
        return View::make('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $user = User::findOrFail($id);
        if($user->isAdmin() && $user != Auth::user()){
        	return Response::make('Unauthorized', 403);
        }
        $validator = Validator::make($data = Input::all(), User::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user->update($data);

        return Redirect::route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
    	$user = User::findOrFail($id);
    	if($user->isAdmin() && $user != Auth::user()){
        	return Response::make('Unauthorized', 403);
        }
        User::destroy($id);

        return Redirect::route('users.index');
    }

}
?>
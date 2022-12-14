<?php 
namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller {

    protected $userRepository;

    public function __construct(UserRepository $user)
    {
        $this->userRepository = $user;
    }

    public function index() {
    }

    /**
     * Function showAll()
     * Récupère tout les utilisateurs et les renvoie 
     */
    public function showAll() {
        return view('user.List', [
            'list' => $this->userRepository->showAll()
        ]);
    }

    public function show(User $id) {
        return $this->userRepository->showUser($id);
    }

    public function store(StoreUserRequest $request) {
        return $this->userRepository->createUser($request);
    }
    public function login(LoginUserRequest $request){
        return $this->userRepository->loginUser($request);
    }

    public function edit(Request $request, User $id) {
        // Code
    }
   
    /**
     * logout()
     * Supprime la session
     */
    public function logout(Request $request) {
        $user = auth()->user();
        auth()->logout($user);

        return back()->with('message', 'Vous avez été déconnecté avec succès !');
    }
}
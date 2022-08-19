<?php 
namespace App\Http\Controllers;

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
        return view(['users' => $this->userRepository->showAll()]);
    }

    public function show(User $id) {
        return $this->userRepository->showUser($id);
    }

    public function store(StoreUserRequest $request) {
        return $this->userRepository->createUser($request);
    }

    public function edit(Request $request, User $id) {
        // Code
    }

    /**
     * destroy()
     * Supprime la session
     */
    public function logout(Request $request) {
        $user = auth()->user();
        auth()->logout($user);

        return redirect('/')->with('message', 'Vous avez été déconnecté avec succès !');
    }
}
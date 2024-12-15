<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function registerForm()
    {
        return view('register');
    }
    public function register(Request $request)
    {

        // Valider les données du formulaire
        $data = $request->validate([
            "prenom" => "required",
            "nom" => "required",
            "adresse" => "required",
//            "motDePasse" => "required",
            "telephone" => "required",
            //"sexe" => "required",
            "email" => "required",
            "motDePasse" => "required",
            "photo" => "nullable",
        ]);
        //dd($data);
        //try {
            // Gestion de l'upload de l'image
            if ($request->hasFile('photo')) {
                $filename = time() . '_' . $request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->storeAs('images', $filename, 'public');
                $data['photo'] = '/storage/' . $path; // Chemin pour la base de données
            }

            // Hash du mot de passe
            $data['motDePasse'] = Hash::make($data['motDePasse']);

            // Valeurs par défaut pour le statut et le rôle
            //$data['status'] = 0;
            $data['role'] = 'patient';
            //dd($data);
            // Création de l'utilisateur
            $user = User::create([
                'prenom' => $data['prenom'],
                'nom' => $data['nom'],
                'adresse' => $data['adresse'],
                'telephone' => $data['telephone'],
                //'sexe' => $data['sexe'],
                'email' => $data['email'],
                'motDePasse' => $data['motDePasse'],
                'photo' => $data['photo'] ?? null,
                //'status' => $data['status'],
                'role' => $data['role'],
            ]);

            // Redirection après inscription réussie
            return redirect()->route('login')->with('success', 'Inscription réussie ! Veuillez vous connecter.');

       /* } catch (\Exception $e) {
            // Gestion des erreurs
            return back()->with('error', 'Erreur lors de l\'inscription : ' . $e->getMessage());
        }*/
    }
    public function loginPat(Request $request)
    {
        // Valider les données
        $request->validate([
            'email' => 'required|email',
            'motDePasse' => 'required',
        ]);

        // Rechercher l'utilisateur par email
        $user = User::where('email', $request->email)->first();

        // Si l'utilisateur n'est pas trouvé ou que le mot de passe ne correspond pas
        if (!$user || !Hash::check($request->motDePasse, $user->motDePasse)) {
            return back()->withErrors(['email' => 'Email ou mot de passe incorrect.']);
        }

        // Vérifier le rôle de l'utilisateur
        // Par exemple, si l'utilisateur est un patient, redirigez-le vers la page du patient
        if ($user->role === 'patient') {
            auth()->login($user);  // Connexion de l'utilisateur
            return redirect()->route('welcome');  // Rediriger vers la page du patient
        }

        // Si l'utilisateur est un administrateur
        if ($user->role === 'admin') {
            auth()->login($user);  // Connexion de l'utilisateur
            return redirect()->route('admin.dashboard');  // Rediriger vers la page d'administration
        }

        // Cas par défaut si le rôle ne correspond pas
        return back()->withErrors(['email' => 'Rôle non autorisé.']);
    }
    public function logout()
    {
        // Déconnexion de l'utilisateur
        auth()->logout();

        // Redirection vers la page de connexion après la déconnexion
        return redirect()->route('login')->with('success', 'Vous êtes déconnecté avec succès.');
    }

}

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    // -------------------- [ Insert Data ] ------------------
    public function index() {

        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/yellow-submarineKey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://console.firebase.google.com/project/undefined/firestore/data/')
        ->create();

        $database   =   $firebase->getDatabase();
        $createPost    =   $database
        ->getReference('blog/posts')
        ->push([
            'title' =>  'Laravel 6',
            'body'  =>  'This is really a cool database that is managed in real time.'

        ]);
            
        echo '<pre>';
        print_r($createPost->getvalue());
        echo '</pre>';
    }
}

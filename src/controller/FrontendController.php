<?php

namespace Projet5\Controller;

use Projet5\Model\PostManager;
use Projet5\Model\CommentManager;
use Projet5\Model\CatManager;

class FrontendController
{
    private $twig;

    public function __construct($twig)
    {
        /** @var \Twig\Environment $twig */
        $this->twig = $twig;
    }

    public function home()
    {
        $postManager = new PostManager();
        $articles = $postManager->lastPosts();
        $nbPosts = $postManager->paginate();
        echo $this->twig->render('frontend/home.html.twig', [
            'articles' => $articles,
            'nbPosts' => $nbPosts,
        ]);
    }
    function contact()
    {
    echo $this->twig->render('frontend/contact.html.twig', [
            
        ]);
    }
    function signup(){
    echo $this->twig->render('frontend/signup.html.twig', [
            
        ]);
    }
    function blog(){
        echo $this->twig->render('frontend/blog.html.twig', [
            
        ]);
    }
    function login(){
        echo $this->twig->render('frontend/login.html.twig', [
            
        ]);
    }
    function loginError(){
     echo $this->twig->render('frontend/login_error.html.twig', [
            
        ]);
    }
    function query(){
    $postManager = new PostManager();
    $results = $postManager->searchQuery();
        echo $this->twig->render('frontend/query_results.html.twig', [
            'results' => $results,
        ]);
    }
    function post(){
    $postManager = new PostManager();
    $commentManager = new CommentManager(); 
	$posts = $postManager->getPost($_GET['id']);
	$comments = $commentManager->getComments($_GET['id']);
    $byTitles = $postManager->newPosts();
    $popularity = $postManager->popularPosts();
    echo $this->twig->render('frontend/post_page.html.twig', [
            'posts' => $posts,
            'comments' => $comments,
            'byTitles' => $byTitles,
            'popularity' => $popularity,
        ]);
}
    function displayAllMaineCoons(){
    $catManager = new CatManager();
    $allCats = $catManager->getAllCats();
        echo $this->twig->render('frontend/all_maine_coons.html.twig', [
            'allCats' => $allCats,
        ]);
    }
    function displayCatsByCoat(){
    $catManager = new CatManager();
    $coats = $catManager->loadCoat();
        echo $this->twig->render('frontend/filtre.html.twig', [
            'coats' => $coats,
        ]);
}
function displayAllBoys(){
    $catManager = new CatManager();
    $boys = $catManager->getAllBoys();
    echo $this->twig->render('frontend/maine_coon_boys.html.twig', [
            'boys' => $boys,
        ]);
}
function displayAllGirls(){
    $catManager = new CatManager();
    $girls = $catManager->getAllGirls();
    echo $this->twig->render('frontend/maine_coon_girls.html.twig', [
            'girls' => $girls,
        ]);
}
function displayAllYoungsters(){
    $catManager = new CatManager();
    $youngsters = $catManager->getAllYoungsters();
    echo $this->twig->render('frontend/maine_coon_youngsters.html.twig', [
            'youngsters' => $youngsters,
        ]);
}
function displayAllKittens(){
    $catManager = new CatManager();
    $kittens = $catManager->getAllKittens();
    echo $this->twig->render('frontend/maine_coon_kittens.html.twig', [
            'kittens' => $kittens,
        ]);
}

}
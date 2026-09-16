Présentation du cours  >  PHP  >  PHP « intermédiaire »  >  POO  >  
PHP « avancé »
 
V2.
5
.0

<?php
namespace \Controllers\Users;
use Includes\Database\DatabaseConnection, Blog\Models\Post\PostRepository;
class Users
{
    public function execute(): void
    {
        $postRepository = new PostRepository(DatabaseConnection::getInstance());
        $posts = $postRepository->getPosts();
        (new \Blog\Views\Post($posts))->show();
    }
}
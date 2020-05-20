<?php
namespace App\DataProvider\Database;
use App\Providers\UserTokenProviderInterface;
use Illuminate\Database\DatabaseManager;

final class UserToken implements UserTokenProviderInterface
{
    private $manager;

    private $table = 'user_tokens';
    public function __construct(DatabaseManager $manager)
    {
        $this->manager = $manager;
    }

    public function retrieveUserByToken(string $token): ?\stdClass
    {
        return $this->manager->connection()
        ->table($this->table)
        ->join('users','users.id', '=', 'user_tokens.user_id')
        ->where('api_token', $token)
        ->first(['user__id', 'api_token', 'name', 'email']);
    }

}

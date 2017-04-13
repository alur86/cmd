
<?php
 
namespace App\Transformer;
 
class UserTransformer {
 
    public function transform($user) {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'info' => $user->info
        ];
    }
 
}

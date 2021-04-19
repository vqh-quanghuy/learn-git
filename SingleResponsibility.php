<!-- 1 class chỉ nên đảm nhận MỘT nhiệm vụ nhất định -->
<?php
class Json{
    public static function from($data){
        return json_encode($data);
    }
}

class User{
    public $name;
    public $email;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
    }
}

class UserRequest{
    protected static $rules = [
        'name'=>'string',
        'email'=>'string',
    ];

    public static function validate($data){
        foreach(static::$rules as $property =>$type){
            if(gettype($data[$property])!=$type)
                throw new Exception($message= "User Property {$property} must be of type {$type}");
        }
    }
}
$data = [
    'name' => 'Huy',
    'email' => 'gmail.com'
];
UserRequest::validate($data);
$user = new User($data);
print_r(Json::from($user));
?>
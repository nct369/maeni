<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;
use yii\helpers\VarDumper;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $name;
    public $category_id;
    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $description;
    public $password;
    public $confirmPassword;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            [['category_id', 'name', 'description', 'email', 'firstname','lastname', 'phone'], 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Bu e-mail artıq qeydiyyatdan keçib.'],

            ['phone', 'string', 'max' => 50],

            [['password', 'confirmPassword'], 'required'],
            ['password', 'string', 'min' => 6],
            ['confirmPassword', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['user'] = ['firstname', 'lastname', 'email', 'phone', 'password', 'confirmPassword'];
        $scenarios['company'] = ['name', 'category_id', 'email', 'phone', 'description', 'password', 'confirmPassword'];
        return $scenarios;
    }


    public function attributeLabels()
    {
        return [
            'name' => 'Kompaniyanın adı',
            'category_id' => 'Kompaniyanın kategoriyası',
            'firstname' => 'Ad',
            'lastname' => 'Soyad',
            'phone' => 'Telefon',
            'email' => 'Email',
            'description' => 'Əlavə məlumat',
            'password' => 'Parol',
            'confirmPassword' => 'Təkrar parol',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->firstname . ' ' . $this->lastname;
            $user->email = $this->email;
            $user->firstname = $this->firstname;
            $user->lastname = $this->lastname;
            $user->phone = $this->phone;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
    
    /**
     * Signs company up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signupCompany()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->name;
            $user->email = $this->email;
            $user->phone = $this->phone;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $check_user = $user->save();
            $service = new Service();
            $service->category_id = $this->category_id;
            $service->owner = $user->id;
            $service->name = $this->name;
            $service->phone = $this->phone;
            $service->description = $this->description;
            
            $check_service = $service->save();
            if ($check_user && $check_service) {
                return $user;
            }
            VarDumper::dump($service->getErrors(),6,1);die();
        }

        return null;
    }
}

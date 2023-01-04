<?php
class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('author');
    }
    public function index()
    {
        if ($username = request('username')) {
            if ($data = $this->author->is_author(name: $username, data: ['username', 'password', 'fullname', 'is_admin', 'mobile'])) {
                $password = md5(request('password'));
                if ($data['password'] == $password) {
                    if ($data['is_admin'] == 'yes') {
                        Session::set('loginDtl', $data);
                        redirect('author.index');
                    } else {
                        Session::set('error', "You are not a authentic user!");
                    }
                } else {
                    Session::set('error', "Please Enter valid username and password");
                }
            } else {
                Session::set('error', "Please Enter valid username and password");
            }
        }
        $this->load->view('login.index');
    }
    public function logout()
    {
        Session::destroy();
        redirect('login.index');
    }
}

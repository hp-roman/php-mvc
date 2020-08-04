<?php
class Home extends Controller
{
    public function hello()
    {
        $student = $this->model('student');
        $this->view('layout', [
            'name' => $student->getStudent(),
            'page' => 'news'
        ]);
    }
}

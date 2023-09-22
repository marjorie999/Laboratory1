<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;


class MainController extends BaseController
{
    public function save()
    {
        $ID = $_POST['ID'];
        $data = [
            'StudName' =>$this->request->getVar('StudName'),
            'StudGender' =>$this->request->getVar('StudGender'),
            'StudCourse' =>$this->request->getVar('StudCourse'),
            'StudSection' =>$this->request->getVar('StudSection'),
            'StudYear' =>$this->request->getVar('StudYear'),
        ];
    
        if($ID!= null){
            $main = new MainModel();
            $main->set($data)->where('ID', $ID)->update();
        }else{
            $main = new MainModel();
            $main->save($data);
        }
        return redirect()->to('/test');
    }
        public function delete($ID)
        {
        $main = new MainModel();
        $main->delete($ID);
        return redirect()->to('/test');
   }

        public function edit($ID)
   {
        $mmodel = new MainModel();
        $data = [
           'main' => $mmodel->findAll(),
           'var' => $mmodel->where('ID', $ID)->first(),      
        ];
        return view ('main', $data);
    }
       
    public function test()
    {
       $mmodel = new MainModel();
       $data['main'] = $mmodel->findAll();
       //var_dump($data);
       return view('main', $data);
    }
    public function index()
    {
        //
    }
}
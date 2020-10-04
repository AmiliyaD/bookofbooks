<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        $contact = new Contact;
        return view('main', ['data' => $contact->limit(4)->get()]);
    }

    public function about() {
        return view('about', ['data' => Contact::all()]);
    }
    
    public function contact() {
        return view('contact');
    }

    public function add() {
        return view('add');
    }
    public function search() {
        return view('search');
    }
    
    //enter user
    public function admin() {
        return view('admin.adminenter');
    }
    public function regUser() {
        return view('admin.adminreg');
    }
    public function review_check(Request $reques) {
       
        //проверка на заполнения
        $valid = $reques->validate([
            'name' => 'required|min:4|max:30',
            'text' => 'required|min:10',
            'title' => 'required|min:3'
        ]);
 
    //запись в базу данных
         $rew = new Contact();
         $rew->name = $reques->input('name');
         $rew->text = $reques->input('text');
         $rew->title = $reques->input('title');
         $rew->genre = $reques->input('genre');
         $rew->save();
    //вывод всех записей
         dd($rew->all());
        
     
    }
    //вывод данных из бд
    
}

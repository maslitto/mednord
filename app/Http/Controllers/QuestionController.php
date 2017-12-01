<?php

namespace App\Http\Controllers;

use App\Model\Question;
use Illuminate\Http\Request;
use Validator;

class QuestionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $data = $request->all();
        $rules = [
            'name' => 'required|max:255',
            'phone' => 'required',
            'robot' => 'in:fuck-u-robots',
            'email' => 'required|max:255'
        ];
        $messages = [
            'name.required'        => 'Укажите имя',
            'phone.required'        => 'Укажите телефон',
            'email.required'        => 'Укажите телефон',
        ];
        $validation = Validator::make($data, $rules, $messages);
        if($validation->fails()){
            return redirect()->back()->with('error', 'Заполните все поля в форме!');
        }

        $params = $request->post();
        unset($params['robot']);
        $question = new Question($params);
        $question->save();
        return redirect()->back()->with('success', 'Заявка отправлена!');
    }
}

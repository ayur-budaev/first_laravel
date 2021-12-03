<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SenderRequest;
use App\Models\SenderModel;
use App\Events\mailEvent;


class SenderController extends Controller{

  public function sender(SenderRequest $req) {

    $sender = new SenderModel();
    $sender->name = $req->input('name');
    $sender->surname = $req->input('surname');
    $sender->email = $req->input('email');
    $sender->number = $req->input('number');
    $sender->type = $req->input('type');
    $sender->pay = $req->input('pay');

    $sender->save();

    //вызов события с отправкой почты
    event(new mailEvent($sender));

    //запуск сессии с именем пользователя, после отправки заявки
    $req->session()->put('name', $sender->name);

    return redirect()->route('home')->with('success', 'Вы успешно зарегистрировались');
  }

  // чтение и вывод записей из бд
  public function reader() {
    return view('admin', ['data' => SenderMOdel::OrderBy('created_at', 'desc')->get()]);
  }

  // удаление записи из бд
  public function deletePartis($id) {
    SenderModel::find($id)->delete();
    return redirect()->route('reader')->with('success', 'Заявка удалена!');
  }

}
